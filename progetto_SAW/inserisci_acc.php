<?php
  $con=mysqli_connect("localhost","S3942369","de2adc1d","S3942369");
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

  require_once 'variabili.php';

  if(isset($_POST['username'])){
    $usernameU=addslashes($_POST['username']);
  }

  if(isset($_POST['password'])){
    $passwordU=addslashes($_POST['password']);
  }

  $query5=$con->prepare("SELECT * FROM user WHERE username LIKE ? and password LIKE ?");
  $query5->bind_param('ss', $sk, $sk);
  $query5->execute();
  // Salvo il risultato della query
  $query5->store_result();
  // Dico alla query dove mettere i risultati
  $query5->bind_result($regioneU, $usernameU, $cittaS, $provinciaS, $longS, $latS, $indirizzoS, $statoS, $difficoltaS, $descrizioneS, $fotoS, $idS, $nomeS);
  // Pulisco le variabili da caratteri strani
  $usernameU = stripslashes($usernameU);
  $passwordU = stripslashes($passwordU);

  if($query5->num_rows()==0){
      echo "<h3>Potresti aver inserito male i dati, <a href="home.php">riprova</a> o <a href="home.php">registrati</h3></a>";
  }
