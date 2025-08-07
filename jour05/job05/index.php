<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo $_GET['style'] ?>" rel="stylesheet" >
</head>
<body>
    
<form action="index.php" method="get">
<select name="style" id="style">
    <option value="styles.css">1</option>
    <option value="styles2.css">2</option>
    <option value="styles3.css">3</option>
</select>
<input type="submit" value="submit">
</form>
</body>
</html>