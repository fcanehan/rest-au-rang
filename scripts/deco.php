<?php
session_start();

if(isset($_SESSION['pseudo'])){
    session_destroy();
    header('Location: http://php-decouvertes.bwb');
}
