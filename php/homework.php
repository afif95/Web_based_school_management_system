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
        background-color: #FAF2DF;
        margin-top: 30px;
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


        <form method="get" action="homework_connect.php">
                <strong>subject</strong> <input type="text" name="subject">
                <strong>class </strong><input type="text" name="class">
                <strong>exam id </strong><input type="text" name="eid">
            <br><br>
            <?php for($i=0;$i<10;$i++): ?>
            <div>
            <strong>Question:</strong><br><input type="text" name="Ques[]"><br>
            <strong>Answer 1:</strong><br><input type="text" name="Ans1[]"><br>
            <strong>Answer 2:</strong><br><input type="text" name="Ans2[]"><br>
            <strong>Answer 3:</strong><br><input type="text" name="Ans3[]"><br>
            <strong>Right Answer:<br><input type="text" name="Ans[]"><br>
            </div><br>
            <?php endfor; ?>
            <br><button class="button" type="submit" name="submit" value="submit"><span>Submit</span></button>
    </form>

</div>

<script type="text/javascript" src="jquery.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
