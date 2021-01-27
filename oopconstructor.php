<?php

class calculator {
public $a;
public $b;
public $c;


    public function __construct($value1, $value2){
    $this->a=$value1;
    $this->b=$value2;

}

    public function resultAdd(){
        $this->c = $this->a + $this->b;

            echo "Addition result is: ". $this->c. "<br>";
    }

     public function resultSub(){
        $this->c = $this->a - $this->b;

            echo "Subtraction result is: ". $this->c. "<br>";
    }

      public function resultMul(){
        $this->c = $this->a * $this->b;

            echo "Multiplication result is: ". $this->c. "<br>";
    }

      public function resultDiv(){
        $this->c = $this->a / $this->b;
            echo "Division result is: ". $this->c. "<br>----------------- <br> Inheritance <br> ----------------- <br>";
            
    }
    


}

//Inheritance

class result extends calculator{

    public $Division;

    public function resultAdd(){
        $this->c = $this->a + $this->b;

            echo "Addition result is: ". $this->c. "<br>";
    }

     public function resultSub(){
        $this->c = $this->a - $this->b;

            echo "Subtraction result is: ". $this->c. "<br>";
    }

      public function resultMul(){
        $this->c = $this->a * $this->b;

            echo "Multiplication result is: ". $this->c. "<br>";
    }
 public function resultDivv(){
        $this->c = $this->a / $this->b;

            echo $this->Division. $this->c. "<br>" ;
    }

}

$con=new calculator("10", "5");
$con->resultAdd();
$con->resultSub();
$con->resultMul();
$con->resultDiv();


$v1=10;
$v2=5;
$res=new result($v1, $v2);
$res->Division = "Division result is:  ";
$res->resultAdd();
$res->resultSub();
$res->resultMul();
$res->resultDivv();





?>