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
                                <a class="nav-link" href="list.php">Posts <span class="sr-only">(current)</span></a>
                            </li>
                            <!----
                            <li class="nav-item">
                                <a class="nav-link" href="#">#</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">#</a>
                            </li>
                            --->
                        </ul>
                        <?php 
                        if(isAllowed()){
                            require_once "components/button-new.php";
                            require_once "components/button-user.php";
                            require_once "components/button-logout.php";
                        }
                        else{
                            require_once "components/form-login.php";
                        }
                        ?>
                    </div>
                </nav>
            </div>
        </div>
        <!-----------------------------------------** /NavBar Row **-------------------------------------->