<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Triangle</title>
</head>

<body>
    <?php
    function numberPattern($n)
    {
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $i;
            }
            echo "<br>";
        }
    }
    $n = 5;
    numberPattern($n);
    ?>

</body>

</html>