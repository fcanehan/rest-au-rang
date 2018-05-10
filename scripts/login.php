<?php
session_start();
if (!isset($_SESSION['pseudo'])) {
    $_SESSION['pseudo'] = $_POST['pseudo'];    
}
   header('Location: http://php-decouvertes.bwb');
    exit;