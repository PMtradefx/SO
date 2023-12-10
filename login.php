<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preregistro | PMservices</title>
    <link rel="shortcut icon" href="img/Logo.png" type="image/png">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a class="volver" href="index.html"><img src="img/volver.png" alt=""></a>
        <a href="index.html"><h1>Volver</h1></a>
    </header>
    <div class="Hola">
        <div class="container-form sign-up">
            <div class="welcome-back">
                <div class="message">
                    <h2> Bienvenido a PMservices</h2>
                    <p>La nueva manera de aprender en linea</p>
                </div>
            </div>
            <form action="php/registro.php" method="post" class="formulario">
                <h2 class="create-account"> Preregistro</h2>
                <p class="cuenta-gratis"> Gracias por confiar en nuestro proyecto</p>
                <input type="text" placeholder="Nombre" name="Nombre" id="" required>
                <input type="text" placeholder="Apellidos" name="Apellidos" id="" required>
                <input type="tel" placeholder="Celular" name="Celular" pattern="[0-9]{10}" id="" required>
                <input type="email" placeholder="Email" name="email" id="" required>
                <input type="password" placeholder="Contraseña" name="contrasena" id="" required>
                <button class="button custom-button" type="submit">Registrarse</button>
            </form>
        </div>
    </div>
</body>
</html>