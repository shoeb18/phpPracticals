<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPS</title>
</head>

<body>
    <?php

    class employee
    {

        protected $name;
        protected $salary;

        function __construct($name, $salary)
        {
            $this->name = $name;
            $this->salary = $salary;
        }

        function employeeDetails()
        {
            echo "The name is : $this->name <br>";
            echo "The salary is : $this->salary <br>";
        }
    }

    class Programmer extends employee
    {
        private $lang = "php";

        function __construct($language, $name, $salary)
        {
            $this->lang = $language;
            $this->name = $name;
            $this->salary = $salary;
        }
        function display()
        {
            echo "The language is : $this->lang <br>";
            echo "The name is : $this->name <br>";
            echo "The salary is : $this->salary <br>";
        }
    }

    $gaurya = new employee("gauri", 100000);
    $gaurya->employeeDetails();

    $shoeb = new Programmer("python", "shoeb", 150);
    $shoeb->display();

    ?>
</body>

</html>