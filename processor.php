<?php
if(!isset($_SESSION))
    {
        session_start();
    }
include_once('config.php');

$name = mysqli_real_escape_string($con, $_POST['uname1']);
$nameclean = filter_var($name, FILTER_SANITIZE_STRING , FILTER_FLAG_STRIP_HIGH);
$pass = mysqli_real_escape_string($con, $_POST['pass1']);
$passclean = filter_var($pass, FILTER_SANITIZE_STRING , FILTER_FLAG_STRIP_HIGH);

$hash = sha1(md5($passclean));

$result = $con -> query("SELECT * FROM loginform  WHERE username = '$nameclean'  AND password='$pass' ");

$total = $result -> num_rows;

if($total < 1){
  echo "Invalid Username and Password";
}
else{

  while($row = $result->fetch_assoc()){

if($pass==$row['password']){
 $_SESSION['id']=$row['id'];
 echo "<script> window.location.assign('dashboard.php'); </script>";
 echo '<br/>The Session ID is '.$_SESSION['id'];
}else{
 echo 'Wrong Password';
}
}
}

$con -> close();
 ?>
