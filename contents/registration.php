<?php

echo "Pour vous inscrire, c'est ici";

?>
<div class="container">
    <h1>formulaire d'inscription</h1>
    <form  method="POST" action="./scripts/inscription.php">
        Username : <input type="text" name="username"><br><br>
        Mot de Passe : <input type="password" name="password">
        <input type="submit" value="Envoyer" class="btn btn-success">
    </form>
</div>