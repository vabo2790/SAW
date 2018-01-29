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
      echo '<h3 class="imgSent">'.$usernameU.'</h3>';

      echo '<div class="imgSent"><img src="Profilo/'.$fotoU.'" style="width:200px;height:200px"/><br>
        <p class="mess"> Nome utente: '.$nomeU.'</p>
        <p class="mess"> Cognome utente: '.$cognomeU.'</p>
        <p class="mess"> Mail utente: '.$mailU.'</p>';
      if($cittaU==NULL) {
        echo '<p class="mess">Non ha inserito dati sulla città</p>';
      }
      else{
        echo '<p class="mess"> Città utente: '.$cittaU.'</p>';
      }if($sessoU=="altro") {
        echo '<p class="mess">Non ha inserito dati sul sesso</p>';
      }
      else{
        echo '<p class="mess"> Sesso utente: '.$sessoU.'</p>';
      }
      if($descrizioneU==NULL) {
        echo '<p class="mess">Non ha inserito una descrizione</p>';
      }
      else{
        echo '<p class="mess"> Descrizione utente: '.$descrizioneU.'</p>';
      }
      echo '<form class="imgSent" action="scrivi_messaggio.php" method="post">
              scrivi a <input type="submit" name="destinatario" id="destinatario" value="'.$usernameU.'">
            </form>';
    }
    else{
      echo '<h3>Il profilo cercato non è più esistente su questa piattaforma</h3>';
    }
    echo "</body></html>";

?>
