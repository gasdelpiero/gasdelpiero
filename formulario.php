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
<div class="container mb-4 "  >
    <h1 class="text-center formulario">FORMULARIO DE CONSULTA</h1>
    <!-- <div class="row justify-content-center mt-4 logo"  >
         <img src="imagenes/logocompusistem.png"   alt="" style="width: 150px; height: 150px;">
     </div>-->
    <div class="row ">

        <div class="col-6">


            <form class="form-group form-register"  role="form" action="">


                <label class="mr-sm-2" for="nombre">NOMBRE:</label>
                <input type="text" class="form-control input-100" placeholder="Nombre" name="nombre" id="nombre">
                <label class="mr-sm-2" for="apellido">APELLIDOS:</label>
                <input type="text" class="form-control input-100" placeholder="Apellido" name="apellido" id="apellido">

            </form>

            <form class="form-group mt-2" action="">
                <label for="email" class="mr-sm-2">EMAIL:</label>
                <input type="email" placeholder="email" class="form-control mb-2 mr-sm-2 input-100" id="email">

            </form>

            <form class="form-group "  action="">
                <div class="form-group mt-2 "  >
                    <label class="mr-sm-2" for="sel1">TIPO DE CONSULTA:</label>
                    <select class="form-control input-100" id="sel1">
                        <option>Servicios</option>
                        <option>productos</option>
                        <option>Delibery</option>
                    </select>
                </div>
            </form>

            <div class="form-group m-1 detalles">
                <label for="comment">DETALLES:</label>
                <textarea class="form-control input-100" rows="5" id="comment"></textarea>
            </div>

            <div class="form-check contraseña">
                <label class="form-check-label">
                    <input type="checkbox" name="terminos" id="terminos" class="form-check-input mr-2">Guardar contraseña
                </label>
            </div>


            <div class=" col-12 text-center mb-2">
                <div class="row mt-4">
                    <div class="col-9  ">
                        <button class="btn btn-warning " type="submit">ENVIAR CONSULTA</button>
                    </div>
                </div>
            </div>



        </div>

        <div id="map" class="col-6 mb-4  ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1169.1677591959478!2d-76.9174990122497!3d-6.107008893714253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2spe!4v1533083668842" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>



    </div>



</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
