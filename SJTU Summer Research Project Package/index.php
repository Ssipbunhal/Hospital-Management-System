<?php
    include_once 'headers/header.php';
?>

<style>
    body{
        background-image: url("images/E2L1SHTB_4x.jpg");
        background-size: cover;
    }
</style>

        <div class = "login">
            <h1> Health Care Account </h1>
            <form action="login_handler.php" method="post">
                <input type="text" name="email" placeholder="Enter Email">
                <input type="password" name="password" placeholder="Enter Password">
                <button type="submit" name="login-submit">Login</button>
            </form>

            <form action = "sign_up.php" method = "post">
                <button type="submit" name="sign_up-submit">Sign Up</button>
            </form>
            <p class = "address">filler for address</p>
            <p class = "info">Copyright</p>
            <p class = "contact">fille for contact</p>
        </div>        
    </body>