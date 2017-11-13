<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 10.11.2017
 * Time: 19:46
 */
require_once ('Employee.php');
require_once ('Flyable.php');
class Manager extends Employee implements Flyable {

    function __construct($name, $salary, $hasTask)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->hasTask = $hasTask;
    }
    public function work()
    {
       echo "I'm manager, I'm working. \n";
    }

    public function getInfo(){
        echo "Manager: {$this->name}, {$this->salary}, {$this->hasTask}\n";
    }

    function fly()
    {
        echo "I`m flying\n";
    }
}