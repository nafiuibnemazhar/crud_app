# Simple PHP CRUD Application

## Overview
This is a simple CRUD (Create, Read, Update, Delete) application built with PHP and MySQL. The application allows users to manage tasks by adding, viewing, editing, and deleting tasks. It serves as a basic tutorial for learning how to interact with databases in PHP.

## Features
- **Add Task**: Users can add a new task with a title and description.
- **View Tasks**: The main page displays a list of all tasks stored in the database.
- **Edit Task**: Users can edit the details of an existing task.
- **Delete Task**: Users can delete a task.

## Technologies Used
- **Backend**: PHP (with MySQLi)
- **Database**: MySQL
- **Frontend**: Basic HTML (you can add CSS or JavaScript to enhance it)

## Project Structure
/crud_app ├── add.php # Handles adding a new task ├── delete.php # Handles deleting a task ├── edit.php # Handles editing an existing task ├── index.php # Displays all tasks (main page) ├── db.php # Handles the database connection └── README.md # Project documentation


## Getting Started

### Prerequisites
1. XAMPP installed (or any PHP & MySQL server).
2. PHPStorm or any preferred code editor.
3. Basic knowledge of PHP and SQL.

### Setup

1. **Clone the repository or download the files**:
   - Move the project files into the `htdocs` folder of your XAMPP installation.

2. **Start XAMPP**:
   - Make sure Apache and MySQL are running.

3. **Create the database**:
   - Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin) in your browser.
   - Create a new database named `crud_tutorial`.
   - Run the following SQL query to create the `tasks` table:

```sql
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

// db.php
$host = 'localhost';
$user = 'root';  // Default XAMPP username
$password = '';  // Default XAMPP password (blank)
$db_name = 'crud_tutorial';  // Name of the database

### How It Works
===============
index.php: Displays all tasks from the database in a table.
add.php: Provides a form to add new tasks.
edit.php: Allows users to update an existing task.
delete.php: Deletes a task from the database.


### How to Use It
- Save this as `README.md` in the root folder of your project.
- It helps anyone who checks out your project understand what it's about, how to set it up, and what functionality it includes.
