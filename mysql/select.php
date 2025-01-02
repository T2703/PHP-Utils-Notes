<?php
    // If mysql for whatever reason does not run on the XAMP, shut mysql down on task manager.
    // Igonre the syntax error with $connection it's included from the database.php.
    include("database.php");

    $sql = "SELECT * FROM users";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["reg_date"] . "<br>";
        }
    }
    else {
        echo "No results found";
    }
    
    mysqli_close($connection);
?>