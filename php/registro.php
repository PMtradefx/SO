<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["Nombre"];
    $apellidos = $_POST["Apellidos"];
    $celular = $_POST["Celular"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    $servername = "localhost";
    $username = "phpmyadmin";
    $password = "SistemasOperativos";
    $dbname = "preregistro";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    $sql = "INSERT INTO usuarios (nombre, apellidos, celular, email, contrasena) VALUES ('$nombre', '$apellidos', '$celular', '$email', '$contrasena')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Preregistro exitoso. ¡Bienvenido a PMservices!");</script>';
        echo '<script>window.location.href = "../login.php";</script>';
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }

    $conn->close();
}
?>