<?php include_once "utils.php";?>

<!doctype html>

<html lang="en">
  
  <head>
    <title>BlingBlog | Home</title>
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
      <div class="row">
        <div class="col-md">
          <?php require_once "components/navbar.php"?>
        </div>
      </div>
      <div class="row justify-content-center" style="height:700px;">
        <div class="col-md-8 align-self-center">
          
          <?php include_once "components/post-recent.php";?>
          <?php include_once "components/post-entries.php";?>

        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>