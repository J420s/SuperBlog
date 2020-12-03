<?php
function get_post_recent(){
    $dir = './posts/';
    $shell = `ls -t posts/`;

    if($shell){
        $r_list = explode("\n",$shell);

        $file1 = file_get_contents($dir.$r_list[0]);
        $text1 = substr($file1,0,100).'...';
        $file2 = file_get_contents($dir.$r_list[1]);
        $text2 = substr($file2,0,100).'...';

        include "components/post-recent.php";
        
    }
}

function get_post_entries(){
    $dir = './posts/';
    if(is_dir($dir)&&$handler = opendir($dir)){
        while (false !== ($file = readdir($handler))) {
            if($file !== ".." && $file !== "."){
                include "components/post-entries.php";
            }
        }
    }
}

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

function if_logged_include($component,$default){
    include isset($_SESSION) && $_SESSION['auth'] ? $component : $default;
}
