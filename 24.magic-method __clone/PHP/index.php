<?php include 'inc/header.php';?>
<?php


//Magic Method __clone



spl_autoload_register(function($class){

    include 'classes/'.$class.".php";

});


 

// $java = new language();
// $java->setCat("OOP");
// $java->setFramework("Spring");


// echo $java->getCat()."<br>";
// echo $java->getFramework()."<br>";

// $php = $java;
// $php->setCat("Structaral")."<br>";
// $php->setFramework("Codeigneter")."<br>";

// echo $php->getCat()."<br>";
// echo $php->getFramework()."<br>";



$java = new Language();

$java->setCat("OOP");
$java->setFramework("Spring");


$php =clone $java;

$php->setFramework("Laravel");

echo $java->getCat()."<br>";
echo $java->getFramework()."<br>";

echo $php->getCat()."<br>";
echo $php->getFramework()."<br>";
 
 

 

 










?>
<?php include 'inc/footer.php';?>