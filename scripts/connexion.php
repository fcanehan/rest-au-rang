<?php

    echo "Veuillez vous inscrire";
    if (!isset($_SESSION['pseudo'])){
?>    
    <div class="container">
        <form method="POST" action="login.php"> 
            <input type="text" name="pseudo" placeholder="pseudo" /><br/>
        <!--    <input type="text" name="password" placeholder="password" /><br/> -->
            <input type="submit" value="Envoie!" /> 
    </form>         
    
    </div>
<?php
    }else{
    echo "blablabla";
    }

