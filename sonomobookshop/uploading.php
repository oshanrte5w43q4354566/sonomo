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

  $bookname = $_POST['bookname'];
  $author = $_POST['author'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];

  //add new books to db
  $sql = "INSERT INTO `book details`(`bookname`, `author`, `quantity`, `price`) VALUES ('$bookname','$author','$quantity','$price')";
  $result = $conn->query($sql);

  $bookname="";
  $author="";
  $quantity="";
  $price="";

  header("location: dashbord.php");
?>