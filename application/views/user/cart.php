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
        <div class="col-md-2 col-4 mb-4">
            <img src="<?=base_url()?>uploads/<?=explode("&&",$row['product_image'])[0]?>"width="100%" class="mt-2">
        </div>
        <div class="col-md-9 col-7">
            <h3><?=$row['product_name']?></h3>
            <h4> &#8377; <?=number_format($row['product_price'])?> /-</h4>

            <button class="btn btn-dark" style="border-radius:0px;margin-top:-6px;" onclick="decreaseCartQty('<?=$row['product_id']?>')">-</button>
                <input type="number" style="border-radius:0px;width: 100px;" class="form-control text-center d-inline-block" disabled value="<?=$row['qty']?>" id="product_qty_box<?=$row['product_id']?>">
                <button class="btn btn-dark" style="border-radius:0px;margin-top:-6px;" onclick="increaseCartQty('<?=$row['product_id']?>')"> + </button>               
        </div>
        <div class="col-1">
            <a href="<?=base_url()?>user/removeFromCart/<?=$row['product_id']?>">
                <button class="btn btn-danger btn-sm mt-3"> X&nbsp;Remove</button>
            </a>
        </div>
    </div>
    <?php
    }
    ?>
</div>

<script>
    function increaseCartQty(product_id,btn)
    {
      $.ajax({
        url: '<?=base_url()?>user/increaseCartQty/'+product_id,
        dataType: 'json',
      })
      .done(function(res)
      {
        $("#product_qty_box"+product_id).val(res);
      })
    }

function decreaseCartQty(product_id)
    {
      $.ajax({
        url: '<?=base_url()?>user/decreaseCartQty/'+product_id,
        dataType: 'json',
      })
      .done(function(res)
      {
        $("#product_qty_box"+product_id).val(res);
      })
    }
</script>