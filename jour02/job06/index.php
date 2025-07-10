<?php

$hauteur = 10;
$largeur = 20;
$handle = imagecreatetruecolor($largeur, $hauteur); 

$green = imagecolorallocate($handle, 0, 255, 0); 

imagefilledrectangle($handle, 0, 0, 640, 480, $green);

header("Content-type: image/jpg");
imagejpeg($handle);

?>
