
<div class="container-fluid">

    <?php include "components/navbar.php"?>

    <div class="row justify-content-center" style="height:700px;">
        <div class="col-md-8 align-self-center">
            <p><?= show_post($_GET['nombre'])?></p>
            <a href="index.php">Volver<a>
        </div>
    </div>
    
</div>
