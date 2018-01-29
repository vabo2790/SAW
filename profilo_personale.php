<?php

  require_once 'base.php';
  require_once 'connessione_db.php';

    $q4=$con->prepare("SELECT * FROM user WHERE username = ?");
    $q4->bind_param('s', $_SESSION["log"]);
    $q4->execute();

    $q4->store_result();
    // Dico alla query dove mettere i risultati
    $q4->bind_result($mailU, $passwordU, $nomeU, $cognomeU, $usernameU, $cittaU, $sessoU, $fotoU, $descrizioneU);
    $q4->fetch();

    if(isset($_SESSION["log"])){
      echo '<h3 class="imgSent">'.$usernameU.'</h3>';

      echo '<div class="imgSent"><img src="Profilo/'.$fotoU.'" style="width:200px;height:200px"/><br>';
      echo '<form class="imgSent" action="modifica_foto.php" method="post">
      <input type="submit" name="modifica" id="modifica" value="Modifica foto"><br>
      </form>';
      echo '  <p class="mess"> Il tuo nome: '.$nomeU.'</p>
        <p class="mess"> Il tuo cognome: '.$cognomeU.'</p>
        <p class="mess"> La tua mail: '.$mailU.'</p>';
      if($cittaU==NULL) {
        echo '<p class="mess">Non hai inserito dati sulla tua città</p>';
      }
      else{
        echo '<p class="mess"> La tua città: '.$cittaU.'</p>';
      }if($sessoU=="altro") {
        echo '<p class="mess">Non hai inserito dati sul tuo sesso</p>';
      }
      else{
        echo '<p class="mess"> Il tuo sesso: '.$sessoU.'</p>';
      }
      if($descrizioneU==NULL) {
        echo '<p class="mess">Non hai inserito una descrizione</p>';
      }
      else{
        echo '<p class="mess"> Come ti descrivi: '.$descrizioneU.'</p>';
      }
        echo '<form class="imgSent" action="modifica.php" method="post">
                <input type="submit" name="modifica" id="modifica" value="Modifica">
        </form>';
    }

    else{
      echo '<h3> Non sei connesso al tuo account, <a href="accedi.php">accedi</a> o <a href="registrati.php">registrati</h3></a>';
    }
    echo "</body></html>";

?>
