<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "templates/head.php" ?>

<body>

    <div class="container">
        <?php $activePage = 'registration';
        require_once "templates/nav.php" ?>
        <main id="reg" class="registration">
            <div class="registration-block">
                <h1 class="regh">Log in</h1>
                <form class="registration-form" action="/app/Http/Controllers/loginController.php" method="post">
                    <label for="username">E-mail:</label>
                    <input type="text" placeholder="example@gmail.com" name="username">
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="pass123">
                    <div>
                        <input type="submit" name="submit" value="Log in" class="form-submit">
                        <a href="register.php"><button style="width: 24%" type="button" class="form-submit unactive">Sign Up</button></a>
                    </div>
                </form>
                <?php require_once "templates/const.php" ?>
            </div>
        </main>
    </div>
</body>

</html>