<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $to =
// Récupération des données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


// Préparation de l'email
$to = "afischer@lerebours.org";
$subject = "Nouveau message depuis le formulaire de contact";
$body = "Nom : " . $name . "\r\n";
$body .= "Email : " . $email . "\r\n";
$body .= "Message : " . $message;

// Envoi de l'email
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";


    echo 'Votre message a été envoyé avec succès.';

}
?>
