<?php
session_start();



if (isset($_SESSION['pseudo'])) {
    ?>
<div class="container msgOr">
    <h1>Bienvenue sur le livre d'OR</h1>
    <form  method="POST" action="/scripts/add_message.php">
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
    ?>
<p> Pour écrire dans le livre d'or, veuillez vous <a href='../scripts/connexion.php'>connecter</a></p>
<?php
}


   
//$cheminMessages = "/home/fabien/ServeurWeb/php-decouvertes.bwb/datas/messages.json"; 
//$listeMessage = file_get_contents($cheminMessages); 
//$listeMessageTableau = json_decode($listeMessage, TRUE); 
//include ('../scripts/functions.php');
show(); 

//var_dump($listeMessageTableau);
//if ($listeMessageTableau !== NULL ){ 
//    foreach($listeMessageTableau as $message){ 
        ?> 
 <!--       <div class="container"> 
            <div class="liv_or"> 
                <p>prenom : //<?=$message['prenom']?>;</p> 
                <p>message : //<?=$message['message']?>;</p> 
            </div> 
        </div> -->
        <?php 
//    }
//}


