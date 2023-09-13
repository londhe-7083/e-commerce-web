<form action="<?=base_url()?>admin/save_category" metdod="post">
      <div class="container">
        <div class="row">
                <div class="col-9">
                    <input type="text" name="category_name" class="form-control">
                </div>
                <div class="col-3">
                    <button class="btn btn-primary">Save Category</button>
                </div>
        </div>
        <div class="row">
          <div class="col-md-12 bg-white p-3 mt-3">
            <table class="table">
            <tr> 
                <th>SN.</th>
                <th>Category Name</th>
                <th>Entry Date</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              <?php
                  foreach($cat_list as $key => $row)
                  {
                ?>
              <tr> 
                <td><?=$key+1?></td>
                <td><?=$row['category_name']?></td>
                <td><?=$row['entry_date']?></td>
                <td><?=$row['status']?></td>
                <td style="width:5%;">
                  <button class="btn btn-dark btn-sm">
                      <i class="mdi mdi-pencil"></i>Edit
                  </button>
                  <button class="btn btn-danger btn-sm">
                      <i class="mdi mdi-delete"></i>Delete
                  </button>
                </td>
              </tr>
              <?php
                  }
                ?>
            </table>
           <div class="col-md-12">
            <?php
             ?>
           </div>
        </div>
      </div>
</form>