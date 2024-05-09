<br>
<br>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12 mb-4">
        <h3>Shoes</h3>
      </div>
      
      <?php
      foreach($trending_products as $key => $row)
      {         
    ?>
      <div class="col-md-2">
        <a href="<?=base_url()?>user/product_information/<?=$row['product_id']?>">
          <div class="card">
            <div class="card-header bg-white" style="height: 215px">
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
      <br><br>
    </div>
  </div>