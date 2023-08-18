<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "thebestpropfirm@gmail.com"; // Remplacez par votre adresse email
    $subject = "Nouveau message depuis le site web";
    $message = "Un visiteur du site web vous a envoyé un email.";

    $headers = "From: webmaster@example.com" . "\r\n" .
               "Reply-To: webmaster@example.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);
}
?>
