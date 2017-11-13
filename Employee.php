<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 13.11.2017
 * Time: 20:56
 */

abstract class Employee
{
    public $name;
    public $salary;
    public $hasTask;
   abstract function work();
   abstract function getInfo();
}