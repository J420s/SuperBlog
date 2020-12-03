
                <!-----------------** Post Default **------------------->
                <div class="row mt-1">
                    <div class="col-md">
                        <div class="card p-1">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="border brounded" src="img/profile-default-small.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body py-0">
                                    <div class="row">
                                        <div class="col-md">
                                            <a href="ver.php?nombre=<?= $file?>">
                                                <h4 class="card-title"><?= decode($file)?></h4>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <form class="form-inline" >
                                                <div class="form-group">
                                                    <a class="btn btn-sm btn-primary my-1" href="editar.php?nombre=<?= $file?>">Editar</a>
                                                    <a class="btn btn-sm btn-danger ml-1 mr-1 my-1" href="borrar.php?nombre=<?= $file?>">Borrar</a>
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
               