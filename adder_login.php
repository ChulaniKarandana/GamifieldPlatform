<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Gamifield Login Form</title>

<style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;
	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url("images/crowdsourcing.jpg");
	/*background-image: url(http://ginva.com/wp-content/uploads/2012/07/city-skyline-wallpapers-008.jpg);*/
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.8;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(35% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 400;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>

    <script src="js/prefixfree.min.js"></script>

</head>

<body>

  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Gamifield<span>Crowdsourcing</span></div>
		</div>
			<br>
		<form method = "post" action = "adder_login.php">
			<div class="login">
				<input type="text" placeholder="username" name="username"><br>
				<input type="password" placeholder="password" name="pass"><br>
				<input type="submit" value="Login">
			</div>
		</form>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>

<?php
session_start();
ob_start();
if ((isset($_POST["username"])) && (isset($_POST["pass"]))){
	include 'dbCon.php';                               //connecting database
	if (!get_magic_quotes_gpc()){	
		$new_username = addslashes($_POST["username"]);   //assigning php variables for html form inputs
        $new_password1 = addslashes($_POST["pass"]);
	}
	else{
		$new_username = $_POST["username"];
        $new_password1 = $_POST["pass"];
	}
	$new_password = md5($new_password1);
	$_SESSION['user']=$new_username;
	$query="SELECT * FROM adder_user WHERE add_user='".$new_username."'";    //query database searching for username
	if ($is_query_run=mysql_query($query,$conn)){
		while($row=mysql_fetch_array($is_query_run,MYSQL_ASSOC)){
			if ($new_password == $row['add_pass']){
				$_SESSION['type'] = "adder";                 //assigning sessions to be remembered in next web pages
				$_SESSION['username'] = $new_username;
				$_SESSION['user_id'] = $row['add_id'];
				$_SESSION['user_company'] = $row['company'];
				header("location: ../adder_tasks/adder_dash.php");  //navigate to next page
			}
			else{ 
				echo "Error user";
			}
		}
	}
}
?>