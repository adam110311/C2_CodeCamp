<?php session_start();
//stuur de gebruiker weg als ze niet admin zijn of niet ingelogd zijn
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
header("Location: ../../index.php");//stuur de admin terug naar de homepage
