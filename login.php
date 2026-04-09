<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "templates/head.php" ?>

<body>
    <svg class="circles" width="15%" height="30%" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="none"
        stroke="#2C5F4E" stroke-width="2.6239999999999997" transform="rotate(180)">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#2C5F4ECCCCCC"
            stroke-width="0.128"></g>
        <g id="SVGRepo_iconCarrier">
            <path d="M8 8a48 48 0 0 1 48 48"></path>
            <path d="M8 24a32 32 0 0 1 32 32"></path>
            <path d="M8 40a16 16 0 0 1 16 16"></path>
        </g>
    </svg>
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