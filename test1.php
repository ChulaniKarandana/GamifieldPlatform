<?php
$connect = mysqli_connect('localhost','root','chul@P292','project_mat');
if (isset($_POST["insert"])){
	$file = addslashes(file_get_contents($_FILES["audio_file"]["name"]));
	$question = addslashes($_POST["ques"]);
	$query = "INSERT INTO voice(voice) VALUES('$file')";
	if (mysqli_query($connect,$query)){
		echo '<script>alert("Audio Inserted Into Database")</script>';
	}
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Menu</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  
  <script type = "text/javascript" src = "js/jquery-3.2.1.js"></script>
<script>

</script>

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
@import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
body {
  color: #fdf5f5;
  background: #7579ff;
  background-image: url("images/spider.jpg");
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
}
fieldset{
	background:grey;
	margin-left: 300px;
	width: 900px;
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
        <a href="adder_dash.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
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
        <a href="javascript:void(0);"><i class="fa fa-camera"></i><span>Upload Images</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="image.php">Under Seperate Questions</a>
          </li>

          <li><a href="tables-data.html">Under One Question</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa fa-tasks"></i><span>Upload Translations</span><i class="arrow fa fa-angle-right pull-right"></i></a>
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
        <a href="yesno.php"><i class="fa fa-question"></i><span>Upload Yes/No</span></a>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-map-marker"></i><span>Upload MCQ Question</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="../adder_tasks/mcq_3.php">3 Answers</a>
          </li>
          <li><a href="../adder_tasks/mcq_4.php">4 answers</a>
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
<h1 align = "center"><font color = "blue">Gamifield Crowdsourcing Platform</font></h1>
<br> <br>
<fieldset>
 <form align = "center" method = "post" enctype = "multipart/form-data">
 <li>Question: <input type = "text" name = "ques" id = "ques" /></li>
 <input align = "center" type = "file" name = "audio" id = "audio" />
 <br><br>
 <input type = "submit" name = "insert" id = "insert" value = "Insert"/>
 

 <table align = "center">
 <tr >
 <th width = 300px>Uploaded Audios For This Task</th><th width = 300px>Question</th>
 </tr>
 
 <?php
/*$query = "SELECT * FROM voice ORDER BY id DESC";
 $result = mysqli_query($connect,$query);
 while($row = mysqli_fetch_array($result))
 {
	 echo '
		<tr >
		<td > 
		<img src="data:image/jpeg;base64,'.base64_encode($row['photo']).'" width = "300" height = "200"/>
		</td>
		<td>'.$row['question'].'</td>
		</tr>
	 
	 ';
 }*/
 ?>
  </form>
  </fieldset>
</body>
</html>
 <script>
 $(document).ready(function(){
	 $('#insert').click(function(){
		 var audio_name = $('#audio').val();
		 if (audio_name == ''){
			 alert("Please Select Audio");
			 return false;
		 }
		 else{
			 var extension = $('#audio').val().split('.').pop().toLowerCase();
			 if (jQuery.inArray(extension, ['mp3']) == -1){
				 alert('Invalid Audio File');
				 $('#audio').val('');
				 return false;
			 }
		 }
	 });
 });
 </script>