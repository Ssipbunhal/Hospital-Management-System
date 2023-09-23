<?php
    include_once 'headers/header_for_client_page.php';
?>

<style>
    body{
        background-image: url("images/E2L1SHTB_4x.jpg");
        background-size: cover;
    }
</style>

            <h1> Welcome Client </h1>

            <div class = "client-create-appointment">
            <h1> Create appointment </h1>
            <form action = "client_create.php" method = "post">
                <img class = "icon2" src = "images/360_F_235264681_I9IXizuil7YCBcDIZYSyDmX7gdwyba1k.jpg">
                <button type="submit" name="Create">Create</button>              
            </form>
            </div>

            <div class = "client-delete-appointment">
            <h1> Delete appointment </h1>
            <img class = "icon4" src = "images/istockphoto-1204524537-170667a.jpg">
            <form action = "client_delete.php" method = "post">
                <button type="submit" name="Delete">Delete</button>              
            </form>
            </div>
    </body>