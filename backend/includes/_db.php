<!--CONNTECT TO DATABASE-->

<?php
//local
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "root";
 $dbname = "cookbook";
 $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// online
// $dbhost = "localhost";
// $dbuser = "mgabrie1_idm232";
// $dbpass = "IDM232dbpass?";
// $dbname = "mgabrie1_cookbook";
// $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // Check the connection is good with no errors
  if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }
?>