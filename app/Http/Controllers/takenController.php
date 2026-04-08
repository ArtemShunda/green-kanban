<?php

$action = $_POST['action'];

if($action == "create"){

    //variabelen
    $title = $_POST['title'];
    if(empty($title)){
    $errors[] = "Please enter task name!";
    }
    $beschrijving = $_POST['beschrijving'];
    $afdeling = $_POST['afdeling'];
    if(empty($afdeling)){
    $errors[] = "Please select a department!";
    }
    $status = //TODO: status;
    $deadline = $_POST['deadline'];
    $user_id = $_SESSION['user_id'];
    $created_at = //TODO: created_at;

    //validatie



    require_once '../../../backend/conn.php';

    $query = "INSERT INTO taken (titel, beschrijving, afdeling, status, deadline, user_id, created_at) VALUES ('$title', '$beschrijving', '$afdeling', '$status', '$deadline', '$user_id', '$created_at')";

    $statement = $conn->prepare($query);

    $statement->execute([
        ':title' => $title,
        ':beschrijving' => $beschrijving,
        ':afdeling' => $afdeling,
        ':status' => $status,
        ':deadline' => $deadline,
        ':user_id' => $user_id,
        ':created_at' => $created_at
    ]);

    header("Location: ../../../index.php");


} elseif($action == "edit"){
    
    //variabelen
    $title = $_POST['title'];
    $beschrijving = $_POST['beschrijving'];
    $afdeling = $_POST['afdeling'];
    $status = //TODO: status;
    $deadline = $_POST['deadline'];
    $user_id = $_SESSION['user_id'];
    $created_at = $_POST['created_at'];

    require_once '../../../backend/conn.php';

    $query = "UPDATE taken SET titel = '$title', beschrijving = '$beschrijving', afdeling = '$afdeling', deadline = '$deadline' WHERE id = :id";

        $statement->execute([
        ':title' => $title,
        ':beschrijving' => $beschrijving,
        ':afdeling' => $afdeling,
        ':status' => $status,
        ':deadline' => $deadline,
        ':user_id' => $user_id,
        ':created_at' => $created_at
    ]);

    header("Location: $base_url/index.php");

} elseif($action == "delete"){
    
    require_once '../../../backend/conn.php';

    $query = "DELETE FROM taken WHERE id = :id";

        $statement = $conn->prepare($query);

        $statement->execute([
        ':id' => $_POST['id']
    ]);

    header("Location: ../../../index.php");

}