<?php require 'includes/_db.php'; ?>
<?php include 'includes/_header.php'; ?>

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
                <img src="graphics/minions_landscape.jpg">
                <img src="graphics/titanic_recent.jpg">
                <img src="graphics/mulan_recent.jpg">
                <img src="graphics/psycho_recent.jpg">
                <img src="graphics/walle_recent.jpg">
                <img src="graphics/pulpfiction_recent.jpg">
            </div>
        </div>
        <div class="landscape-scroll">
            <h1 class="title">
                Watchlist
            </h1>
            <div class="profile-images">
                <img src="graphics/wreckit_recent.jpg">
                <img src="graphics/palmsprings_recent.jpg">
                <img src="graphics/aliens_recent.jpg">
                <img src="graphics/crazy_recent.jpg">
                <img src="graphics/invisible_recent.jpg">
                <img src="graphics/platoon_recent.jpg">
            </div>
        </div>
        <div class="card-scroll">
            <h1 class="title">
                Rated and Reviewed
            </h1>
            <div class="cards">
                <div class="review">
                    <div class="title-block">
                        <h2>
                            A treat for the whole family!
                        </h2>
                        <div class="rating">
                            <i class="icon-star"></i>
                            <p>9</p>
                        </div>
                    </div>
                    <div class="date">
                        <h3 class="movie-name">
                            Minions
                        </h3>
                        <p>
                            12/12/12
                        </p>
                    </div>
                    <div class="write-up">
                        <p>
                            My wife and I went to see this, we loved both Despicable Me's, and had high hopes for the movie. Thankfully, while... 
                        </p>
                    </div>
                    <div class="read-more">
                        <p>Read More</p>
                        <i class="icon-right"></i>
                    </div>
                </div>
                <div class="review">
                    <div class="title-block">
                        <h2>
                            A treat for the whole family!
                        </h2>
                        <div class="rating">
                            <i class="icon-star"></i>
                            <p>9</p>
                        </div>
                    </div>
                    <div class="date">
                        <h3 class="movie-name">
                            Minions
                        </h3>
                        <p>
                            12/12/12
                        </p>
                    </div>
                    <div class="write-up">
                        <p>
                            My wife and I went to see this, we loved both Despicable Me's, and had high hopes for the movie. Thankfully, while... 
                        </p>
                    </div>
                    <div class="read-more">
                        <p>Read More</p>
                        <i class="icon-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-scroll">
            <h1 class="title">
               Your Celebrities
            </h1>
            <div class="cards">
                <div class="celebs">
                    <img src="graphics/user.png">
                    <h2>Celebrity Name</h2>
                    <p>Movie, Movie, Movie</p>
                </div>
                <div class="celebs">
                    <img src="graphics/user.png">
                    <h2>Celebrity Name</h2>
                    <p>Movie, Movie, Movie</p>
                </div>
                <div class="celebs">
                    <img src="graphics/user.png">
                    <h2>Celebrity Name</h2>
                    <p>Movie, Movie, Movie</p>
                </div>
                <div class="celebs">
                    <img src="graphics/user.png">
                    <h2>Celebrity Name</h2>
                    <p>Movie, Movie, Movie</p>
                </div>
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

<?php include 'includes/_footer.php'; ?>