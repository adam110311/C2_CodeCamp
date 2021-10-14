<?php

if (isset($_POST["submit"])) {
    
    $username = $_POST["username"];
    if(empty($username))
    {
        $errors[] = "Vul een naam in!";
    }
    $email = $_POST["email"];
    if(empty($email))
    {
        $errors[] = "Vul een email in!";
    }
    $password = $_POST["password"];
    if(empty($password))
    {
        $errors[] = "Vul een wachtwoord in!";
    }
    if(isset($errors))
    {
        var_dump($errors);
        die();
    }

    require_once "conn.php";
    require_once "functions.php";

    if (emailExists($conn, $email) !== false){
        header("location: ../../signup.php?error=email bestaat al");
        exit();
    }

    if (usernameExists($conn, $username) !== false){
        header("location: ../../signup.php?error=naam bestaat al");
        exit();
    }

    createUser($conn, $username, $email, $password);
    
}
else {
    header("location: ../../signup.php");
    exit();
} 