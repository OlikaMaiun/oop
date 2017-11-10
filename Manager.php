<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 10.11.2017
 * Time: 19:46
 */

class Manager {
    public $name;
    public $salary;
    public $hasTask;
    function __construct($name, $salary, $hasTask)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->hasTask = $hasTask;
    }
    public function getInfo(){
        echo "Manager: {$this->name}, {$this->salary}, {$this->hasTask}\n";
    }
}