<?php

   $server="localhost";
   $user="root";
   $password="";
   $db="services";

   $con=mysqli_connect($server, $user, $password, $db);

   if(!$con){
      echo "Connection failed";
   }

?>