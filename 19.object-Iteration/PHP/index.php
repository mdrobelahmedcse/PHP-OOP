<?php include 'inc/header.php';?>
<?php
 


//Object Iteration

spl_autoload_register(function($class_name){

      include 'classes/'.$class_name.".php";
});

 

$person = new Person(); 
$person->iteratorInner();


echo "Outside class:";

foreach ($person as $key => $value) {
	
	  echo "<pre>";
	  echo "$key=>$value";
	  echo "</pre>";
}


 













?>
<?php include 'inc/footer.php';?>