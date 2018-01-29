<?php
session_start();
require_once 'connessione_db.php';

  $target_dir = "Profilo/";
  $newfoto = NULL;
  $target_file = NULL;
  //aecho "Errore : " .  $_FILES["fotoN"]["error"];
  if($_FILES["fotoN"]["name"] != ""){
    $newfoto = basename($_FILES["fotoN"]["name"]);
    //echo $newfoto;
    $target_file = $target_dir.$fotoN;
  }
  else{
    //echo "sono nel ramo else<br>";
    $newfoto = $fotoU;
  }

  if( $target_file!=NULL ){
    if (move_uploaded_file($_FILES["fotoN"]["tmp_name"], $target_file)) {
      echo "The file ".basename( $_FILES["fotoN"]["name"])." has been uploaded in ".$target_file;
    }
  }
  $user=$_SESSION["log"];
  $q11="UPDATE user SET foto='".$newfoto."'";
  if (mysqli_query($con, $q11)) {
    header("location: profilo_personale.php");
  }
?>
