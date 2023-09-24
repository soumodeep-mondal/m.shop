<?php
// Include necessary files and initialize database connection
include_once("includes/conn.php");
session_start();

if(isset($_POST['password']) && $_POST['reset_link_token'] && $_POST['email'])
{
   
  $emailId = $_POST['email'];
 
  $token = $_POST['reset_link_token'];
   
  $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
  
 
  $query = mysqli_query($conn,"SELECT * FROM `users` WHERE `reset_link_token`='".$token."' and `user_name`='".$emailId."'");
 
   $row = mysqli_num_rows($query);
 
   if($row){
 
       mysqli_query($conn,"UPDATE users set  password='" . $hashedPassword . "', reset_link_token='" . NULL . "' ,exp_date='" . NULL . "' WHERE user_name='" . $emailId . "'");
 
       //echo '<p>Congratulations! Your password has been updated successfully.</p>';
	   header("Location:user_reset_password.php?key=".NULL."&token=".NULL."&msg=Congratulations! Your password has been updated successfully.");
	   
   }else{
      echo "<p>Something goes wrong. Please try again</p>";
   }
}



?>
<!DOCTYPE html>
<html lang="en">


<head>

	<title>Password Reset</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="admin/assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="admin/assets/css/pace.min.css" rel="stylesheet" />
	<script src="admin/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin/assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="admin/assets/css/app.css" rel="stylesheet">
	<link href="admin/assets/css/icons.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
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

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-reset-password d-flex align-items-center justify-content-center">
		 <div class="container">
			<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
				<div class="col mx-auto">
					<div class="card">
						<div class="card-body">
							<div class="p-4">
								<div class="mb-4 text-center">
								<img src="admin/assets/images/logo-img2.png" id="website_user_login_logo" alt="" />
								<p class="pt-5"><?php if (isset($_REQUEST["msg"])) {$msg = $_REQUEST["msg"];echo $msg ;}?></p>
								</div>

								<?php
								if($_GET['key'] && $_GET['token'])
								{
									$email = $_GET['key'];
						
									$token = $_GET['token'];
						
									$query = mysqli_query($conn,"SELECT * FROM `users` WHERE `reset_link_token`='".$token."' and `user_name`='".$email."';");
						
									$curDate = date("Y-m-d H:i:s");
					
					
									if (mysqli_num_rows($query) > 0) 
									{
						
									$row= mysqli_fetch_array($query);
						
										if($row['exp_date'] >= $curDate)
										{ ?>
										<div class="text-start mb-4">
										
											<h5 class="">Genrate New Password</h5>
											<p class="mb-0">We received your reset password request. Please enter your new password!</p>
										</div>
										<form action="" method="post">
											<input type="hidden" name="email" value="<?php echo $email;?>">
											<input type="hidden" name="reset_link_token" value="<?php echo $token;?>">
											<div class="mb-3 mt-4">
												<label class="form-label">New Password</label>
												<input type="text" name="password" class="form-control" placeholder="Enter new password" />
											</div>
											<div class="mb-4">
												<label class="form-label">Confirm Password</label>
												<input type="text" name="cpassword" class="form-control" placeholder="Confirm password" />
											</div>
											<div class="d-grid gap-2">
												<button type="submit" name="new-password"  class="btn" style="background:var(--color-primary);">Change Password</button> <a href="user_login.php" class="btn" style="background:var(--color-secondary);"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>
											</div>
										</form>
										<?php 
										} 
										} 
										else
										{?>
											<p>
											<?php
											if (isset($_REQUEST["msg"])) {
												$msg = $_REQUEST["msg"];
												echo $msg ;
											}
											?>
											</p>
											<p class="text-center">This forget password link has been expired</p>
										<?php
										} 
										}?>



							</div>
						</div>
					</div>
				</div>
			</div>
		  </div>
		</div>
	</div>
	<!-- end wrapper -->
</body>


<!-- Mirrored from codervent.com/syndron/demo/vertical/auth-basic-reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 17:07:27 GMT -->
</html>