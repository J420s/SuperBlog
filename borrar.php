<?php
    include_once "utils.php";
    delete_post($_GET['nombre']);
    header("Location: index.php");
?>