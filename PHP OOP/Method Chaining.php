<?php
class abc{
public function first(){
    echo "This first function. <br>";
    return $this;
}

public function second(){
    echo "This 2nd function. <br>";
    return $this;
}


public function third(){
    echo "This 3rd function. <br>";

}

}

$test=new abc;
$test->first()->second()->third();

?>
