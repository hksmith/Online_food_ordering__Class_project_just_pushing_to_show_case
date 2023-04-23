<?php include('partials-front/menu.php'); ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            <?php
            
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            
            ?>
            <h2>Foods on Your Search <a href="#" class="text-white">"<?php echo $search; ?> "</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Category Menu</h2>

            <?php

                $sql = "SELECT * FROM tbl_category WHERE title LIKE '%$search%'";

                $res = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($res);

                if ($count > 0)
                {
                    while ($row  = mysqli_fetch_assoc($res))
                    {
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];

                        ?>

                            <a href="<?php echo SITEURL ?>category-foods.php?category_id=<?php echo $id; ?>">
                                <div class="box-3 float-container">

                                    <?php
                                    
                                        if ($image_name == "")
                                        {
                                            echo "<div class=error'>Image not found.</div>";
                                        }
                                        else
                                        {
                                            ?>
                                            <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="" class="img-responsive img-curve img">
                                            <?php
                                        }
                                    
                                    ?>
                                    <h3 class="float-text text-white"><?php echo $title; ?></h3>
                                </div>
                            </a>            

                        <?php
                    }
                }
                else
                {
                    echo"<div class='error'>Category not found.</div>";
                }
            
            ?>

            <div class="clearfix"></div>

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

<?php include('partials-front/footer.php'); ?>