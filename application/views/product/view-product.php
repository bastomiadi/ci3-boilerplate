 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Codeigniter Crud By PHP Code Builder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://crudegenerator.in">Codeigniter Crud By PHP Code Builder</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url(); ?>manage-product">Manage Product</a></li>
        <li><a href="<?php echo site_url(); ?>add-product">Add Product</a></li>
      </ul>
  </div>
</nav>

<div class="container">

 <div class="row">
  <div class="col-xs-12 col-md-10 well">
   category_id  :  <?php echo $product[0]->category_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   product_name  :  <?php echo $product[0]->product_name ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   product_detail  :  <?php echo $product[0]->product_detail ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   product_price  :  <?php echo $product[0]->product_price ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   product_stock  :  <?php echo $product[0]->product_stock ?>
  </div>
</div>

</div>

</body>
</html>