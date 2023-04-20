<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>

    <style>
        body {
            text-align: center;
        }
    </style>
    
</head>

<body>
    <h2>String Functions</h2>

    <?php

    // String functions

    $name = "shoeb is a good boy";
    echo $name;
    echo "<br>";

    // strlen() returns the length of the string
    echo "The length of the string is : " . strlen($name);
    echo "<br>";

    // str_word_count() returns the length of no of words of the string
    echo "The total no of words in string is : " . str_word_count($name);
    echo "<br>";

    // strrev() returns the reverse version of string
    echo "The reverse string is : " . strrev($name);
    echo "<br>";

    // strpos() returns the position of first given string
    echo "The index of 'g' in string is : " . strpos($name, "g");
    echo "<br>";

    // str_replace() it returns the old substring into new substring
    echo str_replace("shoeb", "gaurav", $name);
    echo "<br>";

    // str_repeat() it used to repeat string
    echo str_repeat("PHP    ", 10);
    echo "<br>";

    // rtrim and ltrim used to delete unwanted spaces from right and left
    echo rtrim("        Hello World");


    ?>
</body>

</html>