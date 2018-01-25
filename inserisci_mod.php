<?php
session_start();
require_once 'connessione_db.php';

  if(isset($_POST['passwordN'])){
    $passwordN=addslashes($_POST['passwordN']);
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
  if(isset($_POST['fotoN'])){
    $fotoN=addslashes($_POST['fotoN']);
  }

  if(isset($_POST['descrizioneN'])){
    $descrizioneN=addslashes($_POST['descrizioneN']);
  }
  if(isset($_POST['username'])){
    $usernameU=addslashes($_POST['username']);
  }
  if(isset($_POST['mail'])){
    $mailU=addslashes($_POST['mail']);
  }
  if(isset($_POST['password'])){
    $passwordU=addslashes($_POST['password']);
  }

  if(isset($_POST['nome'])){
    $nomeU=addslashes($_POST['nome']);
  }

  if(isset($_POST['cognome'])){
    $cognomeU=addslashes($_POST['cognome']);
  }

  if(isset($_POST['citta'])){
    $cittaU=addslashes($_POST['citta']);
  }

  if(isset($_POST['sesso'])){
    $sessoU=addslashes($_POST['sesso']);
  }

  if(isset($_POST['foto'])){
    $fotoU=addslashes($_POST['foto']);
  }

  if(isset($_POST['descrizione'])){
    $descrizioneU=addslashes($_POST['descrizione']);
  }

  if($passwordN==NULL){
    $passwordN=$passwordU;
  }
  if($nomeN==NULL){
    $nomeN=$nomeU;
  }
  if($cognomeN==NULL){
    $cognomeN=$cognomeU;
  }
  if($cittaN==NULL){
    $cittaN=$cittaU;
  }
  if($sessoN==NULL){
    $sessoN=$sessoU;
  }
  if($fotoN==NULL){
    $fotoN=$fotoU;
  }
  if($descrizioneN==NULL){
    $descrizioneN=$descrizioneU;
  }

  $user=$_SESSION["log"];
  $q10="UPDATE user SET password='".$passwordN."', nome='".$nomeN."', cognome='".$cognomeN."', citta='".$cittaN."', sesso='".$sessoN."', foto='".$fotoN."', descrizione='".$descrizioneN."' WHERE username = '".$user."'";
  if (mysqli_query($con, $q10)) {
    header("location: profilo_personale.php");
  }
?>UPDATE user SET username='sara', password='sara', nome='Fede', cognome='Sale', citta='genova', descrizione='sono io' WHERE username = 'sara'
