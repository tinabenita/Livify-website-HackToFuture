<?php
$con=new mysqli("localhost","root","","user_data");
  if($con->connect_error){
    die("fail to connect : ".$con->connect_error);
  }
?>