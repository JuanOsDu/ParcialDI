<?php
define('LIBRARIES_PATH', '../libraries/');
define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');

require_once(CONTROLLER_PATH . "empresa.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min2.css">
    <link rel="stylesheet" href="../css/global.css">
    <title>Eventos.com</title>
</head>
<style>
    .col-md-4 {
        margin-top: 30px;
        margin-bottom: 30px;

    }

    #navbar {
        text-align: left !important;
        font-size: x-large;
        font-weight: 400;
        color: white !important;
    }


    #logo {
        display: flex;
        justify-content: center;

        flex-direction: column;

    }

    .col-md-4 {
        margin-top: 100px;
    }

    .col-md-6 {
        margin-top: 100px;
        display: inline-block;
    }

    .col-md-12 {
        margin-top: 100px;
        display: inline-block;
    }

    .row {
        display: flex;
        align-items: center;
        flex-direction: row;

    }

    table {
        border: solid 1px white;
        margin: 30px;
    }

    td {
        border: solid 1px white;
    }

    th {
        border: solid 1px white;
    }


    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 300px !important;
        color: black;
        font-size: large !important;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        margin-top: 10px;
        margin-left: 10px !important;
        background-image: url("../img/bg.jpg");
    }
    #servicios .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 300px !important;
        color: black;
        font-size: large !important;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        margin-top: 10px;
        margin-left: 10px !important;
        background-image: url("../img/bg2.jpg");
    }
</style>

<body id="page-top">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav" style="position:absolute;">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Eventos.com</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../img/logo2.jpeg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#nosotros">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#addServicio">Añadir servicio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#servicios">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#addEmpleo">Añadir empleo</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#empleos">Empleos</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div style="margin-top: 250px;">
        <div id="logo">
            <img class="remove-bg" src="../img/logo.jpeg" style="border-radius: 30%;">

        </div>
        <h1 style="text-align: center;">Eventos.com :)</h1>
    </div>
    <div class="container-fluid">
        <div class="row" id="nosotros">

            <div class="col-md-6">
                <h3>Quienes somos</h3>
                <ul>
                    <li>nacimos en el 2022 para trabajar en eventos
                    </li>
                    <li>realizar eventos</li>
                    <li>ser los mejores</li>

                </ul>
                <img alt="eventos imagen animada" class="imge" src="data:image/png;base64,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">
            </div>
            <div class="col-md-6">
                <h3>Nuestro Equipo</h3>
                <img alt="imagen equipo" class="remove-bg" id="imge" style="border-radius: 10%;" src="data:image/png;base64,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">
                <table style="position: static !important;">
                    <thead style="position: relative;">
                        <tr>
                            <th class="th" scope="col">Nombre</th>
                            <th class="th" scope="col">Rol</th>
                            <th scope="col" class="th">Funcion</th>
                            <th scope="col" class="th">Fecha de Ingreso</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pablo</td>
                            <td>Mesero</td>
                            <td>Atender mesas</td>
                            <td>08/25/2018</td>

                        </tr>
                        <tr>
                            <td>Ricardo</td>
                            <td>Cocinero</td>
                            <td>Preparar deliciosas comidas</td>
                            <td>9/15/2015</td>

                        </tr>

                    </tbody>
                </table>

            </div>

        </div>

        <div class="row" id="addServicio" ">
           
            <div class=" col-md-6">

            <h3 style="text-align: center;">Servicios</h3>
            <form style="width: 300px; height: 400x;">
                <h3>Ingrese nuevo servicio</h3>
                <div class="mb-3">
                    <label for="destino" class="form-label">Nombre</label>
                    <input type="text" value="" class="form-control" id="nombre_servicio" name="destino" aria-describedby="textHelp">

                </div>
                <div class="mb-3">
                    <label for="costo" class="form-label">Costo</label>
                    <input type="number" value="" class="form-control" id="costo_servicio" name="costo" aria-describedby="textHelp">

                </div>
                <div class="mb-3">
                    <label for="costo" class="form-label">Duracion</label>
                    <input type="number" value="" class="form-control" id="duracion_servicio" name="costo" aria-describedby="numberHelp">

                </div>
                <div class="mb-3">
                    <label for="contacto" class="form-label">Contacto</label>
                    <input type="text" value="" class="form-control" id="contacto_servicio" name="contacto" aria-describedby="numberHelp">

                </div>
                <button type="submit" class="btn btn-primary" onclick="registrarServicio()">Guardar</button>
            </form>



        </div>
        <div class="col-md-6">
            <img alt="event" src="../img/servicio2.jpg" style="width: 100%; height:50% ;">
            <img alt="event" src="../img/servicio1.jpg" style="width: 100%;">

        </div>


    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 style="margin-top: 0px;">Servicios disponibles</h2>
                <div class="d-flex align-content-around flex-wrap" id="servicios">
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" id="addEmpleo">
            <h3 style="text-align: center;">Empleos</h3>
            <form style="width: 300px; height: 400x;">
                <h3>Ingrese nuevo empleo</h3>
                <div class="mb-3">
                    <label for="destino" class="form-label">Nombre</label>
                    <input type="text" value="" class="form-control" id="nombre_oferta" name="destino" aria-describedby="textHelp">

                </div>
                <div class="mb-3">
                    <label for="costo" class="form-label">Descripcion</label>
                    <input type="text" value="" class="form-control" id="descripcion" name="costo" aria-describedby="textHelp">

                </div>
                <div class="mb-3">
                    <label for="costo" class="form-label">Fecha cierre</label>
                    <input type="date" value="" class="form-control" id="fecha_cierre" name="costo" aria-describedby="numberHelp">

                </div>
                <div class="mb-3">
                    <label for="contacto" class="form-label">Correo contacto</label>
                    <input type="email" value="" class="form-control" id="correo_contacto" name="contacto" aria-describedby="numberHelp">

                </div>
                <button type="submit" class="btn btn-primary" onclick="registrarEmpleo()">Guardar</button>
            </form>


        </div>
        <div class="col-md-6">
            <img alt="event" src="../img/eventos.png" style="width: 100%;">
            <img alt="event" src="../img/empleo.jpg" style="width: 100%;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex align-content-around flex-wrap" id="empleos"></div>
        </div>
    </div>

    </div>





    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/servicios.js"></script>
    <script src="../js/empleos.js"></script>
</body>

<?php

include(VIEWS_PATH . "footer.php")
?>