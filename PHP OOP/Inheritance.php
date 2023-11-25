<?php
class Employee {
public $Name;
public $Age;
public $Salary;

function __construct($n,$a,$s){
$this->Name=$n;
$this->Age=$a;
$this->Salary=$s;

}

function info(){
echo "<h3>  Employee Profile   </h3>";
echo "Employee Name :" . $this->Name . "<br>";
echo "Employee Age :" . $this->Age . "<br>";
echo "Employee Salary :" . $this->Salary . "<br>";


}

}

class Manager extends Employee{
public $ta=2000;
public $phone=300;
public $totalSalary;

function info(){
    $this->totalSalary= $this->Salary+ $this->ta+ $this->phone;
    echo "<h3>  Manager Profile   </h3>";
    echo "Employee Name :" . $this->Name . "<br>";
    echo "Employee Age :" . $this->Age . "<br>";
    echo "Employee Salary :" . $this->totalSalary. "<br>";
    
    
    }

}

$e1 =new Employee("Ahmed",20,2000);
$e2 =new Manager("Junaid Ali",20,20000);

$e1->info();
$e2->info();

?>