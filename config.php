<?php
 $host='localhost';
 $username= 'root';
 $pasword = "";
 $dbname= "mpesa";

 $conn= mysqli_connect($host,$username,$pasword,$dbname);

 if(!$conn){
     echo "Error in database connection";
 }



?>