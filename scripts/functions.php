<?php

function getNavbar() {


    $contents = $_SERVER['DOCUMENT_ROOT']."/contents";
    $dossier = opendir($contents);

    echo "<nav class='navbar navbar-expand-lg navbar-light bg-light'> ";

    echo " <div class='container' >";
    echo"      <ul <!--class=' navi navi_bg '-->";

    while (($entry = readdir($dossier)) !== false) {
        $name = basename($entry, ".php");
        if ($entry !== "." && $entry !== "..") {
            echo " <li class='li_nav'><a href='/?page=".$entry."'>".$name.'</a></li>';
            
        } else if ($entry == "accueil.php") {

            echo "<li class='li_nav'><a href='/'>".$name."</a></li> ";
        } 
    }

    if (isset($_SESSION['pseudo'])) {

        echo "<li class='li_nav'><a href='/scripts/deco.php'>deco</a></li>";
    } else {

        echo "<li class='li_nav'><a href='/scripts/connexion.php'>connexion</a></li>";
    }

    echo "</ul>";
    echo" </div> ";
    echo "</nav> ";
}

function getMessages() {
//    $cheminMessages = "/home/fabien/ServeurWeb/php-decouvertes.bwb/datas/messages.json" ; 
//    $listeMessage = file_get_contents($cheminMessages); 
//    $listeMessageTableau = json_decode($listeMessage, TRUE);
//    return $listeMessageTableau;

    $cheminMessages = "/home/fabien/ServeurWeb/php-decouvertes.bwb/datas/messages.json";
    $listeMessage = file_get_contents($cheminMessages);


    $listeMessageTableau = json_decode($listeMessage, TRUE);

//$listeMessageTableau =  getMessages();


    if ($listeMessageTableau === NULL) {
        $listeMessageTableau = array();
    }
//echo $listeMessageTableau['prenom'].' '.$listeMessageTableau['message'];
    $message = array(
        "prenom" => $_POST['prenom'],
        "message" => $_POST['message']
    );

    array_push($listeMessageTableau, $message);

    $listeMessages = json_encode($listeMessageTableau);
    file_put_contents($cheminMessages, $listeMessages);
    var_dump($listeMessages);
    header('Location: http://php-decouvertes.bwb/?page=livre_d_or.php');
}


function show(){
    $cheminMessages = "/home/fabien/ServeurWeb/php-decouvertes.bwb/datas/messages.json";
    $listeMessage = file_get_contents($cheminMessages);


    $listeMessageTableau = json_decode($listeMessage, TRUE);
    if ($listeMessageTableau !== NULL ){ 
    foreach($listeMessageTableau as $message){ 
        ?> 
        <div class="container"> 
            <div class="liv_or"> 
                <p>prenom : <?=$message['prenom']?>;</p> 
                <p>message : <?=$message['message']?>;</p> 
            </div> 
        </div> 
        <?php 
    }
}
}