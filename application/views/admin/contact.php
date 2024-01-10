<div class="row">
    <div class="col-md-12 bg-white p-3 mt-3">
        <table class="table">
            <tr>
                <th>SN.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            <?php
               foreach($messege as $key => $row)
               {
                ?>
                <tr>
                <td><?=$key+1?></td>
                <td><?=$row['name']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['text']?></td>
               </tr>
                <?php
               }
               ?>
        </table>

    </div>
</div>