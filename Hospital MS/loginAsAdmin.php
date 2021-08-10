<style type="text/css">
<!--
.imagebox{width:100%;
height:100%;
background-image:url("images\log.jpg");
background-repeat:no-repeat;
background-position: 50% 50% ;
}

INPUT {
background-color: white;
color: black;
font-family: cooper black;
font-size: 16 pt
}
-->
</style>

	<meta charset="UTF-8">
	<title>Log In</title>
	<style type="text/css">
	<!--
	* {
	box-sizing: border-box;
}
body {
	font-family: poppins;
	font-size: 16px;
	color: #fff;
}
.form-box {
	background-color: rgba(0, 0, 0, 0.5);
	margin: auto auto;
	padding: 40px;
	border-radius: 5px;
	box-shadow: 0 0 10px #000;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	width: 500px;
	height: 430px;
}
.form-box:before {
	background-image:url("images/log1.png");
	background-size: cover;
	content: "";
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -1;
	display: block;
}
.form-box .header-text {
	font-size: 50px;
	font-color: grey;
	font-weight: 600;
	padding-bottom: 30px;
	text-align: center;
}
.form-box input {
	margin: 10px 0px;
	border: none;
	padding: 10px;
	border-radius: 5px;
	width: 100%;
	font-size: 18px;
	font-family: poppins;
}
.form-box input[type=checkbox] {
	display: none;
}
.form-box label {
	position: relative;
	margin-left: 5px;
	margin-right: 10px;
	top: 5px;
	display: inline-block;
	width: 20px;
	height: 20px;
	cursor: pointer;
}
.form-box label:before {
	content: "";
	display: inline-block;
	width: 20px;
	height: 20px;
	border-radius: 5px;
	position: absolute;
	left: 0;
	bottom: 1px;
	background-color: #ddd;
}
.form-box input[type=checkbox]:checked+label:before {
	content: "\2713";
	font-size: 20px;
	color: #000;
	text-align: center;
	line-height: 20px;
}
.form-box span {
	font-size: 14px;
}
.form-box button {
	background-color: deepskyblue;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	width: 100%;
	font-size: 18px;
	padding: 10px;
	margin: 20px 0px;
}
span a {
	color: #BBB;
}

a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    background-color: #6fc6a5;
}

.codrops-header {
	margin: 0 auto;
	padding: 5em 3em;
	text-align: center;
}

@media screen and (max-width: 40em) {
	body {
		font-size: 80%;
	}
	.codrops-header h1 {
		font-size: 2.5em;
	}
	.codrops-demos {
		max-width: 900px;
		padding: 2em 2em 0;
	}
	.related > a {
		margin: 20px 0;
	}
}

.codrops-header h1 {
	margin: 0 auto;
	font-weight: 800;
	font-size: 3.75em;
	line-height: 1;
}

.codrops-header h1 span {
	display: block;
	font-size: 50%;
	font-weight: 400;
	padding-top: 0.325em;
}
	
	-->
	</style>
</head>


<div class="imagebox">

<form  method="post" name="form1">
<body>
            <h1>
			<center><i>Welcome Administrator</i></center>
			
			</h1>
	<div class="form-box">
		<div class="header-text">
			Login
		</div><input placeholder="Enter Username" name='username' type="text"> 
		<input placeholder="Enter Password" name='password' type="password"> 
		<input type="submit" name ="ok" value="LOG IN" class="button"/>
		<span>Don't have an account?<a href="NewUser.php">Click here</a></span> 
	</div>


<?php
error_reporting(0);
include "session.php";
include"bdd.php";





 $seldb = mysql_select_db("epiz_28933642_hospitalsystem");
  if ($seldb==false) {
    echo "La base de donnees n'existe pas";
    exit ;  }
	  
if(isset($_POST["ok"])){
	
$u=$_POST["username"];
$p=$_POST["password"];
$password=md5($p);
  $sql = "select username,password,usertypeid from  user where user.username='".$u."' and user.password='".$p."' and user.usertypeid='1';";
  echo"$sql";
  $res = mysql_query($sql,$link);
  
  
  
if (mysql_num_rows($res)==0)
echo"<script>alert(\" ATTENTION:MAKE SHURE USERNAME AND PASSWORD ARE CORRECT\")</script>";
 else
       {
       $_SESSION["username"] = $u;
       $_SESSION["password"] = $p;
        header("Location:mainpageAdmin.php"); }
		
}
  
?>
</form> 
</body>


</html>
