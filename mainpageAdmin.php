<html lang="en">

<style type="text/css">
<!--

@font-face {
	font-weight: normal;
	font-style: normal;
	font-family: 'codropsicons';
	src:url('../fonts/codropsicons/codropsicons.eot');
	src:url('../fonts/codropsicons/codropsicons.eot?#iefix') format('embedded-opentype'),
		url('../fonts/codropsicons/codropsicons.woff') format('woff'),
		url('../fonts/codropsicons/codropsicons.ttf') format('truetype'),
		url('../fonts/codropsicons/codropsicons.svg#codropsicons') format('svg');
}
body {
	font-weight: 400;
	font-size: 1em;
		background-image:url("images/log1.png");

}
a {
	color: #4e4a46;
	text-decoration: none;
	outline: none;
}
a:hover, a:focus {
	color: #c94e50;
	outline: none;
}

button:focus {
	outline: none;
}

section {
	padding: 1em;
	text-align: center;
}

/* Header */
.codrops-header {
	margin: 0 auto;
	padding: 5em 3em;
	text-align: center;
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

.codrops-links {
	text-transform: uppercase;
	font-weight: 700;
	font-size: 0.69em;
	line-height: 2.2;
	padding: 1.61em 5em;
}

.codrops-links a {
	display: inline-block;
	padding: 0 1em;
	text-decoration: none;
	letter-spacing: 1px;
}

.codrops-icon:before {
	margin: 0 4px;
	text-transform: none;
	font-weight: normal;
	font-style: normal;
	font-variant: normal;
	font-family: 'codropsicons';
	line-height: 1;
	speak: none;
	-webkit-font-smoothing: antialiased;
}
.codrops-icon-drop:before {
	content: "\e001";
}
.codrops-icon-prev:before {
	content: "\e004";
}
/* Demo Buttons Style */
.codrops-demos {
	font-size: 1em;
	max-width: 1200px;
	margin: 3em auto 5em;
	padding: 2em 10em 0;

}
.codrops-demos > a {
	display: inline-block;
	margin: 0.75em;
	padding: 1.35em 1.1em;
	width: 15em;
	background: #fffce1;
	outline: none;
	text-decoration: none;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: 800;
	border-radius: 20px/50px;
}
.codrops-demos > a.current-demo {
	background: #c94e50;
	color: #fffce1;
}
/* Related demos */
.related {
	margin-top: 5em;
	padding: 0 3em 5em;
}
.related p {
	font-size: 1.5em;
	font-weight: 700;
}
.related > a {
	display: inline-block;
	text-align: center;
	margin: 20px 10px;
	padding: 25px;
	border-radius: 35px/200px;
	background: #fffce1;
	max-width: 100%;
}
.related a img {
	max-width: 100%;
	opacity: 0.8;
	border-radius: 20px/100px;
}
.related a:hover img,
.related a:active img {
	opacity: 1;
}
.related a h3 {
	margin: 0;
	padding: 0.5em 0.75em 0.3em;
	max-width: 300px;
	text-align: left;
}
body #cdawrap {
	top: auto;
	bottom: 35px;
	right: 35px;
	background: #b4bad2;
}

body {
	margin: 0; 
	height: 100%; 
	}
.demo-wave body #cdawrap {
	top: 35px;
	right: 35px;
	bottom: auto;
	
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
@media screen and (max-width: 25em) {
	.codrops-icon {
		font-size: 250%;
	}
	.codrops-icon span {
		display: none;
	}
}

-->
</style>

	<head>
		<meta charset="UTF-8" />
		<title>Main</title>
		<link rel="stylesheet" type="text/css"/>
		
	</head>
<div class="imagebox">
	<body>
	    <header class="codrops-header">
			<h1>
			<?php
			include "session.php";
			include"bdd.php";
			echo "<em>Welcome administrator ".$_SESSION['username']."</em>";
			?>
			</h1>
				<nav class="codrops-demos">
					<a href="NewUser.php">New User</a>
					<a href="FindName.php">Registration</a>
					<a href="AddNewDoctor.php">Add New Doctor</a>
					<a href="Appointment.php">Appointment</a>
					<a href="MedicalVisits.php">Medical Visits</a>
					<a href="Medication.php">Medication</a>
					<a href="Lab.php">Laboratory</a>
					<a href="Xray.php">X-Ray</a>
					<a href="Reports.php">Reports</a>
					
				</nav>
		</header>		
		
	</body>
</div>
</html>
