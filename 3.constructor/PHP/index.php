<?php include 'inc/header.php';?>
<?php
 


//Constructor

class Person{
     
     public $name;
     public $age;

     public function __construct($name,$age){

          $this->name = $name;
          $this->age  = $age;
     }

     public function personDetails(){

         echo "Perosn name is {$this->name} and person age is {$this->age}";
     }

}//end class


$personOne = new Person("Akhbar hossin","22");
$personOne->personDetails();
















 




?>
<?php include 'inc/footer.php';?>