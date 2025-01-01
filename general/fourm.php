<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fourm.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br>

        <input type="submit" value="Log in"><br> 
    </form>
</body>
</html>

<?php
    // GET (gets stuff)
    // DATA IS NOT SECURE
    // GET REQUESTS CAN BE CACHED
    echo "{$_GET["username"]} <br>";
    echo "{$_GET["password"]} <br>";

    // POST (send in stuff like login)
    // SEQURE
    // NO DATA LIMIT
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
?>