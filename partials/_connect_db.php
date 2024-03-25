<?php
   $server="localhost";
   $username="root";
   $password="";
   $database="photostudio_db";

   $con = mysqli_connect($server,$username,$password,$database);
   if(!$con){
   
    echo "opps error in connection";
   }

?>