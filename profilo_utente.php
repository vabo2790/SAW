<?php

  require_once 'base.php';
  require_once 'connessione_db.php';
  if(isset($_POST['destinatario'])){
    $username = addslashes($_POST['destinatario']);
  }
    $q4=$con->prepare("SELECT * FROM user WHERE username = ?");
    $q4->bind_param('s', $username);
    $q4->execute();

    $q4->store_result();
    // Dico alla query dove mettere i risultati
    $q4->bind_result($mailU, $passwordU, $nomeU, $cognomeU, $usernameU, $cittaU, $sessoU, $fotoU, $descrizioneU);
    if($q4->fetch()){
      echo '<h3> username:'.$usernameU.'</h3>';
      echo '<h3> mail:'.$mailU.'</h3>';
      echo '<h3> nome:'.$nomeU.'</h3>';
      echo '<h3> cognome:'.$cognomeU.'</h3>';
      echo '<form class="imgSent" action="scrivi_messaggio.php" method="post">
              scrivi a <input type="submit" name="destinatario" id="destinatario" value="'.$usernameU.'">
            </form>';
    }
    else{
      echo '<h3>Il profilo cercato non è più esistente su questa piattaforma</h3>';
    }
    echo "</body></html>";

?>
