<?php
    echo "Welcome to cookies!!!";
    echo "<br>";

    // syntax to set a cookie
    setcookie("hobby", "gaming", time() + 86400,"/");
    echo "<br>";
    echo "The cookie is set successfully!";
?>