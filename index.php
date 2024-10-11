<?php
global $conn;
include 'db.php';

// Query to fetch all tasks from the database, ordered by creation date
$sql = "SELECT * FROM tasks ORDER BY created_at DESC";
$result = $conn->query($sql); // Run the query and get the result set
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
</head>

<body>
    <h1>Task Manager</h1>
    <a href="add.php">Add New Task</a> <!-- Link to add new task -->

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through the result set and display each task -->
            <?php while ($row = $result->fetch_assoc()) {?>
            <tr>
                <td><?php echo $row['title'] ?></td> <!-- Task title -->
                <td><?php echo $row['description'] ?></td> <!-- Task description -->
                <td><?php echo $row['created_at']; ?></td> <!-- Task creation date -->
                <td>
                    <!-- Links to edit and delete tasks -->
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>"
                        onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</body>

</html>