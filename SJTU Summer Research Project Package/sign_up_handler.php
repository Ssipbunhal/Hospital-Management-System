<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['password-confirm'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format. Please enter a valid email address.";
        exit;
    }

    // Validate password and confirm password match
    if ($password !== $passwordConfirm) {
        echo "Passwords do not match. Please enter the same password in both fields.";
        exit;
    }

    // Validate the "type" input
    $validTypes = array('client', 'doctor', 'physician');
    if (!in_array(strtolower($type), $validTypes)) {
        echo "Invalid type. Please enter either 'client', 'doctor', or 'physician'.";
        exit;
    }

    require_once 'db_config.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // The existing form validation code...
    
        // If all validations pass, you can proceed with the signup process and save the data to the database
        // For example:
    
        // Prepare and execute the SQL statement to insert the data into the database
        $sql = "INSERT INTO users (name, email, type, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $type, $password);
    
        // Execute the statement and check for errors
        if ($stmt->execute()) {
            // Success! The data has been saved to the database.
            // You can redirect the user to a success page or display a success message.
            header('Location: signup_success.php');
            exit;
        } else {
            // Error occurred while saving the data to the database
            echo "Error: " . $sql . "<br>" . $conn->error;
            exit;
        }
    
        // Close the database connection
        $stmt->close();
        $conn->close();
    }

    // Redirect the user to a success page after successful signup
    header('Location: index.php');
    exit;
}
?>
