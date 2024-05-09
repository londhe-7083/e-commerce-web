<div class="container-fluid bg-light p-4">
    <div class="row">
        <div class="col-md-12">
            <h3>Pending Orders</h3>
        </div>
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>Action</th>
                    <th>SN</th>
                    <th>Date</th>
                    <th>Order From</th>
                    <th>Address</th>
                    <th>Amount</th>
                </tr>
            <?php
            foreach($orders as $key => $row)
            {
                ?>
                <tr>
                 <td>
                    <a href="<?=base_url()?>admin/view_order_details/<?=$row['order_id']?>">
                    <button class="btn btn-dark btn-sm">View</button></a>
                 </td>
                 <td><?=$key+1?></td>
                 <td><?=date('d M Y',strtotime($row['order_date']))?></td>
                 <td><?=$row['user_name']?></td>
                 <td style="white-space: normal;"><?=$row['deliver_to']?>,<?=$row['area']?>,<?=$row['city']?>,<?=$row['district']?>,<?=$row['state']?>-<?=$row['pincode']?></td>
                 <td>&#8377; <?=number_format($row['total_amount'])?></td>
            </tr>
                <?php
            }
            ?>
            </table>
        </div>
    </div>
</div>