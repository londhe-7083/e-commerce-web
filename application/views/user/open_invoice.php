<div class="container">
    <div class="row">
        <div class="col-md-10">
            <br><br><br>
            <div class="border shadow p-5">
                <img src="https://a2zithub.org/assets/165710745335077275.png" height="50px"> 
                <br><br>
                <h2><?=$order_det[0]['deliver_to']?></h2>
                <table class="table">
                    <tr>
                        <td>
                            <br>
                                <br>
                                Order Date  : <?=date('M d Y',strtotime($order_det[0]['order_date']))?>
                                <br>
                                Order No : A00Z0<?=$order_det[0]['order_id']
                                ?>
                        </td>
                        <td class="text-right">
                            <?=$order_det[0]['state']?>, <?=$order_det[0]['district']?><br>
                            <?=$order_det[0]['city']?>, <?=$order_det[0]['area']?><br>
                            <?=$order_det[0]['pincode']?>
                        </td>
                    </tr>
                </table>
                <br>
                <table class="table">
                    <tr>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    foreach($order_products as $row)
                    {
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
                </table>
            </div>
        </div>
    </div>
</div>
<br><br><br>

