<?php
$servername='localhost';
$username='root';
$password='latifa@246';
$dbname='student_php';
$conn= new mysqli($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed" . $conn -> connect_error);
};
?>