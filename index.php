<?php
session_start();
$_SESSION['pseudo'] =  'admin';
$_SESSION['password'] = 'admin';
//var_dump($_SESSION);
 /*
démarrage du TP barre de nav php -- restologue
*/

include 'template/header.php';

include 'template/navigation.php';

include 'template/content.php';

include 'template/footer.php';


//$_SESSION['pseudo'] = $_POST['prenom'];
//$_SESSION['password'] = $_POST['password'];
//$_SESSION['time']  = time();



