<?php
session_start();
include 'db_mysqli.php'; //connecting database

if (isset($_POST['Next'])){
	$id = $_SESSION['id'];
	$answer = $_POST['answer'];
	$query_up = 'UPDATE image SET image_ans = "'.$answer.'" WHERE image_id = "'.$id.'"';  //update answer
	mysqli_query($conn,$query_up);
	header("location:do_image.php?sent=".urlencode($_SESSION['task'])."&sub=".urldecode($_SESSION['sub'])); //navigation for new question
	exit;
}
?>