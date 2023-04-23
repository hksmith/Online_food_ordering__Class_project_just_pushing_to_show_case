<?php include('config/constansts.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <script src="https://kit.fontawesome.com/91fb278b78.js" crossorigin="anonymous"></script>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="<?php echo SITEURL; ?>" title="Logo">
                    <img src="images/logo/logo.jpg" alt="Restaurant Logo" class="img-responsive" style="width: 90px;">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Home
                            <lord-icon 
                                src="https://cdn.lordicon.com/gmzxduhd.json"
                                trigger="hover"
                                style="width:30px;height:50px">
                            </lord-icon>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>contact.php">Contact</a>
                    </li>
                    <?php
                    
                        if(isset($_SESSION['userU']))
                        {
                            ?>

                                <li>
                                    <a href="<?php echo SITEURL; ?>logoutU.php">Logout</a>
                                </li>

                            <?php
                        }

                    ?>
                    <li>
                        <button id="ch"> <i class="fa-solid fa-sun"></i></button>
                    </li>
                    <li>
                        <button id="re"><i class="fa-regular fa-moon icon"></i></button>
                    </li>
                </ul>
            </div>
          <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->
