<!doctype html>
<html lang="nl">

<head>
    <title></title>
    <?php require_once 'templates/head.php'; ?>
</head>

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
        <?php $activePage = 'home';
        require_once 'templates/nav.php' ?>
        <main>
            <div class="greetings">
                <h1>Hello, Artem Shunda!👋</h1>
                <h1></h1>
                <h3 class="greetings-quest">What do you want to do today?</h3>
                <h1 class="main-title">DevLand</h1>
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
                        <div class="card-counter">
                            <p>0/3</p>
                        </div>
                        <div class="dots">
                            <?php require 'templates/dots.php' ?>
                        </div>
                    </div>
                    <div class="kanban-element-main">

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