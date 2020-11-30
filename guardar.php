<?php
    include_once "utils.php";
    save_post(code($_POST['title']),$_POST['description']);
    header("Location: index.php");
?>