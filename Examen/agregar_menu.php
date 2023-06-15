<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
     <style>
        body {
            background-image: url('fondosushi2.png');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
<link rel="stylesheet" href="style1.css">
    <title>Agregar Menu</title>
</head>
<body>
      <div class="container">
    <h1>Agregar Menu</h1>
    <div class="table-container">

    <form action="guardar_cotizacion.php" method="POST">
        <label>Rollo:</label>
        <input type="text" name="Tacos" required>
        <br><br>
         <label>Ingredientes:</label>
        <input type="text" name="Descripcion" required>
        <br><br>
        <label>Precio:</label>
        <input type="number" name="Precio" step="0.01" required>
        <br><br>
        <label>Piezas:</label>
        <input type="number" name="Proporcion" required>
        <br><br>
        <button type="submit">Guardar cotización</button>
    </form>
    

</body>
</html>