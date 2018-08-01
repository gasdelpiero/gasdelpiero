<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.2/yeti/bootstrap.min.css" rel="stylesheet" >
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/pinterest.css">
    <link rel="stylesheet" href="css/carrusel.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/estilos.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>

<!--INICIO DE MENU-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#"><img src="imagenes/logo.png" alt="" style="width: 200px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productos.php">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="servicios.php">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactenos.php">Contactenos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="carrito.php"><i class="fa fa-shopping-cart"></i></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>
<!--FIN DE MENU-->
<div class="container text-center" >

    <div class="row filas">
        <div class="col-lg col-xl">
            <section id="demo">
                <article class="white-panel"> <img src="imagenes/solgas.png" alt="ALT">
                    <h1><a href="#">GAS</a></h1>
                    <p>solgas</p>
                    <p>PRECIO</p>
                    <h2>S/.40.00</h2>

                    <p>

                        <a class="btn btn-warning" href="detallesolgas.php">Ver Mas</a>
                    </p>
                </article>

            </section>
    </div>
    </div>

</div>

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