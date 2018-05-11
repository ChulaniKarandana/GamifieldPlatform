<?php 
$serverName = "localhost";
$username="root";
$password="chul@P292";
$conn = mysql_connect($serverName,$username,$password) or die($conn_error);      //establishing connection
@mysql_select_db('gamifield') or die($conn_error);                               //selecting database
 ?>
 