<form action="<?=base_url()?>user/login_process" method="post">
<br><br>
<div class="container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="p-3 border">
                    <small>Already Account</small>
                    <h2>Login Now</h2>
                    <br>
                    <input type="email" name="user_email" placeholder="Enter Your Email" class="form-control">
                    <br>
                    <input type="password" name="user_password" placeholder="Enter Your Password" class="form-control"> 
                    <br>
                    <button class="btn btn-dark btn-lg" style="border-radius:0px;">Login Now</button>
                    <br>
                    Don't Have An Account?
                    <a href="<?=base_url()?>user/register" class="d-inline-block mt-2">
                         Register here
                    </a>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
</form>