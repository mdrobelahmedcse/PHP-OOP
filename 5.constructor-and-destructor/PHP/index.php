<?php include 'inc/header.php';?>
<?php
 


//Constructor & Destructor

class userData{


	 public $user;
	 public $userId;


	 public function __construct($userName,$userid){

	 	 $this->user   = $userName;
	 	 $this->userId = $userid;

	 	 echo "User name is {$this->user} and user id is {$this->userId}";

	 }


	 public function __destruct(){

	 	 unset($this->user);
	 	 unset($this->userId);
	 }



}//end



$user = "Mamun ahammed";
$id   = "24";

$user = new userData($user,$id);
















 




?>
<?php include 'inc/footer.php';?>