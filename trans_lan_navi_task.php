<?php
$task_id = $_SESSION["task"];
$sub_id = $_SESSION["sub"];

if ((isset($_POST["text"])) && (isset($_POST["lan"]))){
	include 'dbCon.php';                        //connecting database
	$company = $_SESSION['user_company'];
	$user = $_SESSION['user_id'];
	if (!get_magic_quotes_gpc()){	
		$new_text = addslashes($_POST["text"]);    //assignment of variables
        $new_lang = addslashes($_POST["lan"]);
		
	}
	else{
		$new_text = $_POST["text"];
        $new_lang = $_POST["lan"];
	}
	//inserting values into the database
	$ans = "";
	$query = "INSERT INTO trans_lan(task_id,sub_id,text,lan_req,lan_ans) values('$task_id','$sub_id','$new_text','$new_lang','$ans')";
	mysql_query($query,$conn);
	header("location:../../semester5project/adder_tasks/select_task_trans_lan.php");
}
?>