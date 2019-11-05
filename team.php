<?php

include "templates/header.php";
require_once "classes/database.php";
session_start();

if(!isset($_SESSION["id"])){
  header("Location: login.php");
}

include "templates/footer.php";

?>
