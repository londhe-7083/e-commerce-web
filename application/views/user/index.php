<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

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