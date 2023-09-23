<?php
    include_once 'headers/header_for_sign_up.php';
?>

        <div class = "sign-up">
            <h1> Health Care Account </h1>

            <form action = "sign_up_handler.php" method = "post">
                <input type = "text" name = "name" placeholder = "Enter Full Name">
                <input type = "text" name = "email" placeholder = "Enter Email">
                <input type = "text" name = "type" placeholder = "Enter either client, doctor, or physician">
                <input type = "password" name = "password" placeholder = "Enter Password">
                <input type = "password" name = "password-confirm" placeholder = "Confirm Password">
                <button type="submit" name="submit">Sign up</button>
            </form>

            <p class = "address">filler for address</p>
            <p class = "info">Copyright</p>
            <p class = "contact">fille for contact</p>
        </div>
    </body>