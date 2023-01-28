<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "theboys";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn){
        echo "Sorry we failed to connect : ". mysqli_connect_error();
        echo "<br>";
    }
    else{
        echo "Connection was successful<br>";
    }


    // inserting the data in db
    // $name = "john";
    // $profession = "Web Developer";
    
    // $sql = "INSERT INTO `boys` (`name`, `prof`) VALUES ('$name', '$profession')";
    // $result = mysqli_query($conn, $sql);

    $sql = "SELECT *FROM `boys`";
    $result = mysqli_query($conn, $sql);

    // finding the no of rows in records
    $num = mysqli_num_rows($result);
    echo "There are total $num records in database";
    echo "<br>";

    // fetching the records from the database

    $no = 1;
    if ($num > 0){
        while($row=mysqli_fetch_assoc($result)){
            echo $no.") Hello ".$row['name']. " You are now ".$row['prof'];
            echo "<br>";
            $no++;
        }
    }


?>