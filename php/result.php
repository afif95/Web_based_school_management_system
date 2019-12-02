<?php include('dbcon.php');?> <!--to establish connection with database-->

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

<html>
    <head>
    <!--Title of the Document-->
        <title>
        	Student Exam Result management | Home
        </title>
        	
        	<meta name="description" content="">
        	<meta name="viewport" content="width=device-width">
	<!--Css files link-->
			<link href="style.css" rel="stylesheet" type="text/css">
  			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
			<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
  			<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
    </head>

    <!--body of the document-->
    <body>

        <div class="heading" align="center">
			STUDENT EXAM RESULT MANAGEMENT
		</div>
		
		<div class="container">
			<div class="row">

	<!--Add a new record-->

				<div class="left">					     
					<a rel="tooltip" class="btn btn-primary" href="add_new.php">
						<span class="glyphicon glyphicon-plus"></span>
					</a>&nbsp;Add New Record
				</div>&nbsp;&nbsp;&nbsp;&nbsp;

	<!--Edit a Record-->

				<div class="left">		
					<a rel="tooltip" class="btn btn-success" href="edit.php">
						<span class="glyphicon glyphicon-pencil"></span> 
					</a>&nbsp;Edit a Record
				</div>
				<br/><br /><br />
				
	<!--Display Students records-->
				<div class="span10">
        			<table class="table table-bordered" id="example">
						<tr>  
						<!--Table Headings-->
							<th rowspan="2">Sr. No.</th>
							<th rowspan="2">Student Name</th>
							<th rowspan="2">Age</th>
							<th colspan="5">Subject Marks</th>
                                                        
						</tr>
						
						<tr>
							<th colspan="2">Mathematics</th>
							<th colspan="2">English</th>
							<th colspan="2">Science</th>
							<th>Total Marks</th>
                                                        <th>Total Gpa</th>
							<th>Percentage</th>
							<th>Rank In class</th>
							<!--<th>Edit</th>-->
						</tr>
				
						<tr>
							<?php 
							/*Query to fetch all student records from the database*/
								$user_query=mysqli_query($con,"SELECT * FROM ( SELECT student.*, (@rank := @rank+1) AS rank 
													   FROM student INNER JOIN (SELECT @rank := 0) AS a  
													   ORDER BY per DESC )a
                                                                                                     
													   ORDER BY `total` "
												)or die(mysqli_error($con));
							
							while($row=mysqli_fetch_array($user_query,MYSQLI_BOTH))
							{
							?>
						<!--Display fetched records in table rows-->
                                          
							<td><?php echo $row['total']; ?></td>
							<td><?php echo $row['rank']; ?></td>
								
							<!--<td><a rel="tooltip" href="edit.php" class="btn btn-success">
							<span class="glyphicon glyphicon-pencil"></span></a></td>-->						
						</tr>   
							<?php
								}
							?>                     
					</table> <!--End of table-->
				</div> 

		<!--Summary Section-->

			<div id="content">
				<button class="btn btn-block">
					<span class="glyphicon glyphicon-list-alt"></span>&nbsp;Summary
				</button>
				<br />
					<label>1. Number of students Passed:</label>
					<?php
					/*Query to find number of students passed*/
						$user_query=mysqli_query($con,"select count(per) from student where per>=40")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
						echo $result;
					?>
					<br />	

					<label>2. Number of students Failed:</label>
					<?php
					/*Query to find number of student failed*/
						$user_query=mysqli_query($con,"select count(per) from student where per<40")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
						echo $result;
					?>
					<br />

					<label>3. Name of the student topper in Math:</label>
					<?php
					/*Query to find student name topper in mathematics subject*/
						$user_query=mysqli_query($con,"select stud_name from student where math
						IN 	(select MAX(math) from student)")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
						echo $result;
					?>
					<br />

					<label>4. Name of the student topper in English:</label>
					<?php
					/*Query to find student name topper in English subject*/
						$user_query=mysqli_query($con,"select stud_name from student where eng 
						IN (select MAX(eng) from student)")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
						echo $result;?>
					<br />

					<label>5. Name of the student topper in Science:</label>
					<?php
					/*Query to find student name topper in Science subject*/
						$user_query=mysqli_query($con,"select stud_name from student where sci 
						IN (select MAX(sci) from student)")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
						echo $result;?>
					<br />

					<label>6. Name of the student topper in All Subject:</label>
					<?php
					/*Query to find student name topper in All subjects*/
						$user_query=mysqli_query($con,"select stud_name from student where total 
						IN (select MAX(total) from student)")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
						echo $result;?> 
					<br />
			</div>
		</div>
	</body> <!--End Of Body-->
</html> <!--End of the Document-->