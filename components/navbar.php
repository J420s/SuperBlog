        <!-----------------------------------------** NavBar Row **-------------------------------------->
        <div class="row">
            <div class="col-md">
                <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
                    <a class="navbar-brand" href="index.php">BlingBlog</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Posts <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">#</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">#</a>
                            </li>
                        </ul>
                        <?php 
                         if_logged_include(
                            ["components/button-new.php",
                            "components/button-user.php", 
                            "components/button-logout.php"],
                            "components/form-login.php"     // Default
                            );
                        ?>
                    </div>
                </nav>
            </div>
        </div>
        <!-----------------------------------------** /NavBar Row **-------------------------------------->