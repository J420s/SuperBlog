
<!doctype html>

<html lang="en">
  
<head>
    <title>BlingBlog | <?=ucwords($page)?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" crossorigin="anonymous">

    <!---------** My CSS **--------->
    <link rel="stylesheet" href="css/mystyle.css">

</head>
<body>

    <div class="container-fluid">

    <?php include "components/navbar.php"?>

    <div class="row justify-content-center" style="height:700px;">
        <div class="col-md-8 align-self-center scrollable mt-5">

        <?php switch($page){
            case 'home':
                if(!$_SESSION['auth'] && !$_SESSION['error']){
                    $_SESSION['error'] = "You are not logged in! <a href='#'><strong></strong></a>";
                }
                get_messages();
                get_post_recent();      //utils.php
                get_post_entries();     //utils.php
            break;

            case 'ver':
                ?>
                    <p><?= show_post($_GET['nombre'])?></p>
                    <a href="index.php">Volver<a>
                <?php
            break;

            case 'editar':
                include "components/form-post-edit.php";
            break;

            case 'nuevo':
                include "components/form-post-new.php";
            break;
        }?>

        </div>
    </div>
    </div>


      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>
  