<?php
    
    class employee{

        protected $name;
        protected $salary;

        function __construct($name, $salary)
        {
            $this->name = $name;
            $this->$salary = $salary;
        }

        function employeeDetails(){
            echo "The name is : $this->name <br>";
            echo "The salary is : $this->salary <br>";
        }
    }

    class Programmer extends employee{
        private $lang = "php";

        function __construct($language)
        {
            $this->lang=$language;
        }
        function display(){
            echo "The language is : $this->lang";
        }
    }

    $gaurya = new employee("gauri", 100000);
    $gaurya->employeeDetails();

    $shoeb = new Programmer("python");
    $shoeb->display();
    
?>