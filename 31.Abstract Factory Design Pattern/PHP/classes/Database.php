<?php

abstract class Database{

   
   public function connect();
   public function query();
   public function insertId();


   public function setHost($host){

        //code.............
   }

   public function setDB($db){

        //code..............
   }

   public function setUser($user){

        //code...........
   }

   public function setPass($pass){

        //code.............
   }



}//end class



?>