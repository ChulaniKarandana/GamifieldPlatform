<!DOCTYPE html>
<?php
session_start();
include "db_mysqli.php";
?>
<html >
<head>
  <meta charset="UTF-8">
  
  <title>Completed Tasks</title>
  
  
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
	background: -webkit-linear-gradient(top, #7579ff, #b224ef);
	background: -o-linear-gradient(top, #7579ff, #b224ef);
	background: -moz-linear-gradient(top, #7579ff, #b224ef);
	background: linear-gradient(top, #7579ff, #b224ef);
	width: 1000px;
	border: 0;
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
	font-size: 15px;
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
	/*background-image: url("images/com.svg");*/
	background-size: cover;
	background : #7579ff;
	width: 200px;
	height: 200px;
	font-family: Comic Sans MS;
	border : 5px solid purple;
	
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
        <a href="../login/common_home.php"><i class="fa fa-power-off"></i><span>Log Out</span></a>
      </li>
    </ul>
  </div>
</aside>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
	<script src="js/index.js"></script>
<div class = "my">
<h1 align = "center"><font color = "blue"> Hi <?php echo $_SESSION['username'];?> , <br> View Results of Your Tasks Now!!!</font></h1>
</div>
	<form method = "post" action = "" align = "center">
		<div class="login-box animated fadeInUp">
			<fieldset>
				<?php //show tasks
				$id = $_SESSION['user_id'];
				$query_com = 'SELECT *FROM sub_task_status natural join task WHERE add_id = "'.$id.'" and status = "done"';
				$result_com = mysqli_query($conn,$query_com); //select questions of the selected task
			    $task_name = '';
				while($row_com = mysqli_fetch_array($result_com))
				{
					?>
					<div class = "article">
					<br>
					<img src = "images/com.svg" width = "50px" height = "55px">
					<br>
					<?php
					$completed_task = $row_com['task_name'];
					$completed_task_id = $row_com['task_id'];
					$completed_sub_id = $row_com['sub_id'];
					$sub_cat = $row_com['sub_category'];
					$crowd_id = $row_com['crowd_id'];
					echo'';
					echo "Task: ";
					echo $completed_task;
					echo "<br>";
					echo " sub-task category: ";
					echo $sub_cat;
					?>
					<br>
					<input type="button" value="View Results" onclick="window.location.href='show_completed_pdf.php?task=<?php echo $completed_task_id;?>&sub=<?php echo $completed_sub_id;?>&user=<?php echo $crowd_id;?>&cat=<?php echo $sub_cat;?>'"/>
					</div>
				<?php
				}
				?>
			</fieldset>
		</div>
	</form>
</body>
</html>