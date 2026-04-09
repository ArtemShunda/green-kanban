<?php
session_start();
// if (!isset($_SESSION['user_id'])) {
//     $msg = "Je moet eerst inloggen!";
//     header("Location: ../../../login.php?msg=$msg");
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "templates/head.php" ?>

<body>
    <div class="container">
        <?php $activePage = 'profile';
        require_once "templates/nav.php" ?>
        <main id="reg" class="registration">
            <div class="profile-block">
                <div class="personal-info-block">
                    <div class="profile-block-border">
                        <img class="profile-picture-block" src="img/user-photo.jpg" alt="">
                    </div>
                    <div class="personal-username">
                        <h2 style="margin: 0;">
                            <?php echo $_SESSION['name'] ?>
                        </h2>
                        <p style="color: grey; margin: 0;">
                            <?php echo $_SESSION['username'] ?>
                        </p>
                    </div>
                    <form action="/app/Http/Controllers/logoutController.php">
                        <button class="form-sumbit logOut">
                            Log Out
                        </button>
                    </form>
                </div>
                <div class="own-tasks">
                    <?php require 'templates/task.php' ?>
                    <?php require 'templates/task.php' ?>
                    <?php require 'templates/task.php' ?>
                    <?php require 'templates/task.php' ?>
                    <?php require 'templates/task.php' ?>
                    <?php require 'templates/task.php' ?>
                </div>
            </div>
        </main>
    </div>
</body>

</html>