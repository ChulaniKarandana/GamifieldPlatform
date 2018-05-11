<?php
include "db_mysqli.php";
$task = $_GET['task'];
$sub_task = $_GET['sub'];

$query_mark = 'UPDATE sub_task_status SET sub_notify = "yes" WHERE task_id = "'.$task.'" and sub_id = "'.$sub_task.'"';
mysqli_query($conn,$query_mark);

header("location:adder_msgs.php");
?>