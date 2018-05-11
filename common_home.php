<!DOCTYPE html>
<html>
<head>
<!--This is the home page for both users-->
  <meta charset="UTF-8">

  <title>Gamifield Home Page</title>

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
	left: calc(25% - 255px);
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
	top: calc(35% - 75px);
	left: calc(40% - 50px);
	height: 150px;
	width: 700px;
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

.login input[type=button]{
	width: 200px;
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
    margin-left: 20px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
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

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
.article{
    float:left;
    margin-left: 30px;
    align-content: center;
    background-size: cover;
    width: 250px;
    height: 300px;
    font-family: Comic Sans MS;
    font-size: 15px;
    border : 5px solid purple;
    background: -moz-linear-gradient(top, rgba(206,220,231,0.02) 0%, rgba(204,218,229,0.02) 2%, rgba(89,106,114,1) 100%); /* FF3.6-15 */background: -webkit-linear-gradient(top, rgba(206,220,231,0.02) 0%,rgba(204,218,229,0.02) 2%,rgba(89,106,114,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgba(206,220,231,0.02) 0%,rgba(204,218,229,0.02) 2%,rgba(89,106,114,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#05cedce7', endColorstr='#596a72',GradientType=0 );

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
			<form method = "post" action = "" align = "center">
				<div class="login">
                    <div class="article">
                        <img src = "images/user.png" width = "100px" height = "100px"><br>
                        <p>Already registered to Gamifield Crowd? <br>Log In Now to new experiences..</p>
					    <input type="button" value="Crowd Login " onclick="window.location.href='crowd_login.php'">
                        <input type="button" value="Sign Up To Crowd" onclick="window.location.href='sign_crowd.php'">
                    </div>
                    <div class="article">
                        <img src = "images/user.png" width = "100px" height = "100px"><br>
                        <p>Registered as a Task-Adder? <br>Add your task now and get results fast..</p>
					    <input type="button" value="  TaskAdder Login" onclick="window.location.href='adder_login.php'">
                        <input type="button" value="Sign Up As A TaskAdder" onclick="window.location.href='sign.php'">
                    </div>
				</div>
			</form>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>