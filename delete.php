<?php
include 'db.php';

$id = $_GET['id']; // Get the task ID from the URL
$sql = "DELETE FROM tasks WHERE id = $id"; // SQL query to delete the task

if ($conn->query($sql) == true) { // If delete is successful
    header('Location: index.php'); // Redirect to the main page
} else {
    echo "Error deleteing record: " . $conn->error; // Display error if any
}
