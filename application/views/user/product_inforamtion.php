<?php
$images=explode('&&',$product_info[0]['product_image']);
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    foreach($images as $row)
                    { 
                    ?>
                <div>
                    <img src="<?=base_url()?>uploads/<?=$row?>" width="100%">
                </div>
            <?php
                }
            ?>
            </div>  
        </div>
            <div class="col-md-6">
            
            </div>
        </div>
    </div>
</div>
