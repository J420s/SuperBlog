<?php

function write_post_entries($dir){
    if(is_dir($dir)&&$handler = opendir($dir)){
        while (false !== ($file = readdir($handler))) {
            if($file !== ".." && $file !== "."){
                ?>
                <!-----------------** Post Default **------------------->
                <div class="row mt-5">
                    <div class="col-md">
                        <div class="card p-1">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="border brounded" src="img/profile-default-small.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-0">
                                    <div class="row">
                                        <div class="col-md">
                                            <a href="">
                                                <h4 class="card-title"><?decode($file)?></h4>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <form class="form-inline" >
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-sm btn-primary my-1">Editar</button>
                                                    <button type="button" class="btn btn-sm btn-danger ml-1 mr-1 my-1">Borrar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-----------------** /Post Default **------------------->
                <? 
            }
        }
    }
}


function write_files_list(){
    $list = "<ul class='list-group' style='width:50%;'>";
    $dir='./posts/';
   
    if(is_dir($dir)&&$handler = opendir($dir)){
        while (false !== ($file = readdir($handler))) {
            if($file !== ".." && $file !== "."){
                $list.="<li class='list-group-item d-flex></br>
                            <h5 class='mb-1'>".decode($file)."</h5>
                            <a href='ver.php?nombre=".$file." '> ver</a>
                            <a href='borrar.php?nombre=".$file."'> borrar</a>
                            <a href='editar.php?nombre=".$file."'> editar</a>
                        </li>";
            } 
        }
    }
    
    $list.="</ul><br>";
    
    return $list;
}

function get_recent(){
    $dir='./posts/';
    $code = `ls -t posts/`;

    if($code){
        $r_list = explode("\n",$code);
    
        $file1 = file_get_contents($dir.$r_list[0]);
        $text1 = substr($file1,0,100).'...';
        $file2 = file_get_contents($dir.$r_list[1]);
        $text2 = substr($file2,0,100).'...';
   

        $list = "<ul class='list-group' style='width:50%;'>";
        $list.="<li class='list-group-item d-flex></br>
                            <h5 class='mb-1'>".decode($r_list[0])."</h5>
                            <p>$text1</p>
                        </li>";
        $list.="<li class='list-group-item d-flex></br>
                            <h5 class='mb-1'>".decode($r_list[1])."</h5>
                            <p>$text2</p>
                        </li>";
        $list.="</ul>";

        return $list;
    }
    else{return "";}
    
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

