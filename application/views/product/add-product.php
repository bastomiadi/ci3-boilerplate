<div class="container">

    <li><a href="<?php echo site_url(); ?>manage-product">Manage Product</a></li>
    <li class="active" ><a href="<?php echo site_url(); ?>add-product">Add Product</a></li>

  <h2>Add Product</h2>  
    <form role="form" method="post" action="<?php echo site_url()?>/add-product-post" enctype="multipart/form-data">
              <div class="form-group">
        <label for="category_id">Category_id:</label>
        <select id="category_id" name="category_id" class="form-control">
        <option value="none" selected="selected">------------Select Category------------</option>
            <?php foreach($category as $each){ ?>
                <option value="<?php echo $each->id; ?>"><?php echo $each->category_name; ?></option>';
            <?php } ?>
        </select>
      </div>
            <div class="form-group">
        <label for="product_name">Product_name:</label>
        <input type="text" class="form-control" id="product_name" name="product_name">
      </div>
            <div class="form-group">
      <label for="product_detail">Product_detail:</label>
    <textarea  class="form-control" id="product_detail" name="product_detail"></textarea>
      </div>
            <div class="form-group">
        <label for="product_price">Product_price:</label>
        <input type="number" class="form-control" id="product_price" name="product_price">
      </div>
            <div class="form-group">
        <label for="product_stock">Product_stock:</label>
        <input type="number" class="form-control" id="product_stock" name="product_stock">
      </div>

      <input type="file" id="image" name="image">

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>