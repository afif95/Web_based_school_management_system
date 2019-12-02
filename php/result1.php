<?php include('dbcon.php');?> <!--to establish connection with database-->

<!DOCTYPE html>

<html>
    <head>
    <!--Title of the Document-->
        <title>
        	Student Exam Result management | Home
        </title>
        	
        
	<!--Css files link-->
			<link href="style.css" rel="stylesheet" type="text/css">
  			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
			
    </head>

    <!--body of the document-->
    <body>

        <div class="heading" align="center">
            <h1>STUDENT RESULT</h1>
		</div>
		
	

			
				<div class="span10">
        			<table class="table table-bordered" id="example">
						<tr>  
						<!--Table Headings-->
                                                        <th rowspan="2">class</th>
							<th rowspan="2">Sr. No.</th>
							<th rowspan="2">Student Name</th>
							<th rowspan="2">Age</th>
							<th style="text-align:center" colspan="9">Subject Marks ,Grade point and grade</th>
                                                        
						</tr>
						
						<tr>
							<th>Mathematics</th>
                                                        <th>grade</th>
                                                        <th>point</th>
							<th>English</th>
                                                        <th>grade</th>
                                                        <th>point</th>
							<th>Science</th>
                                                        <th>grade</th>
                                                         <th>point</th>
                                                        <th>gpa</th>
							<!--<th>Edit</th>-->
						</tr>
				
						<tr>
							<?php
                                                        $name=$_POST['name'];
                                                            $id=$_POST['id'];
                                                                $class=$_POST['class'];
                                                                $password=$_POST['password'];
                                                              $user_query3=mysqli_query($con,"select password from stu where roll=$id")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query3);
                                               
						$result=$row[0];
                                               
                                                        
							/*Query to fetch all student records from the database*/
						        $user_query=mysqli_query($con,"SELECT *,(ma+en+sc)/3 as avg FROM student ,gpa,point where student.sr=gpa.id and gpa.id=point.id and  stud_name='$name' and gpa.class='$class' and gpa.id='$id'")or die(mysqli_error($con));
							$user_query1=mysqli_query($con,"SELECT *,(ma+en+sc)/3 as avg FROM student1 ,gpa1,point1 where student1.sr=gpa1.id and gpa1.id=point1.id and  stud_name='$name' and gpa1.class='$class' and gpa1.id='$id'")or die(mysqli_error($con));
	                                                $user_query2=mysqli_query($con,"SELECT *,(ma+en+sc)/3 as avg FROM student2 ,gpa2,point2 where student2.sr=gpa2.id and gpa2.id=point2.id and  stud_name='$name' and gpa2.class='$class' and gpa2.id='$id'")or die(mysqli_error($con));
