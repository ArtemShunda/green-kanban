<?php
session_start();

require_once 'backend/conn.php';
$query = "SELECT * FROM taken";
$statement = $conn->prepare(query: $query);
$statement->execute();
$takenlijst = $statement->fetchAll(mode: PDO::FETCH_ASSOC);

$id = $_GET['id']
    ?>

<!DOCTYPE html>
<html lang="en">

<?php require_once "templates/head.php" ?>

<body>
    <div class="container">
        <?php require_once "templates/nav.php" ?>
        <main id="edit">
            <div class="create-block">
                <?php foreach ($takenlijst as $taken): ?>
                    <?php if ($taken['id'] == $id): ?>
                        <form class="create-form" action="<?php echo $base_url; ?>/app/Http/Controllers/takenController.php"
                            method="POST">

                            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                            <label for="title">Edit a Title:</label>
                            <input placeholder="Title" type="text" name="title" value="<?php echo $taken['titel']; ?>">

                            <div class="select-area">
                                <label for="afdeling">Afdeling</label>
                                <label for="status">Status</label>
                                <select name="afdeling">
                                    <option value="Personeel" <?= $taken['afdeling'] === 'Personeel' ? 'selected' : '' ?>>Personeel
                                    </option>
                                    <option value="Horeca" <?= $taken['afdeling'] === 'Horeca' ? 'selected' : '' ?>>Horeca</option>
                                    <option value="Techniek" <?= $taken['afdeling'] === 'Techniek' ? 'selected' : '' ?>>Techniek
                                    </option>
                                    <option value="Inkoop" <?= $taken['afdeling'] === 'Inkoop' ? 'selected' : '' ?>>Inkoop</option>
                                    <option value="Klant" <?= $taken['afdeling'] === 'Klant' ? 'selected' : '' ?>>Klant</option>
                                    <option value="Groen" <?= $taken['afdeling'] === 'Groen' ? 'selected' : '' ?>>Groen</option>
                                </select>

                                <select name="status">
                                    <option value="todo" <?= $taken['status'] === 'todo' ? 'selected' : '' ?>>To Do</option>
                                    <option value="in_progress" <?= $taken['status'] === 'in_progress' ? 'selected' : '' ?>>In
                                        progress</option>
                                    <option value="done" <?= $taken['status'] === 'done' ? 'selected' : '' ?>>Done</option>
                                </select>
                            </div>

                            <label for="deadline">Edit Deadline:</label>
                            <input value="<?= $taken['deadline'] ?>" type="date" name="deadline">

                            <label for="beschrijving">Edit description:</label>
                            <textarea placeholder="Type your description here ..."
                                name="beschrijving"><?= $taken['beschrijving'] ?></textarea>
                            <div class="buttons">
                                <button id="edit-submit" name="action" class="pointer form-submit" type="submit"
                                    value="edit">Submit</button>
                                <button id="edit-submit" name="action" class="pointer form-submit" type="submit"
                                    value="delete">Delete</button>
                            </div>
                        </form>
                    <?php endif; ?>
                <?php endforeach; ?>
                <img width="400px" src="img/logo-big-fill-only.png" alt="">
            </div>
        </main>
    </div>
    <script src="js/darkmode.js"></script>
</body>

</html>