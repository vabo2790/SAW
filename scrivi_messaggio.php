<?php
require_once 'base.php';
require_once 'connessione_db.php';
if(isset($_POST['destinatario'])){
  $usernameU = addslashes($_POST['destinatario']);
}
echo '<form class="dist" action="invia_messaggio.php" method="post">
<input type="hidden" name="dest" id="dest" value="'.$usernameU.'">
<h1 class="ins_font2"><b>Scrivi un messaggio a '.$usernameU.':</b></h1>

<textarea name="testo" rows="7" cols="60" id="testo"> </textarea><br>

<input type="submit" value="INVIA"><br>
</form>';
echo "</body></html>";

?>
