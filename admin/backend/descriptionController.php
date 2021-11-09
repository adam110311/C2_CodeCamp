<?php
session_start();
$action = $_POST['action'];

if($action == "update")
{
    $description = $_POST['description'];
    if(empty($description))
    {
        $errors[] = "Vul een description in!";
    }
    $id = $_POST['id'];

    
    require_once 'conn.php';

    // query

    $query = "UPDATE books SET description = :description WHERE id = :id";

    $statement = $conn->prepare($query);

    // Execute

    $statement->execute([
        ":description" => $description,
        ":id" => $id,
    ]);
    
    header("Location: ../../index.php");
    exit;
}