<?php
    // Session => Super Global Variable used to store info on a user to be used across multiple pages.
    //            For example session ids, like staying logged in.

    // Do this before any HTML is displayed.

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br>

        <input type="submit" name="login" value="login"><br> 
    </form>
</body>
</html>

<?php
    /*$_SESSION["username"] = "nono";
    $_SESSION["password"] = "123";

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";*/

    if (isset($_POST["login"])) {

        if (!empty($_POST["username"]) && !empty($_POST["password"])) {
            $_SESSION["username"] = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
            $_SESSION["password"] = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
            
            header("Location: home.php"); // go to home.php
        }
        else {
            echo "Missing username/password <br>";
        }
    }
?>
