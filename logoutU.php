<?php

    include('config/constansts.php');

    session_destroy();

    header('location:'.SITEURL.'index.php');

?>