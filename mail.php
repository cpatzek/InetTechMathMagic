
<?php
include('master.php');
require_once 'phpmail/PHPMailerAutoload.php';

//Für den php-smpt server
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

//SMTP-Server einrichten
$mail->isSMTP();                                     
$mail->Host = 'smtp.web.de';                           
$mail->SMTPAuth = true;                              
$mail->Username = 'mathe-magier@web.de';                 
$mail->Password = 'KI31032017';                          
$mail->SMTPSecure = 'tls';                            // tls oder ssl 
$mail->Port = 587;                                    

$mail->setFrom('mathe-magier@web.de', 'Mathe-Magier-Seite');
//$mail->isHTML(true);                                  // email-Format html
$mail->Subject = 'Mathe-Magier-Kontakt';
$mail->AltBody = 'Mathe-Magier-Kontakt'; //Text für nicht html-body

$name = $_POST['uname'];
$emailadr = $_POST['emailadr'];
$nachricht = $_POST['nachricht'];

echo('Vielen Dank für Ihre Frage, wir melden uns so schnell wie möglich.');
echo ($name);
echo ($emailadr);
echo ($nachricht);

$mail->addAddress('mathe-magier@web.de');     //--->>> Name
$mail->Body    = $nachricht; //-->Nachricht
$mail->addCC($emailadr, $name);


//if(!$mail->send()) {
//    echo 'Message could not be sent.';
//    echo 'Mailer Error: ' . $mail->ErrorInfo;
//} else {
//    echo 'Message has been sent';
//}

?>