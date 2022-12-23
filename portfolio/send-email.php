<!DOCTYPE HTML>
	<html lang="fr">
		<head>
			<title>Guillaume Loir</title>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="style/styles.css">
			<link rel="icon" href="icone/portfoliot.png">
		</head>
		<body>
            

<h1 class="Nom">Erreur</h1>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$menu=yaml_parse_file('menu.yaml');
$secret=yaml_parse_file('secret/topsecret.yaml');

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $secret['addr_mail'];                 // SMTP username
    $mail->Password = $secret['mdp'];                // SMTP password
    $mail->SMTPSecure = 'STARTTLS';                           
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($_POST['mail'], $_POST['name']);
    $mail->addAddress('guillaume.loir@caensup.fr');
                                // Adresse de réception



    //Content
    $mail->isHTML(true);                                 // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['civi'].'</br>';
    $mail->Body    .= $_POST['profil'].'</br>';
    $mail->Body    .= $_POST['text'];

    $mail->send();
    header('Location: validation.php');
    exit();
} catch (Exception $e) {
    echo '<h1 class="post-contact">Le Formulaire est pas rempli correctement.</h1>';
    echo '<h1 class="post-contact">Mailer Error: Vous avez pas bien compléter les champs avec * ( ' . $mail->ErrorInfo.')</h1>';
    echo '<h1 class="post-contact">Merci de retourner sur la page Contact pour le compléter comme il se doit ;)</h1>';
    echo '<div class="btn-btn-default2">';
    echo '<a href="contact.php" class="">'.$menu['menu']['contact'].'</a>';
    echo '</div>';
}
?>