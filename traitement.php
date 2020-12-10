<?php

session_start();

if (!empty($_POST["name"])) {
    $name = htmlspecialchars($_POST["name"]);  
} else {
    $_SESSION["nomvide"] = "Le champ doit être renseigné";
    //redirection
    header("Location:http://localhost/maquette_vibes/index.php#ancre");
    exit();
}

if (!empty($_POST["email"])) {
    $email = htmlspecialchars($_POST["email"]);
} else {
    $_SESSION["mailvide"] = "Le champ doit être renseigné";
    //redirection
    header("Location:http://localhost/maquette_vibes/index.php#ancre");
    exit();
}

if (!empty($_POST["message"])) {
    $message = htmlspecialchars($_POST["message"]);
} else {
    $_SESSION["messagevide"] = "Le champ doit être renseigné";
    //redirection
    header("Location:http://localhost/maquette_vibes/index.php#ancre");
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $_SESSION["invalidmail"] = "L'adresse mail est invalide";
    header("Location:http://localhost/maquette_vibes/index.php#ancre");
    exit();
}

$to = "florian.waller@stagiaire-elan.fr";
$subject = $_POST["subject"];
$message = "Voici la demande de la part de " . $name . " via le site Peaky Blinders.com: \r\n" . $message;
$headers = "From: " . $name . " <" . $email . "> <". $phone . ">" . "\r\n" .
    "Reply-To " . $email;
if (mail($to, $subject, $message, $headers)) {
    $_SESSION["success"] = "Message envoyé";
    //redirection
    header("Location:http://localhost/maquette_vibes/index.php#ancre");
    exit();
} else {
    $_SESSION["error"] = "Erreur d'envoi du message, réessayez";
}   //redirection
header("Location:http://localhost/maquette_vibes/index.php#ancre");
exit();

?>
