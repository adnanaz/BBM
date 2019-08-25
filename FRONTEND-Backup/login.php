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
		$msg = "<label class='text-danger'>Wrong Email Address Or Username</label>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bibit Bunga Murah - Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="header"><h5>Bibit Bunga Murah</h5>
</div>
<div class="ticker"><h6>Dapatkan berbagai macam bibit secara online dan sampai langsung dirumah anda. terjangkau,berkualitas,terpercaya</h6>
</div>

<div class="image">
  
   <div class="container">
      <h1>Masuk</h1>
      <form method="post">
      <?php echo $msg; ?>
        <div class="title">
          <input type="text" required="required" name="user_email" id="first">
          <label for="first">Alamat email atau username</label>
          <div class="line"></div>
        </div>
        <div class="title">
          <input type="password" required="required" name="user_password" id="password">
         
          <label for="password">Password</label>
          <div class="line"></div>
        </div>
        <div class="right">
          <input type="submit" class="btn btn-outline-success" name="login" value="Login">

        </div>
              </form>
        <div class="separator">
            <hr class="hline"></hr>
            <span class="seprator-text">atau masuk dengan</span>
            <hr class="hline"></hr>
          </div>

           
              <a style="background-color: white;">
                <button class="btn btn-default btn-login btn-google">
                <i class="icon fab fa-google"></i> Masuk dengan google
              </button>
              </a>
              <br>
              <a style="background-color: white;">
                 <button class="btn btn-default btn-login btn-facebook">
                <i class="icon fab fa-facebook-f"></i>
    Masuk dengan Facebook
  </button>
              </a>
              <div class="form-text">
              <span class="seprator-text">belum punya akun bibit bunga murah? <a href="#">Daftar</a></span>
              <span class="est">est 2019</span>
              </div>


    </div>
</div>

</body>
</html>