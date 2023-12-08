<!DOCTYPE html>
  <html>
  <head>
      <title>Tu página PHP</title>
      <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
<?php
  // Include the script that defines $id_to_modify and other variables
  include 'recibir.php';
  ?>
<form action="recibir.php" method="post">
             
              <input type="hidden" id="id" name="id" value="<?php echo $id_to_modify; ?>">
              <label for="nuevo_nombre">Nombre:</label>
              <input type="text" id="nuevo_nombre" name="nuevo_nombre" value="<?php echo isset($nomb) ? $nomb : ''; ?>" required>
              <br></br>
              <label for="nuevo_apellidop">Apellido paterno:</label>
              <input type="text" id="nuevo_apellidop" name="nuevo_apellidop" value="<?php echo isset($appa) ? $appa : ''; ?>" required>
              <br></br>
              <label for="nuevo_apellidom">Apellido materno:</label>
              <input type="text" id="nuevo_apellidom" name="nuevo_apellidom" value="<?php echo isset($apma) ? $apma : ''; ?>" required>
              <br></br>
              <label for="nuevo_edad">Edad:</label>
              <input type="text" id="nuevo_edad" name="nuevo_edad" value="<?php echo isset($eda) ? $eda : ''; ?>" required>
              <br></br>
              <input type="submit" value="Modificar">
          </form>
          </body>
</html>