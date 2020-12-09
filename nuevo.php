
<?php

require "tools/utils.php";

if(isAllowed()){
    get_frame('nuevo');
}
else{
    header("Location: ../index.php");
}

