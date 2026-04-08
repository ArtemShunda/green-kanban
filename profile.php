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
        <?php $activePage = 'profile';
        require_once "templates/nav.php" ?>
        <main id="reg" class="registration">
            <div class="profile-block">
                <form action="/app/Http/Controllers/logoutController.php">
                    <button class="form-sumbit">
                        Log Out
                    </button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>