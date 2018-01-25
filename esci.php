<?php
  session_start();
  unset($_SESSION["log"]);
  header("location: home.php");
?>
