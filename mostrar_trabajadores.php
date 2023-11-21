<?php
// Establecer conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'granja');

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Mostrar la información de los trabajadores en una tabla
$mostrar_query = "SELECT * FROM Registro_Trabajadores";
$mostrar_result = $conn->query($mostrar_query);

echo "<table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Historial de Empleo</th>
            <th>Salario</th>
            <th>Permisos</th>
            <th>Certificaciones</th>
        </tr>";

if ($mostrar_result->num_rows > 0) {
    while ($row = $mostrar_result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Nombre']}</td>
                <td>{$row['Apellido']}</td>
                <td>{$row['Direccion']}</td>
                <td>{$row['Telefono']}</td>
                <td>{$row['Historial_Empleo']}</td>
                <td>{$row['Salario']}</td>
                <td>{$row['Permisos']}</td>
                <td>{$row['Certificaciones']}</td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='8'>No hay trabajadores registrados.</td></tr>";
}

echo "</table>";

$conn->close();
?>

