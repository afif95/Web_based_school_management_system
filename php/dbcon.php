<?php
$con=mysqli_connect("localhost","root","","test"); //specify the server name,database name and password to connect to the database
if(!$con)
{
  die(mysqli_error());
}
mysqli_select_db($con,"test");
?>