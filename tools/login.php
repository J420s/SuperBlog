<?php

if(isset($_POST['username'])){
    if($_POST['username']=='admin' && $_POST['password']=='admin'){
        session_start();
        $_SESSION['auth'] = true;
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['info'] = "Logged succesfully!";
        header("Location: ../index.php");
    }
    else{   
        session_start();
        $_SESSION['error'] = "Wrong username or password!";
        $_SESSION['auth'] = false;
        header("Location: ../index.php");
    }
}