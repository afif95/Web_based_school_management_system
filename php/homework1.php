<!DOCTYPE html>
<html>
<style>
body {font-family: Arial;
background-color: #EED5AD;
margin: 30px 100px 50px 100px;
border: 2px solid #0A1E36}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

h1{
	text-align: center;
}
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
 .signupbtn {
  float: left;
  width: 50%;
  
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

<form action="exam.php" method="get" style="border:1px solid #ccc">
  <div class="container">
    <h1>Home Works</h1>
   
    <hr>

    <label><b>Subject</b></label>
    <input type="text" placeholder="Subject" name="subject" required>

    <label><b>Class</b></label>
    <input type="text" placeholder="Class" name="class" required>

    <label><b>Exam ID</b></label>
    <input type="text" placeholder="Exam ID" name="exmid" required>
    
   
    
  

    <div class="clearfix">
    
      <button type="submit" class="signupbtn">Submit</button>
    </div>
  </div>
</form>

</body>
</html>






















