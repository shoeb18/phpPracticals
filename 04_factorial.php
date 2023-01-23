<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $number = $_POST['number'];
    $fact = 1;
    
    for ($i=1; $i <= $number; $i++) { 
        $fact = $fact * $i;
    }
    echo "The factorial of $number is : $fact";
}

?>