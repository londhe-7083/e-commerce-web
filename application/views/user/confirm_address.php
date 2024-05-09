<form action="<?=base_url()?>user/place_order" method="post">
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="shadow p-4 border">
                <h3 class="mb-4">Confirm Address</h3> 
                Deliver To
                <input type="text" name="deliver_to" class="form-control mb-3">
                State
                <input type="text" name="state" class="form-control mb-3">
                District
                <input type="text" name="district" class="form-control mb-3">
                City
                <input type="text" name="city" class="form-control mb-3">
                Area
                <input type="text" name="area" class="form-control mb-3">
                Pincode
                <input type="text" name="pincode" class="form-control mb-3">
                <button class="btn btn-dark mt-3">Place Order</button>
            </div>
        </div>
    </div>
</div>
</form>
<br><br>
<br><br>
<br><br>