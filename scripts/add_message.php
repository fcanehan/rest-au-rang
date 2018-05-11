<?php 
$cheminMessages = "/home/fabien/ServeurWeb/php-decouvertes.bwb/datas/messages.json" ; 
$listeMessage = file_get_contents($cheminMessages); 

//$listeMessage = file_get_contents("/home/fabien/ServeurWeb/php-decouvertes.bwb/datas/messages.json");
$listeMessageTableau = json_decode($listeMessage, TRUE); 
if ($listeMessageTableau === NULL){
    $listeMessageTableau = array();
}    
//echo $listeMessageTableau['prenom'].' '.$listeMessageTableau['message'];
$message = array( 
    "prenom" => $_POST['prenom'], 
    "message" => $_POST['message']         
    ); 
 
array_push($listeMessageTableau,$message); 
 
$listeMessages = json_encode($listeMessageTableau); 
file_put_contents($cheminMessages, $listeMessages); 
var_dump($listeMessages);
header('Location: http://php-decouvertes.bwb/?page=livre_d_or.php');