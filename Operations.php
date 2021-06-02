<?php
class Operations {
    
    public $Answer='';

    public function Addition($Num1,$Num2) {
        return $this->Answer=$Num1+$Num2;
    }
    public function Subtraction($Num1,$Num2) {
        return $this->Answer=$Num1-$Num2;
    }
    public function Multiplication($Num1,$Num2) {
        return $this->Answer=$Num1*$Num2;
    }
    public function Division($Num1,$Num2) {
        return $this->Answer=$Num1/$Num2;
    }
    public function Square($Num1) {
        return $this->Answer=$Num1*$Num1;
    }
    public function Cube($Num1) {
        return $this->Answer=$Num1*$Num1*$Num1;
    }
    public function Factorial($Num1) {
        if($Num1==0){
            return $this->Answer=1;
        }
        else{
         return $this->Answer=($Num1* $this->Factorial($Num1-1));   
        }
    }
    public function Percentage($Num1) {
        return $this->Answer=$Num1/100;
    }
    
}
?>