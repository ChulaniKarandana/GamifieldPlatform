<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Menu</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  
  <script type = "text/javascript" src = "js/jquery-3.2.1.js"></script>
<script>
$(document).ready(function(e){
	//variables
	var html = '</p><div><li align = "center">Question: <input type = "text" placeholder = "Enter the question" name = "question[]" id = "childquestion"/><a href = "#" id = "remove"><font color = "white"> Remove</font></a></li></div>';
	
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
			data: $("#add_q").serialize(),
			success:function(data)
			{
				alert(data);
				$("#add_q")[0].reset();
			}
		});
	});
	
	
	//populate values from the first row
});
</script>

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
@import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
body {
  color: #fdf5f5;
  background: #7579ff;
  /*background-image: url("images/bg-01.jpg");*/
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
  background: #9152f8;
  background: -webkit-linear-gradient(top, #7579ff, #b224ef);
  background: -o-linear-gradient(top, #7579ff, #b224ef);
  background: -moz-linear-gradient(top, #7579ff, #b224ef);
  background: linear-gradient(top, #7579ff, #b224ef);
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
  color: snow;
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


    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <aside class="sidebar">
  <br><br>
  <div id="leftside-navigation" class="nano">
    <ul class="nano-content">
      <li>
        <a href=""><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
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
        <a href="../login/login.html"><i class="fa fa-power-off"></i><span>Log Out</span></a>
      </li>
    </ul>
  </div>
</aside>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    <script src="js/index.js"></script>
<h1 align = "center"> Gamifield Crowdsourcing Platform</h1>


<form align = "center" method = "post" enctype = "multipart/form-data">
 <li>Question: <input type = "text" name = "ques" id = "ques" /></li>
 <input align = "center" type = "file" name = "image[]" id = "image" multiple = "multiple"/>
 <br><br>
 <input type = "submit" name = "submit" id = "submit" value = "Submit"/>
 
 </form>
 
 <?php
 mysql_connect("localhost","root","chul@P292");
 mysql_select_db("project_mat");
 if (isset($_POST["submit"])){
	 $tmpname = $_FILES['images']['tmp_name'];
	 for ($i=0;$i<count($tmpname)-1;$i++){
		 $tmp = addslashes(file_get_contents($tmpname[$i]));
		 echo $tmp;
	 }
 }
 ?>
	
</body>
</html>