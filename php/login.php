<?php

if (isset($_POST['buttonIngresar']))
{
    conectar();
}

function conectar()
{
    $dbHost = "localhost";
    $dbUser = "svelasquez";
    $dbPass = "123";
    $dbName = "proyectopruebasebas";

    $dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if (!$dbConn) {
        echo '<script language="javascript">alert("No hay conexion: Verifique y vuelva a intentar.");window.location.href="../index.html";</script>';
    }

    $txtUsuario = $_POST["txtUsuario"];
    $txtPass = $_POST["txtPass"];

    $query = mysqli_query($dbConn, "SELECT * FROM usuarios WHERE usuario = '" . $txtUsuario . "' AND pass = '" . $txtPass . "'");

    $nrFilas = mysqli_num_rows($query);

    if ($nrFilas == 1) {
        // header("Location: pagina.html");
        echo '<script language="javascript">alert("Bienvenido: ' . $txtUsuario . '");window.location.href="../paginaPrincipal.html";</script>';
    } else if ($nrFilas == 0) {
        // echo "No ingreso, usuario no existe.";
        echo '<script language="javascript">alert("El usuario no existe. Vuelva a intentarlo" );window.location.href="../index.html";</script>';
    }
}
