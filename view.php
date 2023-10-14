<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PHP Assignment">
    <meta name="author" content="Berke">
    <title>Employee Portal - Add Employee</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="add_content.php">Add Content</a></li>
                <li><a href="view_content.php">View Content</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Add Employee Page</h1>
        <form method="POST" action="process.php">
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            
            <label for="employee_id">Employee ID:</label>
            <input type="text" name="employee_id" required>
            
            <label for="hours_worked">Hours Worked:</label>
            <input type="number" name="hours_worked" required>
            
            <input type="submit" value="Submit">
        </form>
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> Add Employee
        </form>

    </footer>
</body>
</html>


<?php
$host = 'localhost';
$dbname = 'assignment_database';
$username = 'assignment_username';
$password = 'assignment_password';

$conn = new mysqli($host, $dbname, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM your_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
    }
} else {
    echo "No content found";
}

$conn->close();
?>

