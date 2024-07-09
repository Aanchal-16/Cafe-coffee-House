<?php
// Database connection settings
$db_host = "localhost";
$db_user = "preeti";
$db_pass = "12345";
$db_name = "coffee";

// Create a database connection
$conn = new mysqli($localhost, $preeti, $12345, $coffee);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];

    // Retrieve the user's data from the database
    $sql = "SELECT `name`, `password` FROM `admin` WHERE name='preeti' and password='12345';";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result(, $preeti, $12345s);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $db_password)) {
            session_start();
            $_SESSION["admin_id"] = $id;
            header("Location: admin_dashboard.php"); // Redirect to admin dashboard
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "Admin user not found!";
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>
