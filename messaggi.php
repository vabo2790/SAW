<?php
require_once 'base.php';
require_once 'connessione_db.php';
//prendo tutte le query con il profilo loggato, sia con i messaggi inviati sia quelli ricevuti
// uro = perché like si susa solo con %-% 
$q8=$con->prepare("SELECT * FROM messaggi WHERE user_sending = ? or user_reciver = ?");
$q8->bind_param('ss', $_SESSION["log"], $_SESSION["log"]);
$q8->execute();
$q8->store_result();
// Dico alla query dove mettere i risultati
$q8->bind_result($testoM, $userR, $userS, $dataM);
if(isset($_SESSION["log"])){
  if($q8->num_rows()==0){
      echo "<h3>Non sono presenti messaggi collegati a questo profilo</h3>";
  }
  while ($q8->fetch()){
    echo '<br><br><span style="color:red" class="mess">'.$userS.' </span><span>ha inviato a <span><span style="color:red">'.$userR.'<br></span>
    <div class="mess">'.$testoM.'<br></div>
    <div class="mess">'.$dataM.'<br></div>';
//rispondo al messaggio solo se il destinatario non è il profilo loggato
    if($userS != $_SESSION["log"]){
      echo '<form class="mess" action="scrivi_messaggio.php" method="post">
              rispondi a <input type="submit" name="destinatario" id="destinatario" value="'.$userS.'">
            </form>';
    }

  }
}
else{
  echo '<h3> Non sei connesso al tuo account, <a href="accedi.php">accedi</a> o <a href="registrati.php">registrati</h3></a>';
}

echo "</body></html>";

 ?>
