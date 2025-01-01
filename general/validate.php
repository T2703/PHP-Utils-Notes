<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validate.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Age:</label><br>
        <input type="text" name="age"><br>
        <label>email:</label><br>
        <input type="email" name="email"><br>
        <input type="submit" name="login" value="login"><br> 
    </form>
</body>
</html>

<?php
    // Sanitize/validate

    /*if (isset($_POST["login"])) {
        // Sanitize - strip characters of certain input.
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        echo "Hello {$username} you are {$age} years old. Your email is: {$email}";
    }*/

    if (isset($_POST["login"])) {
        // Validate - Returns empty string if it doesn't pass
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if (empty($email)) {
            echo "That email wasn't valid";
        }
        else {
            echo "Your email is: {$email}";
        }
    }
?>