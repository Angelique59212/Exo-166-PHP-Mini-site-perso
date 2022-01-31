<?php
$files = json_decode(file_get_contents('../data/last_message.json'));
$name = trim(strip_tags($_POST['name']));
$message = trim(strip_tags($_POST['message']));
$userMail = trim(strip_tags($_POST['mail']));

//if (isset($_POST['submit']) && isset($_POST['mail']) && isset($_POST['message'])) {
//    $to = trim(strip_tags($_POST['mail']));
//    $message = trim(strip_tags($_POST['message']));
//    $subject = "Email a envoyé";
//    if (filter_var($to, FILTER_VALIDATE_EMAIL)) {
//        if (strlen($message <= 500)) {
//            if (mail($to, $subject, $message)) {
//                echo "Email envoyé avec succès vers $to ...";
//            } else {
//                echo "Échec de l'envoi de l'email...";
//            }
//        }
//    }
//}
if (isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['message'])) {
    $files[] = [$name,$message];
}
if (isset($_POST['mail'])) {
    $to = 'dehainaut.angelique@orange.fr';
    $subject = "Vous avez un message";
    $headers = array(
        'Reply-to' => $userMail,
        'X-Mailer' => 'PHP/' . phpversion()
    );
    if (filter_var($userMail, FILTER_VALIDATE_EMAIL)) {
        if (strlen($message <= 250)) {
            if (mail($to, $subject, $message, $headers, $userMail)) {
                echo "Le mail est bien envoyé ";
            } else {
                echo "Erreur lors de l'envoi";
            }
        }
    }
}

$jsonMessage = file_put_contents("../data/last_message.json", json_encode($files));

//header('Location: /../public/?page=contact');