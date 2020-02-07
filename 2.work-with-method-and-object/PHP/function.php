<?php



class Calculation{
   
    //addition method
    public function add($numberOne,$numberTwo){
         
         echo "Summation: ".($numberOne+$numberTwo)."<br>";
    }
    //subtraction method
    public function sub($numberOne,$numberTwo){
        
        echo "Subtraction: ".($numberOne-$numberTwo)."<br>";
    }
    //multiflication method
    public function mul($numberOne,$numberTwo){
      
        echo "Multiflication: ".($numberOne*$numberTwo)."<br>";
    } 
    //division method
    public function div($numberOne,$numberTwo){
      
        echo "Division: ".($numberOne/$numberTwo)."<br>";
    }  


}//end class



?>