<?php
$redirectUri = "http://localhost/tortorici/get_oauth_token.php";
$clientId = "268642046628-2a4l2v03ma5i82faosvtbete4b8ivja1.apps.googleusercontent.com";
$clientSecret = "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";
?>

<html>

<head>
	<?php include '../templates/header.php' ?>
</head>

<body>

	<div class="container-fluid">
		<h1>Sito di Tortorici Nico</h1>
		<form method='post' action='index.php'>

			<div class="row flex-xl-nowrap justify-content-center">
				<main class="col col-xs-12 col-sm-10 col-md-6 col-lg-6 col-xl-4 py-md-4 py-md-5">
					<div class="form-group">
						<label for="inputEmail">Email</label>
						<input type="email" class="form-control" name="inputEmail">
					</div>
					<div class="form-group">
						<label for="inputPassword">Password</label>
						<input type="password" class="form-control" name="inputPassword">
					</div>
                    <div class="form-group">
						<label for="inputConfirmPassword">Confirm Password</label>
						<input type="password" class="form-control" name="inputConfirmPassword">
					</div>
					<button class="btn btn-primary" type='submit'>Registrati</button>
					<br>
					<img src="../imgs/qr-code.png" alt="" />
				</main>
			</div>

		</form>
	</div>

	<?php include '../templates/footer.php' ?>
</body>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
	require '../vendor/phpmailer/phpmailer/src/Exception.php';
	require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
	require '../vendor/phpmailer/phpmailer/src/SMTP.php';

	// use PHPMailer\PHPMailer\PHPMailer;
	// use PHPMailer\PHPMailer\SMTP;
	// use PHPMailer\PHPMailer\OAuth;
	// use League\OAuth2\Client\Provider\Google;
	
	// require '../vendor/phpmailer/phpmailer/src/Exception.php';
	// require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
	// require '../vendor/phpmailer/phpmailer/src/SMTP.php';

	$base = $_SERVER["DOCUMENT_ROOT"];
	
	// require_once '../vendor/phpmailer/src/Exception.php';
	// require_once '../vendor/phpmailer/src/PHPMailer.php';
	// require_once '../vendor/phpmailer/src/SMTP.php';


	if (isset($_POST['inputEmail'])) {
		$email = $_POST['inputEmail'];

		echo 'Email to ' . $email;

		



$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "tortoriciltd@gmail.com";
$mail->Password   = "Borderluna7";

$mail->IsHTML(true);
$mail->AddAddress('tortoricinico@gmail.com', 'tortorici-nico');
$mail->SetFrom("tortoriciltd@gmail.com", "tortorici-nico");
// $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
// $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
$content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}

	}
?>

</html>