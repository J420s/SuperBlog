<?php


function save_post($title,$description){
    $path = './posts/'.$title;
    file_put_contents($path,$description);
}
   
function show_post($file_name){
    $path= './posts/'.$file_name;
    $file = file_get_contents($path);
    //transformamos los saltos de linea en etiquetas <br>
    $text = nl2br($file);
    return $text;
}

function delete_post($file_name){
    $path= './posts/'.$file_name;
    unlink($path);
}

function edit_post($file_name){
    $path= './posts/'.$file_name;
    $file = file_get_contents($path);
    return $file;
}

function code($title){
    return str_replace(' ', '_', $title);
}

function decode($file_name){
    $arr = explode("_",$file_name);
    $str = "";
    foreach ($arr as $key) {
        $str .= $key;
        $str .= " ";
    }
    return $str;
}
