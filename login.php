<?php include('server.php') ?>
<?php 
	define("COMPANY_NAME", "Marketing HR");

    require_once "config.php";

    $redirectURL="http://localhost/marketingHR/fb-callback.php";
    $permissions=['email'];
    $loginUrl=$helper->getLoginUrl($redirectURL, $permissions);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Autentificare - <?php echo COMPANY_NAME; ?></title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/login-register.css">
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
	<div class="header" style="width: 30%; margin: 0 auto">
		<h2>Autentificare</h2>
	</div>
	<div id="login-panel">
		<ul class="nav nav-tabs" id="tab-list">
			<li class="active"><a data-toggle="tab" href="#user-login">Utilizator</a></li>
			<li><a data-toggle="tab" href="#company-login">Companie</a></li>
		</ul>

		<div class="tab-content">
			<div class="tab-pane in active" id="user-login">
				<form method="POST" id="login-form">

					<?php include('errors.php'); ?>

					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" id="email">
					</div>
					<div class="form-group">
						<label>Parola</label>
						<input type="password" name="password" id="password">
					</div>
					<div class="form-group">
						<button type="submit" class="btn-custom" name="login_user" id="submit-button">Autentifica-te</button>
		                <button type="button" class="btn btn-block btn-social btn-facebook" onclick="window.location = '<?php echo $loginUrl ?>';"><span class="fab fa-facebook-f"></span>Login with Facebook</button>

		            </div>
					<p>
						Nu esti membru? <a href="register.php">Inregistreaza-te</a>
					</p>
				</form>
			</div>
			<div class="tab-pane" id="company-login">
				<form method="POST" id="login-form">

					<?php include('errors.php'); ?>

					<div class="form-group">
						<label>Email-ul companiei</label>
						<input type="text" name="email" id="email">
					</div>
					<div class="form-group">
						<label>Parola</label>
						<input type="password" name="password" id="password">
					</div>
					<div class="form-group">
						<button type="submit" class="btn-custom" name="login_company" id="submit-button">Autentifica-te</button>
		            </div>
					<p>
						Prima data cand compania ta intra pe platforma noastra? <a href="register.php">Inregistreaza-te</a>
					</p>
				</form>
			</div>
		</div>
	</div>
<script type="text/javascript">
	$("#username, #password, #password2, #email, #submit-button").focus(function(){
	$(".header, #login-form, nav").fadeTo("slow", 1);
});

$("#username, #password, #password2, #email, #submit-button").focusout(function(){
	$(".header, #login-form, nav").fadeTo("slow", 0.96);
});
</script>

</body>
</html>
