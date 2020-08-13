<?php require 'includes/_db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<!--HEAD-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMDb</title>
   <!--icons--> <script src="https://kit.fontawesome.com/6736a7ecf9.js" crossorigin="anonymous"></script>
   <!-- fonts --> <link rel="stylesheet" href="https://use.typekit.net/fct0lke.css">
    <link rel="stylesheet" href="style.css" type="text/css"/>
<!--do this-->   <link rel="icon" href="graphics/icon.ico" type="image/x-icon">
</head>

<!--BODY-->
<body>

<?php 
    //get from table and open connection
    $table = 'movies';
    $query = "SELECT * FROM {$table}";
    $result = mysqli_query($connection, $query);

    //errors
    if (!$result) {
        die ('Database query failed');
    }
?>

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
                <div>
                    <div>
                        <i class="icon-trailer"></i>
                    </div>
                    <img src="graphics/minions_landscape.jpg">
                </div>
                <div>
                    <div>
                        <i class="icon-trailer"></i>
                    </div>
                    <img src="graphics/clueless_recent.jpg">
                </div>
                <div>
                    <div>
                        <i class="icon-trailer"></i>
                    </div>
                    <img src="graphics/forrest_recent.jpg">
                </div>
                <div>
                    <div>
                        <i class="icon-trailer"></i>
                    </div>
                    <img src="graphics/inception_recent.jpg">
                </div>
            </div>
        </div>
        <div class="home-section">
            <h1 class="title">    
                Top Movies
            </h1>
            <div class="images">
            <?php 
            //use connection
                while($row = mysqli_fetch_assoc($result)) {
                    
                    $thumbnail = $row['thumbnail'];
                    
                    echo "<img src=\"graphics/" . $thumbnail . "\" alt=\"movie thumbnail\">";
                }
            ?>
            </div>
        </div>
        <div class="home-section">
            <h1 class="title">    
                Coming Soon to Theaters
            </h1>
            <div class="images">
                <img src="graphics/mulan_thumbnail.jpg" alt="movie thumbnail">
                <a href="info.html">
                    <img src="graphics/minions_thumbnail.jpg" alt="movie thumbnail">
                </a>
                <img src="graphics/fightclub_thumbnail.jpg" alt="movie thumbnail">
                <img src="graphics/aliens_thumbnail.jpg">
                <img src="graphics/br_thumbnail.jpg">
                <img src="graphics/chinatown_thumbnail.jpg">
            </div>
        </div>
        <div class="home-section">
            <h1 class="title">    
                Award Winning
            </h1>
            <div class="images">
                <img src="graphics/mulan_thumbnail.jpg" alt="movie thumbnail">
                <a href="info.html">
                    <img src="graphics/minions_thumbnail.jpg" alt="movie thumbnail">
                </a>
                <img src="graphics/fightclub_thumbnail.jpg" alt="movie thumbnail">
                <img src="graphics/aliens_thumbnail.jpg">
                <img src="graphics/br_thumbnail.jpg">
                <img src="graphics/chinatown_thumbnail.jpg">
            </div>
        </div>
        <div class="home-section">
            <h1 class="title">    
                Watch Soon
            </h1>
            <div class="images">
                 <img src="graphics/mulan_thumbnail.jpg" alt="movie thumbnail">
                <a href="info.html">
                    <img src="graphics/minions_thumbnail.jpg" alt="movie thumbnail">
                </a>
                <img src="graphics/fightclub_thumbnail.jpg" alt="movie thumbnail">
                <img src="graphics/aliens_thumbnail.jpg">
                <img src="graphics/br_thumbnail.jpg">
                <img src="graphics/chinatown_thumbnail.jpg">
            </div>
        </div>
    </div>
    <!--FOOTER NAV-->
    <footer>
        <a href="index.html" class="home">
            <i class="icon-home" id="active"></i>
        </a>
        <div class="search">
            <i class="icon-search"></i>
        </div>
        <a href="profile.html" class="profile">
            <i class="icon-user"></i>
        </a>
    </footer>

    <?php 
    //release returned data
    mysqli_free_result($result);

    //close db
    mysqli_close($connection);
    ?>  

</body>
</html>