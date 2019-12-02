
<?php 

$user='root';
$pass='';
$db='project';

$dbc=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
$name=$_POST['name'];
$id=$_POST['id'];

$sql="delete from teacher
where userName='$name' and teacher_id=$id" ;
mysqli_query($dbc,$sql);

?>