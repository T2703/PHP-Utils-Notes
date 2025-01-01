<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math.php" method="post">
        <label>x:</label><br>
        <input type="text" name="x"><br>
        <label>y:</label><br>
        <input type="text" name="y"><br>
        <label>z:</label><br>
        <input type="text" name="z"><br>
        <input type="submit" value="total"><br> 
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    // Absolute Value
    // $total = abs($x);

    // Round function
    // $total = round($x);

    // Floor function
    // $total = floor($x);

    // Ceil Function
    // $total = ceil($x);

    // Square Root
    // $total = sqrt($x)

    // Power Function
    // $total = pow($x, $y);

    // Max Function
    // $total = max($x, $y, $z);

    // Min Function
    // $total = min($x, $y, $z);

    // Pi function
    // $total = pi();

    // Random
    // $total = rand(1, 100);
    
    echo $total;
?>