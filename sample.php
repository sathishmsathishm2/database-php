<?php
require_once("end/db.php");
require_once("end/db.php");


$sql = "SELECT * FROM  employee";
$res = mysqli_query($con,$sql);
while($row = mysqli_fetch_object($res)){
    $rs[] = array(
        'emp_id' => $row->emp_id,
        'name' => $row->emp_name,
        'email' => $row->email,
        'password' => $row->password,
        'city' => $row->city
    );

}
 echo "<pre>";
 print_r ($rs);

?>
