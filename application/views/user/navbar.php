<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="<?=base_url()?>admin_assets/css/style-2.css">
  
</head>

<body>
  <div class="container-fluid hideinprint" style="background-image: linear-gradient(45deg,black 15%,white 15%,white 16%, black 16%, black 17.5%, white 17.5%,white 10%, black );">
    <div class="row">
      <div class="col-md-6 p-2">
        <!-- <img src="https://a2zithub.org/assets/165710745335077275.png" height="50px"> -->
        <img src="<?=base_url()?>admin_assets/images/s5.png" height="68px">
      </div>
      <div class="col-md-6 p-2 pl-5 text-right" style="line-height:50px;text-align:end;color:white;">
        <a href="<?=base_url()?>user/about_us" style="margin-right:20px;text-decoration: none; color:white;">About us</a>
        <a href="<?=base_url()?>user/contact_us" style="margin-right:20px;text-decoration: none; color:white;">Contact us</a>
        <?php
        if(!isset($_SESSION['user_id']))
        { 
          ?>
        <a href="<?=base_url()?>user/login" style="margin-right:20px;text-decoration: none; color:white;">Login</a>
        <?php
        }
        else
        {
        ?>
        <a href="<?=base_url()?>user/profile" class="mr-4" style="margin-right:20px;text-decoration: none; color:white;">Profile</a>
        <?php
        }
        ?>
        <a href="<?=base_url()?>user/cart" class="mr-4 text-white" style="text-decoration:none;">Cart</a>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= base_url()?>user/index">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse col-md-11" id="collapsibleNavbar">
        <ul class="navbar-nav col-md-12">

        <div class="dropdown col-md-11">
            <?php
          foreach($cat_list as $row)
          {
            ?>
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1"
              data-bs-toggle="dropdown" aria-expanded="false">
              <?=$row['category_name']?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <?php
              foreach($row['sub_cat_list'] as $row2)
                { 
            ?>
              <li>
                <a class="dropdown-item" href="#">
                  <?=$row2['sub_category_name']?>
                </a>
              </li>
                <?php
                  }
                ?>
                </ul>
         
          <?php
              }
          ?>
        </div>


        <div class="col-md-1">
          <button class="btn btn-outline-primary"> 
                   <a href="<?=base_url()?>user/all_product" class="btn-outline-primary" style="text-decoration:none;">Products</a>
          </button>
        </div>
      </ul>
      </div>
    </div>
  </nav>