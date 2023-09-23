<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the appointment number is provided in the form
    if (isset($_POST["appointment-number"]) && !empty($_POST["appointment-number"])) {
        // Get the submitted appointment number
        $appointmentNumber = $_POST["appointment-number"];

        // Create the filename based on the appointment number
        $filename = "appointment_" . $appointmentNumber . ".txt";
        $filepath = __DIR__ . "/" . $filename;

        // Check if the file exists
        if (file_exists($filepath)) {
            // Delete the text file
            unlink($filepath);

            // Perform database operation to remove the appointment entry
            require_once 'db_config.php'; // Replace with the correct path to your db_config.php file

            // Prepare and execute the SQL statement to delete the appointment from the database
            $sql = "DELETE FROM appointments WHERE appointment_number = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $appointmentNumber);
            $stmt->execute();

            // Close the database connection
            $stmt->close();
            $conn->close();

            // Redirect to client_page.php after successful deletion
            header("Location: client_page.php");
            exit;
        } else {
            // If the file doesn't exist, display an error message
            echo "Error: Appointment number not found.";
            exit;
        }
    }
}

// Include the header file
include_once 'headers/header_for_client_delete.php';
?>

<style>
    body {
        background-image: url("images/E2L1SHTB_4x.jpg");
        background-size: cover;
    }
</style>

<div class="delete-page">
    <h1>Welcome, please keep in mind that deleting an appointment is only valid 24 hours before the given appointment</h1>
    <form action="client_delete.php" method="post">
        <input type="text" name="appointment-number" placeholder="Please put in your appointment number">
        <button type="submit" name="submit">Submit</button>
    </form>
    <form action="client_page.php" method="post">
        <button type="submit" name="cancel-action">Cancel</button>
    </form>
</div>
</body>
