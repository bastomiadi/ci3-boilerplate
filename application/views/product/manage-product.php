<div class="container">
  <h2>Manage Product</h2>
  <li class="active" ><a href="<?php echo site_url(); ?>manage-product">Manage Product</a></li>
  <li><a href="<?php echo site_url(); ?>add-product">Add Product</a></li>

  <?php if($this->session->flashdata('success')){ ?>
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>   <?php echo $this->session->flashdata('success'); ?></strong>
                </div>
  <?php } ?>

<?php if(!empty($products)) {?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>category_id</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; foreach($products as $product) { ?>
      <tr>
        <td> <?php echo $i; ?> </td>
        <td> <a href="<?php echo site_url()?>view-product/<?php echo $product->id?>" > <?php echo $product->category_id ?> </a> </td>

        <td>
        <a href="<?php echo site_url()?>change-status-product/<?php echo $product->id ?>" > <?php if($product->status==0){ echo "Activate"; } else { echo "Deactivate"; } ?></a>
        <a href="<?php echo site_url()?>edit-product/<?php echo $product->id?>" >Edit</a>
        <a href="<?php echo site_url()?>delete-product/<?php echo $product->id?>" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++; } ?>
    </tbody>
  </table>
  <?php } else {?>
  <div class="alert alert-info" role="alert">
                    <strong>No Products Found!</strong>
                </div>
  <?php } ?>
</div>