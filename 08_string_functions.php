<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String functions</title>
</head>
<body>

   <?php

        // String functions

        $name = "shoeb is a good boy";
        echo $name;
        echo "<br>";

        // strlen() --> it returns the length of the string
        echo "The length of the string is : ". strlen($name);
        echo "<br>";

        // str_word_count --> it returns the length no of words from the string
        echo "The total no of words in string is : ". str_word_count($name);
        echo "<br>";

        // strrev() --> it returns the reverse version of the string
        echo "The reverse string is : ". strrev($name);
        echo "<br>";

        // strpos() --> it returns the position of first given string
        echo "The index of 'a' in string is : ". strpos($name, "a"); 
        echo "<br>";

        // str_replace() --> it replaces the old substring into new substring
        echo str_replace("shoeb", "ashwin", $name);
        echo "<br>";

        // str_repeat() --> it used to repeat string no of times
        echo str_repeat("Game Dev ", 10);
        echo "<br>";

        // rtrim(), ltrim() --> it used to delete unwanted spaces from right and left of string
        echo rtrim("    Hello world");

?>

</body>
</html>