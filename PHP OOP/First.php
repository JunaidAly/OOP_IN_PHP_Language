<?php
class Calculation{
public $a,$b,$c;

function Sum(){
$this->c=$this->a+$this->b;

return $this->c;


}

function Sub(){
    $this->c=$this->a-$this->b;
    
    return $this->c;
    
    
    }

}
$c1=new Calculation();
$c1->a=10;
$c1->b=20;

$c2=new Calculation();
$c2->a=10;
$c2->b=20;

echo "Sum values of c1: " .  $c1->Sum() . "\n";

echo "Subtract values of c2: " . $c2->Sub() . "\n";

echo "Subtract values of c1: " . $c1->Sub();



?>
