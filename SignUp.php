<?php
session_start();
include("connect.php");
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($email) && !empty($password) && !is_numeric($email)) {
        $query = "INSERT INTO form (Username, Email, Pass) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script type='text/javascript'>alert('You Are Successfully Registered')</script>";
        } else {
            echo "<script type='text/javascript'>alert('Failed to register. Please try again.')</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Please Enter Some Valid Information')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
      body {
                font-family: Arial, sans-serif;
                background-image: url("assets/img/1.png");
                background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat; 
                margin: 0;
                padding: 20px;
            }            
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .container {
  background-image: url("assets/img/6.jpg"); 
  background-repeat: no-repeat; /* This will prevent the image from tiling */
  background-position: center; /* This will center the image */
  background-size: cover; /* This will cover the entire container */
  opacity: 0.8; 
}


        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4caf50;
            color: white;
            padding: 10px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-footer {
            text-align: center;
            margin-top: 15px;
        }

        .form-footer a {
            color: #4caf50;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2 style="color: #4caf50;">Sign Up</h2>
        <form action="SignUp.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

            <input type="submit" value="Sign Up">
        </form>
        <div class="form-footer">
            Already have an account? <a href="Login.php">Log in</a>
        </div>
    </div>
</body>
</html>
