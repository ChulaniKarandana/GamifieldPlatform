<!DOCTYPE html>
<?php
session_start();
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Play Yes/No</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel="stylesheet" href="css/css/css/animate.css">
  
  <script type = "text/javascript" src = "js/jquery-3.2.1.js"></script>
  
<style>
@import url('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
@import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
body {
  color: #fdf5f5;
  background: #7579ff;
  /*background-image: url("images/spider_c.jpg");*/
  background-size: cover;
  font-family: 'Open Sans', sans-serif;
  padding: 0;
  margin: 0;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased; 
}
.sidebar-toggle {
  margin-left: -240px;
}
.sidebar {
  width: 400px;
  height: 50%;
  
  position: absolute;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  z-index: 100;
}
.sidebar #leftside-navigation ul,
.sidebar #leftside-navigation ul ul {
  margin: -2px 0 0;
  padding: 0;
}
.sidebar #leftside-navigation ul li {
  list-style-type: none;
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}
.sidebar #leftside-navigation ul li.active > a {
  color: chocolate;
}
.sidebar #leftside-navigation ul li.active ul {
  display: block;
}
.sidebar #leftside-navigation ul li a {
  color: blue;
  text-decoration: none;
  display: block;
  padding: 18px 0 18px 25px;
  font-size: 17px;
  font-weight: bold;
  outline: 0;
  -webkit-transition: all 200ms ease-in;
  -moz-transition: all 200ms ease-in;
  -o-transition: all 200ms ease-in;
  -ms-transition: all 200ms ease-in;
  transition: all 200ms ease-in;
}
.sidebar #leftside-navigation ul li a:hover {
  color: #1abc9c;
}
.sidebar #leftside-navigation ul li a span {
  display: inline-block;
}
.sidebar #leftside-navigation ul li a i {
  width: 20px;
}
.sidebar #leftside-navigation ul li a i .fa-angle-left,
.sidebar #leftside-navigation ul li a i .fa-angle-right {
  padding-top: 3px;
}
.sidebar #leftside-navigation ul ul {
  display: none;
}
.sidebar #leftside-navigation ul ul li {
  background: #23313f;
  margin-bottom: 0;
  margin-left: 0;
  margin-right: 0;
  border-bottom: none;
}
.sidebar #leftside-navigation ul ul li a {
  font-size: 12px;
  padding-top: 13px;
  padding-bottom: 13px;
  color: snow;
}

input[type=submit]{
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

input[type=submit]:hover{
	opacity: 0.8;
}

input[type=submit]:active{
	opacity: 0.6;
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
.login input[type=button]{
	width: 260px;
	height: 35px;
	
	border: 1px solid ;
	cursor: pointer;
	border-radius: 5px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 20px;
	font-weight: 800;
	padding: 6px;
	margin-top: 10px;
}
fieldset{
	vertical-align: 300px;
	margin-left: 600px;
    background: -webkit-linear-gradient(top, #7579ff, #b224ef);
    background: -o-linear-gradient(top, #7579ff, #b224ef);
    background: -moz-linear-gradient(top, #7579ff, #b224ef);
    background: linear-gradient(top, #7579ff, #b224ef);
	border: 0;
	width: 500px;
}

input[type=number]{
	width: 250px;
	height: 20px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

input[type=number]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

input[type=text]{
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

input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

textarea,select{
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

textarea,select:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}
option{
	background: black;
}
.my{
	background: lightblue;
	font-family: Monospace;
	font-size: 15px;
}

form{
	color: #fdf5f5;
   
}
.article{
	float:left;
	margin-left: 30px;
	height: 250px;
	font-family: Comic Sans MS;	
}


</style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <aside class="sidebar">
  <br><br>
  <img src = "images/logo.gif" width = "540px" height = "600px">
</aside>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
	<script src="js/index.js"></script>

<div class = "my">
	<font color="blue">
	<h1 align = "center"> Gamifield Yes No Generator</h1>
	</font>
</div>
<form method = "post" action = "do_yesno_store.php" align = "center">
	<div class="login">
		<div class = "login-box animated fadeInLeft">
		<br><br><br><br><br><br>
		<fieldset>
			<div class="article">
			<label>
			<?php
				include "db_mysqli.php";
				$task = $_GET["sent"];     //get selected task
				$subtask = $_GET["sub"];
				$_SESSION['task'] = $task;
				$_SESSION['sub'] = $subtask;
				$crowd = $_SESSION['username'];
				$crowd_id = $_SESSION['user_id'];
				
				$default = '';
				$question = '';
				$query_q = 'SELECT *FROM yesno WHERE task_id = "'.$task.'" and sub_id = "'.$subtask.'" and yesno_ans = "'.$default.'" LIMIT 1';
				$result_q = mysqli_query($conn,$query_q); //select questions of the selected task

				 while($row1 = mysqli_fetch_array($result_q))
				 {
					 $question = $row1['yesno_q'];  
					 $id =$row1['yesno_id'];
					 $choice1 = "Yes";
					 $choice2 = "No";	 
				 }
				 if ($question == ''){
					echo "Successfully Completed The Task. Thank You!";
					$query_done = 'UPDATE sub_task_status SET status = "done",crowd_id = "'.$crowd_id.'" WHERE task_id = "'.$task.'" and sub_id = "'.$subtask.'"';
					mysqli_query($conn,$query_done);
					$query_point = 'SELECT *FROM sub_task_status WHERE task_id = "'.$task.'" and sub_id = "'.$subtask.'" LIMIT 1';
					$result_point = mysqli_query($conn,$query_point); //select questions of the selected task

					 while($row2 = mysqli_fetch_array($result_point))
					 {
						 $points = $row2['sub_points'];  
							 
					 }
					?><br><br>
					<div class = "login-box animated tada">
						<font size = "40px"><?php echo $points; ?></font>
					</div>
					
					<br><br>
					<input type = "button" value = "Finish" name = "Finish" onclick="window.location.href='dash_navigator_finish.php?total=<?php echo $points;?>&user=<?php echo $crowd;?>&task=<?php echo $task;?>'"/>
					<?php
					}
				 else{
					 echo '<br><br>';
					 echo $question;
					 $_SESSION['id'] = $id;
			?></label><br><br>
			<input type = "radio" name = "choice" value = <?php echo $choice1; ?>><?php echo $choice1; ?>
			<input type = "radio" name = "choice" value = <?php echo $choice2; ?>><?php echo $choice2;?>
			<br><br><br>
			<input type = "submit" value = "Next" name = "Next"/>
			<?php
			}
			?>
			</div>
		</fieldset>
		</div>
	</div>
</form>
</body>
</html>