<div class="container">
  <ul>
    <li><a href="<?php echo site_url(); ?>manage-category">Manage Category</a></li>
    <li><a href="<?php echo site_url(); ?>add-category">Add Category</a></li>
  </ul>

  <h2>Update Category</h2>  
<form role="form" method="post" action="<?php echo site_url()?>edit-category-post" enctype="multipart/form-data">

 <input type="hidden" value="<?php echo $Category[0]->id ?>" name="Category_id">


      <div class="form-group">
    <label for="category_name">Category_name:</label>
    <input type="text" value="<?php echo $Category[0]->category_name ?>" class="form-control" id="category_name" name="category_name">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>