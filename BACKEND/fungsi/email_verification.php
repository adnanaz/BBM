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