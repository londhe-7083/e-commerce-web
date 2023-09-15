<form action="<?=base_url()?>admin/save_product" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h3>Add New Product</h3>
            </div>
            <div class="col-md-3">
                Select Category
                <select name="category_id" id="cat_id" required class="form-control mt-2" onchange="getSubCategory()">
                    <option value="" selected disabled>Select Category </option>
                    <?php
                foreach($cat_list as $row)
                {
                ?>
                    <option value="<?=$row['category_id']?>">
                        <?=$row['category_name']?>
                    </option>
                    <?php
                }
                ?>
                </select>
            </div>
            <div class="col-md-3">
                Select Sub Category
                <select name="sub_category_id" id="sub_cat_id" required class="form-control mt-2">
                    <option value="" selected disabled>Select Sub Category </option>
                </select>
            </div>
            <div class="col-md-6">
                Product Name
                <input type="text" name="product_name" class="form-control mt-2" placeholder="producrt name" required>
            </div>
            <div class="col-md-3 mt-3">
                Product Price
                <input type="number" name="product_price" class="form-control mt-2" placeholder="product price"
                    required>
            </div>
            <div class="col-md-4 mt-3">
                Product Image
                <input type="file" name="product_image[]" class="form-control mt-2" required multiple accept="image/*">
            </div>
            <div class="col-md-5 mt-3">
                Product Label
                <select name="product_label" class="form-control mt-2">
                    <option value="">No Label</option>
                    <option>Featured</option>
                    <option>Trending</option>
                    <option>Upto 10% OFF</option>
                    <option>Upto 20% OFF</option>
                    <option>Upto 30% OFF</option>
                    <option>Upto 40% OFF</option>
                    <option>Upto 50% OFF</option>
                </select>
            </div>
            <div class="col-md-12 mt-3">
                Products Deatails
                <textarea class="form-control mt-2" name="product_deatails"></textarea>
            </div>
            <div class="col-md-12 mb-3 text-center">
                <button class="btn btn-dark mt-4 ">Save Product</button>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript">
    function getSubCategory() {
        // var selected_category = document.getElementById("cat_id").value;
        var selected_category = $("#cat_id").val();
        // alert(selected_category);

        $.ajax({
            url: '<?=base_url()?>admin/getSubCategoryByIdUsingAjax/' + selected_category,
            dataType: 'json'
        })
            .done(function (res) {

                var row = '';
                for (i = 0; i < res.length; i++) {
                    row += `<option value="${res[i].sub_category_id}">${res[i].sub_category_name}</option>`;

                }
                $("#sub_cat_id").html(row);
            });
    }
</script>

<!-- 
CREATE product table
CREATE TABLE product (product_id INT PRIMARY KEY AUTO_INCREMENT, category_id INT, sub_category_id INT, product_name TEXT, product_price VARCHAR(20), product_label TEXT, product_deatails TEXT, product_image TEXT, entry_date VARCHAR(30), status VARCHAR(20));
​ -->