<?Php include 'inc/header.Php';?>
<?Php


//Php Namespaces



// spl_autoload_register(function($class){

// 	   include 'classes/'.$class.".Php";
// });

include 'classes/Java.Php';
include 'classes/Php.Php';
include 'classes/Ruby.Php';


use app\controller\with\Java as java;

 

new java();
new app\controller\traning\Php();
new app\controller\live\Ruby();



echo HTML;
echo app\controller\traning\CSS;

app\controller\traning\coder();
 


 
 
 

 



















?>
<?Php include 'inc/footer.Php';?>