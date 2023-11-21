<?php
// Establecer conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'granja');

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$historial_empleo = $_POST['historial_empleo'];
$salario = $_POST['salario'];
$permisos = $_POST['permisos'];
$certificaciones = $_POST['certificaciones'];

// Insertar datos en la base de datos
$insertar_query = "INSERT INTO Registro_Trabajadores (Nombre, Apellido, Direccion, Telefono, Historial_Empleo, Salario, Permisos, Certificaciones) VALUES ('$nombre', '$apellido', '$direccion', '$telefono', '$historial_empleo', $salario, '$permisos', '$certificaciones')";

if ($conn->query($insertar_query) === TRUE) {
    echo "Registro de trabajador exitoso.";
} else {
    echo "Error: " . $insertar_query . "<br>" . $conn->error;
}

$conn->close();
?>
