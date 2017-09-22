<?php
    require_once 'base.php';
?>
<!DOCTYPE>
<html>
    <body>
        <form class="ins_dist1">
            <h1 class="ins_font1"><b>NOME DEL SENTIERO</b></h1>
            <input type="text" name="nome" value="boh">
        </form>
        <form class="ins_dist2">
            <h2 class="ins_font2"><b>CITT&Agrave;/PROVINCIA/REGIONE</b></h2>
            <input type="text" name="città" value="Arenzano">
            <input type="text" name="provincia" value="Genova">
            <input type="text" name="regione" value="Liguria" style="color: #9DBFAF">
        </form>
        <form class="ins_dist2">
            <h3 class="ins_font2"><b>STATO SENTIERO</b></h3>
            <select name="stato">
                <option value="AGIBILE">AGIBILE</option>
                <option value="INAGIBILE">INAGIBILE</option>
            </select>
        </form>
            <form class="ins_dist2">
                <h4 class="ins_font2"><b>DIFFICOLT&Agrave; SENTIERO</b></h4>
                <select name="difficoltà">
                    <option value="FACILE">FACILE</option>
                    <option value="MEDIA">MEDIA</option>
                    <option value="DIFFICILE">DIFFICILE</option>
                </select>
            </form>
        <form class="ins_dist2">
            <h3 class="ins_font2"><b>BREVE DESCRIZIONE</b></h3>
            <textarea name="message" rows="7" cols="60">&Egrave; proprio un bel sentiero</textarea>
        </form>
        <form class="posta">
            <input type="submit" value="INVIA">
        </form>
    </body>
</html>