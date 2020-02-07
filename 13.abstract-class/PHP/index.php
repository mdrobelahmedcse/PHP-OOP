<?php include 'inc/header.php';?>
<?php
 


//Abstract Class


abstract class Student{


	 public $name;
	 public $age;

	 public function details(){

	 	  echo $this->name." is ".$this->age." years old.<br>";
	 }

	 abstract public function school();


}//end class



class Boy extends Student{


    public function describe(){

       	return parent::details(). " and i am a school student<br>";
    }


    public function school(){

    	return "I like to read story book<br>"; 
    }


}//end class




$s = new Boy();
$s->name = "Akhbar hossain";
$s->age = "22";
echo $s->describe();
echo $s->school();

 
 






 














?>
<?php include 'inc/footer.php';?>