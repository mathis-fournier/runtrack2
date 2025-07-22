<?php
$str = "aebglst";
function leetspeak($str) {
return str_ireplace(array("a", "b", "e", "g", "l", "s", "t"), array("4", "8", "3", "6", "1", "5", "7"), $str);
}
echo leetspeak($str);
?>