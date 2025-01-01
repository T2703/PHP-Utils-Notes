<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio.php" method="post">
        <input type="radio" name="creditcard" value="Visa">
        Visa <br>
        <input type="radio" name="creditcard" value="Master Card">
        Master Card <br>
        <input type="radio" name="creditcard" value="American Express">
        American Express <br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php

    if (isset($_POST["confirm"])) {

        if (isset($_POST["creditcard"])) {
            $creditCard = $_POST["creditcard"];
            echo $creditCard;
        }
        else {
            echo "Select a credit card.";
        }
    }
?>