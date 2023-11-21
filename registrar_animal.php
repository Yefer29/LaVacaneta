<?php
// Establecer conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'granja');

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar datos del formulario
$numero_identificacion = $_POST['numero_identificacion'];
$raza = $_POST['raza'];
$edad = $_POST['edad'];
$peso = $_POST['peso'];
$info_partos = $_POST['info_partos'];

// Verificar si el número de identificación ya existe
$verificar_query = "SELECT * FROM Animales WHERE Numero_Identificacion = '$numero_identificacion'";
$verificar_result = $conn->query($verificar_query);

if ($verificar_result->num_rows > 0) {
    echo "¡Error! El animal con el número de identificación '$numero_identificacion' ya existe.";
    echo "<br>";
    echo "<a href='animal_form.php'>Volver al Formulario</a>";
} else {
    // Insertar datos en la base de datos
    // Modificar la línea de inserción en registrar_animal.php
    $insertar_query = "INSERT INTO Animales (Numero_Identificacion, Raza, Edad, Peso, Informacion_Partos) VALUES ('$numero_identificacion', '$raza', $edad, $peso, '$info_partos')";
    if ($conn->query($insertar_query) === TRUE) {
        echo "Registro de animal exitoso.";
    } else {
        echo "Error: " . $insertar_query . "<br>" . $conn->error;
    }
    
}

$conn->close();
?>