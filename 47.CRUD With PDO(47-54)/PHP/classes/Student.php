<?php

include 'Main.php';

class Student extends Main{


        protected $table = "tbl_student";
        private $name;
        private $dep;
        private $age;


        public function setName($name){

             $this->name = $name;
        }//

        public function setDep($dep){

            $this->dep = $dep; 
        }//

        public function setAge($age){

            $this->age = $age;
        }//


        public function insert(){

               $sql = "insert into $this->table(name,dep,age) values(':name',':dep',':age')";
               $stmt = DB::prepare($sql);
               $stmt->bindParam(':name',$this->name);
               $stmt->bindParam(':dep',$this->dep);
               $stmt->bindParam(':age',$this->age);
               return $stmt->execute();
        }//


         public function update($id){

               $sql = "update $this->table set name=:name, dep=:dep, age=:age where id=:id";
               $stmt = DB::prepare($sql);
               $stmt->bindParam(':name',$this->name);
               $stmt->bindParam(':dep',$this->dep);
               $stmt->bindParam(':age',$this->age);
               $stmt->bindParam(':id',$id);
               return $stmt->execute();
        }//


     
     


        





}//end class


 




?>