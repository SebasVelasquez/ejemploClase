<?php

if (isset($_POST['buttonRegistrarModalUsuario']))
{
    registrar();
}

function registrar() {
    $dbHost = "localhost";
    $dbUser = "svelasquez";
    $dbPass = "123";
    $dbName = "proyectopruebasebas";

    $dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if (!$dbConn) {
        echo '<script language="javascript">alert("No hay conexion: Verifique y vuelva a intentar.");window.location.href="../index.html";</script>';
    }

    $txtUsuario = $_POST["txtUsuarioRegistrarModal"];
    $txtPass = $_POST["txtPassRegistrarModal"];

    $query = mysqli_query($dbConn, "INSERT INTO usuarios(idUsuario, usuario, pass) VALUES (null, '" . $txtUsuario . "', pass = '" . $txtPass . "'");

    $nrFilas = mysqli_num_rows($query);

    if ($nrFilas == 1) {
        echo '<script language="javascript">alert("Se inserto correctamente el usuario: ' . $txtUsuario . '");window.location.href="../paginaPrincipal.html";</script>';
    } else if ($nrFilas == 0) {
        echo '<script language="javascript">alert("No se inserto el usuario.");window.location.href="../index.html";</script>';
    }
}
