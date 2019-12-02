<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Sunnydale High School</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
body{
     background-color: #424242;
}
    .scr{
        position: absolute;
        left:50%;
        top:50%;
        transform: translateX(-50%) translateY(-50%);


        text-align: center;
       font-size: 3em;
      font-family:Heavitas;
       color: #fff;
    }
</style>
</head>
<body>

<div class="scr">
<?php 

$user='root';
$pass='';
$db='project';

$dbc=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

$sql="select right_ans
        from homework 
        where subject='$_GET[s]' and class='$_GET[cl]' and exam_id='$_GET[ei]'";

$result=mysqli_query($dbc,$sql);
		
    if (mysqli_num_rows($result)==true) {

        $i=0;
        $count=0;
        while($row = mysqli_fetch_assoc($result))
        {
            if($row['right_ans']==$_GET[$i])
            {
                $count++;
            }
            $i++;
        }
        echo "your score is $count";
    }
?>
</div>
</body>
</html>
        