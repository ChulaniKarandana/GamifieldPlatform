<?php
session_start();
include 'db_mysqli.php';   //connecting database

if ((isset($_POST['task'])) && (isset($_POST['points']))){
	$var_task = $_POST['task'];
	$var_points = $_POST['points'];
	$query_sub = 'SELECT * FROM task WHERE task_id = "'.$var_task.'"';  //selecting task from database
	$result_sub = mysqli_query($conn,$query_sub);

	 while($row1 = mysqli_fetch_array($result_sub))
	 {
		 $rem = $row1['task_rem'];    //calculating new values
		 $tot = $row1['task_total'];
		 $up = $rem - 1;
		 $sub = $tot - $up;
		 $state = "no";
		 $sub_cat = "mcq4";
		 echo $up;
		 if ($up >= 0){
			$query_up = 'UPDATE task SET task_rem = "'.$up.'" WHERE task_id = "'.$var_task.'" '; //update task with new values
			mysqli_query($conn,$query_up);
			$query_sub_task = "INSERT INTO sub_task_status(task_id,sub_id,status,sub_date,sub_time,sub_points,sub_category,sub_notify,crowd_id) VALUES('$var_task','$sub','$state','0000-00-0','00:00:00.000000','$var_points','$sub_cat','no','0')";
			mysqli_query($conn,$query_sub_task);
			$_SESSION["task"] = $var_task;
			$_SESSION["sub"] = $sub;
			//add points
			session_write_close();
			header("location:../../semester5project/adder_tasks/mcq_4.php");  //navigation for adding 4 choice mcqs
			exit;
		 }
		 else{
			 echo '<script>alert("Allocated number of tasks has been exceeded. Please create a new task and retry")
			 window.history.go(-1)</script>';
		 }
	 }
}
?>