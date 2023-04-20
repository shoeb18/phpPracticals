<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            background-color: skyblue;
            text-align: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo "How are you today! $username!";
        echo "<br>";
        echo "<h3>You are logged in successfully!</h3>";
        echo "<br>";
    } else {
        echo "<h3>404 Page Not Found</h3>";
        echo "<br>";
    }


    echo "<a href='7c_logout.php' > Click Here to Logout</a>";
    ?>


</body>

</html>