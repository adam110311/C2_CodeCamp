<?php
//als je op logout drukt dan zorgt die er voor dat die de sessie destroyed en niet meer is ingelogt
session_start();
unset($_SESSION["id"]);
unset($_SESSION["username"]);
unset($_SESSION["admin"]);
session_destroy();
header("Location: index.php");
exit;
