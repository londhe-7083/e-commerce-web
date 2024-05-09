<div class="row">
    <div class="col-12 bg-white p-3 mt-3">
        <table class="table">
            <tr>
                <th>SN.</th>
                <th>Product Price</th>
                <th>Product Label</th>
                <th>Entry Date</th>
                <th>Action</th>
                <th>Product Details</th>
            </tr>
            <?php
            foreach($products as $key => $row)
            {
                ?>

            <tr>
                <td style="width: 3%;"><?=$key+1?></td>
                <td style="width: 5%;"><?=$row['product_price']?></td>
                <td style="width: 5%;"><?=$row['product_label']?></td>
                <td style="width: 5%;"><?=$row['entry_date']?></td>
                <td style="width:5%;" class="text-center">
                            <a href="<?=base_url()?>admin/edit_product/<?=$row['product_id']?>">
                                <button class="btn btn-dark btn-sm" type="button">
                                <i class="mdi mdi-pencil"></i>Edit</button>
                            </a>
                            
                            <a href="">
                                <button class="btn btn-danger btn-sm" type="button">
                                <i class="mdi mdi-delete"></i>Delete</button>
                            </a>
                        </td>
                <td style="width: 10%;"><?=$row['product_details']?></td>
            </tr>
            <?php
               }
            ?>

        </table>

    </div>

   