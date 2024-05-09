<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="shadow p-4 border mb-4">
                <h3>My Orders</h3>
                <?php
                foreach($orders as $row)
                {
                    ?>
                    <a href="<?=base_url()?>user/open_invoice/<?=$row['order_id']?>" style="color: black;text-decoration: none;">
                        <div class="row mb-2 pb-2 border-bottom">
                            <div class="col-9"><?=date('d M Y',strtotime($row['order_date']))?></div>
                            <div class="col-3" style="font-size: 20px; font-weight: bold;">&#8377; <?=number_format($row['total_amount'])?> /-</div>                   
                            <div class="col-9" style="font-size:13px;">
                                <?=$row['state']?>,
                                <?=$row['district']?>,
                                <?=$row['city']?>,
                                <?=$row['area']?>,
                                <?=$row['pincode']?>,
                            </div>
                            <?php
                            $color = "black";
                            if($row['order_status'] == 'pending')
                            $color = 'goldenrod';
                            ?>
                            <div class="col-3" style="font-size:13px;text-transform: capitalize; color: <?=$color?>;">
                                <!-- <a href="<?=base_url()?>user/invoice" class="">Open Invoice</a> -->
                                <?=$row['order_status']?>
                            </div>
                        </div>
                    </a>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<br><br>
<br><br>
<br><br>