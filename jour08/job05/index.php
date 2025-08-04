<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    $_SESSION['grille'] = [
        0, 0, 0,
        0, 0, 0,
        0, 0, 0];

    $_SESSION['scoreJ1'] = 0;
    $_SESSION['scoreJ2'] = 0;

    $_SESSION['auJoueur'] = 2;
    $j1 = 1;
    $j2 = 2;

    if (empty($_SESSION['grille'])) {
        $_SESSION['grille'] = [0, 0, 0, 
                               0, 0, 0, 
                               0, 0, 0]; 
    }

    if (empty($_SESSION['scoreJ1'])) {
        $_SESSION['scoreJ1'] = 0;
    }

    if (empty($_SESSION['scoreJ2'])) {
        $_SESSION['scoreJ2'] = 0;
    }

    if (empty($_SESSION['auJoueur'])) {
        $_SESSION['auJoueur'] = 1;
    }

    if ($_GET['case'] & $_SESSION['auJoueur'] === 1) {
        $_SESSION['auJoueur'] = 2;
    } 
    if ($_GET['case'] & $_SESSION['auJoueur'] === 2) {
        $_SESSION['auJoueur'] = 1;
    }

    if (!empty($_GET['case'])) {
        $leJoueurJoueLaCase = $_GET['case'] - 1;

        if ($_SESSION['grille'][$leJoueurJoueLaCase] == 0) {
            $_SESSION['grille'][$leJoueurJoueLaCase] = $_SESSION['auJoueur'];
        }
    }
    ?>



<!-- GRILLE IF 1 / 2 = CROIX OU CERCLE -->
<section class="container">
	<p id="player">Au tour du joueur <?php echo $_SESSION['auJoueur']; ?></p>
		<div class="tg-wrap">
		<table class="tg">
  <tr>
    <td class="tg-031e"><a href="?case=1#"><?php if ($_SESSION['grille'][0] == 1) { echo '<img src="img/cross.png" alt="Croix">'; } elseif ($_SESSION['grille'][0] == 2) { echo '<img src="img/circle.png" alt="Circle">'; } else { echo ' '; } ?></a></th>
    <td class="tg-031e"><a href="?case=2#"><?php if ($_SESSION['grille'][1] == 1) {
        echo '<img src="img/cross.png" alt="Croix">';
    } elseif ($_SESSION['grille'][1] == 2) {
        echo '<img src="img/circle.png" alt="Circle">';
    } else {
        echo ' ';
    } ?></a></th>
    <td class="tg-031e"><a href="?case=3#"><?php if ($_SESSION['grille'][2] == 1) {
        echo '<img src="img/cross.png" alt="Croix">';
    } elseif ($_SESSION['grille'][2] == 2) {
        echo '<img src="img/circle.png" alt="Circle">';
    } else {
        echo ' ';
    } ?></a></th>
  </tr>
  <tr>
    <td class="tg-031e"><a href="?case=4#"><?php if ($_SESSION['grille'][3] == 1) {
        echo '<img src="img/cross.png" alt="Croix">';
    } elseif ($_SESSION['grille'][3] == 2) {
        echo '<img src="img/circle.png" alt="Circle">';
    } else {
        echo ' ';
    } ?></a></td>
    <td class="tg-031e"><a href="?case=5#"><?php if ($_SESSION['grille'][4] == 1) {
        echo '<img src="img/cross.png" alt="Croix">';
    } elseif ($_SESSION['grille'][4] == 2) {
        echo '<img src="img/circle.png" alt="Circle">';
    } else {
        echo ' ';
    } ?></a></td>
    <td class="tg-031e"><a href="?case=6#"><?php if ($_SESSION['grille'][5] == 1) {
        echo '<img src="img/cross.png" alt="Croix">';
    } elseif ($_SESSION['grille'][5] == 2) {
        echo '<img src="img/circle.png" alt="Circle">';
    } else {
        echo ' ';
    } ?></a></td>
  </tr>
  <tr>
    <td class="tg-031e"><a href="?case=7#"><?php if ($_SESSION['grille'][6] == 1) {
        echo '<img src="img/cross.png" alt="Croix">';
    } elseif ($_SESSION['grille'][6] == 2) {
        echo '<img src="img/circle.png" alt="Circle">';
    } else {
        echo ' ';
    } ?></a></td>
    <td class="tg-031e"><a href="?case=8#"><?php if ($_SESSION['grille'][7] == 1) {
        echo '<img src="img/cross.png" alt="Croix">';
    } elseif ($_SESSION['grille'][7] == 2) {
        echo '<img src="img/circle.png" alt="Circle">';
    } else {
        echo ' ';
    } ?></a></td>
    <td class="tg-031e"><a href="?case=9#"><?php if ($_SESSION['grille'][8] == 1) {
        echo '<img src="img/cross.png" alt="Croix">';
    } elseif ($_SESSION['grille'][8] == 2) {
        echo '<img src="img/circle.png" alt="Circle">';
    } else {
        echo ' ';
    } ?></a></td>
  </tr>
</table>
</div>

</body>
</html>