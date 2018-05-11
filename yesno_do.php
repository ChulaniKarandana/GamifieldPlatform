<?php
include 'db_mysqli.php';
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Yes/No</title>


  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

  <script type = "text/javascript" src = "js/jquery-3.2.1.js"></script>

  <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
@import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
body {
  color: #fdf5f5;
  background: #7579ff;
  background-image: url("../adder_tasks/images/spider.jpg");
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
  font-size: 15px;
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
input[type = text]{
	width : 600px;
	height: 30px;
	border-radius : 10px;
}
input[type = submit]{
	border-radius : 25px;
	width: 100px;
	height: 50px;
	background-color: white;
	vertical align: 500px;
}
fieldset{
	margin-left: 275px;
}
form{


}
fieldset{
	background:grey;
	width: 1000px;
}


    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <aside class="sidebar">
  <br><br>
  <div id="leftside-navigation" class="nano">
    <ul class="nano-content">
      <li>
        <a href="crowd_dash.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-bell-o"></i><span>Notifications</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>

          <li><a href="ui-alerts-notifications.html">Points</a>
          </li>
          <li><a href="ui-panels.html">Messages</a>
          </li>
          <li><a href="ui-buttons.html">Other</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-camera"></i><span>Label Images</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="image.php">Under Seperate Questions</a>
          </li>

          <li><a href="tables-data.html">Under One Question</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa fa-tasks"></i><span>Translations</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="forms-components.html">Translation of Languages</a>
          </li>
          <li><a href="forms-validation.html">Translation of Voices</a>
          </li>
          <li><a href="forms-mask.html">Translation of Codes</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="yesno_tasks.php"><i class="fa fa-question"></i><span>Yes/No</span></a>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-map-marker"></i><span>MCQ Question</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="../semester5project/adder_tasks/yesno.php">3 Answers</a>
          </li>
          <li><a href="map-vector.html">4 answers</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>Settings</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>

          <li><a href="ui-alerts-notifications.html">Change Password</a>
          </li>
          <li><a href="ui-panels.html">Configure Account</a>
          </li>
		  </ul>
		  </li>
      <li>
        <a href="../login/login.php"><i class="fa fa-power-off"></i><span>Log Out</span></a>
      </li>
    </ul>
  </div>
</aside>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    <script src="js/index.js"></script>
 <font color = "blue"><h1 align = "center">Gamifield Crowdsourcing Platform</h1>
<div>
<?php
$get_task = $_GET['sent'];
$get_sub = $_GET['sub'];
$questions = array();
function get_form_html(){
	global $question;
	global $options;
	$html = "";
	$options = array("Yes" => "yes","No" => "no");
	$html = '<h3>'.$question.'</h3>';
	echo $html;
	foreach ($options as $k=>$v){
		$html = '<span>'.$k.'<input type = "radio" id = "answer" name = "answer[]" multiple = true value = "'.$v.'" /><span>';
		echo $html;
		if (isset($_POST["answer"])){
			return $_POST["answer"];
		}
	}
}

/*?>
<?php
//session_start();
//$new_job = $_SESSION["job"];*/
$sql = mysqli_query($conn,"select *from yesno where task_id = '".$get_task."' and sub_id = '".$get_sub."'");// where jobNum = $new_job");
while($row = mysqli_fetch_array($sql)){
?>
<div align = "center">
<fieldset>
<form method = "post" >
<?php $question= $row["yesno_q"];
array_push($questions,$question);
echo get_form_html();
?>
</form>
</fieldset>
<?php
}
?>
<form method = "post">
<input type = "submit" value = "Submit" name = "submit"/>
</form>
<?php
$mysqli = NEW MySQLi('localhost','root','chul@P292','gamifield');
if (isset($_POST["submit"])){
	$selected = $_POST["answer"];
	foreach($questions as $key => $value){
		//$query = "INSERT INTO mcq3(ques,choice1,choice2,choice3) VALUES('".$mysqli -> real_escape_string($value)."','".$mysqli -> real_escape_string($choice1[$key])."','".$mysqli -> real_escape_string($choice2[$key])."','".$mysqli -> real_escape_string($choice3[$key])."')";
		$query = "update yesno set yesno_ans = '".$mysqli -> real_escape_string($selected[$key])."'";
	}
	mysqli_query($conn,$query);
}
?>
</div>
</font>
</body>
</html>