<?Php include 'inc/header.Php';?>
<?Php


//(Factory Design Pattern)



spl_autoload_register(function($class){

	   include 'classes/'.$class.".Php";
});




$db = new Database();
$db->setDriver("mysql");
$db->connect("host","user","db","pass");
 

 


 
 
 

 



















?>
<?Php include 'inc/footer.Php';?>