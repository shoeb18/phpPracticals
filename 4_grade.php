<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>

    <style>
        body {
            text-align: center;
        }
    </style>
    
</head>

<body>
    <h2>Grade Calculator</h2>

    <form action="4_grade.php" method="post">
        <label for="marks">Enter your marks : </label>
        <input type="text" name="marks">
        <input type="submit" value="submit">
    </form>
    <br>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $marks = $_POST['marks'];

        $grade = "Invalid Marks";

        if ($marks >= 70 && $marks <= 100) {
            $grade = "Distinction";
        } else if ($marks >= 60 && $marks < 70) {
            $grade = "First Class";
        } else if ($marks >= 40 && $marks < 60) {
            $grade = "Pass";
        } else if ($marks >= 0 && $marks < 40) {
            $grade = "Fail";
        }

        echo "Your grade is : " . $grade;
    }
    ?>
</body>

</html>