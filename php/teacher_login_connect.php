<?php 

$user='root';
$pass='';
$db='project';

$dbc=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");


                                                      

$sql="select teacher_id,fullname,email,teaching_subject,educational_qualification from teacher 
where userName='$_POST[usern]' and pass='$_POST[passn]'" ;
   $result=mysqli_query($dbc,$sql);
		if (mysqli_num_rows($result)==1) {
                           echo"<table border='1'>
                            <tr>
                            <th>teacher_id</th>
                            <th>Fullname</th>
                            <th>email</th>
                            <th>teaching_sybject</th>
                            <th>educational_qualification</th>
                            </tr>";
                            
                        
			 while($row = mysqli_fetch_assoc($result))
                         {
			    echo"<tr>";
                            echo"<td>".$row['teacher_id']."</td>";
                            echo"<td>".$row['fullname']."</td>";
                            echo"<td>".$row['email']."</td>";
                            echo"<td>".$row['teaching_subject']."</td>";
                            echo"<td>".$row['educational_qualification']."</td>";
                   
}}
?>
<form action="homework.php" method="post">
        <p style=text-align:right><input type="submit" name="homework" value="homework"></p>
</form>
<form action="new_form.php" method="post">
        <p style=text-align:right><input type="submit" name="result" value="update result"></p>
</form>
