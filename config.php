<?php

if(!isset($_SESSION))
    {
        session_start();
    }


$con = mysqli_connect("localhost" , "root" ,"" , "demo");

if(mysqli_connect_errno())
{

  echo "Failed to connect" . mysqli_connect_errno();
}
else {
echo "";
}

 ?>
