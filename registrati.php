<?php
    require_once 'base.php';
?>
<!DOCTYPE html>
<html>
    <body>
      <form method="post" action="inserisci_reg.php" class="ins_dist2">

            <h1 class="ins_font2"><b>USERNAME*</b></h1>
            <input type="text" name="username" id="username" required><br>

            <h5 class="ins_font2"><b>NOME*</b></h5>
            <input type="text" name="nome" id="nome" required><br>

            <h5 class="ins_font2"><b>COGNOME*</b></h5>
            <input type="text" name="cognome" id="cognome" required><br>

            <h5 class="ins_font2"><b>EMAIL*</b></h5>
            <input type="email" name="mail" id="mail" required><br>

            <h5 class="ins_font2"><b>PASSWORD*</b></h5>
            <input type="password" name="password" id="password" required><br>

            <h5 class="ins_font2"><b>CITT&Agrave;</b></h5>
            <input type="citta" name="citta" id="citta"><br>

            <h1 class="ins_font2"><b>SESSO</b></h1>
            <select name="sesso" id="sesso">
                <option value="altro"></option>
                <option value="maschio">maschio</option>
                <option value="femmina">femmina</option>
            </select>

            <h5 class="ins_font2"><b>IMMAGINE DI PROFILO</b></h5>
            <input type="file" name="foto" id="foto"><br>

            <input type="submit" value="INVIA"><br>

            <p>
              I campi contrassegnati con * sono campi obbligatori
            </p>

      </form>
    </body>
</html>
