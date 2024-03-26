<?php 

    require_once("connection.php");
    session_start();
    
    $errorMessage = null;
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $database = mysqli_query($connection, "SELECT * FROM admin WHERE username = '".$username."' and password = '".$password."'");
        $result = mysqli_fetch_assoc($database);

        if(is_array($result)) {
            $_SESSION['username'] = $result['username'];
            $_SESSION['password'] = $result['password'];
            $_SESSION['fullname'] = $result['fullname'];

            $_SESSION['adminLogin'] = true;

            $txt = $result['fullname'];
            $_SESSION['AdminName'] = preg_replace('/\W\w+\s*(\W*)$/', '$1', $txt);

            header("Location: home.php");
        } else {
            $errorMessage = "Invalid Username and Password";
        }
    }

    if(isset($_SESSION['adminLogin']) == true) {
        header("Location: home.php");
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
    <?php require_once("content.php") ?>
</body>
</html>