<?php
include "dataView.php";
$username = filter_input(INPUT_POST, 'username'); //get username
$password = filter_input(INPUT_POST, 'password'); // get password
if (!empty($username)) {
    if (!empty($password)) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "anil";
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname); //connect to database

        if (mysqli_connect_error()) { //if there is an error with the connection
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO account (username, password) 
            values ('$username','$password')"; //insert the values into the table
            if ($conn->query($sql)) {
                echo "New record is inserted sucessfully";
            } else {
                echo "Error: " . $sql . " " . $conn->error;
            }
            $conn->close(); //close the connection
        }
    } else {
        echo "Password should not be empty";
        die(); //end script
    }
} else {
    echo "Username should not be empty";
    die();
}
