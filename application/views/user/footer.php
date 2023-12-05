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

<br><br>
  <div>
  <footer>
            <div class="footer-line"></div>
            <div class="footer-wrapper">
                <section class="footer-top">
                    <div class="footer-headline">
                        <h2>Subscribe to our newsletter</h2>
                        <p>
                            Stay up to date with our news and articles
                        </p>
                    </div>
                    <div class="footer-subscribe">
                        <input type="email" spellcheck="false" placeholder="Your Email">
                        <button>
                            Sign Up
                        </button>
                    </div>
                </section>
                <div class="footer-columns">
                    <section class="footer-logo">
                        <h2>
                            <svg width="1103" height="996" viewBox="0 0 1103 996" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M410.988 255.56L0 995.337H189.802L505.141 427.427L410.988 255.56ZM1102.94 995.337L647.119 170.373L551.471 0L457.317 170.373L551.471 340.746L711.79 629.718H498.683L405.461 786.972H799.034L914.634 995.337H1102.94Z" fill="#FAFBFC"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M410.988 255.56L0 995.337H189.802L505.141 427.427L410.988 255.56ZM1102.94 995.337L647.119 170.373L551.471 0L457.317 170.373L551.471 340.746L711.79 629.718H498.683L405.461 786.972H799.034L914.634 995.337H1102.94Z" fill="#FAFBFC"/>
                            </svg>
                        </h2>
                    </section>
                    <section>
                        <h3>Product</h3>
                        <ul>
                            <li>
                                <a href="#" title="API">API</a>
                            </li>
                            <li>
                                <a href="#" title="Pricing">Pricing</a>
                            </li>
                            <li>
                                <a href="#" title="Documentation">Documentation</a>
                            </li>
                            <li>
                                <a href="#" title="Release Notes">Release Notes</a>
                            </li>
                            <li>
                                <a href="#" title="Status">Status</a>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h3>Resources</h3>
                        <ul>
                            <li>
                                <a href="#" title="Support">Support</a>
                            </li>
                            <li>
                                <a href="#" title="Sitemap">Sitemap</a>
                            </li>
                            <li>
                                <a href="#" title="Newsletter">Newsletter</a>
                            </li>
                            <li>
                                <a href="#" title="Help Centre">Help Centre</a>
                            </li>
                            <li>
                                <a href="#" title="Investor">Investor</a>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h3>Company</h3>
                        <ul>
                            <li>
                                <a href="#" title="About Us">About Us</a>
                            </li>
                            <li>
                                <a href="#" title="Blog">Blog</a>
                            </li>
                            <li>
                                <a href="#" title="Careers">Careers</a>
                            </li>
                            <li>
                                <a href="#" title="Press">Press</a>
                            </li>
                            <li>
                                <a href="#" title="Contact">Contact</a>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h3>Legal</h3>
                        <ul>
                            <li>
                                <a href="#" title="Terms and services">
                                    Terms
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Privacy Policy">
                                    Privacy
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Cookies">
                                    Cookies
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Licenses">
                                    Licenses
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Cookies">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="footer-bottom">
                    <div class='social-links'>
                        <ul>
                            <li>
                                <a href="#" title="Instagram">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Linkedin">
                                <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                            <i class="fa-brands fa-square-twitter"></i>                                </a>
                            </li>
                            <li>
                            <i class="fa-brands fa-youtube"></i>                                </a>
                            </li>
                            <li>
                                <a href="#" title="GitHub">
                                <i class="fa-brands fa-github"></i>                                </a>
                            </li>
                        </ul>
                    </div>

                    <small>© Atheros Intelligence Ltd. <span id="year"></span>, All rights reserved</small>
                </div>
            </div>
        </footer>
        <script>
            document.getElementById("year").innerHTML = new Date().getFullYear();
            
        </script>
        <script src="https://kit.fontawesome.com/5f59e0296b.js" crossorigin="anonymous"></script>
  </div>
</body>
</html> 