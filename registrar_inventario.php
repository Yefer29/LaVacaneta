<?php
// Establecer conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'granja');

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar datos del formulario
$suministro = $_POST['suministro'];
$medicamento = $_POST['medicamento'];
$equipo = $_POST['equipo'];
$otros_materiales = $_POST['otros_materiales'];

// Insertar datos en la base de datos
$insertar_query = "INSERT INTO Inventario (Suministro, Medicamento, Equipo, Otros_Materiales) VALUES ('$suministro', '$medicamento', '$equipo', '$otros_materiales')";

if ($conn->query($insertar_query) === TRUE) {
    echo "Registro de inventario exitoso.";
} else {
    echo "Error: " . $insertar_query . "<br>" . $conn->error;
}

$conn->close();
?>
