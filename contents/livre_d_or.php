<?php    
if (isset($_SESSION['pseudo'])) {
    ?>
<div class="container">
    <h1>Bienvenue sur le livre d'OR</h1>
    <form  method="POST" >
        Prenom : <input type="text" name="prenom"><br><br>
        Commentaire : <textarea name='message' rows="8" cols="45">Veuillez laisser votre commentaire</textarea><br><br>
        <input type="submit" value="Envoyer" class="btn btn-success">
    </form>
</div>

<?php
//echo $_POST['message'];
//echo $_POST['prenom'];
    
}
else {
    header('Location: http://php-decouvertes.bwb/scripts/connexion.php');
    exit;
}
?>    
<!--
    <div class="container">
    <form method="POST" > 
            <input type="text" name="pseudo" placeholder="pseudo" /><br/>
        <!--    <input type="text" name="password" placeholder="password" /><br/> -->
            <input type="submit" value="Envoie!" /> 
    </form>         
    
</div>
-->
<?php

//}

?>

<?php ?>


<?php
//
//
//        
//if (($_SESSION['pseudo'] === "admin") && (($_SESSION['password'] === "admin"))) {
//    ?>
<!--
    <div class="container">
        <h1>Bienvenue //<?php  echo $_SESSION['pseudo'] ?> sur le livre d'OR</h1>
        <form  method="POST">
            <p>Nom : </p><input type="text" name="nom" placeholder="Nom"><br><br>
            <p>Prenom : </p><input type="text" name="prenom" placeholder="Prenom"><br><br>
            <p>Adresse mail : </p><input type="text" name="mail" placeholder="Adresse mail"><br><br>
            <textarea name="message" rows="6" cols="45" placeholder="Veuillez laisser votre commentaire"></textarea><br><br>
            <input type="submit" value="Envoyer" class="btn btn-success"><br><br>
        </form>
    </div>
-->
    <?php
//     
//        foreach($_POST as $value){
//            echo $value ."\n";
//        }
//} else {
//    ?>
<!--    
    <h1>Inscrivez-vous</h1>
    <div class="container">
        <form method="POST">
            <input type="text" name="pseudo" placeholder="pseudo" /><br />
            <input type="password" name="password" placeholder="password"/><br />
            <input type="submit" value="Inscription" class="btn btn-success">
        </form>
    </div>
-->
    <?php
//}
//?>
<!--    
    <div class="reponse col-md-6">
    <ul>
        <li>
-->
<?php
//echo "Nom : " . $_POST['nom'];?><!--<br></li><li><?php
//echo "Prenom : " . $_POST['prenom'];?><br></li><li><?php
//echo "Mail : " . $_POST['mail'];?><br></li><li><?php
//echo "Message : " . $_POST['message'];?><br></li><?php
//?>
<!--        
    </ul>
    </div>
-->
<?php 

        