<?
	session_start();
	include "loadprofile.php";
	$email = isset($_SESSION['email']) ? : "";
	$fullname = isset($_SESSION['fullname']) ? : "";
	$dob = isset($_SESSION['dob']) ? : "";
	$photo = isset($_SESSION['photo']) ? : "";
	
		echo "<h4>: " .$username. "</h4>";
		echo "<h4>: " .$fullname. "</h4>";
		echo "<h4>: " .$dob. "</h4>";
		echo "<h4>: " .$email. "</h4>";
?>

<html>
	<head>
		<title>Shared To Do List - Profile</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="profilestyle.css">
		<link rel="shortcut icon" href="favicon.ico">		
		<script type="text/javascript" src="validation.js"></script>
	</head>
	<body>
		<div id="navigation">
			<img src="images/logo.gif">
			<a href="dashboard.php">DASHBOARD</a>
			<a href="">PROFILE</a>
			<a href="#" onclick="toggleSearch()">SEARCH</a>
			<a href="index.php">LOGOUT</a>			
		</div>
		<div id="search">
			<input type="text" size="50%">
		</div>
		</div>
		<div class="clearall container topcontainer" id="profile container">
			<div class="clearall container">
				<h2>Profile</h2>
				<div class="box">
					<img src= "images/Kinaru.jpg" width="200" height="200"></h3>
				</div>
				<div class="profile">
					<h4>User Name</h4>
					<h4>Nama Lengkap</h4>
					<h4>Tanggal Lahir</h4>
					<h4>Email</h4>
				</div>
				<div class="profile">
					<h4>: kinalkinal <?=$username;?></h4>
					<h4>: Devi Kinal Putri <?=$fullname;?></h4>
					<h4>: 02 Januari 1996 <?=$dob;?></h4>
					<h4>: kinalkinal@yahoo.com <?=$email;?></h4>
				</div>
				<div class="box">
					<button name="editprofile" type="submit">Edit Profile</button>
				</div>
			</div>
			<div class="clearall container">
				<div class="box">
					<h2>Current Tasks</h2>
				</div>
				<div class = "clearall taskcontainer" id="taskheaders">
					<div class="tasktable header">
						<h4>Task Name</h4>
					</div>	
					<div class="tasktable header">
						<h4>Deadline</h4>
					</div>
					<div class="tasktable header">
						<h4>Tag</h4>
					</div>
				</div>
				<div class = "clearall taskcontainer odd" id="taskcontents">
					<div class="tasktable">
						<h4>Laporan Praktikum Titrasi</h4>
					</div>
					<div class="tasktable">
						<h4>25-09-2013</h4>
					</div>
					<div class="tasktable">
						<h4>titrasi, kimia</h4>
					</div>
				</div>
				<div class = "clearall taskcontainer even" id="taskcontents">
					<div class="tasktable">
						<h4>ADT Point</h4>
					</div>
					<div class="tasktable">
						<h4>26-09-2013</h4>
					</div>
					<div class="tasktable">
						<h4>adt, c++</h4>
					</div>
				</div>
				<div class = "clearall taskcontainer odd" id="taskcontents">
					<div class="tasktable">
						<h4>Tugas Besar 1 IF3038</h4>
					</div>
					<div class="tasktable">
						<h4>31-12-2013</h4>
					</div>
					<div class="tasktable">
						<h4>html, css, javascript, datepicker</h4>
					</div>
				</div>				
			</div>
			<div class="clearall container">
				<div class = "box">
					<h2>Finished Tasks</h2>
				</div>
				<div class = "clearall taskcontainer" id="taskheaders">
					<div class="tasktable header">
						<h4>Task Name</h4>
					</div>	
					<div class="tasktable header">
						<h4>Deadline</h4>
					</div>
					<div class="tasktable header">
						<h4>Tag</h4>
					</div>				
				</div>
				<div class = "clearall taskcontainer odd" id="taskcontents">
					<div class="tasktable">
						<h4>Tugas Pertidaksamaan</h4>
					</div>
					<div class="tasktable">
						<h4>19-09-2013</h4>
					</div>
					<div class="tasktable">
						<h4>pertidaksamaan, kalkulus</h4>
					</div>
				</div>
				<div class = "clearall taskcontainer even" id="taskcontents">
					<div class="tasktable">
						<h4>Laporan Praktikum Pengukuran</h4>
					</div>
					<div class="tasktable">
						<h4>23-09-2013</h4>
					</div>
					<div class="tasktable">
						<h4>pengukuran, fisika</h4>
					</div>
				</div>				
			</div>
		</div>
			<div class="clearall box">
		</div>
	</body>
</html>