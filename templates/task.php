<div class="task-block">
    <h1 class="task-name"><a class="none" href="edit.php?id=<?php echo $taken['id'] ?>"><?= $taken['titel'] ?></a></h1>
    <div class="task-profile-block">
        <div class="taskpp">
            <img class="task-profile-picture" src="img/user-photo.jpg" alt="">
        </div>
    </div>
    <div class="task-info">
        <div>
            <p class="author-name">
                [username] [<?=$taken['user'] ?>]
            </p>
        </div>
        <div class="department-display">
            <p><?=$taken['afdeling'] ?></p>
        </div>
        <div class="description-block">
            <p class="description">
                <?= $taken['beschrijving'] ?>
            </p>
        </div>
        <div class="date-block">
            <p><?=$taken['deadline'] ?></p>
        </div>
    </div>
</div>