<!-- <?php
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

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-12">
<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>city</th>
</tr>
<?php foreach($rs as $v) { ?>
<tr>
    <td><?php echo $v['emp_id'] ?></td>
    <td><?php echo $v['name'] ?></td>
    <td><?php echo $v['email'] ?></td>
    <td><?php echo $v['password'] ?></td>
    <td><?php echo $v['city'] ?></td>
</tr>
<?php } ?>
</table>
</div>
</div>
</div>

</body>
</html>

