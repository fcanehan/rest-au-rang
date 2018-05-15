<?php

session_start();

include './fonctions_users.php';

//$cheminUsers = "/home/fabien/ServeurWeb/php-decouvertes.bwb/datas/users.json";
$listeUsers = file_get_contents("/home/fabien/ServeurWeb/php-decouvertes.bwb/datas/users.json");

$tableauUsers = json_decode($listeUsers,TRUE);
//
    foreach ($tableauUsers as $users) {
        
        if($users['username'] === $_POST['username'] AND ($users['password'] === $_POST['password'])){
            $_SESSION['pseudo'] = $_POST['username'];
            header('Location: http://php-decouvertes.bwb');
            
        }else{
            echo "identification erronée";
    }
}
    
//get_user($_POST['username'],$_POST['password']);
//if (!isset($_SESSION['pseudo'])) {
//    $_SESSION['pseudo'] = $_POST['username'];    
//}
//   header('Location: http://php-decouvertes.bwb');
//    exit;