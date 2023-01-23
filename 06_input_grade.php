<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Input</title>
</head>

<body>
    <div class="container">
        <form action="07_grade_system.php" method="post">
            <div class="mb-3">
                <label for="marks" class="form-label">Enter your total marks to calculate grade : </label>
                <input type="text" name="marks" class="form-control" id="marks" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>