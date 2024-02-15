<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body, h1, h2, h3, h4, h5, h6 {font-family: "Lato", sans-serif}
        .w3-bar, h1, button {font-family: "Montserrat", sans-serif}
        .fa-anchor, .fa-coffee {font-size: 200px}
        
        /* Center content using Flexbox */
        .center-content {
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            min-height: 100vh; /* 100% of the viewport height */
            padding: 0 20px; /* Add padding to avoid edge */
            flex-direction: column; /* Align children vertically */
        }

        /* Adjusting the font size of the welcome text */
        .welcome-text {
            font-size: 2em; /* You can adjust this value to your preference */
        }

        /* Splitting audio elements into two columns */
        .audio-column {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 20px;
        }

        /* Adding space between audio elements */
        .audio-column > * {
            margin-bottom: 10px;
        }
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
    <title>Play Audio</title>
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
            <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Level 04</a> -->
        <div class="w3-bar-item w3-padding-large w3-hide-small w3-hover-red w3-right"><a href="http://172.30.37.194/logout.php" class="logout-button">Logout</a></div>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
            <!-- <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a> -->
            <a href="" class="w3-bar-item w3-button w3-padding-large">Logout</a>
        </div>
    </div>



<!-- Container for center alignment -->
<div class="center-content">
    <h1>Audio Player</h1>

    <!-- First Code Snippet -->
    <div class="audio-column">
        <!-- Encrypted Flag Morse Code Audio -->
        <audio controls>
            <source src="Encr.wav" type="audio/wav">
            Your browser does not support the audio element.
        </audio>
        <a href="Encr.wav" download>Download Encrypted Flag Audio</a>
    </div>

    <!-- Second Code Snippet -->
    <div class="audio-column">
        <!-- Key Morse Code Audio -->
        <audio controls>
            <source src="Key.wav" type="audio/wav">
            Your browser does not support the audio element.
        </audio>
        <a href="Key.wav" download>Download Key Audio</a>
    </div>
</div> <!-- End of center-content div -->

</body>
</html>