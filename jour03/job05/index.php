<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$str = strtolower("On n'est pas le meilleur quand on le croit mais quand on le sait.");
$dic = array('consonnes' => "b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z", 'voyelles' => "a");
$c = 0;
$v = 0;
$voyelles = countVoyelles($str);
$consonnes = countConsonnes($str);
function countVoyelles($str)
{
    // Case-insensitive match for vowels
    preg_match_all("/[aeiou]/i", $str, $matches);
    return count($matches[0]);
}

function countConsonnes($str)
{
    // Case-insensitive match for vowels
    preg_match_all("/[bcdfghjklmnpqrstvwxz]/i", $str, $matches);
    return count($matches[0]);
}




?>


<table>
    <tr>
    <th>Consonnes</th>
    <th>Voyelles</th>
    </tr>
    <tr>
        <td><?= $consonnes ?></td>
        <td><?= $voyelles ?></td>
    </tr>


</table>
</body>
</html>

