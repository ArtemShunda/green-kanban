<?php
session_start();
// if (!isset($_SESSION['user_id'])) {
//     $msg = "Je moet eerst inloggen!";
//     header("Location: ../../../login.php?msg=$msg");
//     exit;
// }


?>
<!doctype html>
<html lang="nl">

<head>
    <title>DevLand</title>
    <?php require_once 'templates/head.php'; ?>
    <link rel="icon" href="img/logo-big-fill-only.png">
</head>

<body>

    <?php require_once 'backend/conn.php';
    $query = "SELECT * FROM taken";
    $statement = $conn->prepare(query: $query);
    $statement->execute();
    $takenlijst = $statement->fetchAll(mode: PDO::FETCH_ASSOC);
    ?>
    <?php require_once 'backend/conn.php';
    $query = "SELECT * FROM users";
    $statement = $conn->prepare($query);
    $statement->execute();
    $user = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
    

    <div class="container">
        <?php $activePage = 'home';
        require_once 'templates/nav.php' ?>
        <main>
            <div class="greetings">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <h1>Hello, <?php echo $_SESSION['name'] ?>!👋</h1>
                <?php endif ?>
                <?php if (!isset($_SESSION['user_id'])): ?>
                    <h1>Hello, anoniem!👋</h1>
                <?php endif ?>
                <h1></h1>
                <h3 class="greetings-quest">What do you want to do today?</h3>
                <img class="main-logo" width="210px" src="img/logo-big-fill-only.png" alt="">
            </div>
            <div class="kanban">
                <div class="kanban-element to-do">
                    <div class="kanban-element-header">
                        <h1>To Do</h1>
                        <div class="dots">
                            <?php require 'templates/dots.php' ?>
                        </div>
                    </div>
                    <div class="kanban-element-main">
                        <?php foreach ($takenlijst as $taken): ?>
                            <?php if ($taken['status'] == 'todo'): ?>
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
                                                [<?= $taken['user'] ?>]
                                            </p>
                                        </div>
                                        <div class="department-display">
                                            <p><?= $taken['afdeling'] ?></p>
                                        </div>
                                        <div class="description-block">
                                            <p class="description">
                                                <?= $taken['beschrijving'] ?>
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
                    <div class="kanban-element-footer">
                        <a class="create-butt" href="create.php">
                            <div class="plus-button">
                                <?php require 'templates/plus.php' ?>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="kanban-element in-progress">
                    <div class="kanban-element-header">
                        <h1>In Progress</h1>
                        <div class="dots">
                            <?php require 'templates/dots.php' ?>
                        </div>
                    </div>
                    <div class="kanban-element-main">
                        <?php foreach ($takenlijst as $taken): ?>
                            <?php if ($taken['status'] == 'inprogress'): ?>
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
                                                [<?= $taken['user'] ?>]
                                            </p>
                                        </div>
                                        <div class="department-display">
                                            <p><?= $taken['afdeling'] ?></p>
                                        </div>
                                        <div class="description-block">
                                            <p class="description">
                                                <?= $taken['beschrijving'] ?>
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
                    <div class="kanban-element-footer">
                        <a class="create-butt" href="create.php">
                            <div class="plus-button">
                                <?php require 'templates/plus.php' ?>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="kanban-element done">
                    <div class="kanban-element-header">
                        <h1>Done</h1>
                        <div class="dots">
                            <?php require 'templates/dots.php' ?>
                        </div>
                    </div>
                    <div class="kanban-element-main">
                        <?php foreach ($takenlijst as $taken): ?>
                            <?php if ($taken['status'] == 'done'): ?>
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
                                                    [<?= $taken['user'] ?>]
                                            </p>
                                        </div>
                                        <div class="department-display">
                                            <p><?= $taken['afdeling'] ?></p>
                                        </div>
                                        <div class="description-block">
                                            <p class="description">
                                                <?= $taken['beschrijving'] ?>
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
                    <div class="kanban-element-footer">
                        <a class="create-butt" href="create.php">
                            <div class="plus-button">
                                <?php require 'templates/plus.php' ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="js/script.js"></script>
</body>

</html>