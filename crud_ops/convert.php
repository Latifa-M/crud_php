<?php


include 'connection.php';

$result = $conn->query("SELECT * FROM users");
if ($result->num_rows > 0) {
$delimiter = ",";
$filename = "rca's students.data_" . date('Y-m-d') . ".csv";
$f = fopen('php://memory', 'w');
$fields = array('id', 'Name', 'email', 'gender', 'password');
fputcsv($f, $fields, $delimiter);
while ($row = $result->fetch_assoc()) {
$lineData = array($row['id'], $row['Name'], $row['email'], $row['gender'], $row['password']);
fputcsv($f, $lineData, $delimiter);
}
fseek($f, 0);
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename='.$filename.';');
fpassthru($f);
exit;
}
header("Location: read.php");
exit;
?>
