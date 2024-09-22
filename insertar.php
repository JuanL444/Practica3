<?php
include 'conexion.php';
include 'mostrar.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$existencia = $_POST['existencia'];

$sql = "INSERT INTO productos (nombre, precio, existencia) VALUES ('$nombre', '$precio', '$existencia')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo producto registrado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");
exit();

?>
