<?php
session_start();
require_once 'connessione_db.php';

  if(isset($_POST['passwordN'])){
    if ($_POST['passwordN'] != "")
      $passwordN=md5(addslashes(trim($_POST['passwordN'])));
    else
      $passwordN=md5($_SESSION['pwd']);
  }

  if(isset($_POST['nomeN'])){
    $nomeN=addslashes($_POST['nomeN']);
  }

  if(isset($_POST['cognomeN'])){
    $cognomeN=addslashes($_POST['cognomeN']);
  }

  if(isset($_POST['cittaN'])){
    $cittaN=addslashes($_POST['cittaN']);
  }

  if(isset($_POST['sessoN'])){
    $sessoN=addslashes($_POST['sessoN']);
  }

  if(isset($_POST['descrizioneN'])){
    $descrizioneN=trim(addslashes($_POST['descrizioneN']));
  }

  if(isset($_POST['sesso'])){
    $sessoU=addslashes($_POST['sesso']);
  }

/*  $target_dir = "Profilo/";
  $newfoto = NULL;
  $target_file = NULL;
  echo "Errore : " .  $_FILES["fotoN"]["error"];
  if($_FILES["fotoN"]["name"] != ""){
    $newfoto = basename($_FILES["fotoN"]["name"]);
    echo $newfoto;
    $target_file = $target_dir.$fotoN;
  }
  else{
    echo "sono nel ramo else<br>";
    $newfoto= $fotoU;
  } */

  $user=$_SESSION["log"];
  $q10="UPDATE user SET password='".$passwordN."', nome='".$nomeN."', cognome='".$cognomeN."', citta='".$cittaN."', sesso='".$sessoN."', descrizione='".$descrizioneN."' WHERE username = '".$user."'";
//echo $q10;
  if (mysqli_query($con, $q10)) {
    /* if( $target_file!=NULL ){
      if (move_uploaded_file($_FILES["fotoN"]["tmp_name"], $target_file)) {
        echo "The file ".basename( $_FILES["fotoN"]["name"])." has been uploaded in ".$target_file;
      }
    } */
    header("location: profilo_personale.php");
  }
?>
