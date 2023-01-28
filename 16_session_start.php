<?php
    
    // session used to manage information across difference pages

    // verifying the user login
    session_start();
    $_SESSION['username'] = "shoeb19";
    $_SESSION['password'] = "NRG";
    echo "We have saved your session";
?>