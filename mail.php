<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Récupération des données du formulaire
$prenom = $_POST['firstname'] ?? '';
$nom = $_POST['name'] ?? '';
$entreprise = $_POST['enterprise'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

$mail = new PHPMailer(true);

try {
    //Configuration du serveur
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'alois.zweber@gmail.com';
    $mail->Password   = 'mnwuouunmxegcjvp';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    //Expéditeur
    $mail->setFrom('alois.zweber@gmail.com', 'Alois Zweber');
    //Destinataire
    $mail->addAddress('alois.zweber@hotmail.com');
    $mail->addReplyTo($email, $nom);

    //Contenu
    $mail->CharSet = 'UTF-8'; // Définit l'encodage des caractères à UTF-8
    $mail->Encoding = 'base64'; // Définit l'encodage du contenu à base64 (optionnel, souvent utilisé pour les e-mails en HTML)
    $mail->isHTML(true);
    $mail->Subject = "Proposition d'entrevue pour le poste de Développeur Web par $nom";
    $mail->Body    = "<p>Bonjour,</p>
    <p>Vous avez reçu une proposition d'entrevue de la part de $prenom $nom pour le poste de Développeur Web.</p>
    <p><strong>Coordonnées de l'employeur :</strong></p>
    <ul>
        <li><strong>Nom :</strong> $prenom $nom</li>
        <li><strong>Email :</strong> <a href='mailto:$email'>$email</a></li>
    </ul>
    <p><strong>Détails de la proposition :</strong></p>
    <p>$message</p>";

    $mail->AltBody = "Bonjour,\n\nVous avez reçu une proposition d'entrevue de la part de $prenom $nom pour le poste de Développeur Web.\n\nCoordonnées de l'employeur :\n- Nom : $prenom $nom\n- Email : $email\n\nDétails de la proposition :\n$message\n\nMerci de bien vouloir prendre contact avec le candidat pour convenir des modalités de l'entrevue.\n\nCordialement,\n$prenom $nom";


    // Attention: la désactivation SSL est provisoire pour les tests. à résoudre !!
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->send();
    echo 'Le message a été envoyé';
    // Rediriger vers une page de confirmation
    header('Location: confirmation.php');
    exit();
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}";
    // Rediriger vers une page d'erreur
    header('Location: error.php');
    exit();
}
