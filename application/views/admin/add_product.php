<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <h3>Add New Product</h3>
        </div>
        <div class="col-md-3">
            Select Category
            <select name="category_id" id="cat_id" required class="form-control mt-3" onchange="getSubCategory()">
                <option value="" selected disabled>Select Category </option>
                <?php
                foreach($cat_list as $row)
                {
                ?>
                <option value="<?=$row['category_id']?>"><?=$row['category_name']?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col-md-3">
            Select Sub-Category
            <select name="sub_category_id" id="sub_cat_id" required class="form-control mt-3">
                <option value="" selected disabled>Select Sub-Category </option>
            </select>
        </div>            
    </div>
</div>

<script type="text/javascript">
    function getSubCategory()
    {
        // var selected_category = document.getElementById("cat_id").value;
        var selected_category = $("#cat_id").val();
        // alert(selected_category);

        $.ajax({
            url: '<?=base_url()?>admin/getSubCategoryByIdUsingAjax/'+selected_category,
            dataType : 'json'
        })
        .done(function(res){

            var row = '';
            for(i=0;i<res.length;i++)
            {
                row+=`<option value="${res[i].sub_category_id}">${res[i].sub_category_name}</option>`;
                
            }
            $("#sub_cat_id").html(row);
        });
    }
</script>