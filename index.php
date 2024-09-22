<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario de Productos</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <h1>Inventario de Productos</h1>
    <form action="insertar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" required>
        <label for="existencia">Existencia:</label>
        <input type="number" id="existencia" name="existencia" required>
        <button type="submit">Registrar</button>
    </form>
    
    <h2>Lista de Productos</h2>
    <table>
        <thead>
            <tr>
                <th>idProd</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Existencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'conexion.php';
            $sql = "SELECT * FROM productos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['idProd']}</td>
                            <td>{$row['nombre']}</td>
                            <td>{$row['precio']}</td>
                            <td>{$row['existencia']}</td>
                            <td><a href='eliminar.php?idProd={$row['idProd']}'>Eliminar</a></td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay productos</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
