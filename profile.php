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
    <?php require_once 'backend/conn.php';
    $query = "SELECT * FROM taken";
    $statement = $conn->prepare(query: $query);
    $statement->execute();
    $takenlijst = $statement->fetchAll(mode: PDO::FETCH_ASSOC);
    ?>
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
                     <?php foreach ($takenlijst as $taken): ?>
                            <?php if ($taken['user'] == $_SESSION['user_id']): ?> <!-- Hier moet een naam filter ooit komen -Kailash -->
                                <div class="task-block">
                                    <h1 class="task-name"><a class="none"
                                            href="edit.php?id=<?php echo $taken['id'] ?>"><?= $taken['titel'] ?></a></h1>
                                    <div class="task-profile-block">
                                        <div class="taskpp">
                                            <img class="task-profile-picture" src="img/user-photo.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="task-info">
                                        <div>
                                            <p class="author-name">
                                                    <?= $taken['username']; ?>[<?= $taken['user'] ?>]
                                            </p>
                                        </div>
                                        <div class="department-display">
                                            <p><?= $taken['afdeling'] ?></p>
                                        </div>
                                        <div class="description-block">
                                            <p class="description">
                                                <?php if (mb_strlen($taken['beschrijving'], "UTF-8") > 15) {
                                                    $taken['beschrijving'] = mb_substr($taken['beschrijving'], 0, 14, "UTF-8") . '...';
                                                }
                                                echo $taken['beschrijving']; ?>
                                            </p>
                                        </div>
                                        <div class="date-block">
                                            <p><?= $taken['deadline'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                </div>
            </div>
        </main>
    </div>
</body>

</html>