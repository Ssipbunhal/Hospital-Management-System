<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format. Please enter a valid email address.";
        exit;
    }

    // Perform database validation
    require_once 'db_config.php'; // Replace with the correct path to your db_config.php file

    // Prepare and execute the SQL statement to fetch user data from the database
    $sql = "SELECT type FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Check if a matching user was found in the database
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $userType = $row['type'];

        // Redirect to the appropriate page based on the user type
        if ($userType === 'client') {
            header('Location: client_page.php');
            exit;
        } elseif ($userType === 'doctor') {
            header('Location: doctor_page.php');
            exit;
        } elseif ($userType === 'physician') {
            header('Location: physician_page.php');
            exit;
        } else {
            echo "Invalid user type in the database.";
            exit;
        }
    } else {
        echo "Invalid email or password.";
        exit;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
} else {

    header('Location: index.php');
    exit;
}
?>
