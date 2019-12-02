<?php

$servername="localhost";
$username="root";
$password="";
$db="test";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{die("connection failed:".mysqli_connect_error());}
$class=$_POST['class'];
$id=$_POST['roll'];
$name=$_POST['name'];
$age=$_POST['age'];
$math=$_POST['math'];
$g=$_POST['grade'];
$p=$_POST['point'];
$english=$_POST['english'];
$g1=$_POST['grade1'];
$p1=$_POST['point1'];
$science=$_POST['science'];
$g2=$_POST['grade2'];
$p2=$_POST['point2'];
$total=$_POST['total'];
$per=$_POST['per'];
if($class=='Six'){
$sql="insert into student values('$class',$id,'$name',$age,$math,$english,$science,$total,$per)";
$sql1="insert into gpa values('$class',$id,'$g','$g1','$g2')";
$sql2="insert into point values('$class',$id,$p,$p1,$p2)";


if(mysqli_query($conn,$sql))
{echo"new record added"."</br>";
}
 else {
    
echo"error :".$sql."<br>".mysqli_error($conn);}
if(mysqli_query($conn,$sql1))
{echo"new record added"."<br>";
}
 else {
    
echo"error :".$sql1."<br>".mysqli_error($conn);}
if(mysqli_query($conn,$sql2))
{echo"new record added"."<br>";
}
 else {
    
echo"error :".$sql2."<br>".mysqli_error($conn);}
 }
elseif($class=='Seven'){
$sql="insert into student1 values('$class',$id,'$name',$age,$math,$english,$science,$total,$per)";
$sql1="insert into gpa1 values('$class',$id,'$g','$g1','$g2')";
$sql2="insert into point1 values('$class',$id,$p,$p1,$p2)";

if(mysqli_query($conn,$sql))
{echo"new record added";
}
 else {
    
echo"error :".$sql."<br>".mysqli_error($conn);}
if(mysqli_query($conn,$sql1))
{echo"new record added";
}
 else {
    
echo"error :".$sql1."<br>".mysqli_error($conn);}
if(mysqli_query($conn,$sql2))
{echo"new record added";
}
 else {
    
echo"error :".$sql2."<br>".mysqli_error($conn);}
 }
elseif($class=='Eight'){
$sql="insert into student2 values('$class',$id,'$name',$age,$math,$english,$science,$total,$per)";
$sql1="insert into gpa2 values('$class',$id,'$g','$g1','$g2')";
$sql2="insert into point2 values('$class',$id,$p,$p1,$p2)";

if(mysqli_query($conn,$sql))
{echo"new record added";
}
 else {
    
echo"error :".$sql."<br>".mysqli_error($conn);}
if(mysqli_query($conn,$sql1))
{echo"new record added";
}
 else {
    
echo"error :".$sql1."<br>".mysqli_error($conn);}
if(mysqli_query($conn,$sql2))
{echo"new record added";
}
 else {
    
echo"error :".$sql2."<br>".mysqli_error($conn);}

 }
 mysqli_close($conn);
 ?>





