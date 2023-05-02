<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Crud operation</title>
     <style>
        body{
            background-color:salmon;
        }
          .container {
               margin: 100px;
          }
          .edit {
               background-color: rgb(0, 85, 255);
               border: none;
               color: white;
               border-radius: 5px;
               padding: 8px 20px;
          }
          .delete{
               border: none;
               border-radius: 5px;
               padding: 8px 20px;
               color: white;
               background-color: rgb(255, 34, 0);
          }
          button{
               margin: 5px;
               cursor: pointer;
          }
          td, th{
               border: 0.5px solid grey;
          }
          .add{
               background-color: rgba(30,240,30,0.7);
               font-weight:400px;
               border: none;
               padding: 8px 20px;
               border-radius: 5px;
               margin-bottom: 3em;
               margin-left:25em;
               margin-top:3em;
               color: white;
          }
          .excel {
               background:rgb(190,150,60);
               width:8em;
               height:2em;
               padding:5px;
               border-radius:5px;
          }
          .pdf{
               background:rgb(20,100,150);
               width:8em;
               height:2em;
               padding:5px;
               border-radius:5px;
          }
          a{
               text-decoration: none;
               color: white;
          }
          h2{
            text-align:center;
          }

     </style>
</head>

<body>
<div class="container">
    <h2>ALL USERS</h2>

          <table border="1px" cellpadding="15px" cellspacing="0">
               <thead>
                    <th>Id</th>
                    <th>Name</th>
                     <th>Email</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Operations</th>
               </thead>
               <tbody>

                    <?php
                    include "connection.php";
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if($result){
     while ($row = mysqli_fetch_assoc($result)) {
         $id = $row['id'];
         $name = $row['Name'];
         $email = $row['email'];
         $password = $row['password'];
         $gender=$row['gender'];
         echo '<tr>
         <td>'.$id.'</td>
         <td>'.$name.'</td>
         <td>'.$email.'</td>
         <td>'.$password.'</td>
         <td>'.$gender.'</td>
         <td><button class="edit"><a href="update.php? updateid='.$id.'">Edit</a></button>
         <button class="delete"><a href="delete.php? deleteid='.$id.'">Delete</a></button></td>
    </tr>';
     }
}
?>

               </tbody>
          </table>
          <button class="add"><a href="create.php">Add User</a></button>
          <button class="excel"><a href="convert.php">View it in excel</a></button>
          <button class="pdf"><a href="pdf.php">View it in PDF</a></button>
     </div>
</body>
</html>