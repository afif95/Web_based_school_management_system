<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            if($_GET['submit']){
                $db = new mysqli("localhost","root","","project");
                $Ques = array();
                $Ans1 = array();
                $Ans2 = array();
                $Ans3 = array();
                $Ans = array();
                $Ques = $_GET['Ques'];
                $Ans1 = $_GET['Ans1'];
                $Ans2 = $_GET['Ans2'];
                $Ans3 = $_GET['Ans3'];
                $Ans = $_GET['Ans'];
                $sub= $_GET['subject'];
                $class = $_GET['class'];
                $examid = $_GET['eid'];
                
                for($i=0;$i<10;$i++){
                    $sql = "INSERT INTO homework(question,ans_1,ans_2,ans_3,right_ans,subject,class,exam_id)
                    VALUES('$Ques[$i]', '$Ans1[$i]', '$Ans2[$i]', '$Ans3[$i]', '$Ans[$i]','$sub','$class','$examid' )";
                    
                    $db -> query($sql);
                }
                echo 'Data inserted successfully!';
            }
        ?>
    </body>
</html>