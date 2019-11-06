<?php

include "templates/header.php";
require_once "classes/database.php";
session_start();

if(!isset($_SESSION["id"])){
  echo "<script>window.location.replace('http://codechallenge.com.mx/login.php');</script>";
}
?>


<?php
include "templates/footer.php";

?>
