<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>jsc_result</title>

   
    <style type="text/css">
    body {
      margin: 0px;
    padding: 0px;
    background-color:#FFFFFF;
    font-family: 'Open Sans', sans-serif;
    font-weight:100;
      text-align: left;
    text-decoration: none;
    -webkit-font-smoothing: antialiased;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    
}
        body{
            background-image: url("images/halftone-yellow.png") ;
            background-repeat: repeat;
        }
        .notice{
            text-align: center;
            padding-top: 20px;
        }
    </style>
    
</head>

<body>

<div class="notice">
<?php

$user='root';
$pass='';
$db='project';

$dbc=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

$sql = "select * from notice";
$result=mysqli_query($dbc,$sql);
		if (mysqli_num_rows($result) > 0) {
                           echo"<table align='center' border='1'>
                            <tr>
                            <th>no</th>
                            <th>type</th>
                            <th>date</th>
                            </tr>";
                            
                        
			 while($row = mysqli_fetch_assoc($result))
                         {
			    echo"<tr>";
                            echo"<td>".$row['no']."</td>";
                            echo"<td>".$row['type']."</td>";
                            echo"<td>".$row['date']."</td>";          
}}
?>

</body>
</html>