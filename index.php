<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Employee Portal - Add Employee">
    <meta name="author" content="Aisha">
    <link rel="stylesheet" href="style.css">
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
        <h1>Employee Adding Page</h1>
        <form method="POST" action="process.php">
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            
            <label for="employee_id">Employee ID:</label>
            <input type="text" name="employee_id" required>
            
            <label for="hours_worked">Hours Worked:</label>
            <input type="number" name="hours_worked" required>
            
            <input type="submit" value="Submit">
        </form>

        <div id="success-message" style="display: none;">
            <p>Employee added successfully!</p>
            <a href="index.html">Return to Homepage</a>
        </div>
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> Add Employee Now
    </footer>

    <script>
        document.querySelector('form').addEventListener('submit', function (e) {
            e.preventDefault();
            document.getElementById('success-message').style.display = 'block';
        });
    </script>
</body>
</html>
