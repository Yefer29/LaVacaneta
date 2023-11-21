<?php
// Establecer conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'granja');

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Mostrar la información del inventario en una tabla
$mostrar_query = "SELECT * FROM Inventario";
$mostrar_result = $conn->query($mostrar_query);

echo "<table>
        <tr>
            <th>Suministro</th>
            <th>Medicamento</th>
            <th>Equipo</th>
            <th>Otros Materiales</th>
        </tr>";

if ($mostrar_result->num_rows > 0) {
    while ($row = $mostrar_result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Suministro']}</td>
                <td>{$row['Medicamento']}</td>
                <td>{$row['Equipo']}</td>
                <td>{$row['Otros_Materiales']}</td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hay elementos en el inventario.</td></tr>";
}

echo "</table>";

$conn->close();
?>

