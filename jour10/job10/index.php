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
$sql = "SELECT * FROM SALLES ORDER BY capacite desc";
$result = $conn->query($sql);
?>
    <table>
        <tr >
            <th>Capacite Totale</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["capacite"] . "</td>";
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