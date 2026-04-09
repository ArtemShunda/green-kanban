<!DOCTYPE html>
<html lang="en">
<?php require_once "templates/head.php" ?>

<body>
    <div class="container">
        <?php $activePage = 'registration';
        require_once "templates/nav.php" ?>
        <main id="reg" class="registration">
            <div class="registration-block">
                <h1 class="regh">Registration</h1>
                <form class="registration-form" action="/app/Http/Controllers/registerController.php" method="post">
                    <label for="name">Name:</label>
                    <input type="name" placeholder="Viktor Vector" name="name">
                    <label for="email">E-mail:</label>
                    <input type="text" placeholder="example@gmail.com" name="email">
                    <label for="password">Password:</label>
                    <input type="password" name="password">
                    <div>
                        <input type="submit" name="submit" value="Sign Up" class="form-submit">
                        <a href="login.php"><button type="button" class="form-submit unactive">Log In</button></a>
                    </div>
                </form>
                <?php require_once "templates/const.php" ?>
            </div>
        </main>
    </div>
</body>

</html>