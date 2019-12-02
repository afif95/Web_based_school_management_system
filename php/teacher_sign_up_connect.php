<?php

$user='root';
$pass='';
$db='project';

$dbc=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

$sql = "INSERT INTO teacher(fullname,userName,email,age,pass,teaching_subject,educational_qualification,gender) VALUES ('$_POST[name]','$_POST[user]','$_POST[email]','$_POST[age]','$_POST[pass]','$_POST[subject]','$_POST[educational_qualification]','$_POST[gender]')"; 
if( mysqli_query ($dbc,$sql))
        echo"New record created successfully";
else
{ echo "YOUR REGISTRATION IS COMPLETED..."; }
?>