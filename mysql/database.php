<?php
    // MYSQLi
    // Go into PHP myadmin by clicking admin on the XAMP control panel

    // DB variables
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $connection = "";

    try {
        $connection = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
        echo "We are connected :3 <br>";
    }
    catch (mysqli_sql_exception) {
        echo "Error: Could not connect!";
    }

?>