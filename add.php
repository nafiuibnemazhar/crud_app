<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Check if the form is submitted
    $title = $_POST['title']; // Get the task title from the form
    $description = $_POST['description']; // Get the task description from the form

    // Insert the new task into the database
    $sql = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
    if ($conn->query($sql) == true) { // If the query runs successfully
        header('Location: index.php'); // Redirect to the main page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Display error if any
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
</head>

<body>
    <h1>Add New Task</h1>
    <form method="POST">
        <!-- Form to submit new task -->
        <label>Title:</label><br>
        <input type="text" name="title" required><br><br> <!-- Task title input -->
        <label>Description:</label><br>
        <textarea name="description"></textarea><br><br> <!-- Task description input -->
        <input type="submit" value="Add Task"> <!-- Submit button -->
    </form>
</body>

</html>
