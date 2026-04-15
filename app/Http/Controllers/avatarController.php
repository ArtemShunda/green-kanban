<?php
session_start();
$userId = $_SESSION['user_id'];
// Проверяем, что файл загружен
if (!isset($_FILES['avatar']) || $_FILES['avatar']['error'] !== UPLOAD_ERR_OK) {
    die("Ошибка загрузки файла");
}

$file = $_FILES['avatar'];

// Проверяем тип файла
$allowed = ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'];
if (!in_array($file['type'], $allowed)) {
    die("Разрешены только JPG, PNG, WEBP");
}

// Создаём папку, если её нет
$uploadDir = __DIR__ . "/../../../uploads/avatars/";

// Генерируем уникальное имя
$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
$filename = uniqid("avatar_") . "." . $ext;

$path = $uploadDir . $filename;

// Сохраняем файл
if (!move_uploaded_file($file['tmp_name'], $path)) {
    die("Не удалось сохранить файл");
}

// Сохраняем путь в базу
require_once __DIR__ . '/../../../backend/conn.php';
$userId = $_SESSION['user_id'] ?? null;

$stmt = $conn->prepare("UPDATE users SET avatar = ? WHERE id = ?");
$stmt->execute(["uploads/avatars/" . $filename, $userId]);

$_SESSION['avatar'] = "uploads/avatars/" . $filename;
header('Location: /profile.php');