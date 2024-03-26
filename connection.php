<?php 

    $connection = mysqli_connect("localhost", "root", "", "hrms");

    if(!$connection == true) {
        die("Connection Error!");
    }

?>