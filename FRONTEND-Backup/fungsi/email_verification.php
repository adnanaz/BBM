<?php

$con = mysqli_connect("localhost","root","","bibit_murah");
$msg = '';

if(isset($_GET['activation_code']))
{
// Deklarasi variable
$userac = $_GET['activation_code'];
$cekactivation = mysqli_query($con,"SELECT * FROM register_user WHERE user_activation_code = '$userac'");
	if(mysqli_num_rows($cekactivation) <> 0){
		
    	foreach($cekactivation as $row)
		{
			if($row['user_email_status'] == 'not verified')
			{
				$updateactivation = mysqli_query($con,"UPDATE register_user SET user_email_status = 'verified' where register_user_id = '".$row['register_user_id']."'");
				if ($updateactivation) {
					$msg = '<label class="text-success">Your Email Address Successfully Verified <br />You can login here - <a href="login.php">Login</a></label>';
				}else{
					$msg = '<label class="text-info">Your Email Address Already Verified</label>';
				}
			}
		}
	}else{
		$msg = '<label class="text-danger">Invalid Link</label>';
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP Register Login Script with Email Verification</title>		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		
		<div class="container">
			<h1 align="center">PHP Register Login Script with Email Verification</h1>
		
			<h3><?php echo $msg; ?></h3>
			
		</div>
	
	</body>
	
</html>