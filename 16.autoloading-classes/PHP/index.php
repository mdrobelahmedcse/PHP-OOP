<?php include 'inc/header.php';?>
<?php
 


//Autoloading Classes

// include 'classes/Java.php';
// include 'classes/Php.php';
// include 'classes/Ruby.php';


// function __autoload($class_name){

//     echo $class_name."<br>";
//     include 'classes/'.$class_name.".php";
// }



spl_autoload_register(function($class_name){

      include 'classes/'.$class_name.".php";
});



$java = new Java();
$php = new Php();
$ruby = new Ruby();



 













?>
<?php include 'inc/footer.php';?>