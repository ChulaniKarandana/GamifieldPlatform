<?php
session_start();
include 'db_mysqli.php';

if (isset($_POST['Next'])){
	$id = $_SESSION['id'];
	$answer = $_POST['choice'];  //getting user's answer
	$query_up = 'UPDATE mcq3 SET mcq3_ans = "'.$answer.'" WHERE mcq3_id = "'.$id.'"'; //updating answer
	mysqli_query($conn,$query_up);
	header("location:do_mcq3.php?sent=".urlencode($_SESSION['task'])."&sub=".urldecode($_SESSION['sub'])); //navigate to next question.
	exit;
}
?>