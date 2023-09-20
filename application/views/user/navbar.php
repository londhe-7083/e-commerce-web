<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container-fluid" style="background-image: linear-gradient(45deg,black 15%,white 15%,white 16%, black 16%, black 17.5%, white 17.5%,white 10%, black );">
    <div class="row">
      <div class="col-md-6 p-2">
        <img src="https://a2zithub.org/assets/165710745335077275.png" height="50px">
      </div>
      <div class="col-md-6 p-2 pl-5 text-right" style="line-height:50px;text-align:end;">
        <a href="<?=base_url()?>user/about_us" style="margin-right:20px;text-decoration: none;">About us</a>
        <a href="<?=base_url()?>user/contact_us" style="margin-right:20px;text-decoration: none;">Contact us</a>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>

          <div class="dropdown">
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
        </ul>
      </div>
    </div>
  </nav>