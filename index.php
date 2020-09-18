<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Css3/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> -->
<!-- <script type="text/javascript" src="js/mtb.js"></script> -->
</head>

<body>
  <div class="login-page" >
    <div class="form">
      <form  name="myform" class="login" method="POST" action="#"   >
        <header>Login</header>
        <div id="display"></div>
        <input type="text" id="username" placeholder="username" pattern=".+@+.com"   />
        <input type="password"  id="password" placeholder="password"  />
        <button type="button" name="submit" id="submit"  >Submit</button>
        <p class="message">Not registered? <a href="#">Create an account</a></p>
      </form>
    </div>
  </div>
<script>
$(document).ready(function() {
$("#submit").click(function(){
var uname = $("#username").val();
var pass = $("#password").val();
var datastring = 'uname1='+uname + '&pass1='+pass;
if (uname=='' || pass=='')
{
  $("#display").html("please fill Fields")
}
else{
  $.ajax({
    type:'POST',
  url:'processor.php',
cache:false,
  data: datastring,
  success: function(result) {
     $("#display").html(result);
  }
  });


}
return false;
});
});
</script>
</body>
</html>
