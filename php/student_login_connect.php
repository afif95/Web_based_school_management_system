<!DOCTYPE HTML>
<html>
<?php

$user='root';
$pass='';
$db='project';

$dbc=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

$sql="select roll,school_class,first_name,middle_name,last_name,father_name,mother_name,sex,email,dob from student
where roll='$_POST[roll]' and password='$_POST[pass]' and school_class='$_POST[class]'" ;
   $result=mysqli_query($dbc,$sql);
        if (mysqli_num_rows($result)==1) {
                           echo"<table border='1'>
                            <tr>
                            <th>Roll</th>
                            <th>Class</th>
                            <th>Firstname</th>
                            <th>Middlename</th>
                            <th>Lastname</th>
                            <th>Fathername</th>
                            <th>Mothername</th>
                            <th>Sex</th>
                            <th>email</th>
                            <th>dob</th>
                            </tr>";


             while($row = mysqli_fetch_assoc($result))
                         {
                echo"<tr>";
                            echo"<td>".$row['roll']."</td>";
                            echo"<td>".$row['school_class']."</td>";
                            echo"<td>".$row['first_name']."</td>";
                            echo"<td>".$row['middle_name']."</td>";
                            echo"<td>".$row['last_name']."</td>";
                            echo"<td>".$row['father_name']."</td>";
                            echo"<td>".$row['mother_name']."</td>";
                            echo"<td>".$row['sex']."</td>";
                            echo"<td>".$row['email']."</td>";
                            echo"<td>".$row['dob']."</td>";
}}
?>
<form action="homework1.php" method="post">
        <p style=text-align:right><input type="submit" name="homework" value="homework"></p>
</form>
<form action="res.php" method="post">
        <p style=text-align:right><input type="submit" name="result" value="result"></p>
</form>
<form action="routine.php" method="post">
        <p style=text-align:right><input type="submit" name="routine" value="routine"></p>
        <input type="hidden" name="cl" value="<?php echo $_POST['class']; ?>">
</form>
        </form>

</html>
