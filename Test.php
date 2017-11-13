<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 10.11.2017
 * Time: 19:43
 */
require_once ('Manager.php');
require_once ('Director.php');
require_once ('Company.php');
require_once ('Employee.php');

$manager1 = new Manager("Los", 540, true);
$manager2 = new Manager("Max", 1540, true);
$manager3 = new Manager("Hok", 1040, false);

$director = new Director("Roma", 50000, true);

$director->favourite = $manager3;
$director->riseSalary($manager2, 300);

$firm = new Company();
$firm->setEmployees(array($manager1, $manager2, $manager3, $director));
$firm->allEmployeesInfo();
print "counter = ".$firm->getCounter()."\n";

//$firm->removeEmployee("Hok");
//print "counter = ".$firm->getCounter()."\n";

$firm->addNewEmployee(new Manager("Olha the human",49999,true));
print "counter = ".$firm->getCounter()."\n";

print "------------------------------\n";
$firm->allEmployeesInfo();

$firm->showInProcessEmployees();