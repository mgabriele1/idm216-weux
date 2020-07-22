<!-- GET HEAD -->
<?php require 'includes/_db.php'; ?>
<?php include "includes/_header.php"; ?>

<!--GET ID and QUERY-->
<?php 
    $id = $_GET['id'];

    //get from table
    $table = 'recipes';
    $query = "SELECT * FROM {$table} WHERE id={$id}";
    $result = mysqli_query($connection, $query);

    //error check and grab ID row
    if (!$result) {
        die('Database query failed');
    } else {
        $row = mysqli_fetch_assoc($result);
    }
?>

<!--RECIPE-->
<div class="recipe-wrapper">
    <!--TITLE-->
<div class="rec-title">
    <img src="recipe_images/<?php echo $row['imageFolder'];?>/main_pic.jpg" alt="recipe photo" class="titimage">
    <div class="title-text">
        <h1><?php echo $row['title'];?></h1>
        <h3><?php echo "with " . $row['side'];?></h3>
        <p><?php echo $row['description'];?></p> 
    </div>
</div>
    <!--INFO-->
<div class="rec-info">
    <i class="gg-time"></i> <p class="time"> <?php echo $row['time'];?> minutes</p>
    <i class="gg-bowl"></i> <p class="serv"> <?php echo $row['servings'];?> servings</p>
    <i class="gg-heart"></i> <p class="cal"> <?php echo $row['nutrition'];?> cal/ serving</p>
</div>
    <!--INGREDIENTS-->
<div class="rec-ingred">
    <h2>ingredients</h2>
    <div class="ingred-wrap">
        <img src="recipe_images/<?php echo $row['imageFolder'];?>/ingredients.png" alt="ingredients" class="ingimg">
        <ul class="theing">
        <!--get ingred php-->
        <?php 
        $ingredStr = $row['ingredients'];
        //convert string to array
        $ingredArray = explode("\\", $ingredStr);
        // loop array
        for ($lp = 0; $lp < count($ingredArray); $lp++) {
            $oneIngred = $ingredArray[$lp];
            echo "<li>" . $oneIngred . "</li>";
        }
        ?> 
        </ul>
    </div>
</div>
    <!--INSTRUCTIONS-->
<div class="rec-instruct">
    <h2>instructions</h2>
    <div class="rec-wrapper">
    <div>
    <?php 
        $stepStr = $row['steps'];
        //convert string to array
        $stepArray = explode("\\", $stepStr); 
        $stepct = 0;
        $imgcount = 1;
        for ($i = 0; $i < count($stepArray)/2-1; $i++) {
            $thestep = $stepArray[$stepct];
            echo "<h3>" . $thestep . "<h3>";
            $stepct++;
            $thenextstep = $stepArray[$stepct];
            echo "<img src=\"recipe_images/" . $row['imageFolder'] . "/step_0" . $imgcount . ".jpg\" alt=\"step image\">";
            echo "<p>" . $thenextstep . "</p>";
            $imgcount++;
            $stepct++;
        }
    ?> 
    </div>
    </div>
</div>
</div>

<!-- GET FOOTER -->
<?php include "includes/_footer.php"; ?>