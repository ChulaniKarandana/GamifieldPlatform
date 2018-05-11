<?php
include 'db_mysqli.php';

$points_to_add = $_GET['total'];
$user_to_add = $_GET['user'];
$task_to_add = $_GET['task'];

$query_total_point = 'SELECT *FROM crowd_user WHERE crowd_user = "'.$user_to_add.'"  LIMIT 1';
$result_total_point = mysqli_query($conn,$query_total_point); //select questions of the selected task

while($row3 = mysqli_fetch_array($result_total_point))
{
	$total_points = $row3['points'];  	 
}
$new_total_points = $total_points + $points_to_add;
$query_update_points = 'UPDATE crowd_user SET points = "'.$new_total_points.'" WHERE crowd_user = "'.$user_to_add.'"';
mysqli_query($conn,$query_update_points);

header("location:crowd_dash.php");
?>