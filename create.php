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
        <?php require_once "templates/nav.php" ?>
        <main id="edit">
            <h1 class="repo-name">Create new issue in curio-lesmateriaal/pra-b3-2026-feb-artem-kailash-famke</h1>
            <div class="create-block">
                <form class="create-form" action="">
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
                    <input id="create-submit" class="form-submit" type="submit" value="Submit">
                </form>
            </div>
        </main>
    </div>
</body>
</html>