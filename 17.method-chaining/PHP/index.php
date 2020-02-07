<?php include 'inc/header.php';?>
<?php
 


//Method Chaining

spl_autoload_register(function($class_name){

      include 'classes/'.$class_name.".php";
});




// $php = new Php();
// $php->framework()->cms();


$cal = new Calculation();
echo "Result is: ".$cal->getValue(5,3)->getResult();




 













?>
<?php include 'inc/footer.php';?>