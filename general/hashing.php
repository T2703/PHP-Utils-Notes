<?php
    $password = "lol123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    if (password_verify("lol123", $hash)) {
        echo "Welcome";
    }
    else {
        echo "Wrong password";
    }
?>