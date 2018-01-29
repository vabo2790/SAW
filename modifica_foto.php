<?php

  require_once 'base.php';
  require_once 'connessione_db.php';

  $q9=$con->prepare("SELECT foto FROM user WHERE username = ?");
  $q9->bind_param('s', $_SESSION["log"]);
  $q9->execute();

  $q9->store_result();
  // Dico alla query dove mettere i risultati
  $q9->bind_result($fotoU);
  $q9->fetch();

  echo '<form method="post" action="inserisci_mod_foto.php" class="ins_dist2">
          <img id="fotoP" src="Profilo/'.$fotoU.'"><br>
          <input name="fotoN" id="fotoN" type="file" value="'.$fotoU.'">

          <input type="submit" value="INVIA"><br>
        </form>';
  echo "</body></html>";

?>
