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
                                <li><a  data-toggle="modal" data-target="#miventana">Iniciar Sesion</a></li>
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
                     <div class="row">
                            <div class="col-lg-12">
                                <div class="jumbotron">
                                    <h1 class="text-center">BASILICA DEL SEÑOR DE LOS MILAGROS</h1>

                                    <p class="text-center">La majestuosa Basilica de Buga es conocida por miles de personas a nivel nacional e internacional pero pocos conocen la historia de este hermoso templo en el cual reposa el señor de los milagros o el milagrosos de Buga.</p>
                                    <img src="../web/img/Basílica_de_Buga.jpg" alt="" class="img-responsive"> 
                                    <center>
                                        <strong>Nombre: </strong> Basilica de Buga <br>
                                        <strong>Direccion: </strong> avenida 4 con carrera 14 <br>
                                        <strong>Descripcion: </strong> Sitio donde reside el señor de los milagros <br>
                                        <strong>Redes sociales: </strong> <img src="../web/img/icon-facebook2.png"> <img src="../web/img/icon-googleplus2.png"> <img src="../web/img/icon-tumblr2.png"> <br>
                                        <strong>Agregar al itinerario: </strong> <input type="checkbox"/>
                                    </center>
                                    <br>
                                    <label style="vertical-align: top;">AGREGAR UN COMENTARIO</label><br>
                                    <div class="row"><div class="col-lg-12 col-md-12 col-sm-2 col-xs-2"> <textarea></textarea></div></div>
                                    <input type="submit" class="">
                                    <br>
                                    <br>
                                    <table class="table table-striped">
                                        <tr>
                                            <td><strong>Juan_gabo</strong></td>
                                            <td>Muy buen lugar, recomendado</td>
                                        </tr>
                                        <tr class="info">
                                            <td><strong>Juan_gabo</strong></td>
                                            <td>Muy buen lugar, recomendado, aidjfasdjkladjfklfkddklf kladjflkasd dkfjnaskjd bAUDFJASDJ</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Juan_gabo</strong></td>
                                            <td>Muy buen lugar, recomendado</td>
                                        </tr>
                                    </table>
                                    <br>    
                                </div>
                            </div>
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

    </div>

    <script src="../web/js/jquery-2.1.4.min.js"></script>
    <script src="../web/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
