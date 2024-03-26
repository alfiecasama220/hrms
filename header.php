<!-- <div class="header">
    <div class="headerCover">
        <div class="con1"></div>
        <div class="con2">
            <hr class="hrTop">
            <p>WORKPLACE WARRIORS</p>
            <h3>HR MANAGEMENT SYSTEM</h3> 
            <hr class="hrBot">
        </div>
        <div class="con3">
            <hr class="con3HR">
        </div>
    </div>
</div> -->
<!-- Inside header.php or any appropriate location -->
<div class="header">
    <div class="headerCover">
        <div class="con1">
            
            
        </div>
        <div class="con2">
            <img src="images/finalsLogo.png" alt="">
        </div>
        <div id="burgerIcon" class="con3">
            <?php 
                if(isset($_SESSION['adminLogin']) == true) {
                ?>
            <img src="images/pngegg.png" alt="burger">
            <?php 
        }
        ?>

            <?php 
                if(isset($_SESSION['adminLogin']) == true) {
            ?>

            <div class="logoHeader">
                <div><img src="images/profile.png" alt="logo"></div>
                <div class="username">
                    <p><?php echo $_SESSION['AdminName']; ?></p>
                    <p class="role">Admin</p>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>