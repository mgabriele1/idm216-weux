<!--CONNTECT TO DATABASE-->

<?php
//local
//  $dbhost = "localhost";
//  $dbuser = "root";
//  $dbpass = "root";
//  $dbname = "imdb";
//  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// online
$dbhost = "localhost";
$dbuser = "mgabrie1_idm216";
$dbpass = "idm216";
$dbname = "mgabrie1_imdb";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // Check the connection is good with no errors
  if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }
?>