<<<<<<< HEAD
<?php
=======

<?php
  require_once 'base.php';

>>>>>>> 5a3c02ca4110cf0507576af06258847d6ed95dec
  $con=mysqli_connect("localhost","S3942369","de2adc1d","S3942369");
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

  require_once 'variabili.php';

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

  $query2 = "INSERT INTO user (mail, password, nome, cognome, username, citta, sesso, foto) VALUES ('$mailU', '$passwordU', '$nomeU', '$cognomeU', '$usernameU', '$cittaU', '$sessoU', '$fotoU')";

  //Inseriti i dati nel db stampo un messaggio di conferma che mi dica che il profilo è stato creato
  //magari faccio il controllo con js
  if (mysqli_query($con, $query2)) {
    echo "Profilo creato con successo";
  } else {
    echo "Controlla di aver inserito tutti i dati richiesti nei campi obbligatori. Altrimenti inserisci username o/e mail differenti, potrebberò essere già state usate da quelcun'altro. ";
  }



?>
