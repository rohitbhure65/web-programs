<?php
// Replace these values with your actual database credentials
$host = 'your_database_host';
$username = 'your_database_username';
$password = 'your_database_password';
$database = 'your_database_name';

// Create a connection to the MySQL database
$mysqli = new mysqli($host, $username, $password, $database);

// Check the connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// Perform a simple query (selecting data from a table)
$query = 'SELECT * FROM your_table_name';
$result = $mysqli->query($query);

// Check if the query was successful
if ($result) {
    // Fetch and display the data
    while ($row = $result->fetch_assoc()) {
        echo 'ID: ' . $row['id'] . ', Name: ' . $row['name'] . '<br>';
    }

    // Free the result set
    $result->free();
} else {
    // Display an error message if the query fails
    echo 'Error: ' . $mysqli->error;
}

// Close the connection
$mysqli->close();
?>
