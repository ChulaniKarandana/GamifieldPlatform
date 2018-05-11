<?php
session_start();
include 'db_mysqli.php';  //connecting database

if (isset($_POST['Next'])){
	$id = $_SESSION['id'];
	$answer = $_POST['answer'];
	$query_up = 'UPDATE trans_lan SET lan_ans = "'.$answer.'" WHERE lan_id = "'.$id.'"'; //update the answer
	mysqli_query($conn,$query_up);
	header("location:do_trans_lan.php?sent=".urlencode($_SESSION['task'])."&sub=".urldecode($_SESSION['sub'])); //navigate to next question.
	exit;
}
?>