
<?php 

$user='root';
$pass='';
$db='project';

 
$dbc=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
 $password=$_POST['password'];
 $name=$_POST['username'];
                                                                
                                                              $user_query3=mysqli_query($con,"select password from admin where username='$name'")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query3);
                                               
						$result=$row[0];
                                                
                                                if($result==$password){
$sql="DELETE FROM student WHERE 1";
                                                mysqli_query($dbc,$sql);}
    
?>


