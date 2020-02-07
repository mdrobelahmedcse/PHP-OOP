<?php 

include 'DB.php';

abstract class Main{


    protected $table;

    abstract public function insert();
    abstract  public function update($id);


    public function readByid($id){

        $sql = "select * from $this->table where id=:id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id',$id);
        return $stmt->execute();  
    }//

    public function readAll(){

        $sql = "SELECT * FROM $this->table";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }//

   
    public function delete($id){

        $sql = "delete from $this->table where id=:id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id',$id);
        return $stmt->execute();
    }//

       
}//



?>