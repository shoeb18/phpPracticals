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

    $gaurya = new employee("gauri", 100000);
    $gaurya->employeeDetails();
    
?>