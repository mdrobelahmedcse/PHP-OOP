<?php include 'inc/header.php';?>
<?php


//class and get_class function


spl_autoload_register(function($class){

	   include 'classes/'.$class.".php";
});



class phpChild extends Php{


	   public function cms(){

	   	    echo "Child class constant and class name-> ".__CLASS__."<br/>";
	   	    echo "Child class function and class name-> ".get_class($this)."<br/>";
	   }

	   public function ourMethod(){

	   	   parent::fremework();
	   }
}



class phpChildtwo extends Php{



}



$phpchild = new phpChild();
$phpchild->fremework();
echo "<hr/>";

$phpchild->cms();
echo "<hr/>";

$phpchild->ourMethod();

echo "<hr/>";

$phpchildtwo = new phpChildtwo();


$phpchildtwo->fremework();

 

 

?>
<?php include 'inc/footer.php';?>