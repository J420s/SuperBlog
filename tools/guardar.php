<?php
    include_once "utils.php";
    if(!isset($_SESSION)) session_start();
    save_post(code($_POST['title']),$_POST['description']);

    $history = $_SESSION['history'];
    end($history);
    $page = prev($history);

    header("Location: ../" . $page);
    
?>