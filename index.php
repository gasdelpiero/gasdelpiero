<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.2/yeti/bootstrap.min.css" rel="stylesheet" >
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/pinterest.css">
    <link rel="stylesheet" href="css/carrusel.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/estilos.css">


    <title>CENTRO GAS DEL CENTRO</title>

</head>
<body>
<?php
include 'menu.php';
?>
<!--Inicio de Carrusel-->
<div class="container-fluid " >
    <div class="row ">
        <div class="col-12 mt-0" >
            <div class="carousel slide" id="principal-carousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#principal-carousel" data-slid-to="0" class="active"></li>
                    <li data-target="#principal-carousel" data-slid-to="1"></li>
                    <li data-target="#principal-carousel" data-slid-to="2"></li>
                    <li data-target="#principal-carousel" data-slid-to="3"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagenes/slider1.png" alt="">
                        <div class="carousel-caption">
                            <!--
                                                    <h3 style="color: white">Accesorios</h3>
                                                    <p style="color: white">Mouse y mas</p>
                            -->
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="imagenes/slider2.png" alt="" >
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/slider3.png" alt="">
                        <div class="carousel-caption">
                            <!--  <h3 style="color: white">Accesorios 2</h3>
                             <p style="color: white">Venta de USB</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/slider4.png" alt="">
                        <div class="carousel-caption">
                            <!-- <h3 style="color: white">Hojas Bond</h3>
                            <p style="color: white">venta de papeles bond</p> -->
                        </div>
                    </div>
                </div>

                <a href="#principal-carousel" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>

                <a href="#principal-carousel" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>
</div>



<!--Fin de carrusel-->


<!--INICIO DE PINTEREST-->

<div class="container text-center" >

    <div class="row filas">
        <div class="col-lg col-xl">
            <section id="demo">
                <article class="white-panel"> <img src="imagenes/gas.png" alt="ALT">
                    <h1><a href="#">GAS</a></h1>
                    <p>cadac gas</p>
                    <p>PRECIO</p>
                    <h2>S/.35.00</h2>

                    <p>
                        <!--   <a  class="btn btn-success" href="">Comprar</a>-->
                        <a class="btn btn-warning" href="detallegas.php">Ver Mas</a>
                    </p>
                </article>

                <article class="white-panel"> <img src="imagenes/llamagas.png" alt="ALT">
                    <h1><a href="#">GAS</a></h1>
                    <p>llamagas  </p>
                    <p>PRECIO</p>
                    <h2>S/.38.00</h2>


                    <p>

                        <a class="btn btn-warning" href="detallellamagas.php">Ver Mas</a>
                    </p>
                </article>

                <article class="white-panel"> <img src="imagenes/solgas.png" alt="ALT">
                    <h1><a href="#">GAS</a></h1>
                    <p>solgas</p>
                    <p>PRECIO</p>
                    <h2>S/.40.00</h2>

                    <p>

                        <a class="btn btn-warning" href="detallesolgas.php">Ver Mas</a>
                    </p>
                </article>

                <article class="white-panel"> <img src="imagenes/jaengas.png" alt="ALT">
                    <h1><a href="#">GAS</a></h1>
                    <p>jaen gas </p>
                    <p>PRECIO</p>
                    <h2>S/.38.00</h2>

                    <p>

                        <a class="btn btn-warning" href="detallejaengas.php">Ver Mas</a>
                    </p>
                </article>
        </div>
        </section>


    </div>


</div>



<!--FIN DE PINTEREST-->
<?php
include 'footer.php';
?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="js/pinterest_grid.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>
</html>

