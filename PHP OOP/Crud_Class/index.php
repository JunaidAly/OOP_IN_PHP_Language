<?php
include 'database.php';
$obj = new Database();

//$obj->insert('students',['student_name'=>'Ahmed','age'=>'20','city'=>'Hunza']);

//echo "Insert result is :" . "<br>";
//print_r($obj->getResult());


//$obj->update('students',['student_name'=>'Junaid Ali','age'=>'30','city'=>'Hunza'],'id= "1"');

//echo "Update result is :" . "<br>";
//print_r($obj->getResult());

//$obj->delete('students','id= "1"');

//echo "Update result is :" . "<br>";
//print_r($obj->getResult());


//$obj->sql('SELECT * FROM students WHERE age = "20"');

//echo "SQL result is :" . "<br>";
//print_r($obj->getResult());



$obj->select('students', '*',null,'city="Hunza"',null,null);

echo "Select result is :" . "<br>";
print_r($obj->getResult());
?>