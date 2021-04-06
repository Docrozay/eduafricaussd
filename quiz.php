
<html>
<form action="function.php" method="GET">
<div class="">
<label>Question 1 and Answer</label>
<input type="text" name="q1" placeholder="Question 1"/>
<input type="text" name="a1" placeholder="Answer 1"/>
</div>
<div class="">
<label>Question 2 and Answer</label>
<input type="text" name="q2" placeholder="Question 2"/>
<input type="text" name="a2" placeholder="Answer 2"/>
</div>
<label>Question 3 And Answer</label>
<input type="text" name="q3" placeholder="Question 3"/>
<input type="text" name="a3" placeholder="Answer 3"/>
</div>
<label>Question 4 And Answer</label>
<input type="text" name="q4" placeholder="Question 4"/>
<input type="text" name="a4" placeholder="Answer 4"/>
</div>
<label>Question 5 And Answer</label>
<input type="text" name="q5" placeholder="Question 5"/>
<input type="text" name="a5" placeholder="Answer 5"/>
</div>

<button name="add">Save</button>
</form>

</html>
<?php
if(isset($_GET['add'])){
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
 $a = $con->prepare("INSERT INTO stu_ussd_quiz_6 (question_1,question_2,question_3,question_4,question_5,answer_1,answer_2,answer_3,answer_4,answer_5) VALUES (?,?,?,?,?,?,?,?,?,?) ");
 if($a->execute([$q1,$q2,$q3,$q4,$q5,$a1,$a2,$a3,$a4,$a5])){
     echo "Quiz added successfully";
 }else{
     echo "This wont work";
 }
}
  
?>