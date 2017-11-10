<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 10.11.2017
 * Time: 20:00
 */
require_once ('Manager.php');
class Director
{
    public $name;
    public $salary;
    public $hasTask;
    public $favourite;
    function __construct($name, $salary, $hasTask)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->hasTask = $hasTask;
    }
    function getInfo(){
        echo "Director: {$this->name}, {$this->salary}, {$this->hasTask}, {$this->favourite->name}\n";
    }
    function riseSalary($employee, $evaluation){
        $employee->salary+=$evaluation;
    }
}