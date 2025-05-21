
 
// $servername = 'localhost';
// $dbname = "ev";
// $username = "root";
// $password = "";

// // Establish database connection

// try {
//     $conn = new mysqli($servername, $username, $password, $db_name, 3306);
//     // Set the mysql error mode to exception
//     if($conn->connect_error){
//       die("Connection Failed".$conn->connect_error);
//     }
//     else{
//         echo "Connection Success: " ;
//     }     
// }catch(Exception){
  
// }


<?php



$server="localhost";
$usename="root";
$password="";
$dbname="ev";

$conn=mysqli_connect($server,$usename,$password,$dbname);


?>
