<?php
  if(isset($_SESSION['message']))
  {
    ?>
  <div style="position: fixed;z-index: 9999;top: 0%;left: 50%;background-color: white;padding: 50px;transform: translate(-50%,50%);font-size: 32px;text-align: center;border: 1px solid grey;" id="massageBox">
  <img src="http://media.tenor.com/0AVbKGY_MxMAAAAM/check-mark-verified.gif" width="200px";>
  <br>
  <?=$_SESSION['message']?>
  <br>
  </div>
<script type="text/javascript">
    $(document).ready(function()
    {
        setTimeout(function(){
            $("#massageBox").fadeOut();
        },2000);
    });
</script>
<?php
unset($_SESSION['message']);
  }
  ?> 

  
     
<?php
 if(isset($_SESSION['error_message']))
 {
   ?>
 <div style="position: fixed;z-index: 9999;top: 0%;left: 50%;background-color: white;padding: 50px;transform: translate(-50%,50%);font-size: 32px;text-align: center;border: 1px solid grey;" id="massageBox">
 <img src="https://t3.ftcdn.net/jpg/01/29/69/22/360_F_129692264_AtP71QrdnMhTufIXdhEhYEfVRXKzRv1R.jpg" width="200px";>
 <br>
 <?=$_SESSION['error_message']?>
 <br>
 </div>
<script type="text/javascript">
   $(document).ready(function()
   {
       setTimeout(function(){
           $("#massageBox").fadeOut();
       },2000);
   });
</script>
<?php
unset($_SESSION['error_message']);
 }
?>

</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <!-- <h3>hello</h3> -->
      <footer>
        <div class="footer-line"></div>
        <div class="footer-wrapper">
          <section class="footer-top">
            <div class="footer-headline">
              <h2>Subscribe to our website</h2>
              <p>
                Stay up to date with our products and offers.
              </p>
            </div>
            <div class="footer-subscribe">
              <input type="email" spellcheck="false" placeholder="Your email">
              <button>
                Sign Up
              </button>
              </div>
          </section>
          <div class="footer-columns">
            <section class="footer-logo">
              <h2></h2>
            </section>
            <section>
                <h3>Product</h3>
                <ul>
                  <li>
                    <a href="#" title="API">API</a>
                  </li>
                </ul>
            </section>
          </div>

          <div class="footer-bottom">
              <div class="social-links">
                <ul>
                  <li>
                    <a href="#" title="Instagram">
                      <img src="" alt="instagram">
                    </a>
                  </li>
                </ul>
              </div>
          </div>
          <small>Athers intelligense Ltd. <span id="year"></span>,All rights reserved</small>
        </div>
      </footer>
      <script>
        document.getElementById('year').innerHTML = new Date().getFullYear();
      </script>
    </div>
  </div>
</div>
</body>
</html> 