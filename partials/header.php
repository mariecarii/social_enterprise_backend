<?php
require 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seeds of Life Home Page</title>
    <link rel="stylesheet" href="./css/style.css"> 
    <!-- icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="http://localhost/blog/" class="nav__logo">Seeds of Life</a>
            <ul class="nav__items">
                <li><a href="http://localhost/blog/blog.php">Foods In Season</a></li>
                <li><a href="<?= ROOT_URL?>about.php">About Us</a></li>
                <li><a href="<?= ROOT_URL?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL?>contact.php">Contact</a></li>
                <!-- <li><a href="<?= ROOT_URL?> signin.html">SignIn</a></li> -->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/farmer1_avatar.png">
                    </div>
                    <ul>
                        <li><a href="<?= ROOT_URL?>admin/dashboard.html">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL?>logout.html">Logout</a></li>
                    </ul>
                </li>
            </ul>
            
            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
         </div>
    </nav>
    <!-- end of nav -->