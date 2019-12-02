<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Sunnydale High School</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>


<?php 

$user='root';
$pass='';
$db='project';

$dbc=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

$sql="select * from admin
where username='$_POST[name]' and password='$_POST[pass]'" ;?>
<body class="container" style="background-color: Lightgray; margin-top: 30px ">
<p style="font-size:40px;text-align:center"></p>
<p style=text-align:center ><h2>For Student</h2></p>

<form action="update_stu.php" method="post">
        <p style=text-align:right><input type="submit" name="update_st" value="update_st"></p>
</form>
<form action="delete_security.php" method="post">
        <p style=text-align:right><input type="submit" name="security" value="security"></p>
</form>
<p style=text-align:center ><h2>For Teacher</h2></p>


   
<form action="update_tea.php" method="post">
        <p style=text-align:right><input type="submit" name="update_te" value="update_te"></p>
</form>
      
	
</form>

</body>
</html>

