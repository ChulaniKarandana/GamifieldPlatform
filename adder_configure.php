<!DOCTYPE html>
<?php
session_start();
include "dbCon.php";
?>
<html >
<head>
    <meta charset="UTF-8">

    <title>Configure Account</title>


    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel="stylesheet" href="css/css/css/animate.css">

    <script type = "text/javascript" src = "js/jquery-3.2.1.js"></script>

    <style>
        @import url('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
        @import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
        body {
            color: #fdf5f5;
            background: #7579ff;
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
            background: lightblue;
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
            margin-left: 475px;
            /*background: #293949;*/
            background: -webkit-linear-gradient(top, #7579ff, #b224ef);
            background: -o-linear-gradient(top, #7579ff, #b224ef);
            background: -moz-linear-gradient(top, #7579ff, #b224ef);
            background: linear-gradient(top, #7579ff, #b224ef);
            width: 500px;
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
            float: right;
            margin-right: 50px;
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
<div class="my">
    <h1 align = "center"><font color = "blue" size = "15px"> Gamifield Account Configuration</font></h1>
</div>
<form method = "post" action = "adder_configure.php" align = "center">
    <div class="login">
    </div><br>
    <div class="login-box animated fadeInUp">
        <fieldset>
            <?php
            $user = $_SESSION['user_id'];
            $query_con = "SELECT * FROM adder_user WHERE add_id = '".$user."'";
            $result_con = mysql_query($query_con,$conn);

            while ($row = mysql_fetch_array($result_con)){
                $first_n = $row['add_first'];
                $last_n = $row['add_last'];
                $country = $row['add_country'];
                $mail = $row['add_mail'];
                $tel = $row['add_tel'];
            }

            ?>
            <img src = "images/config.gif" width = "150px" height = "150px"><br><br>
            First Name: <input type = "text" name = "first_name" value = "<?=$first_n?>"/><br><br>
            Last Name: <input type = "text" name = "last_name" value = "<?php echo $last_n;?>"/><br><br>
            Country: <input type = "text" name = "country" value = "<?php echo $country;?>"/><br><br>
            Email: <input type = "text" name = "email" value = "<?php echo $mail; ?>"/><br><br>
            Telephone Number:<input type = "text" name = "tp" value = "<?php echo $tel ?>"/><br><br>
            <input type="submit" value="Save Changes"/>
        </fieldset>
    </div>
</form>
</body>
</html>
<?php
if ((isset($_POST["first_name"])) && (isset($_POST["last_name"])) && (isset($_POST["country"])) && (isset($_POST["email"])) && (isset($_POST["tp"]))){
    include 'dbCon.php';                        //connecting database
    if (!get_magic_quotes_gpc()){
        $new_firstname = addslashes($_POST["first_name"]);
        $new_lastname = addslashes($_POST["last_name"]);
        $new_country = addslashes($_POST["country"]);
        $new_email = addslashes($_POST["email"]);
        $new_tp = addslashes($_POST["tp"]);

    }
    else{
        $new_firstname = $_POST["first_name"];
        $new_lastname = $_POST["last_name"];
        $new_country = $_POST["country"];
        $new_email = $_POST["email"];
        $new_tp = $_POST["tp"];

    }
    //inserting values into the database
    $query = "UPDATE adder_user SET add_first = '".$new_firstname."',add_last = '".$new_lastname."',add_country = '".$new_country."',add_mail = '".$new_email."',add_tel = '".$new_tp."' WHERE add_id = '".$user."'";
    mysql_query($query,$conn);
}
?>