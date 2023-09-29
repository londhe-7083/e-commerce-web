<style>
  input{
    width: 50px;
    height: 32px;
  }
</style>
<br><br>
<form action="<?=base_url()?>">
  <div class="container">
      <div class="row">
          <div class="col-md-10">
              <h3>User Cart</h3>
          </div>
          <div class="col-md-2 h5">
            <span style="dislay: inline-block;padding: 4px;position: relative; top: -10px">Select All</span>
            <input type="checkbox" onclick="checkAll(this)">
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

              <button type="button" class="btn btn-dark" style="border-radius:0px;margin-top:-6px;" onclick="decreaseCartQty('<?=$row['product_id']?>')">-</button>
              <input type="number" style="border-radius:0px;width: 100px;" class="form-control text-center d-inline-block" disabled value="<?=$row['qty']?>" id="product_qty_box<?=$row['product_id']?>">
              <button type="button" class="btn btn-dark" style="border-radius:0px;margin-top:-6px;" onclick="increaseCartQty('<?=$row['product_id']?>')"> + </button>               
          </div>
          <div class="col-1 border-0">
              <!-- <a href="<?=base_url()?>user/removeFromCart/<?=$row['product_id']?>">
                  <button type="button" class="btn btn-danger btn-sm mt-3"> X&nbsp;Remove</button>
              </a> -->
              <input type="checkbox" name="product_id" class="chkbox">
          </div>
      </div>
        <?php
        }
        ?>

        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2">
              <button>Remove</button>
          </div>
        </div>
  </div>
</form>
<br><br>
<br><br>
<br><br>
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
<script type="text/javascript">
  function checkAll(elmt)
  {
    var boxes = document.getElementsByClassName('chkbox');
    for(i=0;i<boxes.length;i++)
    {
      boxes[i].checked = elmt.checked;
    }
  }

</script>