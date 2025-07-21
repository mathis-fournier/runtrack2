<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="GET">
  <label for="hauteur">Hauteur:</label>
  <input type="text" id="hauteur" name="hauteur"><br><br>
  <label for="largeur">Largeur:</label>
  <input type="text" id="largeur" name="largeur"><br><br>
  <input type="submit" value="Submit">
</form>

<?php
$largeur = (int)$_GET['largeur'];
$hauteur = (int)$_GET['hauteur'];

if ($largeur > 0 & $hauteur > 0) {

for ($i = 0; $i < $largeur; $i++)
{
echo str_repeat(' ', intval($largeur-$i));
echo "/";
echo str_repeat(' ', intval($i+$i));
echo "\ <br>";
}
echo str_repeat("_", $largeur*2);
echo "<br>";

for ($i = 0; $i < $hauteur; $i++){
echo "|";
echo str_repeat(' ', $largeur*2);
echo "|<br>";
}
echo str_repeat("_", $largeur*2);
} else {
    
}

?>
</body>
</html>