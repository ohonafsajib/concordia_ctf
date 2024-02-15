<?php
include 'db.php';
session_start();

if (!isset($_SESSION['login_user'])) {
    header("location: index.php");
    exit(); // Make sure to exit after redirection
}

// Query to fetch data from one of the tables
$sql = "SELECT City FROM Persons WHERE LastName = 'sajib' and FirstName = 'ohonaf'";
$result = $conn->query($sql);

// HTML content for the webpage
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
        .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
        .fa-anchor,.fa-coffee {font-size:200px}
        
        /* Center content using Flexbox */
        .center-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; /* 100% of the viewport height */
        }

        /* Adjusting the font size of the welcome text */
        .welcome-text {
            font-size: 2em; /* You can adjust this value to your preference */
        }
        /* Style for the logout button */
        .logout-button {
            background-color: #f44336; /* Red */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <!-- <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a> -->
        <a href="http://172.30.37.194/work.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Level 01</a>
        <a href="http://172.30.37.194/sound.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Level 02</a>
        <a href="http://172.30.37.194/ping_main.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Level 03</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Level 04</a>
    <div class="w3-bar-item w3-padding-large w3-hide-small w3-hover-red w3-right"><a href="http://172.30.37.194/logout.php" class="logout-button">Logout</a></div>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>

    </div>        <a href="" class="w3-bar-item w3-button w3-padding-large">Logout</a>
</div>

<!-- Header -->
<header class="w3-container" style="padding:128px 16px; background-image: url('https://i.postimg.cc/JhXxntFh/dicectf-banner.png'); background-size: cover;">
    <h3 class="w3-margin w3-jumbo w3-text-white welcome-text">.</h3>
    <!-- <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button> -->
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
      <h1>About us</h1>
      <h5 class="w3-padding-32">@Hack (“At Hack”) is a national cybersecurity student hackathon hosted at Concordia University by TECHNATION’s Career Ready Program and Hexploit Alliance. This two-day event brings together cybersecurity enthusiasts from across Canada to the heart of Montréal at Concordia’s downtown campus for a weekend filled with unique cybersecurity challenges.</h5>

      <p class="w3-text-grey"> 🔒 Unlock Your Cybersecurity Abilities: Immerse yourself in a series of engaging Capture the Flag challenges spanning AI, reverse engineering, cryptography, hacking, and more. Seize the opportunity to demonstrate your proficiency in solving genuine cybersecurity issues. </br>
    </br>
🌐 Expert Workshops: Acquire valuable insights and expertise from industry professionals in exclusive workshops tailored to enhance your cybersecurity knowledge. </br>
    </br>
🤝 Establish Network: Connect with fellow enthusiasts, industry experts, and potential employers at our career fair and networking event. Foster relationships that may shape your future in the field of cybersecurity.</br>
    </br>
💰 Compete for Rewards: Strive for top accolades
</p>
    </div>
</div>
</body>
</html>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="https://bit.ly/3Tt3KN2" target="_blank">@Hack</a></p>
</footer>
    
<!-- Rest of your content -->
</body>
</html>