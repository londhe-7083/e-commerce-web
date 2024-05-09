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

    <div class="row">
            <div class="col-12 bg-white p-3 mt-3">
                <table class="table">
                    <tr>
                        <th class="text-center">SN.</th>
                        <th class="text-center">Slider url</th>
                        <th class="text-center">Action</th>
                        <th >Slider Image</th>
                    </tr>
                    <?php
                    foreach($products as $key => $row)
                    {
                        ?>
                    <tr>
                        <td style="width:9%;" class="text-center"><?=$key+1?></td>
                        <td style="width:10%;" class="text-center"><?=$row['slider_url']?></td>  
                        <td style="width:5%;" class="text-center">
                            <button class="btn btn-dark btn-sm">
                            <i class="mdi mdi-pencil"></i>Edit</button>
                            
                            <a href="<?=base_url()?>admin/remove_slider/<?=$row['slider_id']?>">
                                <button class="btn btn-danger btn-sm" type="button">
                                <i class="mdi mdi-delete"></i>Delete</button>
                            </a>
                        </td>  
                        <td style="height: 250px; background-position: center;">
                            <div style="height:100%; overflow: hidden; background-image: url('<?=base_url()?>/uploads/<?=explode("&&",$row['slider_image'])[0]?>'); background-size: cover;background-position: center;">
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
    </div>
</form>