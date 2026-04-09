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
        <?php require_once "templates/nav.php" ?>
        <main id="edit">
            <h1 class="repo-name">Create new issue in curio-lesmateriaal/pra-b3-2026-feb-artem-kailash-famke</h1>
            <div class="create-block">
                <form class="create-form" action="<?php echo $base_url; ?>/app/Http/Controllers/meldingenController.php" method="POST">
                    <label for="title">Add a Title:</label>
                    <input placeholder="Title" type="text" name="title">
                    <div class="select-area">
                        <label for="afdeling">Afdeling</label>
                        <label for="frioriteit">Prioriteit</label>
                        <select name="afdeling">
                            <option value="personeel">Personeel</option>
                            <option value="horeca">Horeca</option>
                            <option value="techniek">Techniek</option>
                            <option value="inkoop">Inkoop</option>
                            <option value="klantenservice">Klantenservice</option>
                            <option value="groen">Groen</option>
                        </select>
                        <select name="prioriteit">
                            <option value="ja">Nee</option>
                            <option value="nee">Ja</option>
                        </select>
                    </div>
                    <label for="description">Add a description:</label>
                    <textarea placeholder="Type your description here ..." name="description"></textarea>
                    <input id="create-submit" name="action" class="form-submit" type="submit" value="Submit">
                </form>
                <img  width="400px" src="img/logo-big-fill-only.png" alt="">
            </div>
        </main>
    </div>
</body>
</html>