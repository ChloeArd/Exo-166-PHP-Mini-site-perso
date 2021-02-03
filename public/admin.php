<?php
$from      = trim($_POST["email"]);
$message = htmlentities(trim($_POST["message"]));
echo "De : ".$from;
echo "Le message : ".$message;