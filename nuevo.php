
<?php

require "tools/utils.php";
savePage('nuevo.php');

if(isAllowed()){
    get_frame('nuevo');
}
else{
    header("Location: ../index.php");
}

