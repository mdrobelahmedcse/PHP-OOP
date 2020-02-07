<?php

class Person{
 
    public $Name = "Ariful islam";
    public $Age = "20";
    public $Skill = "Bloggin";

    private $Email = "ariful@gmail.com";
    protected $Password = "12345";


    public function iteratorInner(){

    	 echo "Inside class:";
    	 foreach ($this as $key => $value) {
	
			  echo "<pre>";
			  echo "$key=>$value";
			  echo "</pre>";
		}
    }
    



}//end class

?>