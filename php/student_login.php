<html>
<style>
body{
	background-color: Lightgray;
}
</style>
<body>
<form method="post" action="student_login_connect.php">
	<p style=text-align:center> Class: <input type="text" name="class"></p> <br>
	<p style=text-align:center> Roll:<input type="text" name="roll"></p> <br>
	<p style=text-align:center> Password:<input type="password" name="pass"> <br>
	<input type="submit" name="submit" value="Submit" ></p>
</form>
    <form action="forgot_password.php" method="post">
	<p style=text-align:center><input type="submit" value="forgot password"> </p>
</form>

</body>
</html>