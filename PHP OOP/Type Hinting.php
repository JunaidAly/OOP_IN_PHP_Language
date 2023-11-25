<?php
class school{
    public function getNames(student $names){
        echo "<ul>";
        foreach($names->Names() as $name){
            echo "<li>". $name . "</li>";


        }
        echo "</ul>";
    }
}

class student{
    public function Names(){

        return ["Junaid ","Ali","Aalishan"];

    }
}
class Library{

}

$lib=new Library();
$stu=new student();
$sch=new school();

$sch->getNames($stu);
?>