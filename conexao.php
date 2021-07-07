<?php
    $hhost = "localhost";
    $user = "root";
    $db = "db_site-empresa";

    $con = mysqli_connect($host, $user);

    if (!mysqli_select_db($con, $db)) {
        echo "<pre>". $con->errno . ": " . $con->error. "</pre> </br>";
        exit();
    }
?>