<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Triangle</title>

    <style>
        body {
            text-align: center;
        }
    </style>
    
</head>

<body>
    <h2>Number Triangle</h2>

    <form action="3_number_triangle.php" method="post">
        <label for="number"> Enter the number to print number triangle : </label>
        <input type="number" name="number">
        <input type="submit" value="submit">
    </form>
    <br>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $num = $_POST['number'];

        for ($i = 1; $i <= $num; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $i;
            }
            echo "<br>";
        }
    }
    ?>
</body>

</html>