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
    <title>CENTRO GAS DEL PIERO</title>

</head>
<body>
<?php
include 'menu.php';
?>

<!--INICIO DE PINTEREST-->

<div class="container text-center" >
<h1 align="center" style="color: black;">TENEMOS A LA VENTA LOS SIGUIENTES PRODUCTOS A UN BUEN PRECIO Y EXELENTE PESO JUSTO TALES COMO:</h1>
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
                        <<a class="btn btn-warning" href="detallegas.php">Ver Mas</a>
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
                    <h2>S/.45.00</h2>

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

