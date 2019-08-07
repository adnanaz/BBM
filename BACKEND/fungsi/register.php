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
			<p>Please Open this link to verified your email address - ".$base_url."email_verification.php?activation_code=".$user_activation_code."
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