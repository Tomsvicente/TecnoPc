<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");

$email ="";
$password ="";
$nombre ="";
$fecha = "";
$apellido ="";
$cod = "";
$direccion = "";
$imagen ="";

if ($_POST) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $fecha = $_POST["fecha"];
    $cod = $_POST["cod"];
    $direccion = $_POST["direccion"];
    $imagen =$_POST["imagen"];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,700,300|Roboto+Slab:400,700,300,100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>TecnoPc</title>
</head>
<body class="perfil-body">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="index.php">TecnoPc</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="faq.php">F.A.Q</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="Contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">Catálogo </a>
                    </li>
                    </ul>
                    <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="login-clientes.php">Ingresar</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="registro.php">Registrarse</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="perfil-usuario.php">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <div class="carrito">
                                    <div class="carrito_icono"><img src="../TecnoPc/images/carrito.png"></div>
                                    <div class="carrito_cont_texto">
                                    <div class="carrito_texto1"><a href="detalle_pedido.php">VER PEDIDO</a></div>
                                    <div class="carrito_texto2">$ 0</div>
                                </div>
                                </div>
                                </li>
                </ul>
                </div>
            </nav>
            <div class="container box-registro">
                <form action="registro.php" method = "POST" enctype="multipart/form-data" >
                            <h3>Registro de usuario</h3>
                    <label for="" class="label-color">E-Mail de usuario</label>
                    <input type="email" name="email" value="<?= $email?>" class="form-control">
                    <label for="" class="label-color">Ingrese su contraseña</label>
                    <input type="password" name="password" value="<?= $password?>" class="form-control">
                    <label for="" class="label-color">Nombre</label>
                    <input type="text" name="apellido" value="<?= $apellido?>" class="form-control">
                    <label for="" class="label-color">Apellido</label>
                    <input type="text" name="nombre" value="<?= $nombre?>" class="form-control">
                    <label for="" class="label-color">Fecha de nacimiento</label>
                    <input type="date" name="fecha" value="<?= $fecha?>" class="form-control">
                    <label for="" class="label-color">Direccion</label>
                    <input type="text" name="direccion" value="<?= $direccion?>" class="form-control">
                    <br>
                    <label for="exampleFormControlFile1" class="label-color">Subir una imagen para perfil</label>
                    <input type="file" name="imagen" class="form-control-file" id="exampleFormControlFile1">
                    <br>
                    <label for="" class="label-color">Codigo postal</label>
                    <input type="text" name="cod" value="<?= $cod?>" class="form-control">
                    <input type="submit" value="Registrarse" class="btn btn-success">
                    <label id="errores" for=""><?php if ($_POST) {
            if (strlen($_POST["password"]) == 0) {
                # code...
                echo "Te falto escribir tu clave de ingreso <br>";
            }
            if (strlen($_POST["email"]) == 0 ) {
                # code...
                echo "El campo email esta vacio <br>";
            }
            if (filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)==false) {
                echo "EL email no tiene el formato correcto <br>";
            }
            if (strlen($_POST["nombre"]) == 0 ) {
                echo "El campo del nombre esta vacio<br>";
            }
            if (strlen($_POST["apellido"]) == 0 ) {
                echo "El campo del apellido esta vacio<br>";
            }
            if (strlen($_POST["direccion"]) == 0 ) {
                echo "La direccion esta vacia<br>";
            }
            if (!is_numeric($_POST["cod"])) {
                echo "El código postal debe ser númerico<br>";
            }
            if (strlen($_POST["cod"]) == 0 ) {
                echo "El código postal esta vacio<br>";
            }
            if($_POST["fecha"] > date("2014-m-d")){
                echo "La fecha ingresada es incorrecta";
            }
            if ($_FILES["imagen"] ["error"] != 0) {
                echo "Hubo un error en la imagen <br>";
            } else {
                $ext = pathinfo ($_FILES["imagen"] ["name"] , PATHINFO_EXTENSION);
                if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
                    echo "El formato de la imagen debe ser jpg, jpeg o png <br>";
                }
            }
}?></label>
                </form>
            </div>
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer">
                            <div class="row">
                        <footer class="col-md-12">
                                <section class="footer">
                                    <div class="w1000">
                                        <ul id="social-media">
                                            <li><a href="#" class="facebook" target="_blank"></a></li>
                                        </ul>
                                    <div class="box-right">
                                        <p><strong>12 e/ 59 y 60 (CP 1900) LA PLATA<br>
                    </strong><br>
                                        Teléfono / WhatsApp: +54 15 111-1111 - Linea (0221) 111-1111 - <br>
                    ecommerce@gmail.com | Horario de atención: de Lunes a Viernes 9 a 20hs</p>
                                    </div>
                                    </div>
                                </section>
                        </footer>
                        </div>
                    </div>
                    </div>
                    </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </form>
</div>
</body>
</html>