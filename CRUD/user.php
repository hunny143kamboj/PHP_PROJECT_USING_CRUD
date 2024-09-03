<?php
include "connect.php";
if(isset($_POST['Submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into crud(name,email,mobile,password)
    values('$name','$email','$mobile','$password')";

    $result=mysqli_query($con,$sql);
    if($result){
        //echo"Data inserted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <style>
        *{
            margin:0px;
            padding: 0px;
        }
        .container{
            height:500px;
            width:800px;
            padding:10px;
            margin-left:25%;
            font-size: 25px;
        }
        .container input{
            width:80%;
            padding:6px;
            border-radius: 5px;
            border-color: gainsboro;

        }
        button{
            font-size: 20px;
            padding: 5px;
            margin-top: 6px;
            background-color: aqua;
            color: black;
            border:1px solid black;
            border-radius: 5px;
        }
        button:hover{
            border:none;
            size: 20px;
        }
        .container input:hover{
            border-color: aqua;
        }

        

    </style>
</head>
<body>
    <div class="container">
        <form method="post">
          <label>Name:</label><br>
          <input type="text" name="name" placeholder="enter your name" required><br>

          <label>Email:</label><br>
          <input type="text" name="email" placeholder="enter your email" required><br>

          <label>Mobile:</label><br>
          <input type="text" name="mobile" placeholder="enter your mobile" required><br>

          <label>Password:</label><br>
          <input type="password" name="password" placeholder="enter your password" required><br>

          <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
        </form>
    </div>
</body>
</html>