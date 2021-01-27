<?php

class calculator {
public $a;
public $b;
public $c;
public $d;

 public function __construct($value1, $value2){
    $this->a=$value1;
    $this->b=$value2;

            }
}

//Inheritance
class result extends calculator{
public $v3;

public function allResult(){
if ($this->v3 == "+") {
    
        $this->c = $this->a + $this->b;
            echo " Addition result is: ". $this->c. "<br>----------------- <br>";
                
            }

        elseif ($this->v3== "-") {
    
        $this->c = $this->a - $this->b;
            echo " Subtraction result is: ". $this->c. "<br>----------------- <br>";   
            }

        elseif ($this->v3== "*") {
    
        $this->c = $this->a * $this->b;
            echo " Multiplication result is: ". $this->c. "<br>----------------- <br>";
                
            }
            
            elseif ($this->v3== "/") {
    
        $this->c = $this->a / $this->b;
            echo " Division result is: ". $this->c. "<br>----------------- <br>";
                
            }

        }
}

$v1=20;
$v2=5;


$res=new result($v1, $v2);
$res->v3="-";
$res->allResult();


?>
