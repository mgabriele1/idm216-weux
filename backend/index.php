<!--GET HEADER-->
<?php require 'includes/_db.php'; ?>
<?php include "includes/_header.php"; ?>


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


<?php 
//use connection
    while($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $thumbnail = $row['thumbnail'];
        $hero = $row['hero'];
        $year = $row['year'];
        $rating = $row['rating'];
        $time = $row['time'];
        $stars = $row['stars'];
        $metascore = $row['metascore'];
        $genre = $row['genre'];
        $storyline = $row['storyline'];

        echo "title:" . $title . "<br> thumbnail:" . $thumbnail . "<br> hero:" . $hero . "<br> year:" . $year . "<br> rating:" . $rating . "<br> time:" . $time . "<br> stars:" . $stars . "<br> metascore:" . $metascore . "<br> genre:" . $genre . "<br> storyline:" . $storyline . "<hr>";
    }
?>


<?php 
    //release returned data
    mysqli_free_result($result);

    //close db
    mysqli_close($connection);
?>

<!-- GET FOOTER -->
<?php include "includes/_footer.php"; ?>
