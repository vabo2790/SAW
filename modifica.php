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
          <input type="hidden" name="username" id="username" value="'.$usernameU.'"><p>'.$usernameU.'</p><br>

          <h5 class="ins_font2"><b>EMAIL</b></h5>
          <input type="hidden" name="mail" id="mail" value="'.$mailU.'"><p>'.$mailU.'</p><br>

          <h5 class="ins_font2"><b>NOME</b></h5>
          <input type="hidden" name="nome" id="nome" value="'.$nomeU.'"><p>'.$nomeU.'</p><input type="text" name="nomeN" id="nomeN"><br>

          <h5 class="ins_font2"><b>COGNOME</b></h5>
          <input type="hidden" name="cognome" id="cognome" value="'.$cognomeU.'"><p>'.$cognomeU.'</p><input type="text" name="cognomeN" id="cognomeN"><br>

          <h5 class="ins_font2"><b>PASSWORD</b></h5>
          <input type="hidden" name="password" id="password" value="'.$passwordU.'"><input type="password" name="passwordN" id="passwordN"><br>

          <h5 class="ins_font2"><b>CITT&Agrave;</b></h5>
          <input type="hidden" name="citta" id="citta" value="'.$cittaU.'"><p>'.$cittaU.'</p><input type="text" name="cittaN" id="cittaN"><br>

          <h1 class="ins_font2"><b>SESSO</b></h1>
          <input type="hidden" name="sesso" id="sesso" value="'.$sessoU.'"><p>'.$sessoU.'</p><select name="sessoN" id="sessoN">
              <option value="altro"></option>
              <option value="maschio">maschio</option>
              <option value="femmina">femmina</option>
          </select>

          <h1 class="ins_font2"><b>BREVE DESCRIZIONE DI SE</b></h1>
          <input type="hidden" name="descrizione" id="descrizione" value="'.$descrizioneU.'"><p>'.$descrizioneU.'</p><textarea name="descrizioneN" rows="7" cols="60" id="descrizioneN"> </textarea><br>

          <h5 class="ins_font2"><b>IMMAGINE DI PROFILO</b></h5>
          <input type="hidden" name="foto" id="foto" value="'.$fotoU.'">'.$fotoU.'<input type="file" name="fotoN" id="fotoN"><br>

          <input type="submit" value="INVIA"><br>

    </form>';
  echo "</body></html>";

?>
