<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associativearrays.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php
    // Associate Array - Made of key value pairs.

    $capitals = array("USA"=> "Washington D.C.", 
                      "Japan"=> "Kyoto", 
                      "Korea"=> "Seoul", 
                      "India"=> "New Delhi");
    
    $capital = $capitals[$_POST["country"]];

    echo "The capital is {$capital}";
?>