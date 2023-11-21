<?php
// Establecer conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'granja');

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar datos del formulario
$numero_identificacion = $_POST['Numero_Identificacion'];
$signos_vitales = $_POST['signos_vitales'];
$vacunaciones = $_POST['vacunaciones'];
$tratamientos_medicos = $_POST['tratamientos_medicos'];
$enfermedades = $_POST['enfermedades'];
$informes_diagnostico = $_POST['informes_diagnostico'];

// Verificar si el animal con el ID especificado existe en la tabla Animales
$verificar_animal_query = "SELECT * FROM Animales WHERE Numero_Identificacion = '$numero_identificacion'";
$verificar_animal_result = $conn->query($verificar_animal_query);

if ($verificar_animal_result->num_rows > 0) {
    // Insertar datos en la base de datos
    $insertar_query = "INSERT INTO Salud_Animales (Numero_Identificacion, Signos_Vitales, Vacunaciones, Tratamientos_Medicos, Seguimiento_Enfermedades, Informes_Diagnostico) VALUES ('$numero_identificacion', '$signos_vitales', '$vacunaciones', '$tratamientos_medicos', '$enfermedades', '$informes_diagnostico')";

    if ($conn->query($insertar_query) === TRUE) {
        echo "Registro de salud exitoso.";
    } else {
        echo "Error: " . $insertar_query . "<br>" . $conn->error;
    }
} else {
    echo "Error: El animal con el ID $numero_identificacion no está registrado en la tabla Animales. Registre el animal antes de ingresar datos de salud.";
    echo "<br>";
    echo "<a href='salud_form.php'>Volver al Formulario</a>";
}

$conn->close();
?>