<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br>


        <form action="" method="POST">
            <table class="tbl-40" style="width: 30%;">
                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Enter You Username">
                    </td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</div>

<?php include('partials/footer.php'); ?>

<?php 
    // Process the value from form and save it in database
    // Check whether the submit button is cliked or not

    if (isset($_POST['submit']))
    {
        // echo"Button Cliked";
        // Get the Data from form

        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);  //Password encrypted with MD5

        // SQL Query to Save the data into database

        $sql = "INSERT INTO tbl_admin SET
                full_name='$full_name',
                username='$username',
                password='$password' 
        ";

        // Executing  Query and Saving Data into Database
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        // Check Whether the (Query is Executed) data is inserted or not and display message
        if ($res == TRUE)
        {
            // Data Inserted
            // Create a Session Variable to Display
            $_SESSION['add'] =  "<div class='success'> Admin added Successfully </div>";
            header("location:".SITEURL.'admin/manage-admin.php');  //Rediret Page to Manage Admin
        }
        else
        {
            // Create a Session Variable to Display
            $_SESSION['add'] = "<div class='success'> Failed to Add Admin </div>";
            header("location:".SITEURL.'admin/add-admin.php');
        }
    }
?>