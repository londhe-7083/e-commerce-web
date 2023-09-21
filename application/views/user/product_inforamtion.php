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
                        <img src="<?=base_url()?>uploads/<?=$row?>" width="100%" onclick="openImage('<?=base_url()?>uploads/<?=$row?>')">
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
    </div>
</div>

<script type="text/javascript">
    var images = '<?=$product_info[0]['product_image']?>';
    console.log(images.split('&&'));
    setInaterval(function())
    function openImage(path)
    {
        document.getElementById("full_image").src = path;
    }
</script>