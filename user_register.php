<?php
include_once("includes/conn.php");
// Get input values from the signup form
if(isset($_POST['register']))
{
	$name = $_POST['name'];
    $user_name = $_POST['email'];
	$mobile_no = $_POST['mobile_no'];
    $password = $_POST['password'];
	$created_on = date("Y-m-d");

    // Validate input (you can add more validation as per your requirements)
    if (empty($name) || empty($user_name) || empty($mobile_no) || empty($password)) {
        echo "Please fill in all the fields.";
    } elseif (!filter_var($user_name, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } else {
        // Check if the email is already registered
        $checkEmailQuery = "SELECT * FROM users WHERE user_name = '$user_name'";
        $result = $conn->query($checkEmailQuery);

        if ($result->num_rows > 0) {
            echo '<script>alert("Email already registered. Please use a different email address.")</script>';
        } 
		else {
            // Hash the password (you can use other encryption methods)
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert user data into the database
            $insertQuery = "INSERT INTO users (name, user_name, mobile_no, password, created_on)
                            VALUES ('$name', '$user_name', '$mobile_no', '$hashedPassword', '$created_on')";

            if ($conn->query($insertQuery) === TRUE) {
				session_start();
				$_SESSION['user_name']=$user_name;
			  	header("Location:index.php");
            } else {
                echo "Error: " . $insertQuery . "<br>" . $conn->error;
            }
        }	
    }    
}
?>




<!doctype html>
<html lang="en">
<head>
	<title>Register</title>
	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="admin/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="admin/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="admin/assets/css/pace.min.css" rel="stylesheet" />
	<script src="admin/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin/assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="admin/assets/css/app.css" rel="stylesheet">
	<link href="admin/assets/css/icons.css" rel="stylesheet">

<style>
#website_user_login_logo{
	width: 60%;
}
@media (max-width: 440px) {
	#website_user_login_logo{
		width: 100%;
	}
}

</style>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="d-flex align-items-center justify-content-center my-5">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card mb-0">
							<div class="card-body">
								<div class="p-2">
									<div class="mb-3 text-center">
										<img src="admin/assets/images/logo-img2.png" id="website_user_login_logo"alt="" />
									</div>
									<div class="text-center mb-4">
										<p class="mb-0">Please fill the below details to create your account</p>
									</div>
									<div class="form-body">
										<form action="" method="POST" class="row g-3">

											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Name</label>
												<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" class="form-control" id="email"  name="email" placeholder="example@gmail.com">
											</div>
											<div class="col-12">
												<label for="inputUsername" class="form-label">Mobile No</label>
												<input type="number" class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter Number">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="password" name="password"  placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
<!--
											<div class="col-12">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
												</div>
											</div>
-->
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" name="register" class="btn btn-primary">Sign up</button>
												</div>
											</div>
											<div class="col-12">
												<div class="text-center ">
													<p class="mb-0">Already have an account? <a href="user_login.php">Sign in here</a></p>
												</div>
											</div>
										</form>
									</div>
									<div class="login-separater text-center mb-5"> <span>OR SIGN UP WITH EMAIL</span>
										<hr/>
									</div>
									<div class="list-inline contacts-social text-center">
										<a href="javascript:;" class="list-inline-item bg-facebook text-white border-0 rounded-3"><i class="bx bxl-facebook"></i></a>
										<a href="javascript:;" class="list-inline-item bg-twitter text-white border-0 rounded-3"><i class="bx bxl-twitter"></i></a>
										<a href="javascript:;" class="list-inline-item bg-google text-white border-0 rounded-3"><i class="bx bxl-google"></i></a>
										<a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0 rounded-3"><i class="bx bxl-linkedin"></i></a>
									</div>

								</div>
							</div>
						</div>
					</div>
				 </div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="admin/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="admin/assets/js/jquery.min.js"></script>
	<script src="admin/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="admin/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="admin/assets/js/app.js"></script>
</body>


<!-- Mirrored from codervent.com/syndron/demo/vertical/auth-basic-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 17:07:27 GMT -->
</html>