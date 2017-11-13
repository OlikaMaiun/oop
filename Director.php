<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 10.11.2017
 * Time: 20:00
 */
require_once ('Manager.php');
require_once ('Employee.php');
class Director extends Employee
{
    public $favourite;
    function __construct($name, $salary, $hasTask)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->hasTask = $hasTask;
    }

    function work()
    {
       echo "I'm director. I'm looking for others. \n";
    }

    function getInfo(){
        echo "Director: {$this->name}, {$this->salary}, {$this->hasTask}, {$this->favourite->name}\n";
    }
    function riseSalary($employee, $evaluation){
        $employee->salary+=$evaluation;
    }
}