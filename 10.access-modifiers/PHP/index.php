<?php include 'inc/header.php';?>
<?php
 


//Access Modifiers

//public 
//private
//protected

/*
 public: if we use public keyword before a property or a method, it can be access in class,sub-class and from outside the class.

 private: if we use private keyword before a property or a metthid, it can be access jsut only in class. its can not be access in sub-class and outside the class.

 protected: if we use proted keyword before a property or a method ,it can be access in class and sub-clcass ,but it can not be access from outside the class.



*/
 
 class userData{


	 public $user;
	 public $userId;
	 public $age = "20";
	 


	 public function __construct($userName,$userid){

	 	 $this->user   = $userName;
	 	 $this->userId = $userid;

	 	
	 }


	 public function display(){

	 	  echo "User name is {$this->user} and user id is {$this->userId}"."<br>";
	 	  echo "age :".$this->age." inside the class";

	 }


	  


}//end



class Admin extends userData{

     public $level;

     public function display(){

	 	  echo "User name is {$this->user} and user id is {$this->userId} and user level is {$this->level}"."<br>";
	 	  echo "age :".$this->age." in the sub-class";

	 }

    
}



$user = "Mamun ahammed";
$id   = "24";

$user = new userData($user,$id);
$user->display();
echo "<br>";
echo "outside the class :".$user->age;
echo "<br>";


$user= "Shohagh ahammed";
$id = "12";

$admin = new Admin($user,$id);
$admin->level = "Adminstrator";
$admin->display();






 




?>
<?php include 'inc/footer.php';?>