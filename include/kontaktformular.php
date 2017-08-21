<?php

  require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

  //Henter info fra kontaktformular
  $navn = $_POST['navn'];
  $email = $_POST['email'];
  $emne = $_POST['emne'];
  $besked = $_POST['besked'];
  //Mail variabler laves
  $subject = "Henvendelse om $emne fra $navn";
  $formcontent="Fra: $navn <br> Email: $email <br> Emne: $emne <br> Besked: $besked";
  $recipient = "kennet@najbjerg.media";


//SMTP authenticator
	$mail = new PHPMailer(true); //New instance, with exceptions enabled

	$mail->IsSMTP();                           	// tell the class to use SMTP
	$mail->SMTPAuth   = true;                 	// enable SMTP authentication
	$mail->Port       = 587;                    // set the SMTP server port
	$mail->Host       = "mailout.one.com"; 		// SMTP server
	$mail->Username   = "kennet@najbjerg.media";// SMTP server username
	$mail->Password   = "Virkelyst6";           // SMTP server password

//Mail opbygges
	$mail->AddReplyTo("$email","$navn");

	$mail->From       = "$recipient";
	$mail->FromName   = "Kennet";

	$to = "$recipient";

	$mail->AddAddress($to);

	$mail->Subject  = "$subject";

	$mail->WordWrap   = 80; // set word wrap

	$mail->MsgHTML("$formcontent");
  
	$mail->IsHTML(true); // send as HTML
//Responds
try {
	$mail->Send();
	echo 'Message has been sent. <a href="http://najbjerg.media/projekt/2-1-2/kontakt">Gå tilbage til kontakt</a>';;
} catch (phpmailerException $e) {
	echo $e->errorMessage();
}

?>