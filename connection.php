<?php
   $servername ="localhost";
   $username="root";
   $password="";
   $dbname="stamp_collection";

   $conn = mysqli_connect($servername,$username,$password,$dbname);
   if($conn){
      // echo "connection ok";
   }
   else{
       die("connection failed because".mysqli_connect_error());
   }
?>