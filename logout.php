<?php 

    session_start();

    session_destroy();
    $_SESSION['adminLogin'] = false;

    header("Location: index.php");

?>