<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="GET">
  <label for="nombre">Nombre:</label>
  <input type="number" id="user" name="nombre"><br><br>
  <input type="submit" value="Submit">
</form>


<?php
$number = $_GET['nombre'];
if ($number % 2 === 0) 
{
    echo("pair");
} 
else 
{
    echo ("impair");
}
?>






</body>
</html>