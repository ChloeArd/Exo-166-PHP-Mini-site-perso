<?php

$jsonMessage = file_put_contents("../data/last_message.json", $_POST);
json_encode($jsonMessage);

$to = "chloe.ardoise@gmail.com";
$from      = trim($_POST["email"]);
$subject = 'Sujet';
$message = htmlentities(trim($_POST["message"]));
$headers = array(
    "Reply-To" => $from,
    "X-Mailer" => "PHP/".phpversion()
);


if (isset($_POST["email"], $_POST["message"])){
    mail($to, $subject, $message, $headers, "-f ".$from);
}

header('Location: admin.php');