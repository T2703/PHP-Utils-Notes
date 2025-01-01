<?php
    // Cookies => Info about a user stored within a web-browser
    
    setcookie("favoriteFood", "pizza", time() + (86400 * 2), "/");
    setcookie("favoriteDrink", "coke", time() + (86400 * 2), "/");
    setcookie("favoriteCar", "S2000", time() + (86400 * 2), "/");

    /*foreach ($_COOKIE as $key => $value) {
        echo "{$key} = {$value} <br>";
    }*/

    if (isset($_COOKIE["favoriteFood"])) { 
        echo "BUY SOME {$_COOKIE["favoriteFood"]} ! <br>";
    }
    else {
        echo "I don't know your favorite food.";
    }
?>