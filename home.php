<?php
    session_start();
    
    if(isset($_SESSION['adminLogin']) == false) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php require_once("header.php") ?>
    <div class="homeContainer">
        <div class="homeCover">
            <p>Welcome Back</p>
            <p>Admin</p>
            <p><?php 
                echo $_SESSION['AdminName'];
            ?>!</p>\
            <a href="dashboard.php">Continue to Dashboard</a>
        </div>
        <?php require_once("footer.php") ?>
    </div>
    
</body>
</html>