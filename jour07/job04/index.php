<?php
function calcule(){
$a = 3;
$b = 4;
$operation = "*";

if ($a > 0 & $b > 0) {
    return eval('return '.$a.$operation.$b.';');
}
}

echo calcule();
?>