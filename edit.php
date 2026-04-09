<?php
session_start();
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
                <form class="create-form" action="<?php echo $base_url; ?>/app/Http/Controllers/takenController.php" method="POST">
                    
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                    <label for="title">Edit a Title:</label>
                    <input placeholder="Title" type="text" name="title">
                    
                    <div class="select-area">
                        <label for="afdeling">Afdeling</label>
                        <select name="afdeling">
                            <option value="personeel">Personeel</option>
                            <option value="horeca">Horeca</option>
                            <option value="techniek">Techniek</option>
                            <option value="inkoop">Inkoop</option>
                            <option value="klantenservice">Klantenservice</option>
                            <option value="groen">Groen</option>
                        </select>

                        <label for="status">Status</label>
                        <select name="status"> <option value="todo">To Do</option>
                            <option value="in_progress">In progress</option> <option value="done">Done</option> </select>
                    </div>

                    <label for="deadline">Edit Deadline:</label>
                    <input type="date" name="deadline">

                    <label for="beschrijving">Edit description:</label>
                    <textarea placeholder="Type your description here ..." name="beschrijving"></textarea>
                    
                    <button id="edit-submit" name="action" class="pointer form-submit" type="submit" value="edit">Submit</button>
                    <button id="delete-submit" name="action" class="pointer form-submit" type="submit" value="delete">Delete</button>
                </form>
                <img width="400px" src="img/logo-big-fill-only.png" alt="">
            </div>
        </main>
    </div>
</body>
</html>