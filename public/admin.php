<?php
$jsonMessage = file_put_contents("../data/last_message.json");
$message = json_decode($jsonMessage);
echo $message;