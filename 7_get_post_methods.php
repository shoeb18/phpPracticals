<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get/Post Methods</title>

    <style>
        body{
            background-color: skyblue;
            text-align: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <h2>Login Form</h2>

    <form action="7b_get_post_login.php" method="post">
        <label for="username">Username : </label>
        <input type="text" name="username">
        <br>
        <br>
        <label for="password">Password : </label>
        <input type="password" name="password">
        <br>
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>