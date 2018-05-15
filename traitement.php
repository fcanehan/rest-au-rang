<?php

print_r($_POST);

/*
*recupere les arguments passés via la requête de type POST et le protocole HTTP 
*a partir d'un formulaire pour les stocker dans un tableau associatif. 
*
* la requete de type POST est le mecaniosme par lequel un client envoie des donnes sur un serveur
* par le biais du protocole HTTP.
* Coté serveur les données sont stockées dans une variable superglobale (tableau associatif) nommée : $_POST avant       *  d'être traitée
* Coté client les données sont  encapsulées et soumises dans la requete via un formulaire.
* les données sont référencées de la manière suivante : la propriété name correspond à la clef, la propriété value        * correspond à la valeur 
*/

/*
*après avoir expliqué comment fonctionnait le POST, vous allez affichez la page sur index.php si le username est dieu et *le  mdp est g0D. dans le cas contraire c'est une redirection vers formulaire .php
*
*/

if (($_POST["username"]=== "dieu") AND ($_POST["password"] === "g0D")){
    header('location: index.php');
    
}else{
    header('location: formulaire.php');
    echo "missed !";
}
