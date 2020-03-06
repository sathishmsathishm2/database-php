<?php
require_once("end/db.php");


$id = $_POST['name'];
$name = $_POST['name'];
$email = $_POST['email'];
$password= $_POST['password'];
$city=$_POST['city'];

$sql = "INSERT INTO employee (`emp_id`,`emp_name`, `email`, `password`,`city`) values('$name','$name','$email','$password', '$city')";

$res = mysqli_query($con,$sql);
//echo $sql; exit();

if($res == 1) {
    echo "inserted";
} else {
    echo "Failed...";
}
?>