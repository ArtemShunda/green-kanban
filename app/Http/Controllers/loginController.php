<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

require_once __DIR__ . '/../../../backend/conn.php';

$query = "SELECT * FROM users WHERE username = :username";
$statement = $conn->prepare($query);
$statement->execute([':username' => $username]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if ($statement->rowCount() < 1) {
    die('Error: vul juiste gebruikersnaam in');
}
if (!password_verify($password, $user['password'])) {
    echo 'Wachtwoord niet juist!';
}
$_SESSION['user_id'] = $user['id'];
$_SESSION['username'] = $user['username'];
$_SESSION['name'] = $user['naam'];
$_SESSION['avatar'] = $user['avatar'];

header('Location: /index.php');