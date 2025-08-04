
<?php 

 session_start();
 $_SESSION['prenoms'] = array();
if (!isset($_SESSION['prenom'])) {
    $_SESSION['prenom'] = [];
}
if (isset($_GET['reset'])) {
    $_SESSION["prenom"] = [];
    
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}
if (isset($_GET["prenom"]) && !empty($_GET["prenom"])) {
    $_SESSION['prenom'][] = htmlspecialchars($_GET["prenom"]);

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB03</title>
</head>
<body>
   <form method="get">
    <input type="text" name="prenom">
    <input type="submit" value="Ajouter">
    <button type="submit" name="reset" value="1">Reset</button>
   </form>
   <h2>Prénoms:</h2>
   <ul>
    <?php
    foreach ($_SESSION["prenom"] as $prenom): ?>
            <li><?= htmlspecialchars($prenom) ?></li>
        <?php endforeach; ?>
    </ul>   
</body>
</html>