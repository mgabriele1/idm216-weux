<?php require 'includes/_db.php'; ?>
<?php include 'includes/_header.php'; ?>

<?php 
//get table pt1
$table = 'movies';
$query = "SELECT * FROM {$table}";
$result = mysqli_query($connection, $query);

if (!$result) {
    die('Database connection failed');
} 
?>

<body class="profile-pg">
        <!--LANDSCAPE DIV-->
        <div class="landscape">
            <i class="fa fa-repeat" aria-hidden="true"></i>
            <h1>Please Return Device to Portrait Orientation</h1>
        </div>
    <!--HEADER-->
    <header>
        <div class="logo">
            <img src="graphics/logo.png" alt="imdb">
        </div>
        <div class="profile-header">
            <img src="graphics/user.png" alt="user">
            <h4>
                User Name
            </h4>
            <i class="icon-settings"></i>
        </div>
    </header>

    <!--CONTENT-->
    <div class="content">
        <div class="landscape-scroll">
            <h1 class="title">
                Favorites
            </h1>
            <div class="profile-images">
            <?php 
             while($row = mysqli_fetch_assoc($result)) {

                $recent = $row['recent'];
                $id = $row['id'];
                if ($id > 10) {
                echo "<a href=\"info.php?id={$id}\">";
                echo "<img src=\"graphics/" . $recent . "\" alt=\"movie thumbnail\">";
                echo "</a>";
                if ($id > 20) {
                break;
                } }
            }
            ?>
            </div>
        </div>
        <div class="landscape-scroll">
            <h1 class="title">
                Watchlist
            </h1>
            <div class="profile-images">
                <?php 
                while($row = mysqli_fetch_assoc($result)) {

                    $recent = $row['recent'];
                    $id = $row['id'];
                    echo "<a href=\"info.php?id={$id}\">";
                    echo "<img src=\"graphics/" . $recent . "\" alt=\"movie thumbnail\">";
                    echo "</a>";
                }
                ?>
            </div>
        </div>
        <div class="card-scroll">
            <h1 class="title">
                Rated and Reviewed
            </h1>
            <div class="cards">

            <?php 
            //get table pt2
            $table = 'movies';
            $query = "SELECT * FROM {$table}";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                die('Database connection failed');
            } 
            ?>
            <?php 
             while($row = mysqli_fetch_assoc($result)) {
                 
               echo "<div class=\"review\">";
                   echo "<div class=\"title-block\">";
                        echo "<h2>";
                            echo $row['usertitle'];
                        echo "</h2>";
                        echo "<div class=\"rating\">";
                            echo "<i class=\"icon-star\"></i>";
                            echo "<p>";
                            echo $row['userstars'];
                            echo "</p>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class=\"date\">";
                        echo "<h3 class=\"movie-name\">";
                            echo $row['title'];
                        echo "</h3>";
                        echo "<p>";
                            echo $row['id'] . "/" . "4/" . $row['year'];
                        echo "</p>";
                    echo "</div>";
                    echo "<div class=\"write-up\">";
                        echo "<p>";
                            echo $row['userreview']; 
                        echo "</p>";
                    echo "</div>";
                    echo "<div class=\"read-more\">";
                        echo "<p>Read More</p>";
                        echo "<i class=\"icon-right\"></i>";
                    echo "</div>";
                echo "</div>";
               
                if ($row['id']>8) {
                break;
                }
                }
                ?>
            </div>
        </div>
        <div class="card-scroll">
            <h1 class="title">
               Your Celebrities
            </h1>
            <div class="cards">

            <?php 
             while($row = mysqli_fetch_assoc($result)) {

                $castArray = explode("*", $row['cast']);
                $imagesArray = explode("*", $row['castphoto']);

                echo "<div class=\"celebs\">";
                    echo "<img src=\"graphics/" . $imagesArray[0] . "\">";
                    echo "<h2>" . $castArray[0] . "</h2>";
                    echo "<p>" . $row['title'] . "</p>";
                echo "</div>";
                
                if ($row['id'] < 8) {
                    continue;
                }
                if ($row['id'] >18) {
                break;
                }
             } ?>
            
            </div>
        </div>
    </div>
    <!--FOOTER NAV-->
    <footer>
        <a href="index.php" class="home">
            <i class="icon-home"></i>
        </a>
        <div class="search">
            <i class="icon-search"></i>
        </div>
        <a href="profile.php" class="profile">
            <i class="icon-user" id="active"></i>
        </a>
    </footer>

    <?php 
    mysqli_free_result($result);
    mysqli_close($connection);
    ?>

<?php include 'includes/_footer.php'; ?>