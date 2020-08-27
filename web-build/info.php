<?php require 'includes/_db.php'; ?>

<!--GET ID and QUERY-->
<?php 
    $id = $_GET['id'];

    //get from table
    $table = 'movies';
    $query = "SELECT * FROM {$table} WHERE id={$id}";
    $result = mysqli_query($connection, $query);

    //error check and grab ID row
    if (!$result) {
        die('Database query failed');
    } else {
        $row = mysqli_fetch_assoc($result);
    }
?>

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
<style>

    .info-hero {
        background-image:linear-gradient(to top, rgba(0, 0, 0, 0.664), rgba(255, 255, 255, 0)), url("graphics/<?php echo $row['hero']; ?>");
    }
</style>
</head>

<!--BODY-->

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
        <div class="info-header">
            <i class="icon-left" id="back"></i>
            <i class="icon-export"></i>
        </div>
    </header>

    <!--CONTENT-->
    <div class="content">
        <div class="info-hero">
            <img src="graphics/<?php echo $row['thumbnail']?>" alt="movie thumbnail">
            <h1>
                    <?php echo $row['title']?>
            </h1>
            <div>
                <h2> <b>
                <?php echo $row['year'] . " • " . $row['rating']?>
                </b> </h2>
            </div>
            <div class="genre">
                <p>
                    <?php 
                    $genreArray = explode("*", $row['genre']); 
                    for ($i=0;$i<count($genreArray);$i++) {
                        $theGenre=$genreArray[$i];
                        if ($i == count($genreArray)-1) {
                            echo $theGenre;
                        } else {
                            echo $theGenre . " • ";
                        }
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="movie-details">
            <div>
                <i class="icon-clock"></i>
                <h2>
                    <?php echo $row['time']?>
                </h2>
            </div>
            <div>
                <i class="icon-star"></i>
                <h2>
                    <b><?php echo $row['stars']?></b>/10
                </h2>
            </div>
            <h2>
                <button class="gold">
                    <?php echo $row['metascore']?>
                </button>
                Metascore
            </h2>
        </div>
        <div class="buttons3">
            <button class="white">
                <i class="icon-play"></i>
                Play Trailer
            </button>
            <button class="lightgrey">
                <i class="icon-eye"></i>
                Where to Watch
            </button>
        </div>
        <div class="directors">
            <div>
                <h3>Director(s):</h3> <p> <?php 
                    $directorArray = explode("*", $row['director']); 
                    for ($i=0;$i<count($directorArray);$i++) {
                        $theDirector=$directorArray[$i];
                        if ($i == count($directorArray)-1) {
                            echo $theDirector;
                        } else {
                        echo $theDirector . ", ";
                        }
                    }
                    ?> </p>
            </div>
            <div>
                <h3>Writer(s):</h3> <p> <?php 
                    $writerArray = explode("*", $row['writer']); 
                    for ($i=0;$i<count($writerArray);$i++) {
                        $theWriter=$writerArray[$i];
                        if ($i == count($writerArray)-1) {
                            echo $theWriter;
                        } else {
                        echo $theWriter . ", ";
                        }
                    }
                    ?> </p>
            </div>    
            <div>
                <h3>Stars:</h3> <p> <?php 
                    $starsArray = explode("*", $row['cast']); 
                    for ($i=0;$i<count($starsArray);$i++) {
                        $theStars=$starsArray[$i];
                        if ($i == count($starsArray)-1) {
                            echo $theStars;
                        } else {
                        echo $theStars . ", ";
                        }
                    }
                    ?> </p>
            </div>   
        </div>
        <div class="storyline">
            <h1>
                Storyline
            </h1>
            <h4>
                 <?php echo $row['storyline']?>
            </h4>
        </div>
        <div class="buttons">
            <button class="grey">
                <i class="icon-star"></i>
                Rate & Review
            </button>
            <button class="grey">
                <i class="icon-parent"></i>
                Parents' Guide
            </button>
            <button class="grey">
                <i class="icon-heart"></i>
                Add to Favorites
            </button>
            <button class="grey">
                <i class="icon-list"></i>
                Add to Watchlist
            </button>
        </div>
        <div class="slide-menu" id="info-slide">
            <h1 class="active">
                Cast & Crew
            </h1>
            <h1>
                Trivia
            </h1>
            <h1>
                Details
    
            </h1>
            <h1>
                News
            </h1>
            <h1>
                More Like This
            </h1>
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
            <i class="icon-user"></i>
        </a>
    </footer>
    <!--GET SCRIPT-->
    <script src="script.js"></script>

<?php include 'includes/_footer.php'; ?>