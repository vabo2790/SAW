
<?php
  session_start();
  require_once 'connessione_db.php';

  if(isset($_POST['username'])){
    $usernameU=addslashes($_POST['username']);
  }

  if(isset($_POST['mail'])){
    $mailU=addslashes($_POST['mail']);
  }

  if(isset($_POST['password'])){
    $passwordU=md5(addslashes($_POST['password']));
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

  if(isset($_POST['descrizione'])){
    $descrizioneU=addslashes($_POST['descrizione']);
  }
  // Definisco la cartella di destinazione dell'immagine del profilo
  $target_dir = "Profilo/";
  $fotoU = NULL;
  $target_file = NULL;
  if($_FILES["fotoProfilo"]["name"] != ""){
    $fotoU = basename($_FILES["fotoProfilo"]["name"]);
    $target_file = $target_dir.$fotoU;
  }
  else{
    $fotoU= "foto_user.png";
  }

  $query2 = "INSERT INTO user (mail, password, nome, cognome, username, citta, sesso, foto, descrizione) VALUES ('$mailU', '$passwordU', '$nomeU', '$cognomeU', '$usernameU', '$cittaU', '$sessoU', '$fotoU', '$descrizioneU')";

  if (mysqli_query($con, $query2)) {
  if( $target_file!=NULL ){
    if (move_uploaded_file($_FILES["fotoProfilo"]["tmp_name"], $target_file)) {
      echo "The file ".basename( $_FILES["fotoProfilo"]["name"])." has been uploaded in ".$target_file;
    }
  }
    $_SESSION["log"] = $usernameU;
    header("location: home.php");
  } else {
    header("location: registrati.php");
    echo "Controlla di aver inserito tutti i dati richiesti nei campi obbligatori. Altrimenti inserisci username o/e mail differenti, potrebberò essere già state usate da quelcun'altro. ";
  }



?>
