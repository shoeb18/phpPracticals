<?php
echo "Welcome to the cookies Program <br>";

// syntax to set a cookie
$cookie_name = "category";
$cookie_value = "gaming";
setcookie($cookie_name, $cookie_value, time() + 86400, "/");
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>

<body>
    <?php

    if (isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is set! <br>";
        echo "Cookie value is : ". $_COOKIE[$cookie_name];
    } else {
        echo "Cookie is not set yet!";
    }
    ?>
</body>

</html>