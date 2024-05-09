<form action="<?=base_url()?>admin/save_product" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h3>Edit Product</h3>
            </div>
            
            <div class="col-md-6">
           <?php
           foreach($product as $row)
           {
           ?>
                Product Name
                <input type="text" name="product_name" value="<?= $row['product_name']?>" class="form-control mt-2" placeholder="producrt name" required>
             
           </div>
            <div class="col-md-3">
                Product Price
                <input type="number" name="product_price" value="<?=$row['product_price']?>" class="form-control mt-2" placeholder="product price"
                    required>
            </div>
           
            <div class="col-md-4 mt-3">
                Product Image
                <input type="file" name="product_image[]" class="form-control mt-2"  multiple accept="image/*">
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
                <textarea class="form-control mt-2" id="editor"  name="product_details"><?= $row['product_details']?> </textarea>
            </div>
            
            <div class="col-md-12 mb-3 text-center">
                <button class="btn btn-dark mt-4 ">Save Product</button>
            </div>
            <?php
           }
           ?>
        </div>
    </div>
</form>
