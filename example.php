<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "users";


$con =mysqli_connect($hostname,$username,$password) or die ("please enter valid  details......");
mysqli_select_db($con,$db_name) or die("Database does not exists....");


// $sql = "CREATE TABLE  details(
//     id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname  VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(30) NOT NULL,
//     city VARCHAR(30) NOT NULL,
//     year INT(50)
//     )";
    
// $res = mysqli_query($con,$sql);
// //echo $sql; exit();
// if($res == 1 ){
//     echo "table created";
// }
// else{
//     echo "failed";
// }
$sql1 = "INSERT INTO details (`firstname`,`lastname`, `email`,`city`,`year`) values('moni','jayakumar','moni@gmail','rs puram', '2020')";

$res = mysqli_query($con,$sql1);
//echo $sql; exit();

if($res == 1) {
    echo "inserted";
} else {
    echo "Failed...";
}





?>