<form action="<?=base_url()?>admin/save_sub_category" method="post">
   <div class="container">
      <div class="row">
            <div class="col-3">
                <select required name="category_id" class="form-control">
                    <option value="" selected disabled>Select Category</option>
                    <?php
                    foreach($cat_list as $row)
                    {
                        ?>
                        <option value="<?=$row['category_id']?>"> <?=$row['category_name']?></option>
                    <?php
                    }
                    ?>
                </select>
            </div> 
                <div class="col-6">
                    <input type="text" name="sub_category_name" class="form-control" placeholder="Enter Sub Category Name">
                </div>
                <div class="col-3">
                    <button class="btn btn-primary w-100">Save Category</button>
                </div>
      </div>
      <div class="row">
        <div class="col-12 bg-white p-3 mt-3">
            <table class="table">
                <tr>
                    <th>SN.</th>
                    <th>Category Name</th>
                    <th>Sub-Category Name</th>
                    <th>Entry Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php
                foreach($sub_cat_list as $key => $row)
                {
                    ?>
                <tr>
                    <td><?=$key+1?></td>
                    <td><?=$row['category_name']?></td>
                    <td><?=$row['sub_category_name']?></td>
                    <td><?=$row['entry_date']?></td>
                    <td><?=$row['status']?></td>
                    <td style="width:5%;">
                    <a href="<?=base_url()?>admin/edit_sub_category/<?=$row['sub_category_id']?>">
                        <button class="btn btn-dark btn-sm" type="button">
                            <i class="mdi mdi-pencil"></i>Edit
                        </button>
                    </a>    
                        <button class="btn btn-danger btn-sm">
                            <i class="mdi mdi-delete"></i>Delete
                        </button>
                    </td>
                </tr>
                <?php
                }
                ?>
    </div>
</form>