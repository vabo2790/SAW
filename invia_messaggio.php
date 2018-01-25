<?php
  require_once 'connessione_db.php';
  session_start();

  if(isset($_POST['dest'])){
    $usernameU = addslashes($_POST['dest']);
  }
  if(isset($_POST['testo'])){
    $testoM=addslashes($_POST['testo']);
  }
$dataM = date("Y-m-d H:i:s");
$user_sending = $_SESSION["log"];
$query7 = "INSERT INTO messaggi (testo, user_reciver, user_sending, data)
VALUES ('$testoM', '$usernameU', '$user_sending', '$dataM')";

if (mysqli_query($con, $query7)) {
    header("location: messaggi.php");
}
?>
