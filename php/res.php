<!DOCTYPE html>
<html>
<style>
body {font-family: Arial;
background-color: #EED5AD;
border: 2px solid #0A1E36;
margin: 30px 100px 50px 100px}
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

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

h1{
	text-align: center;
}

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


.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}


.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}


.container {
    padding: 16px;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}


@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

<form action='result1.php' method='post' style="border:1px solid #ccc">
  <div class="container">
    <h1>Result</h1>
   
    <hr>

    <label><b>Name</b></label>
    <input type="text" placeholder="Name" name="name" required>

    <label><b>Class</b></label>
    <input type="text" placeholder="Class" name="class" required>

    <label><b>ID</b></label>
    <input type="text" placeholder="ID" name="id" required>
    
    <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
   
    
  

    <div class="clearfix">
    
      <button type="submit" class="signupbtn">Submit</button>
    </div>
  </div>
</form>

</body>
</html>















































