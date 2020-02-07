<?php include 'inc/header.php';?>
<?php



//class,property,method and object
 

class Person{


    public $name;
    public $age;


    public function personName(){

        echo "Person name is: ".$this->name;
    }

    public function personAge($value){

        echo "Person age is: ".$this->age = $value; 
    }



}//end class




$person = new Person;
$person->name = "Robel ahammed";
$person->personName();
echo "<br>";
$person->personAge("18");



















?>
<?php include 'inc/footer.php';?>