<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
        .add-button{
            font-size: 20px;
            border-radius: 5px;
            background-color: aqua;
            
        }
        .update-button{
            font-size: 20px;
            border-radius: 5px;
            background-color: aqua;
            
        }
        .delete-button{
            font-size: 20px;
            border-radius: 5px;
            background-color: red;
            
        }
        a{
            text-decoration: none;
            color: black;
        }
        .container{
            margin-left: 25%;
        }
        table{
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
       <button class="add-button">
        <a href="user.php">
        Add user</a>
       </button>
       <table class="table"border>
          <thead>
            <tr>
                <th>Sno</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Password</th>
                <th>operations</th>
            </tr>
          </thead>
          <tbody>

           <?php
           $sql="select * from crud";
           $result=mysqli_query($con,$sql);
           if($result){
            while($row=mysqli_fetch_assoc($result)){
               $id=$row['id'];
               $name=$row['name'];
               $email=$row['email'];
               $mobile=$row['mobile'];
               $password=$row['password'];
            
            echo"<tr>
                <td>$id</td>
                <td>$name</td>
                <td>$email</td>
                <td>$mobile</td>
                <td>$password</td>
                <td>
                <button class='update-button'><a href='update.php?updateid=$id'>Update</a></button>
                <button class='delete-button'><a href='delete.php?deleteid=$id'>Delete</a></button>
                </td>
            </tr>";
           }
        }
           ?>
          </tbody>
       </table>
    </div>   
</body>
</html>