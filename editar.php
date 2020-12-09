<?php


require_once "tools/utils.php";
if(isAllowed()){
    get_frame('editar');
}
else{
    header("Location: ../index.php");
}

