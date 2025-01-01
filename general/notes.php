
<?php
    // These are how messages work use <br> for new lines
    echo"Hello, world! <br>";
?>

<?php
    // Variables
    // Strings
    $name = "Triust";
    $email = "mail@.com";
    echo "Hey {$name}, I have your {$email} <br>";

    // Ints
    $age = 21;
    $users = 2;
    echo "You are {$age} years old <br>";
    echo "There are {$users} online <br>";

    // Float
    $gpa = 2.5;

    // Booleans 
    $online = true;
    echo "You are {$online}";
?>

<?php
    // Arithmetic Operators
    $x = 1;
    $y = 1;
    $z = null;

    $answer = $x + $y;
    echo "You are {$answer} <br>";
?>

<?php
    // If statements
    // Logical Operators
    $age = 21;

    if ($age >= 18) {
        echo "You are old enough";
    }
    else if ($age == 0) {
        echo "ZERO";
    }
    else {
        echo "You are not old enough";
    }
?>

<?php
    // Arrays
    $foods = array("apple", "orange", "pizza", "fish");

    // Change element
    //$foods[0] = "pineapple";

    // Push - add new element
    //array_push($foods, "hot dog", "kiwi");

    // Pop - remove last element
    //array_pop($foods);

    // Shift remove the first element and shift the others by one
    //array_shift($foods);

    // Reverse - need to assign to a new one.
    //$reverseFoods = array_reverse($foods);

    // Count 
    //echo count($foods);

    foreach($foods as $food) {
        echo $food . "<br>";
    }
?>

<?php
    // Associate Array - Made of key value pairs.

    $capitals = array("USA"=> "Washington D.C.", 
                      "Japan"=> "Kyoto", 
                      "Korea"=> "Seoul", 
                      "India"=> "New Delhi");

    // Update the key value pair
    //$capitals["USA"] = "Las Vegas";

    // Add new key value pair
    //$capitals["China"] = "Beijing";

    // Remove the last element
    //array_pop($capitals);

    // Remove the first element
    //array_shift($capitals)

    //$keys = array_keys($capitals);
    //$values = array_values($capitals);

    // Flip
    //array_flip($capitals)

    //array_reverse($capitals)
    
    //echo $capitals["Japan"];

    // Loop through all the key value pairs
    foreach($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    }
?>

<?php
    // isset() = Returns true if a variable is declared and not null
    // empty() = Returns true if a variable is not declared, false, null

    $username = "Test";

    if (empty($username)) {
        echo isset($username);
    }
    else {
        echo "N/A <br>";
    }
?>

<?php
    // Function
    function happyBirthday($firstName, $age) {
        echo "Happy birthday {$firstName} <br>";
        echo "You are {$age} years old <br>";

        return;
    }

    function isEven($number) {
        return $number % 2;
    }

    function hypotenuse(float $a, float $b) {
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    happyBirthday("Spongebob", 30);
    echo isEven(10);
    echo hypotenuse(4, 5);
?>

<?php
    // String methods
    $username = "User 1 name";
    $phone = "123-456-7890";

    //$username = strtolower($username);
    //$username = strtoupper($username);
    //$username = trim($username);
    //$username = str_pad($username, 20, "0");
    //$phone = str_replace("-", "", $phone);
    //$username = strrev($username);
    //$username = str_shuffle($username);
    //$equals = strcmp($username, "User name");
    //$count = strlen($username);
    //$index = strpos($username, " ");
    //$firstname = substr($username, 0, 3);
    //$fullname = explode(" ", $username); // turns this into an array implode returns it to a string

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>Press Me</button>
    <br>
    <div>
            <label>username</label><br>
    <input type="text
    </div>
    <label>username</label><br>
    <input type="text
</body>
</html>