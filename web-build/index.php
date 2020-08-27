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

<body>
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
        <div class="slide-menu">
            <h1 class="active">
                Movies
            </h1>
            <h1>
                TV
            </h1>
            <h1>
                Videos
            </h1>
            <h1>
                Celebrities
            </h1>
            <h1>
                Awards / Events
            </h1>
            <h1>
                Community
            </h1>
        </div>
    </header>

    <!--CONTENT-->
    <div class="content">
        <div class="landscape-scroll">
            <h1 class="title">
                Featured Trailers
            </h1>
            <div class="images">
            <?php 
             while($row = mysqli_fetch_assoc($result)) {

                $id = $row['id'];
                $recent = $row['recent'];

                echo "<div>";
                echo "<div>";
                echo "<i class=\"icon-trailer\"></i>";
                echo "</div>";
                echo "<img src=\"graphics/" . $recent . "\" alt=\"movie thumbnail\">";
                echo "</div>";
                if ($id > 10) {
                break;
                }
            }
           ?>
        </div>
        </div>
        <div class="home-section">
            <h1 class="title">    
                Top Movies
            </h1>
            <div class="images">
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

                $thumbnail = $row['thumbnail'];
                $id = $row['id'];
                echo "<a href=\"info.php?id={$id}\">";
                echo "<img src=\"graphics/" . $thumbnail . "\" alt=\"movie thumbnail\">";
                echo "</a>";
                if ($id > 8) {
                break;
            }
            }
           ?>

            </div>
        </div>
        <div class="home-section">
            <h1 class="title">    
                Coming Soon to Theaters
            </h1>
            <div class="images">

            <?php 
             while($row = mysqli_fetch_assoc($result)) {

                $thumbnail = $row['thumbnail'];
                $id = $row['id'];
                echo "<a href=\"info.php?id={$id}\">";
                echo "<img src=\"graphics/" . $thumbnail . "\" alt=\"movie thumbnail\">";
                echo "</a>";
                if ($id < 8) {
                    continue;
                }
                if ($id > 16) {
                break;
                }
            }
           ?>
            </div>
        </div>
        <div class="home-section">
            <h1 class="title">    
                Award Winning
            </h1>
            <div class="images">
            <?php 
             while($row = mysqli_fetch_assoc($result)) {

                $thumbnail = $row['thumbnail'];
                $id = $row['id'];
                echo "<a href=\"info.php?id={$id}\">";
                echo "<img src=\"graphics/" . $thumbnail . "\" alt=\"movie thumbnail\">";
                echo "</a>";
                if ($id < 16) {
                    continue;
                }
                if ($id > 24) {
                break;
                }
            }
           ?>
            </div>
        </div>
        <div class="home-section">
            <h1 class="title">    
                Watch Soon
            </h1>
            <div class="images">
            <?php 
             while($row = mysqli_fetch_assoc($result)) {

                $thumbnail = $row['thumbnail'];
                $id = $row['id'];
                echo "<a href=\"info.php?id={$id}\">";
                echo "<img src=\"graphics/" . $thumbnail . "\" alt=\"movie thumbnail\">";
                echo "</a>";
                if ($id < 24) {
                    continue;
                }
            }
           ?>
            </div>
        </div>
    </div>
    <!--FOOTER NAV-->
    <footer>
        <a href="index.php" class="home">
            <i class="icon-home" id="active"></i>
        </a>
        <div class="search">
            <i class="icon-search"></i>
        </div>
        <a href="profile.php" class="profile">
            <i class="icon-user"></i>
        </a>
    </footer>

<?php 
mysqli_free_result($result);
mysqli_close($connection);
?>

<?php include 'includes/_footer.php'; ?>