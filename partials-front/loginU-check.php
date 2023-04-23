<?php

    if(!isset($_SESSION['userU']))
    {
        $_SESSION['no_login'] = "<div class='error'>Please login to order</div>";
        header('location:'.SITEURL.'loginU.php');
    }

?>