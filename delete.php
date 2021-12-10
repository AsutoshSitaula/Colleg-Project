<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anil";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// sql to delete a record
$sql = "DELETE FROM account WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: anil.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
