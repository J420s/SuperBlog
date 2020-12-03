<div class="container-fluid">

    <?php include "components/navbar.php"?>
    
    <div class="row justify-content-center" style="height:700px;">
        <div class="col-md-8 align-self-center"> 
        <?php
            get_post_recent();      //utils.php
            get_post_entries();     //utils.php
        ?>
        </div>
    </div>

</div>