<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>


<body>
<style>
table, th, td {
  border:1px solid black;
}
</style>





<?php
echo"test";
$bool = true;
$c = 3;
$cc = "sdzqzda";
$float = 4.1;

function getVariableName($cc) {
    foreach($GLOBALS as $varName => $value) {
        if ($value === $cc) {
            return $varName;
        }
    }
    return;
}
?>




<table style="width: 100%;">
<tr>
    <th>Valeur</th>
    <th>Type</th>
    <th>Nom</th>
</tr>

<tr>
    <td><?php echo $cc; ?></td>
    <td><?php echo gettype($cc)?></td>
    <td><?php echo getVariableName($cc) ?></td>
</tr>

<tr>
    <td><?php echo $c; ?></td>
    <td><?php echo gettype($c)?></td>
    <td><?php echo getVariableName($c) ?></td>
</tr>

<tr>
    <td><?php echo $float; ?></td>
    <td><?php echo gettype($float)?></td>
    <td><?php echo getVariableName($float)?></td>
</tr>
</table>




</body>
</html>