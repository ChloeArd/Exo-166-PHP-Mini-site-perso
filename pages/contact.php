<?php
/* on affiche  les erreurs, si vous avez une erreur 500, regardez dans votre console */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/* nous verrons plus tard comment se passer de ces 3 lignes */


// on inclue le fichier qui contient nos fonctions
require __DIR__ . '/../lib/functions.php';

// l'exemple avec le header, à vous de jouer pour le reste
getPart('header');
?>

<section>
    <h1>Contact</h1>

    <img id="mail1" src="https://tse3.mm.bing.net/th?id=OIP.O6RAzz3uHCKekjSdTaBctwHaHa&pid=Api&P=0&w=300&h=300" alt="Mail">
    <div id="containerContact">
        <form method="post" action="../public/save.php" >
            <div>
                <label for="name">Nom :</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="vorname">Prénom :</label>
                <input type="text" name="vorname" id="vorname" required>
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="message">Message :</label>
                <textarea name="message" id="message" required></textarea>
            </div>
            <input id="send" type="submit" value="Envoyer">
        </form>
    </div>

</section>