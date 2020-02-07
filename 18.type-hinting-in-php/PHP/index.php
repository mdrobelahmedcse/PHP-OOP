<?php include 'inc/header.php';?>
<?php
 


//Type Hinting in PHP

spl_autoload_register(function($class_name){

      include 'classes/'.$class_name.".php";
});

 

/*
$cal = new Calculation();
$nums = array(

     array("Number one",10,10),
     array("Number two",20,20)
);


$cal->getValue($nums);

*/


new Java(new Php);


 













?>
<?php include 'inc/footer.php';?>