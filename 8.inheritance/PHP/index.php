<?php include 'inc/header.php';?>
<?php
 


//Inheritance

class userData{


	 public $user;
	 public $userId;
	 


	 public function __construct($userName,$userid){

	 	 $this->user   = $userName;
	 	 $this->userId = $userid;

	 	
	 }


	 public function display(){

	 	  echo "User name is {$this->user} and user id is {$this->userId}";

	 }


	  


}//end



class Admin extends userData{

     public $level;

     public function display(){

	 	  echo "User name is {$this->user} and user id is {$this->userId} and user level is {$this->level}";

	 }

    
}



$user = "Mamun ahammed";
$id   = "24";

$user = new userData($user,$id);
$user->display();
echo "<br>";


$user= "Shohagh ahammed";
$id = "12";

$admin = new Admin($user,$id);
$admin->level = "Adminstrator";
$admin->display();



















 




?>
<?php include 'inc/footer.php';?>