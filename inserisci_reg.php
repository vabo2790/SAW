
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

  $query2 = "INSERT INTO user (mail, password, nome, cognome, username, citta, sesso, foto, descrizione) VALUES ('$mailU', '$passwordU', '$nomeU', '$cognomeU', '$usernameU', '$cittaU', '$sessoU', '$fotoU', '$descrizioneU')";

  if (mysqli_query($con, $query2)) {
    $_SESSION["log"] = $usernameU;
    header("location: home.php");
  } else {
    header("location: registrati.php");
    echo "Controlla di aver inserito tutti i dati richiesti nei campi obbligatori. Altrimenti inserisci username o/e mail differenti, potrebberò essere già state usate da quelcun'altro. ";
  }



?>
