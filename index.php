<?php 
	session_start(); 

	if (!isset($_SESSION['email'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['email']);
		header("location: login.php");
	}

	define("COMPANY_NAME", "Marketing HR");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Acasa - <?php echo COMPANY_NAME; ?></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/navbar-custom.css">
	<link rel="stylesheet" type="text/css" href="css/index-style.css">
</head>
<body>
	<nav class="navbar navbar-fixed-top">
		    <div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="collapsable"></button>
		      <a class="navbar-brand" href="index.php"><?php echo COMPANY_NAME; ?></a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="#">Home</a></li>
		      <li><a href="#">Page 1</a></li>
		      <li><a href="#">Page 2</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
			      <li><a href="index.php?logout='1'"><span class="glyphicon glyphicon-log-out"></span> Iesi din cont</a></li>
			</ul>
	</nav>
	<div class="main-panel-header">
		<div class="header col-sm-12 col-md-2" style="float:left">
			<h2>Anunturi</h2>
		</div>
		<div class="filter-box col-sm-12 col-md-10">
			Filtrare
		</div>
	</div>
	<div class="main-panel" id="jobs-panel">
		<div class="row col-sm-12">
			<div class="post-card col-sm-12 col-md-3 col-md-offset-1">
				<div class="post-card-title col-sm-12">
					Distribuitor de pliante
				</div>
				<div class="post-card-logo col-sm-12">
					<img src="https://cdn.bestjobs.eu/employer_logo/58318b1c27656.jpg" alt="Company Logo">
				</div>
				<div class="post-card-footer col-sm-12">
					<div class="post-card-city col-sm-3">
						Bucuresti
					</div>
					<div class="post-card-wage col-sm-3 col-md-offset-1">
						1000E
					</div>
					<div class="post-card-reviews col-sm-3 col-md-offset-1">
						5.3
					</div>				
				</div>
			</div>
			<div class="post-card col-sm-12 col-md-3 col-md-offset-1">
				<div class="post-card-title col-sm-12">
					Distribuitor de pliante
				</div>
				<div class="post-card-logo col-sm-12">
					<img src="https://cdn.bestjobs.eu/employer_logo/58318b1c27656.jpg" alt="Company Logo">
				</div>
				<div class="post-card-footer col-sm-12">
					<div class="post-card-city col-sm-3 col-md-offset-1">
						Bucuresti
					</div>
					<div class="post-card-wage col-sm-3 col-md-offset-1">
						1000E
					</div>
					<div class="post-card-reviews col-sm-3 col-md-offset-1">
						5.3
					</div>				
				</div>
			</div>
			<div class="post-card col-sm-12 col-md-3 col-md-offset-1">
				<div class="post-card-title col-sm-12">
					Distribuitor de pliante
				</div>
				<div class="post-card-logo col-sm-12">
					<img src="https://cdn.bestjobs.eu/employer_logo/58318b1c27656.jpg" alt="Company Logo">
				</div>
				<div class="post-card-footer col-sm-12">
					<div class="post-card-city col-sm-3 col-md-offset-1">
						Bucuresti
					</div>
					<div class="post-card-wage col-sm-3 col-md-offset-1">
						1000E
					</div>
					<div class="post-card-reviews col-sm-3 col-md-offset-1">
						5.3
					</div>				
				</div>
			</div>
		</div>
		<div class="row col-sm-12">
			<div class="post-card col-sm-12 col-md-3 col-md-offset-1">
				<div class="post-card-title col-sm-12">
					Distribuitor de pliante
				</div>
				<div class="post-card-logo col-sm-12">
					<img src="https://cdn.bestjobs.eu/employer_logo/58318b1c27656.jpg" alt="Company Logo">
				</div>
				<div class="post-card-footer col-sm-12">
					<div class="post-card-city col-sm-3 col-md-offset-1">
						Bucuresti
					</div>
					<div class="post-card-wage col-sm-3 col-md-offset-1">
						1000E
					</div>
					<div class="post-card-reviews col-sm-3 col-md-offset-1">
						5.3
					</div>				
				</div>
			</div>
			<div class="post-card col-sm-12 col-md-3 col-md-offset-1">
				<div class="post-card-title col-sm-12">
					Distribuitor de pliante
				</div>
				<div class="post-card-logo col-sm-12">
					<img src="https://cdn.bestjobs.eu/employer_logo/58318b1c27656.jpg" alt="Company Logo">
				</div>
				<div class="post-card-footer col-sm-12">
					<div class="post-card-city col-sm-3 col-md-offset-1">
						Bucuresti
					</div>
					<div class="post-card-wage col-sm-3 col-md-offset-1">
						1000E
					</div>
					<div class="post-card-reviews col-sm-3 col-md-offset-1">
						5.3
					</div>				
				</div>
			</div>
			<div class="post-card col-sm-12 col-md-3 col-md-offset-1">
				<div class="post-card-title col-sm-12">
					Distribuitor de pliante
				</div>
				<div class="post-card-logo col-sm-12">
					<img src="https://cdn.bestjobs.eu/employer_logo/58318b1c27656.jpg" alt="Company Logo">
				</div>
				<div class="post-card-footer col-sm-12">
					<div class="post-card-city col-sm-3 col-md-offset-1">
						Bucuresti
					</div>
					<div class="post-card-wage col-sm-3 col-md-offset-1">
						1000E
					</div>
					<div class="post-card-reviews col-sm-3 col-md-offset-1">
						5.3
					</div>				
				</div>
			</div>
		</div>
		<div class="row col-sm-12">
			<div class="post-card col-sm-12 col-md-3 col-md-offset-1">
				<div class="post-card-title col-sm-12">
					Distribuitor de pliante
				</div>
				<div class="post-card-logo col-sm-12">
					<img src="https://cdn.bestjobs.eu/employer_logo/58318b1c27656.jpg" alt="Company Logo">
				</div>
				<div class="post-card-footer col-sm-12">
					<div class="post-card-city col-sm-3 col-md-offset-1">
						Bucuresti
					</div>
					<div class="post-card-wage col-sm-3 col-md-offset-1">
						1000E
					</div>
					<div class="post-card-reviews col-sm-3 col-md-offset-1">
						5.3
					</div>				
				</div>
			</div>
			<div class="post-card col-sm-12 col-md-3 col-md-offset-1">
				<div class="post-card-title col-sm-12">
					Distribuitor de pliante
				</div>
				<div class="post-card-logo col-sm-12">
					<img src="https://cdn.bestjobs.eu/employer_logo/58318b1c27656.jpg" alt="Company Logo">
				</div>
			<div class="post-card-footer col-sm-12">
					<div class="post-card-city col-sm-3 col-md-offset-1">
						Bucuresti
					</div>
					<div class="post-card-wage col-sm-3 col-md-offset-1">
						1000E
					</div>
					<div class="post-card-reviews col-sm-3 col-md-offset-1">
						5.3
					</div>				
				</div>
			</div>
			<div class="post-card col-sm-12 col-md-3 col-md-offset-1">
				<div class="post-card-title col-sm-12">
					Distribuitor de pliante
				</div>
				<div class="post-card-logo col-sm-12">
					<img src="https://cdn.bestjobs.eu/employer_logo/58318b1c27656.jpg" alt="Company Logo">
				</div>
			<div class="post-card-footer col-sm-12">
					<div class="post-card-city col-sm-3 col-md-offset-1">
						Bucuresti
					</div>
					<div class="post-card-wage col-sm-3 col-md-offset-1">
						1000E
					</div>
					<div class="post-card-reviews col-sm-3 col-md-offset-1">
						5.3
					</div>				
				</div>
			</div>
		</div>
		<div class="row col-sm-12">
			<div class="post-card col-sm-12 col-md-3 col-md-offset-1">
				<div class="post-card-title col-sm-12">
					Distribuitor de pliante
				</div>
				<div class="post-card-logo col-sm-12">
					<img src="https://cdn.bestjobs.eu/employer_logo/58318b1c27656.jpg" alt="Company Logo">
				</div>
				<div class="post-card-footer col-sm-12">
					<div class="post-card-city col-sm-3 col-md-offset-1">
						Bucuresti
					</div>
					<div class="post-card-wage col-sm-3 col-md-offset-1">
						1000E
					</div>
					<div class="post-card-reviews col-sm-3 col-md-offset-1">
						5.3
					</div>				
				</div>
			</div>
			<div class="post-card col-sm-12 col-md-3 col-md-offset-1">
				<div class="post-card-title col-sm-12">
					Distribuitor de pliante
				</div>
				<div class="post-card-logo col-sm-12">
					<img src="https://cdn.bestjobs.eu/employer_logo/58318b1c27656.jpg" alt="Company Logo">
				</div>
				<div class="post-card-footer col-sm-12">
					<div class="post-card-city col-sm-3 col-md-offset-1">
						Bucuresti
					</div>
					<div class="post-card-wage col-sm-3 col-md-offset-1">
						1000E
					</div>
					<div class="post-card-reviews col-sm-3 col-md-offset-1">
						5.3
					</div>				
				</div>
			</div>
			<div class="post-card col-sm-12 col-md-3 col-md-offset-1">
				<div class="post-card-title col-sm-12">
					Distribuitor de pliante
				</div>
				<div class="post-card-logo col-sm-12">
					<img src="https://cdn.bestjobs.eu/employer_logo/58318b1c27656.jpg" alt="Company Logo">
				</div>
				<div class="post-card-footer col-sm-12">
					<div class="post-card-city col-sm-3 col-md-offset-1">
						Bucuresti
					</div>
					<div class="post-card-wage col-sm-3 col-md-offset-1">
						1000E
					</div>
					<div class="post-card-reviews col-sm-3 col-md-offset-1">
						5.3
					</div>				
				</div>
			</div>
		</div>
	</div>
</body>
</html>