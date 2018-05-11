<?php
include "db_mysqli.php";
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Task Pool</title>
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
	margin-left: 200px;
	background: -webkit-linear-gradient(top, #7579ff, #b224ef);
	background: -o-linear-gradient(top, #7579ff, #b224ef);
	background: -moz-linear-gradient(top, #7579ff, #b224ef);
	background: linear-gradient(top, #7579ff, #b224ef);
	border: 0;
	width:800px;
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
  background: #7579ff;
   
}
.article{
	float:left;
	margin-left: 30px;
	background-image: url("images/im_task.png");
	background-size: cover;
	width: 235px;
	height: 250px;
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
        <a href="crowd_dash.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-bell-o"></i><span>Notifications</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>

          <li><a href="display_points.php">Points</a>
          </li>
          <li><a href="crowd_rank.php">Rank</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="image_tasks.php"><i class="fa fa-camera"></i><span>Label Images</span><i class="arrow fa fa-angle-right pull-right"></i></a>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa fa-tasks"></i><span>Translations</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="trans_lan_tasks.php">Translation of Languages</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="yesno_tasks.php"><i class="fa fa-question"></i><span>Yes/No</span></a>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-map-marker"></i><span>MCQ</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="mcq3_tasks.php">3 Answers</a>
          </li>
          <li><a href="mcq4_tasks.php"">4 answers</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>Settings</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>

          <li><a href="crowd_change_password.php">Change Password</a>
          </li>
          <li><a href="crowd_configure.php">Configure Account</a>
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
<font color = "blue">
<div class = "my">
	<h1 align = "center"> Gamifield Crowdsourcing Platform <br> Select Your Preferred Task</h1>
</div>
<div align = "center" width = "700px">
	<fieldset>
		<?php    //select available tasks
		$sql = mysqli_query($conn,"select distinct task_id,task_name,sub_id,company,task_desc from mcq3 natural join task where mcq3_ans = ''"); 
		while($row = mysqli_fetch_array($sql)){
		?>
		<p>
			<div class = "login-box animated fadeInLeft">
				<div class = "article">
				<h2>
				<?php
					echo '<br>';
					echo $row["task_name"];    //displaying task information
					$taskID = $row["task_id"];
					$subID = $row["sub_id"];
					echo $row["sub_id"];
				?></h2>
				<p> <?php echo "Company : ";echo $row["company"]; echo '<br>'; echo $row["task_desc"];?></p>
				<a href="do_mcq3.php?sent=<?php echo $taskID;?>&sub=<?php echo $subID;?>">Select the Task</a> 
				</div>
			</div>
		</p>
		<?php
		}
		?>
	</fieldset>
	</div>
</font>
</body>
</html>