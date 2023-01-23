<?php
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $marks = $_POST['marks'];

        $grade = "";

        if ($marks >= 70 && $marks <= 100){
            $grade = "Distinction";
        }
        else if ($marks >= 60 && $marks < 70){
            $grade = "First Class";
        }
        else if ($marks >= 40 && $marks < 60){
            $grade = "Average";
        }
        else if ($marks < 40){
            $grade = "Fail";
        }

        echo "You got $grade grade";
    }
?>