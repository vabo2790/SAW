<?php

  require_once 'connessione_db.php';
  session_start();
  $usernameU=$_SESSION["log"];

  if(isset($_POST['provincia'])){
    $provinciaS=addslashes($_POST['provincia']);
  }

  if(isset($_POST['regione'])){
    $regioneS=addslashes($_POST['regione']);
  }

  if(isset($_POST['nome'])){
    $nomeS=addslashes($_POST['nome']);
  }

  if(isset($_POST['stato_sentiero'])){
    $statoS=addslashes($_POST['stato_sentiero']);
  }

  if(isset($_POST['citta'])){
    $cittaS=addslashes($_POST['citta']);
  }

  if(isset($_POST['difficolta'])){
    $difficoltaS=addslashes($_POST['difficolta']);
  }

  if(isset($_POST['foto'])){
    $fotoS=addslashes($_POST['foto']);
  }

  if(isset($_POST['descrizione'])){
    $descrizioneS=addslashes($_POST['descrizione']);
  }

  if(isset($_POST['long'])){
    $longS=addslashes($_POST['long']);
  }

  if(isset($_POST['lat'])){
    $latS=addslashes($_POST['lat']);
  }

  if(isset($_POST['indirizzo'])){
    $indirizzoS=addslashes($_POST['indirizzo']);
  }
  $target_dir = "Sentiero/";
  $fotoS = NULL;
  $target_file = NULL;
  if($_FILES["foto"]["name"] != ""){
    $fotoS = basename($_FILES["foto"]["name"]);
    $target_file = $target_dir.$fotoS;
  }
  else{
    $fotoS= "foto_sentiero.jpg";
  }

  $query3 = "INSERT INTO sentieri (regione, username, citta, provincia, longitudine, latitudine, indirizzo, stato_sentiero, difficolta, descrizione, foto, id, nome) VALUES ('$regioneS', '$usernameU', '$cittaS', '$provinciaS', '$longS', '$latS', '$indirizzoS', '$statoS', '$difficoltaS', '$descrizioneS', '$fotoS', '$idS', '$nomeS')";

  //Inseriti i dati nel db stampo un messaggio di conferma che mi dica che il sentiero è stato inserito
  //magari faccio il controllo con js
  if (mysqli_query($con, $query3)) {
    if( $target_file!=NULL ){
      if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        echo "The file ".basename( $_FILES["foto"]["name"])." has been uploaded in ".$target_file;
      }
    }
    require_once "base.php";
    echo '<h1 class="imgSent">Nuovo sentiero inserito</h1>';
  } else {
    require_once "base.php";
    echo '<h1 class="imgSent">Controlla di aver inserito tutti i dati richiesti nei campi obbligatori</h1>';
  }







 ?>
