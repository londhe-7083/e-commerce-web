<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- The slideshow -->
  <div class="carousel-inner">
    <?php
    foreach($slider as $key => $row)
    {
    ?>
    <div class="carousel-item <?=($key==0) ? 'active':''?>" style="height: 400px;overflow: hidden;">
      <img src="<?=base_url()?>uploads/<?=$row['slider_image']?>" style="width: 100%;">
    </div>
    <?php
    }
    ?>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <br>
  <br>
  <br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 mb-4">
        <h3>Trending Products</h3>
      </div>
      <div class="col-md-2 text-end mb-4 button">
        <button class="btn btn-outline-success">
          <a href="<?=base_url()?>user/show_product" class="btn-outline-success" style="text-decoration:none;">Show all</a>
        </button>
      </div>
      <?php
      foreach($trending_products as $key => $row)
      {         
    ?>
      <div class="col-md-3">
        <a href="<?=base_url()?>user/product_information/<?=$row['product_id']?>">
          <div class="card">
            <div class="card-header bg-white" style="height: 350px">
              <div style="height:100%; overflow: hidden; background-image: url('<?=base_url()?>/uploads/<?=explode("&&",$row['product_image'])[0]?>'); background-size: cover;background-position: center;">
              </div>
            </div>
        </a>
            <div class="mt-2 ml-2" style="font-size:22px;font-weight:bold;">
              <?=$row['product_name']?>
            </div>
            <div class="ml-2" style="font-size:22px;">&#8377;&nbsp;
              <?=number_format($row['product_price'])?>/-
            </div>
          </div>
          <br>
      </div>
      
      <?php
      }
      ?>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 mb-4">
        <h3>Womens special</h3>
      </div>
      <div class="col-md-2 text-end mb-4 button ">
        <button class="btn btn-outline-success">
          <a href="<?=base_url()?>user/womens" class="btn-outline-success" style="text-decoration:none;">Show all</a>
        </button>     
       </div>
      <?php
      foreach($Featured as $key => $row)
      {         
    ?>
      <div class="col-md-3">
        <a href="<?=base_url()?>user/product_information/<?=$row['product_id']?>">
          <div class="card">
            <div class="card-header bg-white">
              <div style="height:325px; overflow: hidden; background-image: url('<?=base_url()?>/uploads/<?=explode("&&",$row['product_image'])[0]?>'); background-size: cover;background-position: center;">
              </div>
            </div>
        </a>
            <div class="mt-2 ml-2" style="font-size:18px;font-weight:bold;">
              <?=$row['product_name']?>
            </div>
            <div class="ml-2" style="font-size:22px;">&#8377;&nbsp;
              <?=number_format($row['product_price'])?>/-
            </div>
          </div>
          <br>
      </div>
      
      <?php
      }
      ?>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 mb-4">
        <h3>Mobiles</h3>
      </div>
      <div class="col-md-2 text-end mb-4 button">
        <button class="btn btn-outline-success">
          <a href="<?=base_url()?>user/mobiles" class="btn-outline-success" style="text-decoration:none;">Show all</a>
        </button>     
       </div>
      <?php
      foreach($Upto20OFF as $key => $row)
      {         
    ?>
      <div class="col-md-3">
        <a href="<?=base_url()?>user/product_information/<?=$row['product_id']?>">
          <div class="card">
            <div class="card-header bg-white" style="height:350px">
              <div style="height:100%; overflow: hidden; background-image: url('<?=base_url()?>/uploads/<?=explode("&&",$row['product_image'])[0]?>'); background-size: cover;background-position: center;">
              </div>
            </div>
        </a>
            <div class="mt-2 ml-2" style="font-size:18px;font-weight:bold;">
              <?=$row['product_name']?>
            </div>
            <div class="ml-2" style="font-size:22px;">&#8377;&nbsp;
              <?=number_format($row['product_price'])?>/-
            </div>
          </div>
          <br>
      </div>
      
      <?php
      }
      ?>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 mb-4">
        <h3>Smart watches</h3>
      </div>
      <div class="col-md-2 text-end mb-4">
       <button class="btn btn-outline-success">
          <a href="<?=base_url()?>user/s_watch" class="btn-outline-success" style="text-decoration:none;">Show all</a>
        </button>      </div>
      <?php
      foreach($Upto10OFF as $key => $row)
      {         
    ?>
      <div class="col-md-3">
        <a href="<?=base_url()?>user/product_information/<?=$row['product_id']?>">
          <div class="card">
            <div class="card-header bg-white" style="height:340px">
              <div style="height: 95%; overflow: hidden; background-image: url('<?=base_url()?>/uploads/<?=explode("&&",$row['product_image'])[0]?>'); background-size: cover;background-position: center;">
              </div>
            </div>
        </a>
            <div class="mt-2 ml-2" style="font-size:18px;font-weight:bold;">
              <?=$row['product_name']?>
            </div>
            <div class="ml-2" style="font-size:22px;">&#8377;&nbsp;
              <?=number_format($row['product_price'])?>/-
            </div>
          </div>
          <br>
      </div>
      
      <?php
      }
      ?>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 mb-4">
        <h3>Smart TVs</h3>
      </div> 
      <div class="col-md-2 text-end mb-4 button">
        <button class="btn btn-outline-success">
          <a href="<?=base_url()?>user/s_tv" class="btn-outline-success" style="text-decoration:none;">Show all</a>
        </button>      
      </div>
      <?php
      foreach($Upto30OFF as $key => $row)
      {         
    ?>
      <div class="col-md-3">
        <a href="<?=base_url()?>user/product_information/<?=$row['product_id']?>">
          <div class="card">
            <div class="card-header bg-white" style="height:350px";>
              <div style="height:100%; overflow: hidden; background-image: url('<?=base_url()?>/uploads/<?=explode("&&",$row['product_image'])[1]?>'); background-size: cover;background-position: center;">
              </div>
            </div>
        </a>
            <div class="mt-2 ml-2" style="font-size:18px;font-weight:bold;">
              <?=$row['product_name']?>
            </div>
            <div class="ml-2" style="font-size:22px;">&#8377;&nbsp;
              <?=number_format($row['product_price'])?>/-
            </div>
          </div>
          <br>
      </div>
      
      <?php
      }
      ?>
    </div>
  </div>