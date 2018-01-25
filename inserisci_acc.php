<?php
  session_start();
  require_once 'connessione_db.php';


  if(isset($_POST['username'])){
    $usernameU=addslashes($_POST['username']);
  }

  if(isset($_POST['password'])){
    $passwordU=addslashes($_POST['password']);
  }

  $query5=$con->prepare("SELECT * FROM user WHERE username LIKE ? and password LIKE ?");
  $query5->bind_param('ss', $usernameU, $passwordU);
  $query5->execute();
  // Salvo il risultato della query
  $query5->store_result();
  // Dico alla query dove mettere i risultati
  $query5->bind_result($mailU, $passwordU, $nomeU, $cognomeU, $usernameU, $cittaU, $sessoU, $fotoU);
  // Pulisco le variabili da caratteri strani
  $usernameU = stripslashes($usernameU);

  if($query5->num_rows()==0){
      require_once 'base.php';
      unset($_SESSION["log"]);
      echo '<h3>Potresti aver inserito male i dati, <a href="accedi.php">riprova</a> o <a href="registrati.php">registrati</h3></a>';
  }
  else{
    $_SESSION["log"] = $usernameU;
    header("location: home.php");
  }
?>
