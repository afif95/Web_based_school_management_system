
<?php 

$user='root';
$pass='';
$db='project';

$dbc=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
$class= $_POST['class'];
$id=$_POST['id'];
$sql="DELETE FROM student WHERE school_class='$class'and roll=$id" ; 
mysqli_query($dbc,$sql);


?>