<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/                 bootstrap.min.css"integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">
    </head>
    <body>
        <h1> affichage du dossier serveurweb et de ses sous-dossiers</h1>
        <div id="content">
            <div class="container">
                <div class="row">
                    <?php         
// INITIALISATION DES VARIABLES
// variable dh chemin initial
    
                    $path = "/var/www/html/serveurweb/";                    
                    
// si un nouveau dossier est ouvert, $path devient ce chemin mis à jour, concaténé avec un '/' en fin de ligne                    
                    if(isset($_GET['chemin'])){
                    $path = $_GET['chemin']."/";
                    }
// variable qui stocke dans un tableau le contenu de $path
                 
                   $serveurweb = scandir($path);
// mise en place de l'icone et fonction de retour au dossier parent
    // "explode" possède 3 arguments
        // '/' decoupe la variable $path à chaque fois qu'un '/' apparait, ce même '/' est supprimé de la value
        // le second argument est la variable traitée, ici $path
        // le troisème argument pécise s'il faut cnserver toutes les valeurs ou en supprimer, ici on en enlève 2
            //  à la ligne 35, on voit que le chemin $path termine par un '/'
            // ce traitement transforme donc "$path="/var/www/html/serveurweb/test/" en "$path="/var/www/html/serveurweb"
                    
                        $previous = explode ('/',$path,-2); 
    // 'implode" reconstruit la chaine en placant entre chaque valeur du tableau $previous le caractère spécifié : '/'
                        $parent = implode ('/',$previous); 
                        ?>  
                        <a href="?chemin=<?php echo $parent;?>">                       
                            <i class="fas fa-angle-double-left"></i>
                        </a>  
                    <?php 
// boucle qui permet un traitement à chaque valeur du tableau $serveurweb
                    foreach ($serveurweb as $key => $value){  
// supprime les dossier "." et ".."          
                        if(!in_array($value,array(".",".."))){              
                            ?>
                            <div class="col-md-3">
                            <?php
// en cas d'un dossier, il devient un enfant ouvrable par un clic, sa value etant concaténé à $path pour former un nv chemin
                            if (is_dir($path.$value)){                                 
                                ?> 
                                <a href="?chemin=<?php echo $path.$value;?>">                      
                                    <i class="fas fa-folder-open"></i>
                                </a>
                                <?php
                                    echo $value; 
                                    }
// en car d'un fichier, il est affiché mais n'est pas ouvrable
                                    elseif(is_file($path.$value))
                                    {
                                    ?><i class="fas fa-file"></i><?php
                                    echo $value;
                                    }  
                            ?>
                      
                            </div>
                            <?php 
                        } 
                    }  
                    ?>
               </div>
            </div>
        </div>
    </body>
</html>
