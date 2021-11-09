<?php

if (isset($_POST["submit"])) {
    //check of er een username in staat
    $username = $_POST["username"];
    if(empty($username))
    {
        $errors[] = "Vul een naam in!";
    }
    //check of er een email in staat
    $email = $_POST["email"];
    if(empty($email))
    {
        $errors[] = "Vul een email in!";
    }
    //kijk of er een wachtwoord in staat
    $password = $_POST["password"];
    if(empty($password))
    {
        $errors[] = "Vul een wachtwoord in!";
    }
    //check of er errors zijn, (username, email, wachtwoord vergeten)
    if(isset($errors))
    {
        var_dump($errors);//laat deze errors zien
        die();
    }

    require_once "conn.php";
    require_once "functions.php";

    //check of het email addres al in gebruik is
    if (emailExists($conn, $email) !== false){
        header("location: ../../signup.php?error=email bestaat al");
        exit();
    }

    //check of de username al in gebruik is
    if (usernameExists($conn, $username) !== false){
        header("location: ../../signup.php?error=naam bestaat al");
        exit();
    }
    //maak de nieuwe user aan
    createUser($conn, $username, $email, $password);

}
else {
    header("location: ../../signup.php");
    exit();
}
