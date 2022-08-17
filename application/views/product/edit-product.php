<div class="container">

    <li><a href="<?php echo site_url(); ?>manage-product">Manage Product</a></li>
    <li><a href="<?php echo site_url(); ?>add-product">Add Product</a></li>

  <h2>Update Product</h2>  
<form role="form" method="post" action="<?php echo site_url()?>edit-product-post" enctype="multipart/form-data">

 <input type="hidden" value="<?php echo $product[0]->id ?>"   name="product_id">


      <div class="form-group">
    <label for="category_id">Category_id:</label>
    <select id="category_id" name="category_id" class="form-control">
    <option value="none" selected="selected">------------Select Category------------</option>
        <?php foreach($category as $each){ ?>
            <option value="<?php echo $each->id; ?>" <?php if($each->id == $product[0]->category_id) echo 'selected="selected"'; ?> > <?php echo $each->category_name; ?></option>
        <?php } ?>
    </select>

  </div>
    <div class="form-group">
    <label for="product_name">Product_name:</label>
    <input type="text" value="<?php echo $product[0]->product_name ?>" class="form-control" id="product_name" name="product_name">
  </div>
      <div class="form-group">
  <label for="product_detail">Product_detail:</label>
<textarea  class="form-control" id="product_detail" name="product_detail">     <?php echo $product[0]->product_detail ?>       </textarea>
 </div>
      <div class="form-group">
    <label for="product_price">Product_price:</label>
    <input type="number" value="<?php echo $product[0]->product_price ?>" class="form-control" id="product_price" name="product_price">
  </div>
    <div class="form-group">
    <label for="product_stock">Product_stock:</label>
    <input type="number" value="<?php echo $product[0]->product_stock ?>" class="form-control" id="product_stock" name="product_stock">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>