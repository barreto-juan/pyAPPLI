<?php
    unset($_COOKIE["login"]);
    setcookie("login", null, -1, "/");

    header("location:login");

?>