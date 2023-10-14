<?php
$host = 'localhost';
$dbname = 'assignment_database';
$username = 'assignment_username';
$password = 'assignment_password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'];
    
    // Insert data into the database
    $sql = "INSERT INTO content_table (content) VALUES (:content)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':content', $content, PDO::PARAM_STR);
    
    if ($stmt->execute()) {
        // Data successfully inserted
        header("Location: view_content.php"); // Redirect to the view content page
    } else {
        // Handle database error
        echo "Error: Data not inserted.";
    }
}
?>
