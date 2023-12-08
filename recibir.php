<!DOCTYPE html>
  <html>
  <head>
      <title>Tu página PHP</title>
      <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <a href="consulta.php" class="boton">Consulta</a><br>

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

// Verificar si se envió el formulario de modificación

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_to_update = $_POST['id'];
    $nombr = $_POST['nuevo_nombre'];
    $apep = $_POST['nuevo_apellidop'];
    $apem = $_POST['nuevo_apellidom'];
    $edad1 = $_POST['nuevo_edad'];

    $sql = "UPDATE personas SET nom='".$nombr."', app='".$apep."', apm='".$apem."', ed='".$edad1."' WHERE id_p=".$id_to_update;

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente.";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
}
elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id_to_modify = $_GET['id'];

    $sql = "SELECT * FROM personas WHERE id_p = $id_to_modify";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $nomb = $row['nom'];
        $appa = $row['app'];
        $apma = $row['apm'];
        $eda = $row['ed'];
    } else {
        echo "Registro no encontrado.";
    }
}



$conn->close();
?>
</body>
</html>