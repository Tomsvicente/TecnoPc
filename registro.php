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
                    <a class="nav-link" href="faq.html">F.A.Q</a>
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
                </ul>
                </div>
            </nav>
            <div class="container box-registro">
                <form action="">
                            <h3>Registro de usuario</h3>
                    <label for="">E-Mail de usuario</label>
                    <input type="email" class="form-control" required>
                    <label for="">Ingrese su contraseña</label>
                    <input type="password" class="form-control" required>
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" required>
                    <label for="">Apellido</label>
                    <input type="text" class="form-control" required>
                    <label for="">Fecha de nacimiento</label>
                    <input type="date" class="form-control" required>
                    <label for="">Direccion</label>
                    <input type="text" class="form-control" required>
                    <br>
                    <label for="exampleFormControlFile1">Subir una imagen para perfil</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    <br>
                    <label for="">Codigo postal</label>
                    <input type="text" class="form-control" required>
                    <input type="submit" value="Registrarse" class="btn btn-success">
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