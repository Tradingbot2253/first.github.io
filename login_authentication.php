<?php
	require_once "db-connect.php";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		  // Collect POST data
          $password = isset($_POST['password']) ? $_POST['password'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';


    // Insert data into the database
    $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";


    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        die("Error: " . $sql . "<br>" . $conn->error);
    }

    // Close the connection
    $conn->close();
	}



?>