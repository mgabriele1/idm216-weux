<?php require 'includes/_db.php'; ?>
<?php include 'includes/_header.php'; ?>

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
            <img src="graphics/minions_thumbnail.jpg" alt="movie thumbnail">
            <div>
                <h1>
                    Minions
                </h1>
                <h2> <b>
                    2015 • PG-13
                </b> </h2>
            </div>
            <div class="genre">
                <p>
                    Animation • Adventure • Comedy
                </p>
            </div>
        </div>
        <div class="movie-details">
            <div>
                <i class="icon-clock"></i>
                <h2>
                    1h 31m
                </h2>
            </div>
            <div>
                <i class="icon-star"></i>
                <h2>
                    <b>8.6</b>/10
                </h2>
            </div>
            <h2>
                <button class="gold">
                    56
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
                <h3>Directors:</h3> <p>Kyle Balda, Pierre Coffin</p>
            </div>
            <div>
                <h3>Writer:</h3> <p>Brian Lynch</p>
            </div>    
            <div>
                <h3>Stars:</h3> <p>Sandra Bullock, Jon Hamm, Michael Keaton</p>
            </div>   
        </div>
        <div class="storyline">
            <h1>
                Storyline
            </h1>
            <h4>
                Ever since the dawn of time, the Minions have lived to serve the most despicable of masters. From the T-Rex to Napoleon, the easily distracted tribe has helped the biggest and the baddest of villains. Now, join protective leader Kevin, teenage rebel Stuart, and lovable little Bob on a global road trip. They'll earn a shot to work for a new boss, the world's first female supervillain, and try to save all of Minionkind from annihilation.
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