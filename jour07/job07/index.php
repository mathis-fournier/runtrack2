<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
    <input type="text" name="str"></input>
    <select name="fonction">
        <option>Cesar</option>
        <option>Gras</option>
        <option>Plateforme</option>
    </select>
    <button type="submit">Submit</button>
    </form>

<?php

$str = $_GET['str'];
$select = $_GET['fonction'];
$wc = str_word_count($str, 1);


function gras($wc)
{
    for ($i = 0; $i < count($wc); $i++)
    {
        if (ctype_upper($wc[$i][0]))
        {
            echo "<b>" . $wc[$i] . " </b>";
        } else {
            echo $wc[$i] . " ";
        }
    }
}

function plateforme ($wc) 
{
    for ($i = 0; $i < count($wc); $i++)
    {
        if (substr_count($wc[$i][-1], "e") & substr_count($wc[$i][-2], "m"))
        {
            echo  $wc[$i] . "_ ";
        } 
        else 
        {
            echo $wc[$i] . " ";
        }
    }
}



function cesar ($str, $dec=2) {
    $alphabet = range("a","z") ;

    for ($i = 0; $i < strlen($str); $i++) {
        $keywithdecalage = array_search($str[$i], $alphabet) + $dec;
        $resultat = $alphabet[$keywithdecalage];
        print_r($resultat);
    }
}

if ($select === "Cesar")
    {
        cesar($str);
    }

if ($select === "Gras") 
    {
    gras($wc);
    }

if ($select === "Plateforme") 
    {
        plateforme($wc);
    }

?>
</body>
</html>