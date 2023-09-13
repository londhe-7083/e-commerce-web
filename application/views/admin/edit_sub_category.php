<form action="<?=base_url()?>admin/update_sub_category" method="post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h3>Edit Sub Category</h3>
            </div>
            <div class="col-md-3">
                <select required name="category_id" class="form-control">
                    <option value="" selected disabled>SELECT CATEGORY</option>
                    <?php
                    foreach($cat_list as $row)
                    {
                        ?>
                        <option value="<?=$row['category_id']?>" <?=($sub_cat_info[0]['category_id']==$row['category_id'])? 'selected':''?><?=$row['category_name']?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>
</form>