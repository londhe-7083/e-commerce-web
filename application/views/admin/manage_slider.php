<form action="<?=base_url()?>admin/save_slider" method="post" enctype="multipart/form-data">
 <div class="container-fluid p-3 bg-white">
    <div class="row">
        <div class="col-md-12">
            <h3>Manage Slider</h3>
        </div>
        <div class="col-md-6">
            URL
            <input type="text" name="slider_url" class="form-control mt-2" required>
        </div>
        <div class="col-md-6">
            Select Image
            <input type="file" name="slider_image" class="form-control mt-2" required>
        </div>
        <div class="col-md-12 mt-5 text-right">
            <button class="btn btn-dark">Save Slider</button>
        </div>
    </div>
</div>
</form>