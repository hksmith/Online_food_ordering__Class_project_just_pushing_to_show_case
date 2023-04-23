<?php include('partials-front/menu.php'); ?>

    <section class="food-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>categories-search.php" method="POST">
                <input class="ee" type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Food Categories</h2>

            <?php
            
                $sql = "SELECT * FROM tbl_category WHERE active='yes'";

                $res = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($res);

                if ($count > 0)
                {
                    while ($row = mysqli_fetch_assoc($res))
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
                                <h3 class="float-text text-white dis"><?php echo $title; ?></h3>
                            </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    echo "<div class='error'>Catergory not found.</dive>";
                }
            
            ?>
 
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->
 

<?php include('partials-front/footer.php'); ?>