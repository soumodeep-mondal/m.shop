<?php
include_once("includes/conn.php");
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['password-reset-token']) && $_POST['email'])
{
     
    $emailId = $_POST['email'];
 
    $result = mysqli_query($conn,"SELECT * FROM users WHERE user_name='" . $emailId . "'");
 
    $row= mysqli_fetch_array($result);
 
  if($row)
  {
     
     $token = md5($emailId).rand(10,9999);
 
     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );
 
    $expDate = date("Y-m-d H:i:s",$expFormat);
 
	//`user_id`, `name`, `mobile_no`, `user_name`, `password`, `reset_link_token`, `exp_date`, `created_on` SELECT * FROM `users` WHERE 1
    $update = mysqli_query($conn,"UPDATE users set  reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE user_name='" . $emailId . "'");
 
	$link="http://localhost/software/Mondal%20Bhander/M.shop_10.09.2023/user_reset_password.php?key=".$emailId."&token=".$token;
 
    $mail = new PHPMailer();
 
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    $mail->Username = "mondalbhander.shop@gmail.com";
    $mail->Password = "ntwtfljcoenfhyse";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='mondalbhander.shop@gmail.com';
    $mail->FromName='noreply@mondalbhander';
    $mail->AddAddress($emailId, 'reciever_name');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$link.'';
    if($mail->Send())
    {
      header("Location:user_forgot_password.php?msg=Check Your Email and Click on the link sent to your email");
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }else{
    echo "Invalid Email Address. Go back";
  }
}

?>

<!DOCTYPE html>
<html lang="en">


<head>
	<title>Forgot Password</title>
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
</head>

<body class="">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-forgot d-flex align-items-center justify-content-center">
			<div class="card forgot-box">
				<div class="card-body">
					<div class="p-3">
						<div class="text-center">
							<img src="admin/assets/images/icons/forgot-2.png" width="100" alt="" />
						</div>
						<h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
						<p class="text-muted">Enter your registered email ID to reset the password</p>
						
						<form action="" method="post">
							<div class="my-4">
								<label class="form-label">Email id</label>
								<input type="email" name="email" class="form-control" placeholder="example@user.com" />
							</div>
              				<p class="text-danger"><?php if (isset($_REQUEST["msg"])) {$msg = $_REQUEST["msg"];echo $msg ;}?></p>
							<div class="d-grid gap-2">
								<button type="submit" name="password-reset-token" class="btn btn-primary">Send</button>
								<a href="user_login.php" class="btn" style="background:var(--color-secondary);"><i class='bx bx-arrow-back me-1'></i>Back to Login</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>
</html>