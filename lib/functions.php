<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent() {
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	}
	elseif(isset($_GET['page']) && $_GET['page'] == "bio") {

        include __DIR__.'/../pages/bio.php';
    }
	elseif(isset($_GET['page']) && $_GET['page'] == "contact") {

        include __DIR__.'/../pages/contact.php';
    }
}

function getUserData() {
    $file = file_get_contents('../data/user.json');
    $message = json_decode($file);
    foreach ($message as $key){
        if(is_array($key)) {
            foreach ($key as $index2) {
                foreach ($index2 as $index3 => $index4) {
                    echo $index4."<br>";
                }
            }
        }
        else {
            echo $key."<br>";
        }
    }
}


function getPart($name) {
	include __DIR__ . '/../parts/'. $name . '.php';
}

