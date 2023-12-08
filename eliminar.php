<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="3;url=consulta.php">
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
 
    <p>Redirigiendo a otra página en 3 segundos...</p>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Verificar si se envió un ID a eliminar
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_to_delete = $_GET['id'];

    // Eliminar el registro de la base de datos
    $sql = "DELETE FROM personas WHERE id_p = $id_to_delete";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado correctamente.";
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
}

$conn->close();
?>
</body>
</html>