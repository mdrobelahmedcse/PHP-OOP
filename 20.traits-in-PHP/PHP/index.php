<?php include 'inc/header.php';?>
<?php
 


//Traits in PHP

// spl_autoload_register(function($class_name){

//       include 'classes/'.$class_name.".php";
// });

/**********************/

// trait Java{

// 	public function javacoder(){

// 		return "I love JAVA<br>";
// 	}
// }//


// trait Php{

// 	public function phpcoder(){

// 		return "I love PHP<br>";
// 	}
// }//
 
 


// class Coderone{
   
//    use Java;

// }//end class


// class Codertwo{

//    use Php;
// }//end class
 


// //create object

// $c1 = new Coderone();
// echo $c1->javacoder();
// $c2 = new Codertwo();
// echo $c2->phpcoder();


/**********************/

// trait Java{

// 	public function javacoder(){

// 		return "I love JAVA<br>";
// 	}
// }//


// trait Php{

// 	public function phpcoder(){

// 		return "I love PHP<br>";
// 	}
// }//
 
 
 


// class Coderone{
   
//    use Java,Php;

// }//end class


// class Codertwo{

//    use Php;
// }//end class
 


// //create object

// $c1 = new Coderone();
// echo $c1->javacoder();
// echo $c1->phpcoder();
// $c2 = new Codertwo();
// echo $c2->phpcoder();

/********************/


// trait Java{

// 	public function javacoder(){

// 		return "I love JAVA<br>";
// 	}
// }//


// trait Php{

// 	public function phpcoder(){

// 		return "I love PHP<br>";
// 	}
// }//
 
 
// trait javaphp{


// 	use java,Php;
// } 
 


// class Coderone{
   
//    use javaphp;

// }//end class


// class Codertwo{

//    use Php;
// }//end class
 


// //create object

// $c1 = new Coderone();
// echo $c1->javacoder();
// echo $c1->phpcoder();
// $c2 = new Codertwo();
// echo $c2->phpcoder();


/******************/


trait Java{

	public function javacoder(){

		return "I love JAVA<br>";
	}
}//


trait Php{

	public function phpcoder(){

		return "I love PHP<br>";
	}
}//
 
 
 
 


class Coderone{
   
   use java;

   public function javacoder(){

   	   return "I love JAVA and PHP<br>";
   }

}//end class


class Codertwo{

   use Php;
}//end class
 


//create object

$c1 = new Coderone();
echo $c1->javacoder();
$c2 = new Codertwo();
echo $c2->phpcoder();









?>
<?php include 'inc/footer.php';?>