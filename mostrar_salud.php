<?php
// Establecer conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'granja');

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Mostrar el historial de salud de animales en una tabla
$mostrar_query = "SELECT * FROM Salud_Animales";
$mostrar_result = $conn->query($mostrar_query);

echo "<table>
        <tr>
            <th>ID del Animal</th>
            <th>Signos Vitales</th>
            <th>Vacunaciones</th>
            <th>Tratamientos Médicos</th>
            <th>Enfermedades</th>
            <th>Informes Diagnóstico</th>
        </tr>";

if ($mostrar_result->num_rows > 0) {
    while ($row = $mostrar_result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Numero_Identificacion']}</td>
                <td>{$row['Signos_Vitales']}</td>
                <td>{$row['Vacunaciones']}</td>
                <td>{$row['Tratamientos_Medicos']}</td>
                <td>{$row['Seguimiento_Enfermedades']}</td>
                <td>{$row['Informes_Diagnostico']}</td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No hay registros de salud de animales.</td></tr>";
}

echo "</table>";

$conn->close();
?>
