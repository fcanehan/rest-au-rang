<?php


if(isset($_COOKIE['username'])){
    setcookie("username", 0, time()+60);
    //header('Location: http://php-decouvertes.bwb');
}else{
    echo "test deco";
}
