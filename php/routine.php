<?php

$user='root';
$pass='';
$db='project';

$dbc=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

$sql = "select * from class_routine where class='$_POST[cl]' ";
$result=mysqli_query($dbc,$sql);
		if (mysqli_num_rows($result) > 0) {
                           echo"<table border='1'>
                            <tr>
                            <th>day</th>
                            <th>period_1</th>
                            <th>peirod_2</th>
                            <th>peirod_3</th>
                            <th>peirod_4</th>
                            <th>peirod_5</th>
                            </tr>";
                            
                        
			 while($row = mysqli_fetch_assoc($result))
                         {
			    echo"<tr>";
                            echo"<td>".$row['day']."</td>";
                            echo"<td>".$row['period_1']."</td>";
                            echo"<td>".$row['period_2']."</td>";
                            echo"<td>".$row['period_3']."</td>";
                            echo"<td>".$row['period_4']."</td>";
                            echo"<td>".$row['period_5']."</td>";      
}}
?>