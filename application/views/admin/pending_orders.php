<div class="container-fluid bg-danger p-4">
    <div class="row">
        <div class="col-md-12">
            <h3>Pending Orders</h3>
        </div>
        <table class="table table-sm table-bordered">
            <tr>
                <th>Action</th>
                <th>SN</th>
                <th>Date</th>
                <th>Deliver To</th>
                <th>Address</th>
                <th>Amount</th>
            </tr>
            <?php
            foreach($orders as $key => $row)
            {
                ?>
                 <td></td>
                 <td><?=$key+1?></td>
                 <td><?=date('d M Y',strtotime($row['order_date']))?></td>
                 <th>Action</th>
                 <th>Action</th>
                 <th>Action</th>
                 <th>Action</th>
                <?php
            }
            ?>
    </div>
</div>