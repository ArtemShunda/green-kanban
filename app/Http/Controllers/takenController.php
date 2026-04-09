<?php
session_start(); 

require_once '../../../backend/conn.php';

$action = $_POST['action'];

if($action == "create"){
  
    $title = $_POST['title'];
    $beschrijving = $_POST['beschrijving'];
    $afdeling = $_POST['afdeling'];
    $status = $_POST['status'];
    $deadline = $_POST['deadline'];
    $user = $_SESSION['user_id'] ?? null;
    $created_at = date('Y-m-d H:i:s'); 

    if (!$user) {
         header("Location: ../../../login.php?msg=Je moet eerst inloggen!");  // Ai slop heeft dit gemaakt GEEN idee wtf dit doet -Kailash
        exit;
    }

    if(empty($title)){
        $errors[] = "Please enter task name!";
    }
    if(empty($afdeling)){
        $errors[] = "Please select a department!";
    }

    $query = "INSERT INTO taken (titel, beschrijving, afdeling, status, deadline, user, created_at) 
              VALUES (:title, :beschrijving, :afdeling, :status, :deadline, :user, :created_at)";

    $statement = $conn->prepare($query);

    $statement->execute([
        ':title' => $title,
        ':beschrijving' => $beschrijving,
        ':afdeling' => $afdeling,
        ':status' => $status,
        ':deadline' => $deadline,
        ':user' => $user,
        ':created_at' => $created_at
    ]);

    header("Location: ../../../index.php?msg=Melding opgeslagen");
    exit;

} elseif($action == "edit"){


    $id = $_POST['id'];
    $title = $_POST['title'];
    $beschrijving = $_POST['beschrijving']; 
    $afdeling = $_POST['afdeling'];
    $status = $_POST['status']; 
    $deadline = $_POST['deadline'];


    $query = "UPDATE taken SET titel = :title, beschrijving = :beschrijving, afdeling = :afdeling, status = :status, deadline = :deadline WHERE id = :id";

    $statement = $conn->prepare($query); 
    $statement->execute([
        ':title' => $title,
        ':beschrijving' => $beschrijving,
        ':afdeling' => $afdeling,
        ':status' => $status,
        ':deadline' => $deadline,
        ':id' => $id
    ]);

    header("Location: ../../../index.php?msg=Taak aangepast");
    exit;

} elseif($action == "delete"){
    
    $query = "DELETE FROM taken WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ':id' => $_POST['id'] 
    ]);

    header("Location: ../../../index.php");
    exit;
}