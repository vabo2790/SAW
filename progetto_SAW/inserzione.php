<?php
    require_once 'base.php';
?>
<!DOCTYPE>
<html>
    <body>
        <form class="ins_dist2" action="inserisci_sent.php" method="post">

            <h1 class="ins_font1"><b>NOME DEL SENTIERO*</b></h1>
            <input type="text" name="nome" id="nome" >

            <h1 class="ins_font2"><b>CITT&Agrave;*</b></h1>
            <input type="text" name="citta" id="citta">

            <h1 class="ins_font2"><b>PROVINCIA*</b></h1>
            <input type="text" name="provincia" id="provincia">

            <h1 class="ins_font2"><b>REGIONE*</b></h1>
            <input type="text" name="regione" id="regione">

            <h1 class="ins_font2"><b>STATO SENTIERO*</b></h1>
            <select name="stato_sentiero" id="stato_sentiero">
                <option value="AGIBILE">AGIBILE</option>
                <option value="INAGIBILE">INAGIBILE</option>
            </select>

            <h1 class="ins_font2"><b>DIFFICOLT&Agrave; SENTIERO*</b></h1>
            <select name="difficolta" id="difficolta">
                <option value="FACILE">FACILE</option>
                <option value="MEDIA">MEDIA</option>
                <option value="DIFFICILE">DIFFICILE</option>
            </select>

            <h1 class="ins_font2"><b>IMMAGINE DEL SENTIERO</b></h1>
            <input type="file" name="foto" id="foto"><br>

            <h1 class="ins_font2"><b>BREVE DESCRIZIONE*</b></h1>
            <textarea name="descrizione" rows="7" cols="60" id="descrizione"> </textarea><br>

            <input type="submit" value="INVIA"><br>
            <p>
              I campi contrassegnati con * sono campi obbligatori
            </p>
          </form>
        </body>
</html>
