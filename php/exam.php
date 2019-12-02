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
    margin: 0px;
    padding: 0px;

}
.container{
    margin-top: 30px;
    margin-bottom: 50px;
}
hr.stl{
    border-top: 1px solid #0A1E36;
    border-bottom: 1px solid #061220;
}
.button {
  border-radius: 4px;
  background-color: #0A1E36;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>

<body>

<div class="container">
<?php 

$user='root';
$pass='';
$db='project';

$dbc=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

$sql="select question,ans_1,ans_2,ans_3 
        from homework 
        where subject='$_GET[subject]' and class='$_GET[class]' and exam_id='$_GET[exmid]'";

$result=mysqli_query($dbc,$sql);
		
    if (mysqli_num_rows($result)==true) {?>
    
        <form action="exam_connect.php" method="get" >
        <input type="hidden" name="s" value="<?php echo $_GET['subject']; ?>">
        <input type="hidden" name="cl" value="<?php echo $_GET['class']; ?>">
        <input type="hidden" name='ei' value="<?php echo $_GET['exmid']; ?>">
    
        <?php
        $i=0;
        while($row = mysqli_fetch_assoc($result))
     {
        echo $row['question']."<br>";?>
        <input type="radio" name="<?php echo $i; ?>" value="<?php echo $row['ans_1'];?>"> <?php echo $row['ans_1'];?> 
        <input type="radio" name="<?php echo $i; ?>" value="<?php echo $row['ans_2'];?>"> <?php echo $row['ans_2'];?> 
        <input type="radio" name="<?php echo $i; ?>" value="<?php echo $row['ans_3'];?>"> <?php echo $row['ans_3'];?> 
        <br><br><br><hr class="stl">
    <?php
            $i++;
    }
        echo "<button class='button' type='submit' name='button' value='button'><span>submit</span></button>";?>
    </form>
    <?php
    }    
?>

</div>

</body>
</html>
