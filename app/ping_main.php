<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body, h1, h2, h3, h4, h5, h6 {font-family: "Lato", sans-serif}
        .w3-bar, h1, button {font-family: "Montserrat", sans-serif}
        .fa-anchor, .fa-coffee {font-size:200px}
        
        /* Center content using Flexbox */
        .center-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh; /* 100% of the viewport height */
        }

        /* Adjusting the font size of the welcome text */
        .welcome-text {
            font-size: 2em; /* You can adjust this value to your preference */
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Ping Test</title>
</head>
<body>

<!-- Container for center alignment -->
<div class="center-content">

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <!-- <a href="#home" class="w3-bar-item w3-button w3-padding-large w3-red">HOME</a> -->
            <a href="http://172.30.58.106/work.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Level 01</a>
            <a href="http://172.30.58.106/sound.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Level 02</a>
            <a href="http://172.30.58.106/ping_main.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Level 03</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-red">Level 04</a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
        </div>
    </div>

    <h1>Ping Test</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $host = $_POST['host'];

        // Validate and sanitize user input
        //$host = filter_var($host, FILTER_SANITIZE_STRING);

        // Execute ping command
        $output = shell_exec("ping -c 4 $host 2>&1");

        // Display the result
        echo "<pre>$output</pre>";
    }
    ?>

    <form method="post">
        <label for="host">Enter Host or IP:</label>
        <input type="text" id="host" name="host" required>
        <button type="submit">Ping</button>
    </form>

</div> <!-- End of center-content div -->

</body>
</html>