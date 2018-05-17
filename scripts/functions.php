<link href="../style.css" rel="stylesheet" type="text/css"/>
<?php
// cette fonction construit la barre de nav dynamiquement selon le contenu du repertoire contents
function getNavbar() {
 
// l5 a l8 : stocke le chmin du repertoire, l'ouvre et tant qu'il trouve du contenu, il applique un traitement   
 $contents = $_SERVER['DOCUMENT_ROOT']."/contents";
    $dossier = opendir($contents);
    while (($entry = readdir($dossier)) !== false) {
/*        if (is_file($entry)){ */
// supprime l'extension .php dans la variable        
            $name = basename($entry, ".php");

// si le contenu est different de . ou .., il fait un traitement
            if ($entry !== "." && $entry !== "..") {
                echo " <li class='li_nav'><a href='/?page=".$entry."'>".$name.'</a></li>';

            } else if ($entry == "accueil.php") {

                echo "<li class='li_nav'><a href='/'>".$name."</a></li> ";
            } 
            }/*else{
                //getDropdown();
                $cartes = $contents . "/cartes";
                    $menus = opendir($cartes);
                    foreach ($menus as $menu){
            $name = basename($menu, ".php");
            if ($menu !== "." && $entry !== "..") {
                echo " <li class='li_nav'><a href='/?page=".$entry."'>".$name.'</a></li>';
            }*/

            if (isset($_COOKIE['username'])) {

                echo "<li class='li_nav'><a href='/scripts/deco.php'>deco</a></li>";
            } else {

                echo "<li class='li_nav'><a href='/scripts/connexion.php'>connexion</a></li>";
            }

    
    }
//}

// cette fonction recupere les messages postes et les enregistre dans le fichier messages.json
function getMessages() {
// recupere le contenue du fichier mesages.json
    $cheminMessages = "/home/fabien/ServeurWeb/php-decouvertes.bwb/datas/messages.json";
    $listeMessage = file_get_contents($cheminMessages);

// decode le fichier pour en faire un tableau associatif
    $listeMessageTableau = json_decode($listeMessage, TRUE);
    
    if ($listeMessageTableau === NULL) {
        $listeMessageTableau = array();
    }
    
// creation d'un array pour stocket le contenu poste dans le livre d'or    
    $message = array(
        "prenom" => $_POST['prenom'],
        "message" => $_POST['message']
    );

// on remplit le tableau decode avec la variable $message    
    array_push($listeMessageTableau, $message);

//la variable est recodee au format json et ecrase le fichier precedent
    $listeMessages = json_encode($listeMessageTableau);
    file_put_contents($cheminMessages, $listeMessages);
    header('Location: http://php-decouvertes.bwb/?page=livre_d_or.php');
}

// fonction affichant les messages postes dans le livre d'or
function show(){
    $cheminMessages = "/home/fabien/ServeurWeb/php-decouvertes.bwb/datas/messages.json";
    $listeMessage = file_get_contents($cheminMessages);


    $listeMessageTableau = json_decode($listeMessage, TRUE);

// si le tableau est different de vide, la boucle affiche les elements
    if ($listeMessageTableau !== NULL ){ 
    foreach($listeMessageTableau as $message){ 
        ?> 
        <div class="container"> 
            <div class="col-md-6 liv_or"> 
                <card>
                    <p>prenom : <?=$message['prenom']?>;</p> 
                    <p>message : <?=$message['message']?>;</p> 
                </card>    
            </div> 
        </div> 
        <?php 
    }
}
}