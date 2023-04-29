<?php 
    //$con = mysqli_connect("localhost","root","","komentar");
    $con = mysqli_connect("sql313.epizy.com", "epiz_31035852", "xZTIeDYF2JWLnou", "epiz_31035852_komentar");
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
    }
?>