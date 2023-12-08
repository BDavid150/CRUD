<!DOCTYPE html>
  <html>
  <head>
     
      <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

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

$sql = "SELECT id_p, nom, app, apm, ed FROM personas";
$result = $conn->query($sql);
?>
<a href="http://localhost/crud/enviar.php"><img src="alta.png" alt="HTML tultoria" style="width:42px;height:42px;"></a>
<br></br>
    <table>
    <tr>
    <th>Id</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Edad</th>
    </tr>
    <?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    echo"<tr>";
    echo "<td>" . $row["id_p"]."</td>". "<td>" . $row["nom"]."</td>".
    "<td>". $row["app"]."</td>"."<td>". $row["apm"]."</td>"."<td>" . $row["ed"]."</td>";
    echo '<td><a href="eliminar.php?id=' . $row["id_p"] . '"><font color="yellow">Eliminar</font></a></td>';
   echo '<td><a href="modificar.php?id=' . $row["id_p"] . '"><font color="yellow">Modificar</font></a></td>';  
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>