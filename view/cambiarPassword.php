<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no"/>
        <link type="text/css" rel="stylesheet" href="../web/css/stylesheet.css"/>
        <link rel="stylesheet" href="../web/css/bootstrap.min.css">
        <title></title>
    </head>
    <body>

        <div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header ">

                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <img src="../web/img/logo.png" height="310" width="410" class="img-responsive">

                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <a>¿No tienes cuenta? Registrate</a><br><br>


                            <button type="submit" class="btn btn-success btn-lg">Ingresar</button>
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>

        <div class="container container-fluid">
            <div class="row">
                <nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="../web/img/logo1.png" height="30" width="50"></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                            <ul class="nav navbar-nav navbar-right">
                                <form class="navbar-form navbar-left" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="¿Que desea buscar?">
                                    </div>
                                    <button type="submit" class="btn btn-default">Buscar</button>
                                </form>
                                <li><a>Cerrar Sesion</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Categorias</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Eventos</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Sitios</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
            <div class="row">
                <div class="contenedor">
                    <div class="contenedorCentro1">
                        <h2>CAMBIAR CONTRASEÑA </h2>
                        
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Antigua contraseña</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nueva contraseña</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Repetir nueva contraseña</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
                                </div>


                                <button type="submit" class="btn btn-success">Guardar</button>  <button type="submit" class="btn btn-danger">Cancelar</button>
                            </form>
                     
                        <br>
                    </div>
                </div>
            </div>
            <!--            <div class="row">
                            <div class="categoria">
                                <div class="row">
            
                                    <div class="col-sm-6 col-md-4">
                                        <img src="../web/img/religioso.png" alt="..." height="150" width="150">
                                        <div class="caption">
                                            <h3 class="enlaces">Categoria 1</h3>
                                            <p>...</p>
            
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <img src="../web/img/turista.png" alt="..." height="150" width="150">
                                        <div class="caption">
                                            <h3 class="enlaces">Categoria 1</h3>
                                            <p>...</p>
            
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
            
                                        <img src="../web/img/bar.png" alt="..." height="150" width="150">
                                        <div class="caption">
                                            <h3 class="enlaces">Categoria 1</h3>
                                            <p>...</p>
            
                                        </div>
            
                                    </div>
            
                                </div>
            
                            </div>
                        </div>-->
            <div class="row">

                <div class="piee">
                    <div class="enlaces">
                        Copyright reserved(C)

                    </div>
                </div>


            </div>
        </div>



        <script src="../web/js/jquery-2.1.4.min.js"></script>
        <script src="../web/js/bootstrap.min.js"></script>
    </body>
</html>
