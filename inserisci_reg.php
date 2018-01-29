
<?php
  session_start();
  require_once 'connessione_db.php';

  $usernameU= $mailU= $nomeU= $cognomeU= $passwordU= $cittaU= $sessoU= $fotoU= '';
  $flag=0;

  //prendo i dati dai campi e li salvo
  if(isset($_POST['username']))
    $usernameU=addslashes($_POST['username']);
  if(isset($_POST['mail']))
    $mailU=addslashes($_POST['mail']);
  if(isset($_POST['password']))
    $passwordU=addslashes($_POST['password']);
  if(isset($_POST['nome']))
    $nomeU=addslashes($_POST['nome']);
  if(isset($_POST['cognome']))
    $cognomeU=addslashes($_POST['cognome']);
  if(isset($_POST['citta']))
    $cittaU=addslashes($_POST['citta']);
  if(isset($_POST['sesso']))
    $sessoU=addslashes($_POST['sesso']);
  if(isset($_POST['foto']))
    $fotoU=addslashes($_POST['foto']);

  

  //definisco le query per il controllo sul database e le eseguo

  //controllo username
  $queryUsername=$con->prepare("SELECT username FROM user WHERE username = '$usernameU'");
  $queryUsername->execute();
  $queryUsername->store_result();
  $queryUsername->bind_result($username1U);

  //controllo email
  $queryMail=$con->prepare("SELECT mail FROM user WHERE mail = '$mailU'");
  $queryMail->execute();
  $queryMail->store_result();
  $queryMail->bind_result($mail1U);

  //controllo il risultato delle query
  $result1 = $queryUsername->fetch();
  $result2 = $queryMail->fetch();

  //controllo che l'username non sia già stato usato
  if($result1!=NULL){ 
      $flag = 1;
  }

  //controllo che la mail sia valida
  if (!filter_var($mailU, FILTER_VALIDATE_EMAIL)){
      $flag = 2;
  }

  //controllo che la mail inserita non sia già stata utilizzata
  if ($result2!=NULL){ 
      $flag = 3;
  }

  //controllo la lunghezza della password     
  if (strlen($passwordU)<8 || strlen($passwordU)>16){ 
      $flag = 4;
  }
   
  //sono permesse solo lettere nel nome
  if (!preg_match("/^[a-zA-Zìèéòàùì ]*$/",$nomeU)){  
      $flag = 5;
  }
      
  //sono permesse solo lettere e l'apostrofo nel nome
  if (!preg_match("/^[a-zA-Zìèéòàùì' ]*$/",$cognomeU)){  
      $flag = 6;
  }
      

  switch($flag){
            case 1:
                echo '<script>alert("Username già utilizzato");</script>';
                header("location: registrati.php");
                break;
            case 2:
                echo '<script>alert("Email non valida")</script>';
                header("location: registrati.php");
                break;
            case 3:
                echo '<script>alert("Email già registrata")</script>';
                header("location: registrati.php");
                break;
            case 4:
                echo '<script>alert("La password deve essere compresa tra 8 e 16 caratteri")</script>';
                header("location: registrati.php");
                break;
            case 5:
                echo '<script>alert("Il nome può contenere solo lettere")</script>';
                header("location: registrati.php");
                break;
            case 6:
                echo '<script>alert("Il cognome può contenere solo lettere e apostrofo")</script>';
                header("location: registrati.php");
                break;
            default:
                $query2 = "INSERT INTO user (mail, password, nome, cognome, username, citta, sesso, foto) VALUES ('$mailU', '$passwordU', '$nomeU', '$cognomeU', '$usernameU', '$cittaU', '$sessoU', '$fotoU')";
      
                if (mysqli_query($con, $query2)) {
                    $_SESSION["log"] = $usernameU;
                    header("location: home.php");
                }
            }
?>
