<?php
$jsonMessage = file_get_contents("../data/last_message.json");
$message = json_decode($jsonMessage);
foreach ($message as $valueMessage) {
    echo "Le message est : ".$valueMessage;
}