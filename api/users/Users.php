<?php 
   class Users{
       //connection
       private $conn;

      //  constructor
      public function __construct($conn){
         $this->$conn = $conn;
      }
   }
?>
