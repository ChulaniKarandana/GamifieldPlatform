<?php
session_start();
include 'db_mysqli.php';   //connecting database

if (isset($_POST['Next'])){
	$id = $_SESSION['id'];
	$answer = $_POST['choice'];
	$query_up = 'UPDATE yesno SET yesno_ans = "'.$answer.'" WHERE yesno_id = "'.$id.'"'; //update answer
	mysqli_query($conn,$query_up);
	header("location:do_yesno.php?sent=".urlencode($_SESSION['task'])."&sub=".urldecode($_SESSION['sub'])); //navigate for the next question
	exit;
}
?>