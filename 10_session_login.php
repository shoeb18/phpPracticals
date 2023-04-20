<?php
// What is a session?
// sessions are used to manage information across difference pages

// Verify the user login info
session_start();
$_SESSION['username'] = 'shoeb';
$_SESSION['password'] = 'NRG19';
echo "We have saved your session";
echo "<br>";
echo "<br>";
echo "<a href='10b_session_get_data.php' >Go to login page</a>";
echo "<br>";
echo "<a href='10c_session_logout.php' >Click here to logout</a>";
echo "<br>";