if($class=='Six'&& $password==$result){
                                                        while($row=mysqli_fetch_array($user_query,MYSQLI_BOTH))
							{
							?>
						<!--Display fetched records in table rows-->
                                                        <td><?php echo $row['class']; ?></td>
							<td><?php echo $row['sr']; ?></td>
							<td><?php echo $row['stud_name']; ?></td>
							<td><?php echo $row['age']; ?></td>
							<td><?php echo $row['math']; ?> </td>
                                                        <td><?php echo $row['m']; ?> </td>
                                                        <td><?php echo $row['ma']; ?> </td>
                                                         <td><?php echo $row['eng'];?> </td>
                                                         <td><?php echo $row['s']; ?> </td>
                                                        <td><?php echo $row['en']; ?> </td>
							<td><?php echo $row['sci']; ?></td>
                                                        <td><?php echo $row['e']; ?> </td>
                                                        <td><?php echo $row['sc'];?></td>
                                                        <td><?php echo $row['avg']; ?> </td>
								
							<!--<td><a rel="tooltip" href="edit.php" class="btn btn-success">
							<span class="glyphicon glyphicon-pencil"></span></a></td>-->						
						</tr>   
							<?php
								}
                                                                while($row=mysqli_fetch_array($user_query1,MYSQLI_BOTH))
							{
							?>
						<!--Display fetched records in table rows-->
                                                        <td><?php echo $row['class']; ?></td>
							<td><?php echo $row['sr']; ?></td>
							<td><?php echo $row['stud_name']; ?></td>
							<td><?php echo $row['age']; ?></td>
							<td><?php echo $row['math']; ?> </td>
                                                        <td><?php echo $row['m']; ?> </td>
                                                        <td><?php echo $row['ma']; ?> </td>
                                                         <td><?php echo $row['eng'];?> </td>
                                                         <td><?php echo $row['s']; ?> </td>
                                                        <td><?php echo $row['en']; ?> </td>
							<td><?php echo $row['sci']; ?></td>
                                                        <td><?php echo $row['e']; ?> </td>
                                                        <td><?php echo $row['sc'];?></td>
                                                        <td><?php echo $row['avg']; ?> </td>
								
							<!--<td><a rel="tooltip" href="edit.php" class="btn btn-success">
							<span class="glyphicon glyphicon-pencil"></span></a></td>-->						
						</tr>   
							<?php
}}
                                                                while($row=mysqli_fetch_array($user_query2,MYSQLI_BOTH))
							{
							?>
						<!--Display fetched records in table rows-->
                                                        <td><?php echo $row['class']; ?></td>
							<td><?php echo $row['sr']; ?></td>
							<td><?php echo $row['stud_name']; ?></td>
							<td><?php echo $row['age']; ?></td>
							<td><?php echo $row['math']; ?> </td>
                                                        <td><?php echo $row['m']; ?> </td>
                                                        <td><?php echo $row['ma']; ?> </td>
                                                         <td><?php echo $row['eng'];?> </td>
                                                         <td><?php echo $row['s']; ?> </td>
                                                        <td><?php echo $row['en']; ?> </td>
							<td><?php echo $row['sci']; ?></td>
                                                        <td><?php echo $row['e']; ?> </td>
                                                        <td><?php echo $row['sc'];?></td>
                                                        <td><?php echo $row['avg']; ?> </td>
								
							<!--<td><a rel="tooltip" href="edit.php" class="btn btn-success">
							<span class="glyphicon glyphicon-pencil"></span></a></td>-->						
						</tr>   
							<?php
								}
							?>                     
					</table> 
                                    <table class="table table-bordered" id="example">
					
						
						
						<tr>
							
							
                                                        <th>Total marks</th>
							
							<th>Rank In class</th>
							<!--<th>Edit</th>-->
						</tr>
				
						<tr>
							<?php 
							/*Query to fetch all student records from the database*/
								$user_query=mysqli_query($con,"SELECT * FROM ( SELECT student.*, (@rank := @rank+1) AS rank 
													   FROM student INNER JOIN (SELECT @rank := 0) AS a  
													   ORDER BY per DESC )a
                                                                                                           where stud_name='$name'
                                                                                                     
													   ORDER BY `total` "
												)or die(mysqli_error($con));
                                                                $user_query1=mysqli_query($con,"SELECT * FROM ( SELECT student1.*, (@rank := @rank+1) AS rank 
													   FROM student1 INNER JOIN (SELECT @rank := 0) AS a  
													   ORDER BY per DESC )a
                                                                                                           where stud_name='$name'
                                                                                                     
													   ORDER BY `total` "
												)or die(mysqli_error($con));
                                                                $user_query2=mysqli_query($con,"SELECT * FROM ( SELECT student2.*, (@rank := @rank+1) AS rank 
													   FROM student2 INNER JOIN (SELECT @rank := 0) AS a  
													   ORDER BY per DESC )a
                                                                                                           where stud_name='$name'
                                                                                                     
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
                                                                while($row=mysqli_fetch_array($user_query1,MYSQLI_BOTH))
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
                                                                while($row=mysqli_fetch_array($user_query2,MYSQLI_BOTH))
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
					</table> 
				</div> 

		<!--Summary Section-->

			<div id="content">
				<button class="btn btn-block">
					<span class="glyphicon glyphicon-list-alt"></span>&nbsp;Summary
				</button>
				<br />
                                    
                                
					<label>1. Number of students Passed:</label>
					<?php
                                        if ($class=='Six'){
					/*Query to find number of students passed*/
						$user_query=mysqli_query($con,"select count(per) from student where per>=40")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
                                               
						$result=$row[0];
						/*Write the result*/
                                        echo $result;}
