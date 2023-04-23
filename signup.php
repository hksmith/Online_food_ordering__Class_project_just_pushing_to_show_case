<?php include('config/constansts.php') ?>
<html>
    <head>
        <title>Sign Up - Food Order System</title>
        <link rel="stylesheet" href="css/admin.css";>
    </head>

    <body>
        <div class="login">
            <h1 class="text-center">Sign Up</h1>
            <br><br>

            <?php
                if(isset($_SESSION['signup']))
                {
                    echo $_SESSION['signup'];
                    unset($_SESSION['signup']);
                }
                if (isset($_SESSION['no-signup-message']))
                {
                    echo $_SESSION['no-signup-message'];
                    unset($_SESSION['no-signup-message']);
                }
            ?>
            <br>

             <form class="text-center" action="" method="POST">
                <input class="text-center" type="text" name="fullname" placeholder="Enter Username" required>
                <br><br>
                <input class="text-center" type="text" name="email" placeholder="Enter Email" required>
                <br><br>
                <input class="text-center" type="password" name="password" placeholder="Enter Password" required>
                <br><br>
                <input type="submit" name="submit" value="Sign Up" class="btn-primary">
                <br><br>

             </form>

            <p class="text-center">© 2023 kalab solomon @Code your Empire</p>    
        </div>
    </body>
</html>

<?php 
    // Process the value from form and save it in database
    // Check whether the submit button is cliked or not

    if (isset($_POST['submit']))
    {
        // echo"Button Cliked";
        // Get the Data from form

        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);  //Password encrypted with MD5

        // SQL Query to Save the data into database

        $sql = "INSERT INTO tbl_users SET
                fullname='$fullname',
                email='$email',
                password='$password' 
        ";

        // Executing  Query and Saving Data into Database
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        // Check Whether the (Query is Executed) data is inserted or not and display message
        if ($res == TRUE)
        {
            // Data Inserted
            // Create a Session Variable to Display
            $_SESSION['signup'] =  "<div class='success'>Signed up successfully</div>";
            header("location:".SITEURL.'loginU.php');  //Rediret Page to Manage Admin
        }
        else
        {
            // Create a Session Variable to Display
            $_SESSION['signup'] = "<div class='success'>Sign up Failed</div>";
            header("location:".SITEURL.'signup.php');
        }
    }
?>