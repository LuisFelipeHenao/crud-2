<?php
session_start();

// Verifica si el usuario ha iniciado sesión antes de mostrar esta página
if (!isset($_SESSION["usuario"])) {
    // Si no ha iniciado sesión, redirige a la página de inicio de sesión o muestra un mensaje de error
    header("Location: login.php");
    exit();
}

// Si el usuario ha iniciado sesión, muestra la página de inicio con el nombre de usuario
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <!-- Enlaces a hojas de estilo CSS -->
    <link rel="stylesheet" href="assets/css/stylehome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


    <style>
        /* Estilo para el contenedor del círculo */
        /* Estilo para el contenedor del círculo */
        .profile-image-wrapper {
            width: 50px;
            /* Tamaño del círculo */
            height: 50px;
            /* Tamaño del círculo */
            border-radius: 50%;
            /* Hace que el contenedor sea circular */
            overflow: hidden;
            /* Recorta cualquier contenido fuera del círculo */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Estilo para la imagen de perfil */
        .profile-image {
            width: 100%;
            /* Ancho de la imagen */
            height: auto;
            /* Altura automática para mantener la proporción */
            border-radius: 50%;
            /* Hace que la imagen sea circular */
        }

        /* Estilo para el nombre de usuario */
        .user-name {
            margin-top: 10px;
            /* Ajusta el margen superior para separar la imagen del nombre de usuario */
            font-weight: bold;
            /* Puedes aplicar otros estilos de texto según tus preferencias */
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-condensed" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mx-3 ml-auto" href="home.php">Admin-Data Base</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <!-- Utiliza el id del modal como valor de data-bs-target -->
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#agregarEventoModal">Añadir
                            Datos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Opciones</a>
                        <ul class="dropdown-menu">
                            <li><a id="cerrar-sesion" class="dropdown-item" href="index.php">Cerrar Sesión</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="registro.php">Registar admin</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Usuario" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <!-- Mueve la sección de la imagen de perfil al final del navbar -->
                <!-- ... (código HTML anterior) -->



                <!-- ... (código HTML posterior) -->

            </div>

        </div>
    </nav>

    </nav>
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombres y Apellidos</th>
                        <th>Identificación</th>
                        <th>Megas</th>
                        <th>Zona de Residencia</th>
                        <th>Dirección</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí puedes agregar filas de datos -->
                    <tr>
                        <td>1</td>
                        <td>camilo</td>
                        <td>123</td>
                        <td>50</td>
                        <td>Centro</td>
                        <td>Calle Principal 123</td>
                        <td>


                            <button type="button" class="btn btn-outline-dark">
                                <span class="material-symbols-outlined" data-bs-toggle="modal"
                                    data-bs-target="#EditarDatoModal">edit</span>
                            </button>
                            <button type="button" class="btn btn-outline-dark">
                                <span class="material-symbols-outlined" data-bs-toggle="modal"
                                    data-bs-target="#DelateModal">delete</span>
                            </button>
                        </td>
                    </tr>

                    <!-- Puedes agregar más filas según sea necesario -->
                </tbody>
                <tfoot>
                    <!-- Aquí puedes agregar el pie de tabla si es necesario -->
                </tfoot>
            </table>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="agregarEventoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añadir Datos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario para añadir datos -->
                    <form>
                        <div class="mb-3">
                            <label for="id" class="form-label">Nombres y Apellidos</label>
                            <input type="text" class="form-control" id="name">
                        </div>

                        <div class="mb-3">
                            <label for="id" class="form-label">Identificacion</label>
                            <input type="text" class="form-control" id="id">
                        </div>

                        <div class="mb-3">
                            <label for="megas" class="form-label">Megas</label>
                            <select class="form-select" id="megas">

                                <option value="2.5">2.5</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="zonaResidencia" class="form-label">Zona de Residencia</label>
                            <select class="form-select" id="zonaResidencia">
                                <option value="Aguadas">Aguadas</option>
                                <option value="Pacora">Pacora</option>
                                <option value="Arma">Arma</option>
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion">
                        </div>



                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Añadir Datos</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->



    <div class="modal fade" id="EditarDatoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Datos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario para añadir datos -->
                    <form>
                        <div class="mb-3">
                            <label for="id" class="form-label">Nombres y Apellidos</label>
                            <input type="text" class="form-control" id="name">
                        </div>

                        <div class="mb-3">
                            <label for="id" class="form-label">Identificacion</label>
                            <input type="text" class="form-control" id="id">
                        </div>

                        <div class="mb-3">
                            <label for="megas" class="form-label">Megas</label>
                            <select class="form-select" id="megas">

                                <option value="2.5">2.5</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="zonaResidencia" class="form-label">Zona de Residencia</label>
                            <select class="form-select" id="zonaResidencia">
                                <option value="Aguadas">Aguadas</option>
                                <option value="Pacora">Pacora</option>
                                <option value="Arma">Arma</option>
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion">
                        </div>



                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Editar </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->


    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="DelateModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <!-- Cambia la clase modal-sm para ajustar el tamaño -->
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Detalles de evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Nombre y Apellidos</dt>
                            <dd id="name" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Identificacion</dt>
                            <dd id="id" class=""></dd>
                            <dt class="text-muted">megas</dt>
                            <dd id="megas" class=""></dd>
                            <dt class="text-muted">Zona de Residencia</dt>
                            <dd id="zonaResidencia" class=""></dd>
                            <dt class="text-muted">Dirección</dt>
                            <dd id="direccion" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">

                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete"
                            data-id="">Eliminar</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0"
                            data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const profileImage = document.getElementById("profile-image");
            const fileInput = document.getElementById("file-input");
            const defaultImage = "assets/img/user.png"; // Ruta de la imagen por defecto

            // Verificar si hay una imagen en el almacenamiento local
            const storedImage = localStorage.getItem("userProfileImage");

            // Si se encuentra una imagen almacenada, mostrarla
            if (storedImage) {
                profileImage.src = storedImage;
            } else {
                // Si no se encuentra una imagen, mostrar la imagen por defecto
                profileImage.src = defaultImage;
            }

            profileImage.addEventListener("click", function () {
                fileInput.click();
            });

            fileInput.addEventListener("change", function () {
                const selectedFile = fileInput.files[0];
                if (selectedFile) {
                    const reader = new FileReader();

                    reader.onload = function (e) {
                        profileImage.src = e.target.result;

                        // Almacena la imagen seleccionada en el almacenamiento local
                        localStorage.setItem("userProfileImage", e.target.result);
                    };

                    reader.readAsDataURL(selectedFile);
                }
            });
        });
    </script>





    <!-- Scripts JavaScript Bootstrap al final del cuerpo -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>