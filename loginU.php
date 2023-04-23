<?php include('config/constansts.php') ?>
<html>
    <head>
        <title>User Login</title>
        <link rel="stylesheet" href="css/admin.css";>
    </head>

    <body>
        <div class="login">
            <h1 class="text-center">Login</h1>
            <br><br>

            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
                if (isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
                if (isset($_SESSION['user_id']))
                {
                    echo $_SESSION['user_id'];
                    unset($_SESSION['user_id']);
                }
            ?>
            <br>

             <form class="text-center" action="" method="POST">
                <input class="text-center" type="text" name="email" placeholder="Enter Email" required>
                <br><br>
                <input class="text-center" type="password" name="password" placeholder="Enter Password" required>
                <br><br>
                <input type="submit" name="submit" value="Login" class="btn-primary">
                <br><br>
                <a href="<?php echo SITEURL; ?>signup.php">New user | Create account</a>
                <br><br>

             </form>

            <p class="text-center">© 2023 kalab solomon @Code your Empire</p>    
        </div>
    </body>
</html>

<?php 

    if (isset($_POST['submit']))
    {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $Password = mysqli_real_escape_string($conn, md5($_POST['password']));

         $sql = "SELECT * FROM tbl_users WHERE email='$email' AND password='$Password'";

         $res = mysqli_query($conn, $sql);

         $count = mysqli_num_rows($res);

         if($count == 1)
         {
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['userU'] = $email;
            header('location:'.SITEURL.'order.php');
         }
         else
         {
            $_SESSION['login'] = "<div class='error text-center'>Wrong Password or Username</div>";
            header('location:'.SITEURL.'loginU.php');
         }
    }

?>