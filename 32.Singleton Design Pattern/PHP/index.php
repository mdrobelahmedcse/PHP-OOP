<?Php include 'inc/header.Php';?>
<?Php


//Singleton Design Pattern



spl_autoload_register(function($class){

	   include 'classes/'.$class.".Php";
});

new Database();
new Database();
new Database();
new Database();
 
 

 


 
 
 

 



















?>
<?Php include 'inc/footer.Php';?>