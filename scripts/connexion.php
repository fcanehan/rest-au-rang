

<link href="connexion.css" rel="stylesheet" type="text/css"/>
<div class="container connex">
    <p>Veuillez vous connecter</p>
    <?php


    if (!isset($_COOKIE['username'])){
?>    

    <form method="POST" action="login.php"> 
        <input type="text" name="username" placeholder="pseudo" /><br/>
        <input type="password" name="password" placeholder="password" /><br/> 
        <input type="submit" value="Connexion!" /> 
    </form>         
    </div>
<?php
    }else{
        //header('location: http://php-decouvertes.bwb');
    }

