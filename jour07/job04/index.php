<?php
function calcule(){
$a = 3;
$b = 4;
$operation = "*";
return eval('return '.$a.$operation.$b.';');
}

echo calcule();
?>