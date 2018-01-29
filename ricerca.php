<?php
    require_once 'base.php';
?>
<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="home.css"/>
    </head>
    <body>
<?php
  require_once 'connessione_db.php';

  // Controllo che la chiave sia stata settata
  if(isset($_POST['cerca'])){
    $search=addslashes($_POST['cerca']);
  }
  // Modifico la chiave di ricerca per cercare tutte le inserzioni che contengono la chiave cercata nel titolo
  $sk="%".$search."%";


  $query1=$con->prepare("SELECT * FROM sentieri WHERE nome LIKE ? or citta LIKE ? or regione LIKE ? or provincia LIKE ? or difficolta LIKE ? or stato_sentiero LIKE ?");
  $query1->bind_param('ssssss', $sk, $sk, $sk, $sk, $sk, $sk);
  $query1->execute();
  // Salvo il risultato della query
  $query1->store_result();
  // Dico alla query dove mettere i risultati
  $query1->bind_result($regioneS, $usernameU, $cittaS, $provinciaS, $longS, $latS, $indirizzoS, $statoS, $difficoltaS, $descrizioneS, $fotoS, $idS, $nomeS);
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
    if($query1->num_rows()==1){
        echo "<h3>La ricerca ha prodotto ".$query1->num_rows()." risultato per la parola: " .$search. "</h3>";
    } else{
      echo "<h3>La ricerca ha prodotto ".$query1->num_rows()." risultati per la parola: " .$search. "</h3>";
    }
  }



  //Finchè ci sono dati nel risultato della query continuo a stamparli (in pratica faccio un ciclo sulle righe della tabella risultante dalla query)

  while ($query1->fetch()){
      echo '<div class="imgSent"><img src="Sentiero/'.$fotoS.'" style="width:200px;height:200px"/>';
      echo '<p>'.$nomeS.' di '.$usernameU.'<br>
      '.$cittaS.'/'.$provinciaS.'/'.$regioneS.'<br>
      '.$indirizzoS.'<br>
      '.$statoS.'-'.$difficoltaS.'</p>
      <p style="color:red"><b>Esperienza dell utente</b><br></p>
      <p>'.$descrizioneS.'</p>
      <form action="sentiero.php" method="post">
        <input type="hidden" name="mostra" id="mostra" value="'.$idS.'">
        <input type="submit" value="Mostra sentiero">
      </form></div>';
//se trovi il modo di cambiare il valore del pulsante, cambialo, se no lasciamo l'id anche se è brutto
  }
echo "</body></html>";
?>
