<?php

//IEDER VOOR ZICH:

#### TODO
//Hernoem dit bestand naar 'config.php' en vul jouw eigen database-gegevens in.
//Deze config wordt hierna _niet_ meegestuurd naar je groepsgenoten. Zo kan iedereen zijn eigen wachtwoord, etc. invullen.

$dbHost = 'localhost';
$dbName = 'c2_codecamp';
$dbUser = 'root';
$dbPass = '';

//De url waarop jouw project staat. Géén slash aan het einde.
if(is_dir($_SERVER['DOCUMENT_ROOT'] . '/c2_codecamp')){
  $base_url = "http://localhost/c2_codecamp";
}
else{
  $base_url = "https://c2_codecamp.test";
}
