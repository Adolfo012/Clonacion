<?php

include('conexion.php');
        
if (!empty($_POST['id']) && !empty($_POST['nombre']) && !empty($_POST['apellido'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    /*echo "El Código de alumno es: " . $_POST['id'] . "<br>";
    echo "El nombre es: " . $_POST['nombre'] . "<br>";
    echo "El apellido es: " . $_POST['apellido'] . "<br>";*/


    // ------ Aplicable a sentencias INSERT, UPDATE, DELETE ------//
    $sql = "INSERT INTO alumnos (id, nombre, apellido)
            VALUES ('$id', '$nombre', '$apellido')";
    // Utilizar exec() dado que no se regresan resultados
    $conn->exec($sql);

    header('Location: index.php');
}
else{
    echo "<h2>No hay datos pai<h2>";
    header('Location: index.php');
}
?>