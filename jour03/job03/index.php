<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$exc = array("B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z", "'");
$onlyvowels = str_ireplace($exc, "", $str);
echo "$onlyvowels";
?>