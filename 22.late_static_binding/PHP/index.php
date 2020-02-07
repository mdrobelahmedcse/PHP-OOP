<?php include 'inc/header.php';?>
<?php


//late static binding



spl_autoload_register(function($class){

    include 'classes/'.$class.".php";

});



class phpChild extends Php{


    public static function getClass(){

         return __CLASS__;

    }

}//end class





$php = new Php();
$php->framework();


$phpchild = new phpChild();
$phpchild->framework();

 

 

?>
<?php include 'inc/footer.php';?>