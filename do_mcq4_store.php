<?php
session_start();
include 'db_mysqli.php';  //connecting database

if (isset($_POST['Next'])){
	$id = $_SESSION['id'];
	$answer = $_POST['choice'];
	$query_up = 'UPDATE mcq4 SET mcq4_ans = "'.$answer.'" WHERE mcq4_id = "'.$id.'"'; //update the answer
	mysqli_query($conn,$query_up);
	header("location:do_mcq4.php?sent=".urlencode($_SESSION['task'])."&sub=".urldecode($_SESSION['sub'])); //navigate to next question.
	exit;
}
?>