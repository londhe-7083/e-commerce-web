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
      <div class="col-md-12 text-center mb-4">
        <h3>Trending Products</h3>
      </div>
      <?php
      foreach($trending_products as $key => $row)
      {         
    ?>
      <div class="col-md-4">
        <a href="<?=base_url()?>user/product_information/<?=$row['product_id']?>">
          <div class="card">
            <div class="card-header bg-white">
              <div style="height:230px; overflow: hidden; background-image: url('<?=base_url()?>/uploads/<?=explode("&&",$row['product_image'])[1]?>'); background-size: cover;background-position: center;">
                 </div>
            </div>
            </a>
            <div class="mt-2" style="font-size:22px;font-weight:bold;">
              <?=$row['product_name']?>
            </div>
            <div class="" style="font-size:22px;">&#8377;&nbsp;
              <?=number_format($row['product_price'])?>/-
            </div>
          </div>
          <br>
<br>
<br>
<br>
<br>
<br>
      </div>
      
      <?php
      }
      ?>
    </div>
  </div>