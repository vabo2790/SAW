<!DOCTYPE>
<html>
    <head>
        <!--prima riga ci deve essere-->
        <meta charset="utf-8">
        <!--chiamo il codice bootstrap-->
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
         <!--chiamo css-->
        <link rel="stylesheet" type="text/css" href="home.css"/>
         <!--chiamo javasacript-->
        <script src="home.js"></script>
        <title>Find My Mountain</title>
    </head>
    <body>
            <a href="home.php"><img src="img/segn_verticale.png" style="widht:50px;height:60px"/></a>
                    <div class="search">
                      <form method="post" action="ricerca.php">
                          <input type="text" class="searchTerm" placeholder="CERCA" name="cerca" id="cerca">
                      </form>
                    </div>
            <span id="profilepict">
                <img src="img/profile-icon.png" style="widht:40px;height:43px"/>
            </span>
            <span id="login">
                <a href="registrati.php"><img src="img/registrati.png" style="widht:80px;height:43px"/></a>
            </span>
        <div class="btn-group btn-group-justified" style="top:20px">
            <a href="home.php" class="btn btn-danger">HOME</a>
            <a href="inserzione.php" class="btn btn-danger">NUOVO SENTIERO</a>
            <a href="profilo.php" class="btn btn-danger">PROFILO</a>
            <a href="#" class="btn btn-danger">MESSAGGI</a>
        </div>
    </body>
</html>
