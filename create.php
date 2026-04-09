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
            <h1 class="repo-name">Create new issue in curio-lesmateriaal/pra-b3-2026-feb-artem-kailash-famke</h1>
            <div class="create-block">
                <form class="create-form" action="app/Http/Controllers/takenController.php" method="POST">
                    <input type="hidden" name="status" value="todo">
                    <input type="hidden" name="status" value="todo">
                    
                    <label for="title">Add a Title:</label>
                    <input placeholder="Title" type="text" name="title">
                    
                    <div class="select-area">
                        <label for="afdeling">Afdeling</label>
                        <label for="deadline">Deadline</label>
                        <select name="afdeling">
                            <option value="Personeel">Personeel</option>
                            <option value="Horeca">Horeca</option>
                            <option value="Techniek">Techniek</option>
                            <option value="Inkoop">Inkoop</option>
                            <option value="Klant">Klant</option>
                            <option value="Groen">Groen</option>
                        </select>
                        <input type="date" name="deadline" id="deadline">
                    </div>
                    
                    <label for="description">Add a description:</label>
                    <textarea placeholder="Type your description here ..." name="beschrijving"></textarea>
                    
                    <input id="create-submit" name="action" class="pointer form-submit" type="submit" value="create">
                </form>
                <img width="400px" src="img/logo-big-fill-only.png" alt="">
            </div>
        </main>
    </div>
</body>
</html>