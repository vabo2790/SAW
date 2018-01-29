<?php
    require_once 'base.php';
    require_once 'connessione_db.php';

    $query=$con->prepare("SELECT * FROM sentieri ");
    $query->execute();
    // Salvo il risultato della query
    $query->store_result();
    // Dico alla query dove mettere i risultati
    $query->bind_result($regioneU, $usernameU, $cittaS, $provinciaS, $longS, $latS, $indirizzoS, $statoS, $difficoltaS, $descrizioneS, $fotoS, $idS, $nomeS);

    while ($query->fetch()){
      echo '<div class="imgSent"><img src="'.$fotoS.'" style="width:200px;height:200px"/>';
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

