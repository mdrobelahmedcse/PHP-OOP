<?php include 'inc/header.php';?>
<?php
 


//Magic Methods
//https://dzone.com/articles/9-magic-methods-php-0
// __construct()
// __destruct()
// __get($property)
// __set($property,$value)
// __call($method, $arg_array)


/*
  when we are going to access a un-define property the get magic method will be work.
  when we are going to set a value in un-define proprty the set magic method will be work.
  when we are going to access a un-define method the call magic method will be work. 

*/

//student class
class Student{


	public $name;

     public function describe(){

     	 echo "I am a student<br>";
     }


     public function __get($pm){

         echo "$pm does not exist<br>";
     }

     public function __set($pm,$value){

     	 echo "we set $pm->$value<br>";
     }

     public function __call($pm,$value){

         echo "there is no exist ".$pm." method and argument ".implode(', ', $value);
     }

}//end class



//create object

$st = new Student;
$st->describe();
$st->Hasan;
$st->age = 15;
$st->noExistMethod('2','4','6','8');
 
 






 














?>
<?php include 'inc/footer.php';?>