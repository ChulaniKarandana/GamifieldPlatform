<?php
include "dbCon.php";
$number = count($_POST["add"]);
if ($number >0){
	for ($i =0;$i < $number; $i++){
		if (trim($_POST["add"][$i]) != ''){
			$sql = "INSERT INTO yesno VALUES ('".mysql_real_escape_string($_POST["$add"][$i],$conn)."')";
			mysql_query($sql,$conn);
		}
	}
	echo "Data Inserted";
	
}
else{
	echo "Enter Question";
}
?>