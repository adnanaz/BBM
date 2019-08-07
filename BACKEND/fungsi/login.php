<?php

$con = mysqli_connect("localhost","root","","bibit_murah");

$msg = '';

if(isset($_POST["login"]))
{
// Deklarasi variable
$usere = $_POST['user_email'];
$userp = $_POST['user_password'];
$usernt = $_POST['user_email'];
$cekactivation = mysqli_query($con,"SELECT * FROM register_user WHERE user_email = '$usere'");
$ceknotelp = mysqli_query($con,"SELECT * FROM register_user WHERE user_no_telp = '$usernt'");
$cekpassword = mysqli_query($con,"SELECT * FROM register_user WHERE user_password = '$userp'");
	if(mysqli_num_rows($cekactivation) <> 0){
		
    	foreach($cekactivation as $row)
		{
			if($row['user_email_status'] == 'verified')
			{
				if(mysqli_num_rows($cekpassword) <> 0)
				{
					$_SESSION['user_id'] = $row['register_user_id'];
					header("location:index.php");
				}else{
					$msg = "<label>Wrong Password</label>";
				}
			}else{
				$msg = "<label class='text-danger'>Please First Verify, your email address</label>";
			}
		}
	}if(mysqli_num_rows($ceknotelp) <> 0){
		
    	foreach($ceknotelp as $rowl)
		{
			if($rowl['user_email_status'] == 'verified')
			{
				if(mysqli_num_rows($cekpassword) <> 0)
				{
					$_SESSION['user_id'] = $row['register_user_id'];
					header("location:index.php");
				}else{
					$msg = "<label>Wrong Password</label>";
				}
			}else{
				$msg = "<label class='text-danger'>Please First Verify, your email address</label>";
			}
		}
	}else{
		$msg = "<label class='text-danger'>Wrong Email Address Or Phone Number</label>";
	}
}
?>