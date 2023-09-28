<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>User Cart</h3>
        </div>
    </div>
    <?php
    foreach ($cart_info as $row)
    {
    ?>
    <div class="row">
        <div class="col-md-2">
            <img src="<?=base_url()?>uploads/<?=explode("&&",$row['product_image'])[0]?>"width="100%">
        </div>
    </div>
    <?php
    }
    ?>
</div>