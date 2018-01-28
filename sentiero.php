<?php

if(isset($_POST['mostra'])){
  $id = addslashes($_POST['mostra']);
}

require_once 'base.php';
require_once 'connessione_db.php';
$query6=$con->prepare("SELECT * FROM sentieri WHERE id = ?");
$query6->bind_param('i', $id);
$query6->execute();
// Salvo il risultato della query
$query6->store_result();
// Dico alla query dove mettere i risultati
$query6->bind_result($regioneU, $usernameU, $cittaS, $provinciaS, $longS, $latS, $indirizzoS, $statoS, $difficoltaS, $descrizioneS, $fotoS, $idS, $nomeS);
$query6->fetch();
echo '<h3 class="imgSent">'.$nomeS.'</h3><br>';
    if($fotoS==NULL)
    {
        echo '<span class="imgSent"><img src="img2/foto_sentiero.jpg" style="width:200px;height:200px"/>';
    }
    else
    {
        echo '<span class="imgSent"><img src="'.$fotoS.'" style="width:200px;height:200px"/>';
    }
    echo'<p class="mess">'.$cittaS.'/'.$provinciaS.'/'.$regioneS.'<br>
    '.$indirizzoS.'<br>
    '.$statoS.'-'.$difficoltaS.'</p>
    <p class="mess" style="color:red"><b>Esperienza dell utente</b><br></p>
    <p class="mess">'.$descrizioneS.'</p></span>';
    if($indirizzoS==NULL){
    echo  '<iframe
        class="mess"
        width="600"
        height="450"
        frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAp8R7Sivg2dhiqW33wQE_0RnNKuiA99hY
          &q='.$latS.' , '.$longS.'" allowfullscreen>
      </iframe>';
    }
    else{
    echo  '<iframe
        class="mess"
        width="600"
        height="450"
        frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAp8R7Sivg2dhiqW33wQE_0RnNKuiA99hY
          &q='.$indirizzoS.'" allowfullscreen>
      </iframe>';
    }
    if(isset($_SESSION["log"])){
      echo '<form class="imgSent" action="scrivi_messaggio.php" method="post">
              scrivi a <input type="submit" name="destinatario" id="destinatario" value="'.$usernameU.'">
            </form>';
      echo '<form class="imgSent" action="profilo_utente.php" method="post">
              visualizza il profilo di <input type="submit" name="destinatario" id="destinatario" value="'.$usernameU.'">
            </form>';
    }

echo "</body></html>";
?>
