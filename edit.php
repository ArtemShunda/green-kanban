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
            <h1 class="repo-name">Edit issue</h1>
            <div class="create-block">
                <?php foreach($takenlijst as $taken):?>
                    <?php if($taken['id'] == $id):?>
                <form class="create-form" action="<?php echo $base_url; ?>/app/Http/Controllers/takenController.php"
                    method="POST">

                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                    <label for="title">Edit a Title:</label>
                    <input placeholder="Title" type="text" name="title" value="<?php echo $taken['titel'];?>">

                    <div class="select-area">
                        <label for="afdeling">Afdeling</label>
                        <label for="status">Status</label>
                        <select value="<?= $taken['afdeling']?>" name="afdeling">
                            <option value="Personeel">Personeel</option>
                            <option value="Horeca">Horeca</option>
                            <option value="Techniek">Techniek</option>
                            <option value="Inkoop">Inkoop</option>
                            <option value="Klant">Klant</option>
                            <option value="Groen">Groen</option>
                        </select>
                        <select name="status">
                            <option value="todo">To Do</option>
                            <option value="in_progress">In progress</option>
                            <option value="done">Done</option>
                        </select>
                    </div>

                    <label for="deadline">Edit Deadline:</label>
                    <input value="<?= $taken['deadline']?>" type="date" name="deadline">

                    <label for="beschrijving">Edit description:</label>
                    <textarea placeholder="Type your description here ..." name="beschrijving">
                        <?= $taken['beschrijving']?>
                    </textarea>
                    <div class="buttons">
                        <button id="edit-submit" name="action" class="pointer form-submit" type="submit"
                            value="edit">Submit</button>
                        <button id="edit-submit" name="action" class="pointer form-submit" type="submit"
                            value="delete">Delete</button>
                    </div>
                </form>
                <?php endif;?>
                <?php endforeach; ?>
                <img width="400px" src="img/logo-big-fill-only.png" alt="">
            </div>
        </main>
    </div>
</body>

</html>