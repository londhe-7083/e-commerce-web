<?php
  if(isset($_SESSION['message']))
  {
    ?>
  <div style="position: fixed;z-index: 9999;top: 50%;left: 50%;background-color: white;padding: 50px;transform: translate(-50%,50%);font-size: 32px;text-align: center;border: 1px solid grey;" id="massageBox">
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
  }
  ?>    

</div>
</body>
</html> 