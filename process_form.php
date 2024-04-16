<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$placement_company = $_POST['placement_company'];
$placement_package = $_POST['placement_package'];


$conn = new mysqli('localhost', 'root', '', 'data');


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO info( name, email, placement_company, placement_package)
VALUES ('$name', '$email', '$placement_company', '$placement_package')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
