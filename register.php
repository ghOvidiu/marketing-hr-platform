<?php include('server.php') ?>
<?php 
	define("COMPANY_NAME", "Marketing HR");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inregistrare - <?php echo COMPANY_NAME; ?></title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/login-register-navbar.css">
	<script type="text/javascript" src="js/login-register-js.js"></script>

</head>
<body>
	<nav class="navbar navbar-inverse center">
		<div class="navbar-inner">
			<div class="navbar-header">
	      		<a class="brand-title" href="index.php"><?php echo COMPANY_NAME; ?></a>
		    </div>
		</div>
	</nav>
	<div class="header"  style="width: 30%; margin: 0 auto">
		<h2>Inregistrare</h2>
	</div>
	
	<div id="register-panel">
		<ul class="nav nav-tabs" id="tab-list">
			<li class="active"><a data-toggle="tab" href="#user-register">Utilizator</a></li>
			<li><a data-toggle="tab" href="#company-register">Companie</a></li>
		</ul>

		<div class="tab-content">
			<div id="user-register" class="tab-pane in active">
				<form method="post">

					<?php include('errors.php'); ?>
					<!-- Default switch -->

					<div class="form-group">
						<label>Prenume</label>
						<input type="text" name="firstname" id="firstName" value="<?php echo $firstName; ?>">
					</div>
					<div class="form-group">
						<label>Nume</label>
						<input type="text" name="lastname" id="lastName" value="<?php echo $lastName; ?>">
					</div>
					<div class="form-group">
						<label>CNP</label>
						<input type="text" name="CNP" id="CNP" value="<?php echo $CNP; ?>">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" id="email" value="<?php echo $email; ?>">
					</div>
					<div class="form-group">
						<label>Numar de telefon</label>
						<input type="text" name="phoneNo" id="phoneNo" value="<?php echo $phoneNo; ?>">
					</div>
					<div class="form-group">
						<label>Parola</label>
						<input type="password" id="password" name="password_1">
					</div>
					<div class="form-group">
						<label>Confirmare parola</label>
						<input type="password" id="password2" name="password_2">
					</div>
					<div class="form-group">	
						<button type="submit" class="btn btn-custom" name="reg_user" id="submit-button">Inregistreaza-te ca utilizator</button>
					</div>
					<p>
						Esti deja membru? <a href="login.php">Autentifica-te</a>
					</p>
				</form>
			</div>
			<div id="company-register" class="tab-pane fade">
				<form method="post">

					<?php include('errors.php'); ?>
					<!-- Default switch -->

					<div class="form-group">
						<label>Numele companiei</label>
						<input type="text" name="companyName" id="companyName" value="<?php echo $companyName; ?>">
					</div>
					<div class="form-group">
						<label>Adresa</label>
						<input type="text" name="companyAddress" id="companyAddress" value="<?php echo $companyAddress; ?>">
					</div>
					<div class="form-group">
						<label>Cod Unic de Inregistrare(CUI)</label>
						<input type="text" name="CompanyRegNo" id="CompanyRegNo" value="<?php echo $CompanyRegNo; ?>">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" id="email" value="<?php echo $email; ?>">
					</div>
					<div class="form-group">
						<label>Numar de telefon</label>
						<input type="text" name="phoneNo" id="phoneNo" value="<?php echo $phoneNo; ?>">
					</div>
					<div class="form-group">
						<label>Parola</label>
						<input type="password" id="password" name="password_1">
					</div>
					<div class="form-group">
						<label>Confirmare parola</label>
						<input type="password" id="password2" name="password_2">
					</div>
					<div class="form-group">	
						<button type="submit" class="btn btn-custom" name="reg_company" id="submit-button">Inregistreaza-ti compania</button>
					</div>
					<p>
						Compania are deja cont? <a href="login.php">Autentifica-te</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>