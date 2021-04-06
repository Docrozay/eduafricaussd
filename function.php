<?php
include("db.php") ;
        $q1=$_GET['q1'];
        $q2=$_GET['q2'];
        $q3=$_GET['q3'];
        $q4=$_GET['q4'];
        $q5=$_GET['q5'];
        $a1=$_GET['a1'];
        $a2=$_GET['a2'];
        $a3=$_GET['a3'];
        $a4=$_GET['a4'];
        $a5=$_GET['a5'];
        $add = $con->prepare("INSERT INTO stu_ussd_quiz_6 (question_1,question_2,question_3,question_4,question_5,answer_1,answer_2,answer_3,answer_4,answer_5) VALUES (?,?,?,?,?,?,?,?,?,?) ");
        if($add->execute([$q1,$q2,$q3,$q4,$q5,$a1,$a2,$a3,$a4,$a5])){
            echo "Quiz added successfully";
        }else{
            echo "This wont work";
        } 
    
    


?>