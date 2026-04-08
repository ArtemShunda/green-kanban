<?php
    require_once __DIR__ . '/../../../backend/conn.php';

    $name = $_POST['name'];
    $email = $_POST["email"];
    $password = $_POST['password'];
    // $password_check = $_POST['password_check'];

    // if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
    //     die('Email is ongeldig!');
    // }
    // if(empty($password)){
    //     die('Vul eerst je wachtwoord in!');
    // }

    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (naam, username, password) VALUES (:name, :email, :hash)";
    $statement = $conn->prepare($query);
    $statement->execute([':name' => $name ,':email' => $email, ':hash' => $hashed_pass]);

    header('Location: /login.php');
?>