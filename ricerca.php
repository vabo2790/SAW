<?php
    require_once 'base.php';
?>

<?php
  $con=mysqli_connect("localhost","S3942369","de2adc1d","S3942369");
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

  // Controllo che la chiave sia stata settata
  if(isset($_POST['cerca'])){
    $search=addslashes($_POST['cerca']);
  }
  // Modifico la chiave di ricerca per cercare tutte le inserzioni che contengono la chiave cercata nel titolo
  $sk="%".$search."%";

  require_once 'variabili.php';

  $query1=$con->prepare("SELECT * FROM sentieri WHERE nome LIKE ? or citta LIKE ? or regione LIKE ? or provincia LIKE ? or difficolta LIKE ? or stato_sentiero LIKE ?");
  $query1->bind_param('ssssss', $sk, $sk, $sk, $sk, $sk, $sk);
  $query1->execute();
  // Salvo il risultato della query
  $query1->store_result();
  // Dico alla query dove mettere i risultati
  $query1->bind_result($regioneU, $usernameU, $cittaS, $provinciaS, $longS, $latS, $indirizzoS, $statoS, $difficoltaS, $descrizioneS, $fotoS, $idS, $nomeS);
  // Pulisco le variabili da caratteri strani
  $cittaS = stripslashes($cittaS);
  $regioneS = stripslashes($regioneS);
  $provinciaS = stripslashes($provinciaS);
  $indirizzoS = stripslashes($indirizzoS);
  $descrizioneS = stripslashes($descrizioneS);
  $nomeS = stripslashes($nomeS);

  // Se la query è vuota stampo un messaggio all'utente
  if($query1->num_rows()==0){
      echo "<h3>Nessun sentiero corrisponde ai criteri di ricerca</h3>";
  }

  else{
      echo "<h3>La ricerca ha prodotto ".$query1->num_rows()." risultati</h3>";
  }


  // Finchè ci sono dati nel risultato della query continuo a stamparli (in pratica faccio un ciclo sulle righe della tabella risultante dalla query)
  while ($query1->fetch()){

  //  <img src=".$fotoS" style="width:width;height:height;">

  }


?>
