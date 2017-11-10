<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 10.11.2017
 * Time: 20:27
 */
require_once ('Director.php');
require_once ('Manager.php');
class Company
{
private $employees;
private static $counter=0;

    public function getEmployees(){
        return $this->employees;
    }

    public function setEmployees($employees){
        $this->employees = $employees;
        self::$counter+=count($employees);
    }

    public function addNewEmployee($employee){
        $this->employees[]=$employee;
        self::$counter+=1;
    }

    public function removeEmployee($employeeName){
        $index = $this->findIndex($employeeName);
        if ($index >=0){
            unset($this->employees[$index]);
            self::$counter -= 1;
        }
    }

    private function findIndex($employeeName){
        for ($i=0; $i <count($this->employees); $i++){
            if ($this->employees[$i]->name == $employeeName){
                return $i;
            }
        }
        return -1; //если не совпало ниодно имя
    }

    public function getCounter(){
        return self::$counter;
    }


function allEmployeesInfo(){
    foreach ($this->employees as $empl){
        $empl->getInfo();
    }
}
}