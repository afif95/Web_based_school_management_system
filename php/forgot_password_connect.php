<!DOCTYPE HTML>
<html>
<?php 

$user='root';
$pass='';
$db='project';

$dbc=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

$sql="select password from student 
where roll='$_POST[roll]' and mother_name='$_POST[mname]' and school_class='$_POST[class]' and security_question='$_POST[sq]' and security_ans='$_POST[ans]'" ;
   $result=mysqli_query($dbc,$sql);
        if (mysqli_num_rows($result)==1) {
                            
                        
             while($row = mysqli_fetch_assoc($result))
                         {
                            echo "<h2>".$row['password']."</h2>";

}}
?>