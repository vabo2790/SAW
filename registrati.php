<?php
    require_once 'base.php';
?>
<!DOCTYPE>

    <body>
      <form method="post" action="inserisci_reg.php" class="ins_dist2">

            <h1 class="ins_font2"><b>USERNAME*</b></h1>
            <input type="text" name="username" id="username"><br>

            <h5 class="ins_font2"><b>NOME*</b></h5>
            <input type="text" name="nome" id="nome"><br>

            <h5 class="ins_font2"><b>COGNOME*</b></h5>
            <input type="text" name="cognome" id="cognome"><br>

            <h5 class="ins_font2"><b>EMAIL*</b></h5>
            <input type="email" name="mail" id="mail"><br>

            <h5 class="ins_font2"><b>PASSWORD*</b></h5>
            <input type="password" name="password" id="password"><br>

            <h5 class="ins_font2"><b>IMMAGINE DI PROFILO</b></h5>
            <input type="file" name="foto" id="foto"><br>

            <input type="submit" value="INVIA"><br>

            <p>
              I campi contrassegnati con * sono campi obbligatori
            </p>

      </form>
    </body>
</html>
