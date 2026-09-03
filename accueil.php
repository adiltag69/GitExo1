<?php
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
echo "Bonjour  ",$nom;


$login = $_POST['...'];
$mdp = $_POST['...'];
$host = $_SERVER['HTTP_HOST']; // on récupère le nom de l'hôte
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

if ($login == 'admin' AND $mdp == 'azerty' ) {
 header("Location: http://$host$uri/profil.html"); // vers profil.html
} else {
 header("Location: http://$host$uri/index.html); // vers index.html
}


?>

