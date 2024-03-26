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

<div class="fixedAction" id="fixedAction">
    <?php require_once("leaveRequestAction.php") ?>
</div>

<div id="showSidebar" class="dashboardSideBarMobile">
            <div class="title" style="text-align: left;"><a id="close" stlye="cursor: pointer;">x</a></div>
            <div class="title" style="background: gray;"><a href="#"><?php echo $_SESSION['AdminName']; ?><br><span style="font-size: 14px; color: white;">Admin</span></a></div>
            <div class="title active"><a href="#">Dashboard</a></div>
            <div class="title"><a href="#">Employees</a></div>
            <div class="title"><a href="#">Leave Requests</a></div>
            <div class="title"><a href="#">Accepted Leave</a></div>
            <div class="title"><a href="#">Denied Leave</a></div>
            <div class="title"><a href="#">Change Password</a></div>
            <div class="title"><a href="#">Login History</a></div>
            <div class="title"><a href="logout.php">Logout</a></div>
        </div>
    <?php require_once("header.php"); ?>
    <!-- HOME -->
    <div class="dashboardContainer">
        <div class="dashboardSideBar">
            <div class="title" id="div1"><a>Dashboard</a></div>
            <div class="title" id="div1"><a>Employees</a></div>
            <div class="title" id="div1"><a>Leave Requests</a></div>
            <div class="title" id="div1"><a>Accepted Leave</a></div>
            <div class="title" id="div1"><a>Denied Leave</a></div>
            <div class="title" id="div1"><a>Change Password</a></div>
            <div class="title" id="div1"><a>Login History</a></div>
            <div class="title" id="div1"><a>Logout</a></div>
        </div>

       
        <div class="dashboardContent">
            <?php require_once("dashboardContent.php") ?>
        </div>
        
        
        
    </div>
    <?php require_once("footer.php") ?>
</body>
<script src="main.js"></script>
</html>