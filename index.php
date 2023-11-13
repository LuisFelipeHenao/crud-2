<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <style>
        /* Estilo para los campos de entrada con iconos */
        .input-container {
            position: relative;
            margin-bottom: 20px;
        }

        .input-container input {
            padding-left: 30px; 
            /* Espacio a la izquierda del texto */
        }

        .icon {
            position: absolute;
            left: 5px;
            top: 50%;
            transform: translateY(-50%);
            font-family: 'Material Symbols Outlined';
            font-size: 20px;
            /* Tamaño del icono */
        }
    </style>
</head>

<body>
    <div class="login-card">
        <div class="card-header" id="loginForm">
            <div class="log">
                <h3>Iniciar Sesión</h3>
            </div>
        </div>
        <form method="post" action="autenticacion.php">
            <div class="form-group">
                <div class="input-container">
                    <i class="icon material-symbols-outlined">account_circle</i>
                    <input required="" name="usuario" id="username" type="text" placeholder="Usuario">
                </div>
            </div>

            <br>

            <div class="form-group">
                <div class="input-container">
                    <i class="icon material-symbols-outlined">lock</i>
                    <input required="" name="contraseña" id="password" type="password" placeholder="Contraseña">
                </div>
            </div>
            <br>

            <div class="form-group">
                <div class="button-container">
                    <button class="button">
                        Entrar
                        <div class="hoverEffect">
                            <div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </form>
    </div>