<?php
include 'db.php';

$id = $_GET['id']; // Get the task ID from the URL
$sql = "SELECT * FORM tasks WHERE id = $id"; // Fetch the task with the given ID
$result = $conn->query($sql); // Run the query
$task = $result->fetch_assoc(); // Fetch the task data

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Check if form is submitted
    $title = $_POST['title']; // Get the updated title from form
    $description = $_POST['description']; // Get the updated description

    // update the task in the database
    $sql = "UPDATE tasks SET title = '$title', description = '$description' WHERE id = $id";
    if ($conn->query($sql) == true) { // If update is successful
        header('Location: index.php'); // Redirect to main page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // display error if any
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>

<body>
    <h1>Edit Task</h1>
    <form method="POST">
        <!-- Form to edit task -->
        <label>Title:</label><br>
        <input type="text" name="title" value="<?php echo $task['title']; ?>" required><br><br>
        <label>Description:</label><br>
        <textarea name="description"><?php echo $task['description']; ?></textarea><br><br>
        <input type="submit" value="Update Task"> <!-- Submit button -->
    </form>
</body>

</html>