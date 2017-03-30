<?php

require_once 'PHPMailer-master/PHPMailerAutoload.php';
//Angaben fuer die zu versende Mail
$mailEmpfaenger = 'testenfurinternettech@gmx.de';
$headers = 'From: Simonte Salvatore <testenfurinternettech@gmx.de>';
$mailBetreff = 'Kontakt von La Bruschetta Homepage';
$mailText = "";
$eingabeOk = 'true';

// Eingabe des Kontaktformulars uebernehmen
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Bitte Ihre Vor und Nachname eingeben";
        $eingabeOk='false';
    } else {
        $name = test_input($_POST["name"]);
        // cPruefen ob nur buchstaben enthält
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Nur Buchstaben und leer Zeichen sind erlaubt";
            $eingabeOk='false';
        }else if ($eingabeOk){
            $eingabeOk='true';
        }
    }
    if (empty($_POST["email"])) {
        $emailErr = "Bitte Ihre Email eingeben";
        $eingabeOk='false';
    } else {
        $email = test_input($_POST["email"]);
        // schauen ob die emai auch richtig eingegeben ist
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Ungültige Email";
            $eingabeOk='false';
        }else if ($eingabeOk){
            $eingabeOk='true';
        }
    }
    //schauen ob die telefon numer nur zahlen enthält
    if (empty($_POST["telefon"])) {
        $telefonErr= "Bitte was eingeben";
        $eingabeOk='false';
    } else {
        $telefon = test_input($_POST["telefon"]);
        // check if URL address syntax is valid
        if (! preg_match("/^[ +0-9]+$/",$telefon)) {
            $telefonErr = "Ungültige Nummer";
            $eingabeOk='false';
        }else if ($eingabeOk){
            $eingabeOk='true';
        }
    }
    if (empty($_POST["comment"])) {
        $mailtext = "";
        $eingabeOk='false';
    } else {
        $mailtext = test_input($_POST["comment"]);
        $eingabeOk='false';
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (  ($vorname == "") || ($nachname == "") || ($telefon == "") || ($email == "")){
    $eingabeOk = false;
}
//Pruefen ob eingaben ok und mail versenden
if($eingabeOk)
{
    $mailText .= "Vorname: ".$name .",\n\n";
    $mailText .= "Telefon: ".$telefon ."\n";
    $mailText .= "E-Mail: ".$email ."\n".$mailtext;
    if(get_magic_quotes_gpc()) {
        // eventuell eingefügte Backslashes entfernen
        $mailtext = stripslashes($mailtext);
    }
    $mail = new PHPMailer;
    // $mail->SMTPDebug = 3;
    //SMTP aktivieren
    $mail->isSMTP();
    // Verbindungsport festlegen
    $mail->SMTPAuth = true;
    // SMTP-Server
    $mail->Host = 'mail.gmx.net';
    $mail->Port = 587;
    // Verbindungssicherheit setzen ( SSL und TLS möglich )
    $mail->SMTPSecure = 'SSL';
    // SMTP Benutzer
    $mail->Username = 'testenfurinternettech@gmx.de';
    // SMTP Benutzer Passwort
    $mail->Password = '';
    // Absender Adresse setzen
    $mail->From ='testenfurinternettech@gmx.de';
    // Empfänger Adresse und Alias hinzufügen
    $mail->addAddress($email);
    $mail->addAddress('testenfurinternettech@gmx.de');
    // $mail->addAddress('testenfurinternettech@gmx.de');
    // Betreff
    $mail->Subject = $mailBetreff;
    // Der Nachrichteninhalt
    $mail->Body = $mailText;
    // Mail versenden und Versanderfolg merken
    $mailSent = mail($mailEmpfaenger, $mailBetreff, $mailText, $headers);
    //send the message, check for errors
    if (!$mail->send()) {
    } else {

    }
    //$mailSent = $mail->send();
}