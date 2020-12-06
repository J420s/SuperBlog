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
    session_start();
    $dir = './posts/';
    if(is_dir($dir)&&$handler = opendir($dir)){
        while (false !== ($file = readdir($handler))) {
            if($file !== ".." && $file !== "."){
                if(isset($_SESSION['auth']) && $_SESSION['auth']){
                    include "components/post-entries.php";
                }else{
                    include "components/post-entries-default.php";
                }
            }
        }
    }
}

function save_post($title,$description){
    $path = '../posts/'.$title;
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
    $path= '../posts/'.$file_name;
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

function if_logged_include($components,$default){
    session_start();
    if(isset($_SESSION['auth']) && $_SESSION['auth']){
        foreach($components as $comp){
            include $comp;
        }
    }else{
        if(isset($default))include $default;
    }
}

function get_frame($page){
    require "frame.php";
}

function get_comps($page){
    switch($page){
        case 'home':
            include "components/jumbotron.php";
            include "components/double-entry.php";
        break;
        case 'posts list':
            if(!isset($_SESSION['auth']) && !isset($_SESSION['error'])){
                $_SESSION['warning'] = "You are not logged in! <a href='#'>Sing up</a>";
            }
            get_messages();
            get_post_recent();      //utils.php
            get_post_entries();     //utils.php
        break;

        case 'ver':
            include "components/post.php";
            include "components/button-volver.php";
        break;

        case 'editar':
            include "components/form-post-edit.php";
        break;

        case 'nuevo':
            include "components/form-post-new.php";
        break;
    }
}

function get_messages(){
    if(isset($_SESSION['info'])){
        require_once "components/alert-info.php";
        unset($_SESSION['info']);
    }
    if (isset($_SESSION['error'])){
        require_once "components/alert-error.php";
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['warning'])){
        require_once "components/alert-warning.php";
        unset($_SESSION['warning']);
    }
}


