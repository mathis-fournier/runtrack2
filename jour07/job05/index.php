<?php
$str = "aaafeskfs";
$char = "f";
function occurrences($str, $char){
echo substr_count($str, $char);
}

occurrences($str, $char);
?>