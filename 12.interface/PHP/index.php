<?php include 'inc/header.php';?>
<?php
 


//Interface


 
interface School{

	 public function MySchool();
}//


interface College{

	public function MyCollege();
}//


interface Varsity{

	public function MyVarsity();
}//


//student class

class Student implements School,College,Varsity{


	 public function __construct(){

           $this->MySchool();
           $this->MyCollege();
           $this->MyVarsity();
	 }

	 public function MySchool(){

	 	  echo "I am a school student<br>";
	 }

	 public function MyCollege(){

	 	  echo "I am a College student<br>";
	 }

	 public function MyVarsity(){

	 	  echo "I am a varsity student<br>";
	 }


}//end class



//teacher class
class Teacher implements School,College,Varsity{


	 public function __construct(){

           $this->MySchool();
           $this->MyCollege();
           $this->MyVarsity();
	 }

	 public function MySchool(){

	 	  echo "I am a school teacher<br>";
	 }

	 public function MyCollege(){

	 	  echo "I am a College teacher<br>";
	 }

	 public function MyVarsity(){

	 	  echo "I am a varsity teacher<br>";
	 }


}//end class





//create object

$student = new Student;
$teacher = new Teacher;








 




?>
<?php include 'inc/footer.php';?>