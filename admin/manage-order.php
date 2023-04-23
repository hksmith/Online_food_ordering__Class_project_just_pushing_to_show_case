<?php include("partials/menu.php"); ?>

<div class="main-content ">
    <div class="wrapper">
        <h1>Manage Order</h1>
        <br><br>

        <?php
        
            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }
        
        ?>
        <br>

            <table class="tbl-full">
                <tr>
                    <th>S.N</th>
                    <th>Food</th>
                    <th>Price</th>
                    <th>Quantite</th>
                    <th>Totla</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Customer Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>

                <?php
                
                    $sql = "SELECT * FROM tbl_order ORDER BY id DESC";

                    $res = mysqli_query($conn, $sql);

                    $count = mysqli_num_rows($res);

                    $sn = 1;

                    if ($count > 0)
                    {
                        while($row = mysqli_fetch_assoc($res))
                        {
                            $id = $row['id'];
                            $food = $row['food'];
                            $price = $row['price'];
                            $qty = $row['qty'];
                            $total = $row['total'];
                            $order_date = $row['order_date'];
                            $status = $row['status'];
                            $customer_name = $row['customer_name'];
                            $customer_contact = $row['customer_contact'];
                            $customer_email = $row['customer_email'];
                            $customer_address = $row['customer_address'];

                            ?>

                            <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo $food; ?></td>
                                <td><?php echo $price; ?></td>
                                <td><?php echo $qty; ?></td>
                                <td><?php echo $total; ?></td>
                                <td><?php echo $order_date; ?></td>
                                <td>
                                    <?php 

                                        if ($status == "Ordered")
                                        {
                                            echo "<span>$status</span>";
                                        }
                                        else if ($status == "On Delivery")
                                        {
                                            echo "<span style='color: orange;'>$status</span>";
                                        }
                                        else if ($status == "Delivered")
                                        {
                                            echo "<span style='color: green;'>$status</span>";
                                        }
                                        else if ($status == "Cancelled")
                                        {
                                            echo "<span style='color: red;'>$status</span>";
                                        }

                                    ?>
                                </td>
                                <td><?php echo $customer_name; ?></td>
                                <td><?php echo $customer_contact; ?></td>
                                <td><?php echo $customer_email; ?></td>
                                <td><?php echo $customer_address; ?></td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>admin/update-order.php?id=<?php echo $id; ?>" class="btnO-secondary">Update_Order</a>
                                </td>
                            </tr>

                            <?php
                        }
                    }
                    else
                    {
                        echo"<tr><td colspan='12' class='error'>Orders not Avialable</td></tr>";
                    }

                ?>

            </table>
    </div>
    
</div>

<?php include('partials/footer.php'); ?>