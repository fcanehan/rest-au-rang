<?php

function add_user(){
$cheminUsers = "/home/fabien/ServeurWeb/php-decouvertes.bwb/datas/users.json";
$listeUsers = file_get_contents($cheminUsers);
$tableauUsers = json_decode($listeUsers, true);

if ($tableauUsers === NULL){
    $tableauUsers = array();
}


$newuser = array(
    //"id" => ,
    "username" => $_POST['username'],
    "password" => $_POST['password'],);

$bool = false;

    foreach ($tableauUsers as $user){
if($newuser['username'] === $user['username']){
    $bool = true;
}
}
echo "bool:".$bool;
if($bool){
    echo "vous êtes déjà inscrit espece de con";
}else{
    array_push($tableauUsers, $newuser);
    $newListeUsers = json_encode($tableauUsers);
    file_put_contents($cheminUsers, $newListeUsers);
    }
}

function get_user($user,$password){
$cheminUsers = "/home/fabien/ServeurWeb/php-decouvertes.bwb/datas/users.json";
$listeUsers = file_get_contents($cheminUsers);
$tableauUsers = json_decode($listeUsers);
$test = $_POST['username'];
echo $user;
echo $password;
foreach ($tableauUsers as $user){
if($user === $tableauUsers['username'] AND ($password === $tableauUsers['password'])){
    echo "bongo";
}else{
    echo "you loose";
}
}

//    if (($_POST["username"]=== $tableauUsers['username']) AND ($_POST['password'] === $tableauUsers['password'])){
//    header('Location: http://php-decouvertes.bwb');
//    
//}else{
//    echo "missed !";
//    header('Location: http://php-decouvertes.bwb/registration.php');
//    
//}
}