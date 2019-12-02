<!DOCTYPE html>
<html>
<style>
body {font-family: Arial;
background-color: #9EDAD9;
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
}
</style>
<body>

<form action="add.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>Update Result</h1>
   
    <hr>

    <label><b>Class</b></label>
    <input type="text" placeholder="Class" name="class" required>

    <label><b>Roll</b></label>
    <input type="text" placeholder="Roll" name="Roll" required>
    <label><b>Name</b></label>
    <input type="text" placeholder="Name" name="Name" required>

    <label><b>Age</b></label>
    <input type="text" placeholder="Age" name="Age" required>

    <label><b>Math</b></label>
    <input type="text" placeholder="Math" name="Math" required>

    <label><b>Grade1</b></label>
    <input type="text" placeholder="Grade1" name="Grade1" required>

    <label><b>Point1</b></label>
    <input type="text" placeholder="Point1" name="Point1" required>

    <label><b>English</b></label>
    <input type="text" placeholder="English" name="English" required>

    <label><b>Grade2</b></label>
    <input type="text" placeholder="Grade2" name="Grade2" required>

    <label><b>Point2</b></label>
    <input type="text" placeholder="Point2" name="Point2" required>

    <label><b>Science</b></label>
    <input type="text" placeholder="Science" name="Science" required>

    <label><b>Grade3</b></label>
    <input type="text" placeholder="Grade3" name="Grade3" required>

    <label><b>Point3</b></label>
    <input type="text" placeholder="Point3" name="Point3" required>

    <label><b>Total</b></label>
    <input type="text" placeholder="Total" name="Total" required>

    <label><b>Per</b></label>
    <input type="text" placeholder="Per" name="Per" required>
    
   
    
  

    <div class="clearfix">
    
      <button class="button" type="submit" name="submit" value="submit"><span>Submit</span></button>
    </div>
  </div>
</form>

</body>
</html>









































