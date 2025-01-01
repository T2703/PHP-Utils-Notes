<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <input type="submit" name="login" value="login"><br> 
    </form>
</body>
</html>

<?php
    // SERVER => Super Global Variable that contains headers, paths, and script locations.
    //           The entries in this array are created by the web server.
    //           Show nearly everything you need to know about the page environment.

    /*foreach ($_SERVER as $key => $value) {
        echo "{$key} = {$value} <br>";
    }*/

    // More reliable for POST requests.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Hello";
    }

?>