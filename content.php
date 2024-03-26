<div class="containerDiv">
    <div class="cover">
        <div class="content1 cons">
            <img src="images/profile.png" alt="profile">
        </div>
        <div class="content2 cons">
            <div class="inputs">
                <form method="POST">
                    <div class="errorDiv">
                        <p class="errorLogin"><?php echo $errorMessage; ?></p>
                    </div>
                <div class="inputs">
                    <input type="text" name="username" placeholder="Username">
                </div>

                <div class="inputs">
                    <input type="password" name="password" placeholder="Password">
                </div>

                <div class="inputs loginClass">
                    <button name="login">Login</button>
                </div>
            </div>
            </form>
        </div>
        <div class="content3 cons"></div>
    </div>
    <?php require_once("footer.php") ?>
</div>