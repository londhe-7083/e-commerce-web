<form action="<?=base_url()?>user/login_process" method="post">
<br><br>
<div class="container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="p-3 border">
                    <small>New User</small>
                    <h2>Register Here</h2>
                    <br>
                    <input type="text" name="user_name" placeholder="Enter Your Name" class="form-control">
                    <br>
                    <input type="number" name="user_mobile" placeholder="Enter Your Mobile" class="form-control"> 
                    <br>
                    <input type="email" name="user_email" placeholder="Enter Your Email" class="form-control">
                    <br>
                    <input type="password" id="password1" name="user_password" placeholder="Enter Your Password" class="form-control" onkeyup="checkPassword()"> 
                    <br>
                    <input type="password" name="user_password" id="password2" placeholder="Enter Your Password" class="form-control" onkeyup="checkpassword()"> 
                    <br>
                    <button class="btn btn-dark btn-lg disabled" id="submit_btn" style="border-radius:0px;">Register Now</button>
                    <br>
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
<script type="text/javascript">
    function checkPassword()
    {
        var pass1 = $("#password1").val();
        var pass2 = $("#password2").val();
        if(pass1 == pass2)
        {
            document.getElementById("submit_btn").removeAttribute("disabled");
        }
        else{
            document.getElementById("submit_btn").setattribute("disabled","true");
        }
    }
</script>