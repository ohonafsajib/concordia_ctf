<?php
include 'db.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT PersonID FROM Persons WHERE LastName = '$username' and FirstName = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['login_user'] = $username;
        header("location: welcome.php");
    } else {
        header("location: index.php" );
       //echo "Your Login Name or Password is invalid"
    }
}
?>