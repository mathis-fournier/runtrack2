<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 0;
} else {
   $counter =  $_SESSION['count']++;
    echo $counter;
}

If(isset($_POST['submit'])){
  $_POST = array();
  $_SESSION['count'] = 0;
}
?>

<form method="post">
<input type="submit" name="submit" value="submit" />
</form>

</body>
</html>