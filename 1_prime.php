<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>

    <style>
        body{
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Prime Number</h2>

    <form action="1_prime.php" method="post">
        <label for="number"> Enter The Number : </label>
        <input type="number" name="number">
        <input type="submit">
    </form>
    <br>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $number = $_POST['number'];
        $isPrime = true;

        for ($i = 2; $i < $number; $i++) {
            if ($number % $i == 0) {
                $isPrime = false;
                break;
            }
        }

        if ($isPrime) {
            echo "$number is Prime Number<br>";
        } else {
            echo "$number is not Prime Number<br>";
        }
    }
    ?>
</body>

</html>