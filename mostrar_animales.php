<?php
// Conexión a la base de datos (ajusta los detalles según tu configuración)
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

// Establecer conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'granja');

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Mostrar la información de los animales en una tabla
$mostrar_query = "SELECT * FROM Animales";
$mostrar_result = $conn->query($mostrar_query);

echo "<table>
        <tr>
            <th>Número de Identificación</th>
            <th>Raza</th>
            <th>Edad</th>
            <th>Peso</th>
            <th>Información de Partos</th>
        </tr>";

if ($mostrar_result->num_rows > 0) {
    while ($row = $mostrar_result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Numero_Identificacion']}</td>
                <td>{$row['Raza']}</td>
                <td>{$row['Edad']}</td>
                <td>{$row['Peso']}</td>
                <td>{$row['Informacion_Partos']}</td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No hay animales registrados.</td></tr>";
}

echo "</table>";

$conn->close();
?>

