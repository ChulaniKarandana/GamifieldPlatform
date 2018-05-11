<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Gamifield SignUp Form - Adder</title>

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
	top: calc(30% - 75px);
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
    margin-left: 15px;
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
    margin-left: 15px;
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
    margin-left: 15px;
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
		<form method = "post" action = "sign.php" align = "center">
			<div class="login">
				<input type="text" placeholder="username" name="user_name"><br><br>
				<input type="text" placeholder="first name" name="first_name"><br><br>
				<input type="text" placeholder="last name" name="last_name"><br><br>
				<input type="text" placeholder="company name" name="company"><br><br>
				<input type="text" placeholder="country" name="country"><br><br>
				<input type="text" placeholder="email" name="email"><br><br>
				<input type="text" placeholder="telephone number" name="tp"><br>
				<input type="password" placeholder="password" name="pass1"><br>
				<input type="password" placeholder="confirm password" name="pass2"><br>
				<input type="submit" value="Sign Up">
			</div>
		</form>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>

<?php
session_start();
ob_start();
if ((isset($_POST["user_name"])) && (isset($_POST["first_name"])) && (isset($_POST["last_name"])) && (isset($_POST["company"])) && (isset($_POST["country"])) && (isset($_POST["email"])) && (isset($_POST["tp"])) && (isset($_POST["pass1"])) && (isset($_POST["pass2"]))){
	include 'dbCon.php';                                       //adding the database connection

    $new_username = $_POST['user_name'];
    $new_firstname = '';
    $new_lastname = '';
    $new_company = $_POST['company'];
    $new_country = '';
    $new_email = '';
    $new_tp = '';
    $new_password1 = $_POST['pass1'];
    $new_password2 = $_POST['pass2'];

    if (preg_match("/^([a-zA-Z' ]+)$/", $_POST['first_name'])) {
        $new_firstname = $_POST['first_name'];
    } else {
        echo '<script>alert("Wrong First Name")</script>';
        echo "<script> window.history.go(-1)</script>";
    }

    if (preg_match("/^([a-zA-Z' ]+)$/", $_POST['last_name'])) {
        $new_firstname = $_POST['last_name'];
    } else {
        echo '<script>alert("Wrong Last Name")</script>';
        echo "<script> window.history.go(-1)</script>";
    }

// set API Access Key
    $access_key = 'c6494c5afadfc67b07eab4b556c15ec2';

// set phone number
    $phone_number = $_POST["tp"];

// Initialize CURL:
    $ch = curl_init('http://apilayer.net/api/validate?access_key=' . $access_key . '&number=' . $phone_number . '');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
    $json = curl_exec($ch);
    curl_close($ch);

// Decode JSON response:
    $validationResult = json_decode($json, true);

// Access and use your preferred validation result objects
    $validationResult['valid'];
    $validationResult['country_name'];

    if ($validationResult['valid'] == true) {
        $new_tp = $_POST['tp'];
        $new_country = $validationResult['country_name'];   //taking the country name
    } else {
        echo '<script>alert("Wrong Telephone Number")</script>';
        echo "<script> window.history.go(-1)</script>";
    }

    $email = $_POST['email'];
    $request = file_get_contents("http://emailapi.com/api/ab18d0b0/$email");
    $result = json_decode($request, true);
    if ($result['data']['status'] == "1") {
        $new_email = $_POST['email'];
    } else {
        echo '<script>alert("Incorrect Email")</script>';
        echo "<script> window.history.go(-1)</script>";
    }

	if ($new_password1 == $new_password2){         //validate confirming password
	    $_SESSION['username'] = $new_username;
		$new_password = md5($new_password1);       //encrypting password
		$query = "INSERT INTO adder_user(add_user,add_first,add_last,company,add_country,add_mail,add_tel,add_pass,add_grade) values('$new_username','$new_firstname','$new_lastname','$new_company','$new_country','$new_email','$new_tp','$new_password',1)"; //insert values into database
		if (mysql_query($query,$conn)){
			header("location: ../adder_tasks/adder_dash.php");  //navigate to next page
		}
		else{
            echo '<script>alert("Incorrect Entries")</script>';
            echo "<script> window.history.go(-1)</script>";
		}
	}
	else{
		echo "Please confirm the correct password";
	}
}
?>