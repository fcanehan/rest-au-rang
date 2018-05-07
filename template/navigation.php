<br>

<?php 
echo "ici devrait etre intégrée la barre de nav";
// $contents est le chemin du repertoire contents    
    $contents = "/var/www/html/serveurweb/php-decouvertes.bwb/contents";
// $dossier ouvre la liaison vers $contents    
    $dossier = opendir($contents);
?>     
     
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav"> 
        <?php  
// tant qu il restue du contenu dans  $dossier il est stocké dans $entry        
        while(($entry = readdir($dossier)) !== false){
// affiche le contenu  de $entry si ce contenu est different de "." ou ".."           
            if($entry !== "." && $entry !== ".."){
// $name utilise basename pour supprimer l'argument specifié, soit ".php"
                $name = basename($entry,".php");
// suppression des "_" dans les ancres $name                
//                if (strpos($name,"_") !== false){
//                    if ($goodname = strpos($name,"e_") !== false){
//                        
//                    }else if (($goodname = strpos($name,"d_") !== false){
//                    
//                }
// si $entry est $accueil, traitement pour renvoyer directement sur accueil.php sans charger l'url
                if($entry == "accueil.php"){
                    ?>
                    <li><a href="/"><?= $name?> </a></li>
                <?php    
                }else{
// si $entry est autre que accueil.php, traitement pour afficher le lien spécifié                     
                ?>                        
                <li><a href="/?page=<?=$entry?>"><?= $name?> </a></li>
                <?php
                }
            }
        }
        ?>
    </ul>
  </div>
</nav>
