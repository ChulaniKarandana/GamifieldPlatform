<?php
session_start();
$output = NULL;
$task_id = $_SESSION["task"];
$sub_id = $_SESSION["sub"];

if (isset($_POST['submit'])){
	$mysqli = NEW MySQLi('localhost','root','chul@P292','gamifield');
	//inserting values in arrays into database
	$question = $_POST['question'];
	$choice1 = $_POST['choice1'];
	$choice2 = $_POST['choice2'];
	$choice3 = $_POST['choice3'];
	$choice4 = $_POST['choice4'];
	
	foreach($question as $key => $value){
		$query = "INSERT INTO mcq4(task_id,sub_id,mcq4_q,mcq4_choice1,mcq4_choice2,mcq4_choice3,mcq4_choice4,mcq4_ans) VALUES($task_id,$sub_id,'".$mysqli -> real_escape_string($value)."','".$mysqli -> real_escape_string($choice1[$key])."','".$mysqli -> real_escape_string($choice2[$key])."','".$mysqli -> real_escape_string($choice3[$key])."','".$mysqli -> real_escape_string($choice4[$key])."','')";
		
		$insert = $mysqli -> query($query);
		
		if (!$insert){
			echo $mysqli -> error;
		}
		else{
			//echo "successfully added";
		}
		
	}
	
	$mysqli -> close();
	header("location:../../semester5project/adder_tasks/select_task_mcq_4.php");
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>MCQ4</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel="stylesheet" href="css/css/css/animate.css">
  <script type = "text/javascript" src = "js/jquery-3.2.1.js"></script>
<script>
$(document).ready(function(e){ //js function for adding dynamic number of fields
	//variables
	var html = '</p><div><li><input type = "text" placeholder = "Enter the question" name = "question[]" id = "childquestion"/><br><br><input type = "text" placeholder = "Choice 1" name="choice1[]" id = "childchoice1"/><br><br><input type = "text" placeholder = "Choice 2" name="choice2[]" id = "childchoice2"/><br><br><input type = "text" placeholder = "Choice 3" name="choice3[]" id = "childchoice3"/><br><br><input type = "text" placeholder = "Choice 4" name="choice4[]" id = "childchoice4"/><a href = "#" id = "remove"><font color = "white"> Remove</font></a></li></div>';
	
	//add records to the form
	$("#add").click(function(e){
		$("#container").append(html);
	});
	
	//remove records from the form
	$("#container").on('click','#remove',function(e){
		$(this).parent('li').remove();
	});
	
	$("#submit").click(function(e){
		$.ajax({
			url: "add_to.php",
			method: "POST",
			data: $("#add_q_4").serialize(),
			success:function(data)
			{
				alert(data);
				$("#add_q_4")[0].reset();
			}
		});
	});
	
	
	//populate values from the first row
});
</script>

<style>
@import url('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
@import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
body {
  color: #fdf5f5;
  background: #7579ff;
  /*background-image: url("images/spider.jpg");*/
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
  width: 240px;
  height: 98%;
  /*background: #9152f8;
  background: -webkit-linear-gradient(top, #7579ff, #b224ef);
  background: -o-linear-gradient(top, #7579ff, #b224ef);
  background: -moz-linear-gradient(top, #7579ff, #b224ef);
  background: linear-gradient(top, #7579ff, #b224ef);*/
  background: -moz-linear-gradient(top, rgba(206,220,231,0.02) 0%, rgba(204,218,229,0.02) 2%, rgba(89,106,114,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(206,220,231,0.02) 0%,rgba(204,218,229,0.02) 2%,rgba(89,106,114,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(206,220,231,0.02) 0%,rgba(204,218,229,0.02) 2%,rgba(89,106,114,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#05cedce7', endColorstr='#596a72',GradientType=0 );
  position: absolute;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  z-index: 100;
  background: lightblue;
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
  color: darkblue;
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
    margin-left: 375px;
    background: rgb(53,106,160);
    background: -moz-linear-gradient(top, rgba(53,106,160,1) 0%, rgba(53,106,160,1) 100%);
    background: -webkit-linear-gradient(top, rgba(53,106,160,1) 0%,rgba(53,106,160,1) 100%);
    background: linear-gradient(to bottom, rgba(53,106,160,1) 0%,rgba(53,106,160,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#356aa0', endColorstr='#356aa0',GradientType=0 );
    width: 800px;
    border: 0;
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
	width: 500px;
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

</style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <aside class="sidebar">
  <br><br><br><br>
  <div id="leftside-navigation" class="nano">
    <ul class="nano-content">
      <li>
        <a href="adder_dash.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-bell-o"></i><span>Notifications</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="adder_messages.php">Messages</a>
          </li>
          <li><a href="completed_tasks.php">Completed Tasks</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="select_task_image.php"><i class="fa fa-camera"></i><span>Upload Images</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa fa-tasks"></i><span>Upload Translations</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="select_task_trans_lan.php">Translation of Languages</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="select_task_yesno.php"><i class="fa fa-question"></i><span>Upload Yes/No</span></a>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-map-marker"></i><span>Upload MCQ</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="select_task_mcq_3.php">3 Answers</a>
          </li>
          <li><a href="select_task_mcq_4.php">4 answers</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>Settings</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>

          <li><a href="adder_change_password.php">Change Password</a>
          </li>
          <li><a href="adder_configure.php">Configure Account</a>
          </li>
		  </ul>
		  </li>
      <li>
        <a href="../login/common_home.php"><i class="fa fa-power-off"></i><span>Log Out</span></a>
      </li>
    </ul>
  </div>
</aside>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
	<script src="js/index.js"></script>
<div class = "my">
	<h1 align = "center"><font color = "blue"> Gamifield Crowdsourcing Platform <br> Upload Your Multiple Choice Questions Here</font></h1>
</div>
<div class="login-box animated fadeInRight">
	<fieldset>
		<form method = "POST" name = "add_q_4">
			<div id = "container">
				<li><input type = "text" placeholder = "Enter the question" name = "question[]" id = "question"/><br><br><input type = "text" placeholder = "Choice 1" name="choice1[]" id = "choice1"/><br><br><input type = "text" placeholder = "Choice 2" name="choice2[]" id = "choice2"/><br><br><input type = "text" placeholder = "Choice 3" name="choice3[]" id = "choice3"/><br><br><input type = "text" placeholder = "Choice 4" name="choice4[]" id = "choice4"/>
				<a href = "#" id = "add"><font color = "white">More..</font></a>
				</li>
			</div><br> <br>
			<div align = "center"><input type = "submit" name = "submit" /></div>
		</form>
	<?php
		echo $output;
	 ?>
	</fieldset>
</div>
</body>
</html>