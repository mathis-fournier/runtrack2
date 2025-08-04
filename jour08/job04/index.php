<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
   <?php
   if (isset($_GET['prenom']))
   {
        $cookie_value = $_GET['prenom'];
   } else 
   {
    $cookie_value = "0";
   }

    $prenom = setcookie("test", $cookie_value, time() + (86400 * 30), "/");

    //RESET
    if (isset($_GET['reset'])) 
    {
    $cookie_value = "0";
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
    }
   ?>

    <?php if ($cookie_value === "0"): ?>
    <form method="get">
    <input type="text" name="prenom">
    <input type="submit" value="connexion">
    </form>
    <?php else: ?>
    <form method="get">
    <button type="submit" name="reset">Deco</button>
    </form>
    <?php echo "Bonjour " . $cookie_value; ?>
    <?php endif ?>

</body>
</html>