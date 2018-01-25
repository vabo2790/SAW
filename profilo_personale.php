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
      echo '<h3> username:'.$usernameU.'</h3>';
      echo '<h3> mail:'.$mailU.'</h3>';
      echo '<h3> nome:'.$nomeU.'</h3>';
      echo '<h3> cognome:'.$cognomeU.'</h3>';
      echo '<form class="imgSent" action="modifica.php" method="post">
              <input type="submit" name="modifica" id="modifica" value="Modifica">
            </form>';
    }

    else{
      echo '<h3> Non sei connesso al tuo account, <a href="accedi.php">accedi</a> o <a href="registrati.php">registrati</h3></a>';
    }
    echo "</body></html>";

?>
