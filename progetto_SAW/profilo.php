<?php
    require_once 'base.php';
?>
<?php

  $con=mysqli_connect("localhost","S3942369","de2adc1d","S3942369");
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    require_once 'variabili.php';

    $query4=$con->prepare("SELECT * FROM user");
    $query4->execute();

    $query4->store_result();
    // Dico alla query dove mettere i risultati
    $query4->bind_result($mailU, $passwordU, $nomeU, $cognomeU, $usernameU, $cittaU, $sessoU, $fotoU);
    // Pulisco le variabili da caratteri strani
    $mailU = stripslashes($mailU);
    $passwordU = stripslashes($passwordU);
    $nomeU = stripslashes($nomeU);
    $cognomeU = stripslashes($cognomeU);
    $usernameU = stripslashes($usernameU);
    $cittaU = stripslashes($cittaU);
    $sessoU = stripslashes($sessoU);
    $fotoU = stripslashes($fotoU);
    echo "Nome: $nomeU, Cognome: $cognomeU"
?>

<!DOCTYPE html>
<body>
  <h2>PROFILO</h2>
</body>
