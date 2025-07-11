<?php 

$t = [200, 204, 173, 98, 171, 404, 459];

for ($i = 0; $i < 7; $i++)
{
    if ($t[$i]%2)
        {
            echo"$t[$i] est impair <br>";
        } 
        else 
        {
            echo"$t[$i] est pair <br>";
        }
}
?>