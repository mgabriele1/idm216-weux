<!-- INCLUDES -->
<?php require 'includes/_db.php'; ?>
<?php include "includes/_header.php"; ?>

<!--GET INFO and QUERY-->
<?php
// get filter info if passed
$table = 'recipes';
$filter = $_GET['filter'];

// for search
    if (isset($_POST['submit'])) {
        // look for results
        $searchterm = $_POST['search']; //lowercase search term
        $query = "SELECT * FROM {$table} WHERE title LIKE '%{$searchterm}%' OR side LIKE '%{$searchterm}%'";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 0) {
            echo "<div class=\"no-wrapper\">";
            echo "<img src=\"graphics/noresults.gif\" alt=\"no results\" class=\"noresults\">";
            echo "</div>";
            die;
        } 
    } elseif (isset($filter)) {
        $query = "SELECT * FROM {$table} WHERE filters LIKE '%{$filter}%'";
        $result = mysqli_query($connection, $query);
    }else {
        //get from table
        $query = "SELECT * FROM {$table}";
        $result = mysqli_query($connection, $query);

        //error check
        if (!$result) {
            die('Database query failed');
        }
    }
?>

<!--HOME CARDS-->
<div class="home-wrap">

<?php 
    //get db info
    while($row = mysqli_fetch_assoc($result)) {
?>

    <div class="home-card"> <!--CARD FOR COPY-->
         <!--link with id-->
         <?php 
            $id= $row['id'];
            echo "<a href=\"recipe.php?id={$id}\">"; // slash to fix double quotes
         ?>
            <img class="home-img" src="recipe_images/<?php echo $row['imageFolder'];?>/main_pic.jpg" alt="plate of food"/>
            <div class="textbox">
                <h3>
                    <?php echo $row['title'];?>
                </h3>
                <p>
                    <?php echo $row['side'];?>
                </p>
            </div>
        </a> 
    </div>

<?php
    } //end php while loop

    //release returned data
    mysqli_free_result($result);

    // close db connect
    mysqli_close($connection);
?>

    <div class="home-card"> <!--PLACEHOLDER FOR STYLING--> </div>
    <div class="home-card"> <!--PLACEHOLDER FOR STYLING--> </div>
    <div class="home-card"> <!--PLACEHOLDER FOR STYLING--> </div>
    <div class="home-card"> <!--PLACEHOLDER FOR STYLING--> </div>
    <div class="home-card"> <!--PLACEHOLDER FOR STYLING--> </div>
</div>
</div>

<!-- GET FOOTER -->
<?php include "includes/_footer.php"; ?>