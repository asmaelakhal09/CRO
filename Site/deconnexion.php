<?php

include_once "db.php";
session_destroy();
header('Location:connexion.php');
exit();
?>