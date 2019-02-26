<?php include('db-connection.php');
	session_start();

	// variable declaration
	$firstName = "";
	$lastName = "";
	$CNP = "";
	$phoneNo = "";
	$email    = "";
	$errors = array();
	$companyName = "";
	$companyAddress = "";
	$CompanyRegNo = ""; 
	$_SESSION['success'] = "";


	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$firstName = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastName = mysqli_real_escape_string($db, $_POST['lastname']);
		$phoneNo = mysqli_real_escape_string($db, $_POST['phoneNo']); 
		$CNP = mysqli_real_escape_string($db, $_POST['CNP']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($firstName)) { array_push($errors, "Firstname is required"); }
		if (empty($lastName)) { array_push($errors, "Lastname is required"); }
		if (empty($CNP)) { array_push($errors, "CNP is required"); }
		if (empty($phoneNo)) { array_push($errors, "Phone number is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO members (Firstname, Lastname, Email, PhoneNo, CNP, PhotoLink, AccountPassword) 
							VALUES ('$firstName', '$lastName', '$email', '$phoneNo', '$CNP', 'ab', '$password')";
			mysqli_query($db, $query);

			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";

			header("location: index.php");
		}

	}

	if (isset($_POST['reg_company'])) {
		// receive all input values from the form

		$email = mysqli_real_escape_string($db, $_POST['email']);
		$companyName = mysqli_real_escape_string($db, $_POST['companyName']);
		$companyAddress = mysqli_real_escape_string($db, $_POST['companyAddress']);
		$phoneNo = mysqli_real_escape_string($db, $_POST['phoneNo']); 
		$CompanyRegNo = mysqli_real_escape_string($db, $_POST['CompanyRegNo']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($companyName)) { array_push($errors, "Firstname is required"); }
		if (empty($companyAddress)) { array_push($errors, "Lastname is required"); }
		if (empty($CompanyRegNo)) { array_push($errors, "CUI is required"); }
		if (empty($phoneNo)) { array_push($errors, "Phone number is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO companies (Name, Address, Email, PhoneNo, CompanyRegNo, AccountPassword) 
							VALUES ('$companyName', '$companyAddress', '$email', '$phoneNo', '$CompanyRegNo','$password')";
			mysqli_query($db, $query);

			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";

			header("location: index.php");
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT email FROM members WHERE email='$email' AND AccountPassword='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	// LOGIN COMPANY
	if (isset($_POST['login_company'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT email FROM companies WHERE email='$email' AND AccountPassword='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>