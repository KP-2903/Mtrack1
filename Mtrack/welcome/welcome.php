<?php
//to use names and other variables in welcome page
session_start();
//to include data base
include("../db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="navbar">
        <div class="left">
            <img src="logo.png" alt="logo here" id="logo" style="width: 100px; margin-top :10px">
        </div>
        <div class="right">
            <input type="checkbox" id="check">
            <label for="check" class="checkBtn">
                <i class="fa fa-bars"></i>
            </label>
            <ul class="list">
                
                <li><a href="newcus.php">Add new customer</a></li>
                <li><a href="cus.php">Customers</a></li>
                
                <li><a href="profile.php">My Profile</a></li>
            </ul>
        </div>
    </div>
</body>
</html>