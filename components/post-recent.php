<?php
    $dir = './posts/';
    $shell = `ls -t posts/`;

    if($shell){
        $r_list = explode("\n",$shell);

        $file1 = file_get_contents($dir.$r_list[0]);
        $text1 = substr($file1,0,100).'...';
        $file2 = file_get_contents($dir.$r_list[1]);
        $text2 = substr($file2,0,100).'...';

        ?>
        <!-----------------** Post Resumen **------------------->
        <div class="row">
            <div class="col-md">
                <div class="card p-1">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img class="border border-dark rounded" src="img/profile-default.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body py-0">
                            <h4 class="card-title"><?= decode($r_list[0])?></h4>
                            <p class="card-text"><?=$text1?></p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Fecha</small>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------** /Post Resumen **------------------->

        <!-----------------** Post Resumen **------------------->
        <div class="row">
            <div class="col-md">
                <div class="card p-1">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img class="border border-dark rounded" src="img/profile-default.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body py-0">
                            <h4 class="card-title"><?= decode($r_list[1])?></h4>
                            <p class="card-text"><?=$text2?></p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Fecha</small>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------** /Post Resumen **------------------->
        <?php
        
    }
?>