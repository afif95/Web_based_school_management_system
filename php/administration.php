<?php

$user='root';
$pass='';
$db='project';

$dbc=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

$sql = "select * from teacher where LENGTH(fullname) > 0 ";
$result=mysqli_query($dbc,$sql);
		if (mysqli_num_rows($result)>0) {
                           echo"<table border='1'>
                            <tr>
                            <th>teacher_id</th>
                            <th>Fullname</th>
                            <th>email</th>
                            <th>teaching_subject</th>
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