<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servname = "localhost"; $user = "root"; $pass = ""; $dbname = "jour09";
$conn = new mysqli($servname, $user, $pass, $dbname);
$sql = "SELECT salles.nom as nom_salle, etage.nom as nom_etage FROM salles inner join etage on salles.id_etage = etage.id";
$result = $conn->query($sql);
?>
    <table>
        <tr >
            <th>Nom Salle</th>
            <th>Nom Etage</th>

        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nom_salle"] . "</td>";
                echo "<td>" . $row["nom_etage"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Aucun résultat trouvé.</td></tr>";
        }
        ?>
    </table>
    <style>
    th {
        border: 1px solid black;
        padding: 5px;
    }
</style>
</body>
</html>