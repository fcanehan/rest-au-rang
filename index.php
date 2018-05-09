<?php session_start();
//$_SESSION['pseudo'] =  'admin';
//$_SESSION['password'] = 'admin';
//$_SESSION['pseudo'] = $_POST['pseudo'];
//$_SESSION['password'] = $_POST['password'];

//$_SESSION['time']  = time();

 /*
démarrage du TP barre de nav php -- restologue
*/

include 'template/header.php';

include 'template/navigation.php';

include 'template/content.php';
var_dump($_SESSION);
include 'template/footer.php';






