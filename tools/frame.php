
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

    <div class="container">

        <?php include "components/navbar.php"?>
        <?php include "components/scroller.php"?>

        <div class="row justify-content-center">
            <div class="col-md align-self-center mt-1">

            <?php get_comps($page)?>

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
  