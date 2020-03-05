<?php
require_once("end/data.php");

$id = $_POST['rollno'];
$name = $_POST['name'];
$class = $_POST['class'];
$year =$_POST['year'];
$sql = "INSERT INTO `program`( `name`, `class`, `year`) VALUES ('$name','$class','$year')";

$res = mysqli_query($con,$sql);
//echo $sql; exit();
if($res == 1 ){
    echo "inserted";
}
else{
    echo "failed";
}









?>