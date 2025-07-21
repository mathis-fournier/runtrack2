<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="index.php" method="POST">
  <label for="fname">Prenom:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Nom:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit">
</form>



<?php 

$lname = $_POST["lname"];
$fname = $_POST["fname"];

echo "<table>
  <tr>
    <th>Argument</th>
    <th>Valeur</th>
  </tr>
  <tr>
    <td>Nom</td>
    <td>$lname</td>
  </tr>
  <tr>
    <td>Prenom</td>
    <td>$fname</td>
  </tr>
</table>";
?>
</body>
</html>