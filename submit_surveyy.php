<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_db";

// Start the session to access user data
session_start();

try {
    // Create database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    // Check if user is logged in by verifying the email in the session
    if (!isset($_SESSION['email'])) {
        throw new Exception("User is not logged in.");
    }

    $email = $_SESSION['email'];

    // Check if the request method is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Ensure 'responses' is set and is an array
        if (!isset($_POST['responses']) || !is_array($_POST['responses'])) {
            throw new Exception("Invalid survey data.");
        }

        // Convert responses array to JSON format
        $responses = json_encode($_POST['responses']);

        // Prepare SQL statement to insert or update survey responses
        $stmt = $conn->prepare("INSERT INTO survey_responses (email, responses) VALUES (?, ?) ON DUPLICATE KEY UPDATE responses = VALUES(responses)");
        if (!$stmt) {
            throw new Exception("Failed to prepare statement: " . $conn->error);
        }

        $stmt->bind_param("ss", $email, $responses);

        // Execute the statement and check for errors
        if (!$stmt->execute()) {
            throw new Exception("Error saving survey responses: " . $stmt->error);
        }

        // Prepare SQL statement to update the survey completion status in the users table
        $updateStmt = $conn->prepare("UPDATE users SET survey_completed = 1 WHERE email = ?");
        if (!$updateStmt) {
            throw new Exception("Failed to prepare update statement: " . $conn->error);
        }

        $updateStmt->bind_param("s", $email);

        // Execute the statement and check for errors
        if (!$updateStmt->execute()) {
            throw new Exception("Error updating survey status: " . $updateStmt->error);
        }

        // Success message and redirect
        echo "Survey responses saved and survey status updated successfully!";
        header('Location: index.php');
        exit();
    } else {
        throw new Exception("Invalid request method.");
    }
} catch (Exception $e) {
    // Display error message
    echo "An error occurred: " . $e->getMessage();
} finally {
    // Close the database connection
    if (isset($stmt)) $stmt->close();
    if (isset($updateStmt)) $updateStmt->close();
    $conn->close();
}
?>
