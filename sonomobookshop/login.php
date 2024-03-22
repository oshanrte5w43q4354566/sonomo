<?php
// Establish a MySQL database connection (change these values as needed)
$host = "Localhost";
$username = "root";
$password = "";
$database = "Assignment";
 
$conn = mysqli_connect($host, $username, $password, $database);
 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $email = $_POST["email"];
    $password = md5($_POST["password"]); // MD5 hash the password
 
    // Check if the password and confirm password match
    if ($_POST["password"] !== $_POST["confirm_password"]) {
        echo "Password and Confirm Password do not match.";
    } else {
        // Insert the user data into the "users_info" table
        $sql = "INSERT INTO SonomoBookshop (email,password)
                VALUES ('$email','$password')";
 
        if (mysqli_query($conn, $sql)) {
            header ("Location: http://localhost/sonomobookshop/dashbord.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
 
// Close the database connection
mysqli_close($conn);
?>