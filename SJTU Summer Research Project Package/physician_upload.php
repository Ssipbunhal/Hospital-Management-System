<?php
    include_once 'headers/header_for_physician_upload.php';
?>

<style>
    body{
        background-image: url("images/E2L1SHTB_4x.jpg");
        background-size: cover;
    }
</style>

        <div class = "physician-upload">
        <h1>Welcome, please upload test images and test report here</h1>
            <form action = "physician_page.php" method = "post">
                <input class = "file-uploader" type="file" id="myFile" name="filename">
                <input class = "file-uploader" type="file" id="myFile" name="filename">
                <input type="text" name = "appointment-number" placeholder = "Please put in client appointment number">
                <input type="text" name = "doctor-name" placeholder = "Please put in doctor name">
                <button type="submit" name="submit">Submit</button>              
            </form>
            <form action = "doctor_page.php" method = "post">
                <button type="submit" name="cancel-action">Cancel</button>
            </form>
        </div>
    </body>