elseif ($class=='Seven'){
					/*Query to find number of students passed*/
						$user_query=mysqli_query($con,"select count(per) from student1 where per>=40")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
                                               
						$result=$row[0];
						/*Write the result*/
                                        echo $result;}
                                         elseif ($class=='Eight'){
					/*Query to find number of students passed*/
						$user_query=mysqli_query($con,"select count(per) from student2 where per>=40")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
                                               
						$result=$row[0];
						/*Write the result*/
                                        echo $result;}
					?>
                                       	<br />	

					<label>2. Number of students Failed:</label>
					<?php
					if($class=='Six'){
						$user_query=mysqli_query($con,"select count(per) from student where per<40")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
                                        echo $result;}
                                        elseif($class=='Seven'){
						$user_query=mysqli_query($con,"select count(per) from student1 where per<40")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
                                        echo $result;}
                                        elseif($class=='Eight'){
						$user_query=mysqli_query($con,"select count(per) from student2 where per<40")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
                                        echo $result;}
					?>
                                        
					<br />

					<label>3. Name of the student topper in Math:</label>
					<?php
                                        if($class=='Six'){
					/*Query to find student name topper in mathematics subject*/
						$user_query=mysqli_query($con,"select stud_name from student where math
						IN 	(select MAX(math) from student)")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
                                        echo $result;}
                                        elseif($class=='Seven'){
					/*Query to find student name topper in mathematics subject*/
						$user_query=mysqli_query($con,"select stud_name from student1 where math
						IN 	(select MAX(math) from student1)")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
                                        echo $result;}
                                        elseif($class=='Eight'){
					/*Query to find student name topper in mathematics subject*/
						$user_query=mysqli_query($con,"select stud_name from student2 where math
						IN 	(select MAX(math) from student2)")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
                                        echo $result;}
					?>
                                        
					<br />

					<label>4. Name of the student topper in English:</label>
					<?php
                                        if($class=='Six'){
					/*Query to find student name topper in English subject*/
						$user_query=mysqli_query($con,"select stud_name from student where eng 
						IN (select MAX(eng) from student)")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
						echo $result;}
                                               elseif($class=='Seven'){
					/*Query to find student name topper in English subject*/
						$user_query=mysqli_query($con,"select stud_name from student1 where eng 
						IN (select MAX(eng) from student1)")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
						echo $result;}
                                                     elseif($class=='Eight'){
					/*Query to find student name topper in English subject*/
						$user_query=mysqli_query($con,"select stud_name from student2 where eng 
						IN (select MAX(eng) from student2)")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
						echo $result;}
//                                                ?>
					<br />

					<label>5. Name of the student topper in Science:</label>
					<?php
                                        if($class=='Six'){
					/*Query to find student name topper in Science subject*/
						$user_query=mysqli_query($con,"select stud_name from student where sci 
						IN (select MAX(sci) from student)")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
                                        echo $result;}
                                         if($class=='Seven'){
					/*Query to find student name topper in Science subject*/
						$user_query=mysqli_query($con,"select stud_name from student1 where sci 
						IN (select MAX(sci) from student1)")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
                                        echo $result;}
                                         if($class=='Eight'){
					/*Query to find student name topper in Science subject*/
						$user_query=mysqli_query($con,"select stud_name from student2 where sci 
						IN (select MAX(sci) from student2)")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
                                        echo $result;}
                                                ?>
					<br />

					<label>6. Name of the student topper in All Subject:</label>
					<?php
                                        if($class=='Six'){
					/*Query to find student name topper in All subjects*/
						$user_query=mysqli_query($con,"select stud_name from student where total 
						IN (select MAX(total) from student)")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
						echo $result;
                                        }
                                        if($class=='Seven'){
					/*Query to find student name topper in All subjects*/
						$user_query=mysqli_query($con,"select stud_name from student1 where total 
						IN (select MAX(total) from student1)")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
						echo $result;
                                        }
                                        if($class=='Eight'){
					/*Query to find student name topper in All subjects*/
						$user_query=mysqli_query($con,"select stud_name from student2 where total 
						IN (select MAX(total) from student2)")
						or die(mysqli_error($con));
						$row=mysqli_fetch_row($user_query);
						$result=$row[0];
						/*Write the result*/
						echo $result;
                                        }
                                        ?> 
					<br />
                                        
			</div>
		</div>
	</body> 
</html> 