<?php
    // If mysql for whatever reason does not run on the XAMP, shut mysql down on task manager.
    // Igonre the syntax error with $connection it's included from the database.php.
    include("database.php");
    
    // Creating users
    $username = "Squidward";
    $password = "clarinet2";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$hash')";
    
    try {
        mysqli_query($connection, $sql);
        echo "User is now registered.";
    }
    catch (mysqli_sql_exception) {
        echo "Could not register user.";
    }
    
    mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello World <br>
</body>
</html>