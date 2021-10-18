<?php session_start();
if(!isset($_SESSION['admin']) && $_SESSION['admin']){
    header("Location: ../../index.php");
    die;
}
$id = $_POST['id'];
$colorcode = $_POST['color'];
require_once 'conn.php';
$query = "UPDATE content SET colorcode = :color WHERE id = :id";
$statement = $conn->prepare($query);
$statement->execute([":id" => $id, ":color" => $colorcode]);
header("Location: ../../index.php");