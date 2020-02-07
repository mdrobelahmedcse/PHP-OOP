<?php 

include 'DB.php';

class Model{



public function getStudentData(){

	  $sql = "select * from tbl_student";
	  $stmt = DB::prepare($sql);
	  $stmt->execute();
	  return $stmt->fetchAll();
}//










}//end class




?>