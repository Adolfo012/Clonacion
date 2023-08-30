<!DOCTYPE html>
<?php
require('conexion.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>formulario</h1>
    <form action="store.php" method="POST">
        
        <label for="id">Código de alumno</label><br>
        <input type="text" name="id"><br><br>
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre"><br><br>
        <!-- <label for="correo">Correo</label><br>
        <input type="email" name="correo"><br><br> -->
        <label for="apellido">Apellido</label><br>
        <input type="text" name="apellido"><br><br>
        <input type="submit" value="enviar">
    </form>

    <?php
        echo "<h1>HOLA MUNDO PHP</h1>";

        //------------------------------------//
        //--- Aplicable a Sentencia SELECT ---//
            $sql = "SELECT * FROM alumnos";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // Configura los resultados como un arreglo asociativo
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
            // $stmt->fetchAll() Obtiene el arreglo asociativo
            echo "<ul>";
            foreach ($stmt->fetchAll() as $row) {
                echo "<li>" . $row['id'] . " - " . $row['nombre'] . " " . $row['apellido'] . "</li>";
            }
            echo "</ul>";
    ?>



</body>
</html>