<style type="text/css">
@media print {
  .hideinprint
  {
    display: none;
  } 
  .w100print
  {
    display: block !important;
    width: 100% !important;
    border: none !important;
    box-shadow: none !important;
  }
}
</style>
<title><?=$order_det[0]['deliver_to']?></title>
<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
            <div class="border shadow p-5 w100print">
                <h2>To.<?=$order_det[0]['deliver_to']?></h2>
                <table class="table table-bordered">
                    <tr>
                        <td class="text-left">
                            <?=$order_det[0]['state']?>, <?=$order_det[0]['district']?><br>
                            <?=$order_det[0]['city']?>, <?=$order_det[0]['area']?><br>
                            <?=$order_det[0]['pincode']?>
                        </td>
                        
                        <td class="text-right" style="vertical-align:top;">
                            <br><br>Order No : A00Z0<?=$order_det[0]['order_id']
                            ?>
                            <br>
                            Order Date  : <?=date('M d Y',strtotime($order_det[0]['order_date']))?>
                            
                        </td>
                    </tr>
                </table>
                <br>
                <table class="table table-bordered">
                    <tr>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $ttl=0;
                    foreach($order_products as $row)
                    {
                        $ttl += ($row['product_price']*$row['qty']);
                        ?>
                        <tr>
                            <td><?=$row['product_name']?></td>
                            <td><?=$row['qty']?> qty</td>
                            <td>&#8377; <?=number_format($row['product_price'])?> /- </td>
                            <td>&#8377; <?=number_format($row['product_price']*$row['qty'])?> /- </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <tr>
                        <td colspan="3" style="font-size:20px; font-weight:bold;">
                        Total
                        </td> 
                        <td style="font-size:20px;font-weight: bold;">
                           &#8377; <?=number_format($ttl)?>
                        </td>
                    </tr>
                </table>
                <br><br><br>
                <div class="text-center" style="font-size: 10px;">
                  Copyright &copy; A2Z
                </div>
                <br><br>
                <div class="text-center hideinprint">
                    <a href="<?=base_url()?>admin/dispatch_order/<?=$order_det[0]['order_id']?>">
                        <button class="btn btn-primary btn-lg">Dispatch Order</button>
                    </a>
                    <a href="<?=base_url()?>admin/reject_order/<?=$order_det[0]['order_id']?>">
                        <button class="btn btn-primary btn-lg">Reject Order</button>
                    </a>
            </div>
        </div>
    </div>
</div>
<br><br><br>

