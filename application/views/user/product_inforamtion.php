<?php
$images=explode('&&',$product_info[0]['product_image']);
?>
<br><br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="row ml-4">
                <div class="col-md-3">
                    <?php
                    foreach($images as $row)
                    { 
                    ?>
                    <div style="margin-top:10px;">
                        <img src="<?=base_url()?>uploads/<?=$row?>" width="90%" onclick="openImage('<?=base_url()?>uploads/<?=$row?>')">
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="col-md-9">
                <img id="full_image" src="<?=base_url()?>uploads/<?=$images[0]?>" width="100%">
                </div>
            </div>
        </div>
            <div class="col-md-6">
                <?php
                if($product_info[0]['product_label'])
                {
                    ?>
                    <div style="display:inline-block; padding-left: 30px; padding-right: 30px;background-image: linear-gradient(75deg,white 4%,black 15%,black 85%,white 96%);color: white;"><?=$product_info[0]['product_label']?></div>
                    <?php
                }
                ?>
                <h1><?=$product_info[0]['product_name']?></h1>
                <h1 style="font-weight:100; letter-spacing: 3px; font-size: 40px;">&#8377;<?=number_format($product_info[0]['product_price'])?> /- </h1>
                <?php
                if(count($cart)==0)
                { 
                ?>
                <br>
                <a href="<?=base_url()?>user/add_to_cart/<?=$product_info[0]['product_id']?>">
                    <button class="btn btn-dark btn-lg"> Add To Cart</button>
                </a>
                <?php
                }
                ?>
                <br>
                <br>
                <p>
                    <?=nl2br($product_info[0]['product_deatails'])?>
                </p>
            </div>
    </div>
</div>

<script type="text/javascript">
    function openImage(path)
    {
        document.getElementById("full_image").src = path;
    }
</script>