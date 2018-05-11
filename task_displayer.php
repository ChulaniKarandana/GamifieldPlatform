<!DOCTYPE html>
<?php
session_start();
include "db_mysqli.php";
?>
<html >
<head>
  <meta charset="UTF-8">
  
  <title>Task Displayer</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel="stylesheet" href="css/css/css/animate.css">
  
  <script type = "text/javascript" src = "js/jquery-3.2.1.js"></script>
  
<style>
@import url('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
@import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
body {
  color: #fdf5f5;
  background: #7579ff;
  /*background-image: url("images/spider.jpg");*/
  /*background-image: url(http://ginva.com/wp-content/uploads/2012/07/city-skyline-wallpapers-008.jpg);*/
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
	height: 100px;
	
	border: 1px;
	cursor: pointer;
	border-radius: 5px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 20px;
	font-weight: 800;
	padding: 6px;
	margin-top: 10px;
	background: lightblue;
}
fieldset{
	margin-left: 275px;
	background: #293949;
	width: 900px;
	border-radius: 15px;
}
input[type=number]{
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

textarea{
	width: 450px;
	height: 60px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

textarea:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}
.my{
	background: lightblue;
	font-family: Monospace;
	font-size: 10px;
}
input[type=button]{
	width: 100px;
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

input[type=button]:hover{
	opacity: 0.8;
}

input[type=button]:active{
	opacity: 0.6;
}
.article{
	float:left;
	margin-left: 30px;
	background-image: url("images/back.jpg");
	background-size: cover;
	width: 235px;
	height: 130px;
	font-family: Comic Sans MS;
	
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
          <li><a href="adder_msgs.php">Messages</a>
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
          <li><a href="select_task_trans_voice.php">Translation of Voices</a>
          </li>
          <li><a href="select_task_trans_code.php">Translation of Codes</a>
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
          <li><a href="">Configure Account</a>
          </li>
		  </ul>
		  </li>
      <li>
        <a href="../login/adder_login.php"><i class="fa fa-power-off"></i><span>Log Out</span></a>
      </li>
    </ul>
  </div>
</aside>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
	<script src="js/index.js"></script>
<div class="my">
<h1 align = "center"><font color = "blue"> Gamifield Crowdsourcing Platform - Completed Tasks</font></h1>
</div>
	<form method = "post" action = "" align = "center">
		<div class="login-box animated fadeInUp">
			<fieldset>
				<?php 
				//show task
				$task = $_GET['task'];
				$sub_id = $_GET['sub'];
				$crowd_id = $_GET['user'];
				$sub_cat = $_GET['cat'];
				
				$query_user = 'SELECT *FROM crowd_user WHERE crowd_id = "'.$crowd_id.'"';
				$result_user = mysqli_query($conn,$query_user); //select questions of the selected task
				
				while($row_user = mysqli_fetch_array($result_user))
				{
				$user_name = $row_user['crowd_user'];
				$user_first_name = $row_user['crowd_first'];
				$user_last_name = $row_user['crowd_last'];
				$user_address = $row_user['address'];
				$user_email = $row_user['crowd_mail'];
				$user_country = $row_user['crowd_country'];

				echo "This task has been done by,";
				echo "<br>";
				echo $user_first_name; echo " ";
				echo $user_last_name; echo "<br>";
				echo $user_address; echo "<br>";
				echo $user_email; echo "<br>";
				echo $user_country; echo "<br><br><br>";
				
				}
				
				if ($sub_cat == 'yesno'){
					$query_yesno = 'SELECT *FROM yesno WHERE task_id = "'.$task.'" and sub_id = "'.$sub_id.'"';
					$result_yesno = mysqli_query($conn,$query_yesno); //select questions of the selected task
				
					while($row_yesno = mysqli_fetch_array($result_yesno))
					{
						$yesno_question = $row_yesno['yesno_q'];
						$yesno_answer = $row_yesno['yesno_ans'];
						echo $yesno_question;
						echo $yesno_answer;
						echo "<br>";
					}
				}
				else if ($sub_cat == 'mcq3'){
					$query_mcq3 = 'SELECT *FROM mcq3 WHERE task_id = "'.$task.'" and sub_id = "'.$sub_id.'"';
					$result_mcq3 = mysqli_query($conn,$query_mcq3); //select questions of the selected task
				
					while($row_mcq3 = mysqli_fetch_array($result_mcq3))
					{
						$mcq3_question = $row_mcq3['mcq3_q'];
						$mcq3_answer = $row_mcq3['mcq3_ans'];
						echo $mcq3_question;
						echo $mcq3_answer;
						echo "<br>";
					}
				}
				else if ($sub_cat == 'mcq4'){
					$query_mcq4 = 'SELECT *FROM mcq4 WHERE task_id = "'.$task.'" and sub_id = "'.$sub_id.'"';
					$result_mcq4 = mysqli_query($conn,$query_mcq4); //select questions of the selected task
				
					while($row_mcq4 = mysqli_fetch_array($result_mcq4))
					{
						$mcq4_question = $row_mcq4['mcq4_q'];
						$mcq4_answer = $row_mcq4['mcq4_ans'];
						echo $mcq4_question;
						echo $mcq4_answer;
						echo "<br>";
					}
				}
				else if ($sub_cat == 'image'){
					$query_image = 'SELECT *FROM image WHERE task_id = "'.$task.'" and sub_id = "'.$sub_id.'"';
					$result_image = mysqli_query($conn,$query_image); //select questions of the selected task
				
					while($row_image = mysqli_fetch_array($result_image))
					{
						$image_question = $row_image['image_q'];
						$image_answer = $row_image['image_ans'];
						$photo = $row_image['photo'];
						echo '<img src="data:image/jpeg;base64,'.base64_encode($photo).'" width = "250" height = "150"/>';
						echo "<br>";
						echo $image_question;
						echo "<br>";
						echo $image_answer;
						echo "<br>";
					}
				}
                else if ($sub_cat == 'translation'){
                    $query_trans = 'SELECT *FROM trans_lan WHERE task_id = "'.$task.'" and sub_id = "'.$sub_id.'"';
                    $result_trans = mysqli_query($conn,$query_trans); //select questions of the selected task

                    while($row_trans = mysqli_fetch_array($result_trans))
                    {
                        $text_question = $row_trans['text'];
                        $trans_answer = $row_trans['lan_ans'];
                        echo $text_question;
                        echo "<br>";
                        echo $trans_answer;
                        echo "<br>";
                    }
                }
				?>
			</fieldset>
		</div>
	</form>
</body>
</html>