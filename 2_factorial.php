<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
    
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Factorial</h2>

    <form action="2_factorial.php" method="post">
        <label for="number">Enter The Number : </label>
        <input type="number" name="number">
        <input type="submit">
    </form>
    <br>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $num = $_POST['number'];
        $fact = 1;

        for ($i = 1; $i <= $num; $i++) {
            $fact = $fact * $i;
        }
        echo "The Factorial of $num is : $fact <br>";
    }
    ?>
</body>

</html>