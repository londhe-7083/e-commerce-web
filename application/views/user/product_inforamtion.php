<?php
$images=explode('&&',$product_info[0]['product_image']);
?>
<br><br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="row ">
                <div class="col-md-3">
                    <?php
                    foreach($images as $row)
                    { 
                    ?>
                    <div style="margin-top:10px;">
                        <img src="<?=base_url()?>uploads/<?=$row?>" width="100%">
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="col-md-9">
                <img src="<?=base_url()?>uploads/<?=$images[0]?>" width="100%">
                </div>
            </div>
        </div>
    </div>
</div>