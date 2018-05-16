<body>
<?php
if(isset($_GET['page']) == false){
    include 'contents/accueil.php';
}else{
    include 'contents/' .$_GET['page'];
}

?>
</body>
