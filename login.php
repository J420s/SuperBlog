<?php

if(isset($_POST['username'])){
    if($_POST['username']=='admin' && $_POST['password']=='admin'){
        session_start();
        $_SESSION['auth'] = true;
        $_SESSION['username'] = $_POST['username'];
        header("Location: index.php");
    }
    else{
        $_SESSION = array();
        session_destroy();
        header("Location: index.php");
    }
}