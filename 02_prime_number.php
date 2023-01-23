<?php
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $isPrime = true;
        $number = $_POST['number'];

        for ($i=2;$i<$number;$i++){
            if ($number%$i==0){
                $isPrime = false;
                break;
            }
        }
        if ($isPrime){
            echo "$number is Prime number <br>";
        }
        else{
            echo "$number is not a Prime number <br>";
        }
    }
?>