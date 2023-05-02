<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PDF document</title>
     <body onload="print()">
<div class="container">
<h3>Users List</h3>
<hr>
<table>
<thead>
<tr>
<th>ID</th>
<th>Names</th>
<th>Email</th>
<th>Gender</th>
</tr>
</thead>
<tbody>
<?php
include "connection.php";
$get_list=mysqli_query($conn,"SELECT * FROM users");
while($row=mysqli_fetch_array($get_list)){
?>
<tr>
<td><?php echo $row['id']?></td>
<td><?php echo $row['Name']?></td>
<td><?php echo $row['email']?></td>
<td><?php echo $row['gender']?></td>

</tr>
<?php
}
?>
</tbody>
</table>
