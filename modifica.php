<?php

  require_once 'base.php';
  require_once 'connessione_db.php';

  $q9=$con->prepare("SELECT * FROM user WHERE username = ?");
  $q9->bind_param('s', $_SESSION["log"]);
  $q9->execute();

  $q9->store_result();
  // Dico alla query dove mettere i risultati
  $q9->bind_result($mailU, $passwordU, $nomeU, $cognomeU, $usernameU, $cittaU, $sessoU, $fotoU, $descrizioneU);
  $q9->fetch();


  echo '<form method="post" action="inserisci_mod.php" class="ins_dist2">

          <h1 class="ins_font2"><b>USERNAME</b></h1>
          <p>'.$usernameU.'</p><br>

          <h5 class="ins_font2"><b>EMAIL</b></h5>
          <p>'.$mailU.'</p><br>

          <h5 class="ins_font2"><b>NOME</b></h5>
          <input type="text" name="nomeN" id="nomeN" value="'.$nomeU. '"><br>

          <h5 class="ins_font2"><b>COGNOME</b></h5>
          <input type="text" name="cognomeN" id="cognomeN" value="'.$cognomeU.'"><br>

          <h5 class="ins_font2"><b>PASSWORD</b></h5>
          <input type="password" name="passwordN" id="passwordN"><br>

          <h5 class="ins_font2"><b>CITT&Agrave;</b></h5>
          <input type="text" name="cittaN" id="cittaN" value="'.$cittaU.'"><br>

          <h1 class="ins_font2"><b>SESSO</b></h1>
          <select name="sessoN" id="sessoN">
              <option value="'.$sessoU.'"> - </option>
              <option value="maschio">maschio</option>
              <option value="femmina">femmina</option>
          </select>

          <h1 class="ins_font2"><b>BREVE DESCRIZIONE DI SE</b></h1>
          <textarea name="descrizioneN" rows="7" cols="60" id="descrizioneN">' . $descrizioneU . '</textarea><br>

          <input type="submit" value="INVIA"><br>
    </form>';
  echo "</body></html>";

?>
