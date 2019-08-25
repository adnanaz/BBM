<?php
// membuat koneksi
$con = mysqli_connect("localhost","root","","bibit_murah");

use PHPMailer\PHPMailer\PHPMailer;


$msg = '';
 
 if(isset($_POST["register"]))
{
// Deklarasi variable
$usern = $_POST['user_name'];
$usere = $_POST['user_email'];
$userp = $_POST['user_password'];
$usernt = $_POST['user_no_telp'];
$usera = $_POST['user_alamat'];

$cekuser = mysqli_query($con,"SELECT * FROM register_user WHERE user_email = '$usere'");
 if(mysqli_num_rows($cekuser) <> 0){
    $msg = '<label class="text-danger">Email Already Exits</label>';
    
 }else{
    if (!$usern || !$usere ) {
        $msg = 'Masih ada data yang kosong!';
    }else{
		$char = array();

		$chars = array(range('A','Z'), range(0, 9), range('a', 'z'));

		foreach($chars as $k => $v) {

			foreach($v as $val) {

				$char[] = $val;

			}

		}
		$keys = array();
		while(count($keys) <= 15) {
    		$x = mt_rand(0, count($char)-1);
    		if(!in_array($x, $keys)) {
       			$keys[] = $x;  
    		}          
		}
		$user_token = '';
		foreach($keys as $key => $val){
   			$user_token .= $char[$val];  
		}
        $user_activation_code = md5(rand()); 
  		$simpan = mysqli_query($con,"insert into register_user(user_name, user_email, user_password, user_activation_code, user_email_status, user_token, user_alamat, user_no_telp) values ('$usern','$usere', '$userp', '$user_activation_code', 'not verified', '$user_token', '$usera', '$usernt')");
  if ($simpan) {
  		require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $base_url = "http://localhost:8080/kampus/Kerja_adnan/H2/test1/validation_email/";
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "mio.akiyama909@gmail.com";
        $mail->Password = 'lailinkeren236';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('mio.akiyama909@gmail.com');
        $mail->addAddress($usere, $usern);
        $mail->Subject = "Email Verification";
        $mail->Body = "
			<p>Hi ".$_POST['user_name'].",</p>
			<p>Thanks for Registration. Your Token is ".$user_token.", This Token will use If You Want to change your Account.</p>
			<p>You can login with Email Or This Your Phone Number ".$usernt.", </p>
			<p>Please Open this link to verified your email address - ".$base_url."fungsi/email_verification.php?activation_code=".$user_activation_code."
			<p>Best Regards,<br />Webslesson</p>
			";

        if ($mail->send()) {
            $msg = '<label class="text-success">Register Done, Please check your mail.</label>';
        }else{
            $msg = "Something wrong happened! Please try again!";
        }
 }
}
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
      <h1>Daftar</h1>
      <form method="post">
      <?php echo $msg; ?>
        <div class="title">
          <input type="text" required="required" name="user_email" id="email">
          <label for="email">Alamat Email</label>
          <div class="line"></div>
        </div>
        <div class="title">
          <input type="text" required="required" name="user_name" id="username">
          <label for="username">Username</label>
          <div class="line"></div>
        </div>
        <div class="title">
          <input type="password" required="required" name="user_password" id="password">
         
          <label for="password">Password</label>
          <div class="line"></div>
        </div>
        <div class="title">
          <input type="text" required="required" name="user_no_telp" id="notelp" onkeypress="return Angkasaja(event)">
          <label for="notelp">No-Telp</label>
          <div class="line"></div>
        </div>
        <div class="title">
          <textarea required="required" name="user_alamat" id="alamat"></textarea>
          <label for="alamat">Alamat</label>
          <div class="line"></div>
        </div>
        <div class="right">
          <input type="submit" class="btn btn-outline-success" name="register" value="Register">

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

<script type="text/javascript">
function Angkasaja(evt) {
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
}
</script>