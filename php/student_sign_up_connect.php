<?php

$user='root';
$pass='';
$db='project';

$dbc=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

$sql = "INSERT INTO student(roll,school_class,first_name,middle_name,last_name,father_name,mother_name,sex,email,dob,password,secutity_question,security_ans) 
VALUES ('$_POST[roll]','$_POST[schoolclass]','$_POST[firstname]','$_POST[middlename]','$_POST[lastname]','$_POST[fathername]','$_POST[mothername]','$_POST[sex]','$_POST[email]','$_POST[dob]','$_POST[password]','$_POST[sq]','$_POST[ans]')"; 

if( mysqli_query ($dbc,$sql))
        echo"New record created successfully";
else
{ echo "YOUR REGISTRATION IS COMPLETED..."; }
?>