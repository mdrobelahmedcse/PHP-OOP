<?php include 'inc/header.php';?>
<?php
 


//Destructor

class Person{
     
     public $name;
     public $age;
     public $id;

     public function __construct($name,$age){

          $this->name = $name;
          $this->age  = $age;
     }

     public function setId($id){

     	 $this->id = $id;
     }

     public function __destruct(){

     	 if (!empty($this->id)) {
     	 	
     	 	 echo "Saving person";
     	 }
     }

}//end class


$personOne = new Person("Akhbar hossin","22");
$personOne->setId(12);
unset($personOne);
















 




?>
<?php include 'inc/footer.php';?>