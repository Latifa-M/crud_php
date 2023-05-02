<?php
include 'connection.php';

if(isset($_POST['submit'])) {
$password = $_POST["password"];
$code=Md5($password);
$name=$_POST['name'];

$email=$_POST['email'];
$gender=$_POST['gender'];

$sql="INSERT INTO users(Name,email,password,gender) VALUES ('$name',
'$email','$code','$gender')";
     $result = mysqli_query($conn, $sql);

     if($result){
          header('Location: read.php');
     }
     else{
          die(mysqli_error($conn));
     }
}

?>
<!DOCTYPE html>
<html>
    <head></head>
<body>
    <form action="./create.php" method="post">
        <h2>Signup Form </h2>
        <fieldset>
            <legend>
           Personal information</legend>
           Name:<br>
           <input type="text" name="name"><br>
            Email:<br>
            <input type="email" name="email"><br>
            Password:<br>
            <input type="password" name="password"><br>
            Gender:<br>
            <input type="radio" name="gender" value="Male">Male<br>
            <input type="radio" name="gender" value="Female">Female<br>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>