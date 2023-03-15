<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hurtowania papiernicza</title>
    <link rel="stylesheet" href="styl.css">

</head>
<body>

    <div id="baner">
        <h1>W naszej hurtowni kupisz najtaniej</h1>
    </div>

    <div id="lewy">
        <h3>Ceny wybranych artykułów w hurtowni</h3>
        <?php
            $db = mysqli_connect('localhost', 'root', '','sklep');
            $kw = "SELECT nazwa, cena FROM towary WHERE id<=4;";
            $w = mysqli_query($db, $kw);

            echo "<table>";
            while($p = mysqli_fetch_row($w)){
                echo"<tr> <td>$p[0]</td> <td>$p[1] zł</td></tr>";
            }
            echo "</table>";


        ?>
    </div>

    <div id="srodkowy">
        <h3>Ile będą kosztować Twoje zakupy?</h3> <br>
        <form action="" method="post">
            Wybierz artykuł
            <select name="sel">
                <option name="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                <option name="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                <option name="Cyrkiel">Cyrkiel</option>
                <option name="Linijka 30 cm">Linijka 30 cm</option>
                <option name="Ekierka">Ekierka</option>
                <option name="Linijka 50 cm">Linijka 50 cm</option>
            </select> <br>
            <label for="inp">liczba sztuk</label>
            <input id='in'type="number" value="1" name="inp"> <br>
            <input type="submit" value="OBLICZ">
        </form>
        <?php
        if(isset($_POST['sel']) && isset($_POST['inp'])) {
            $db = mysqli_connect('localhost', 'root', '', 'sklep');
            $sel = $_POST['sel'];
            $ilosc = $_POST['inp'];
            $kw = "SELECT cena FROM towary WHERE nazwa='$sel';";
            $w = mysqli_query($db, $kw);

            while ($p = mysqli_fetch_row($w)) {
                $p[0] = $p[0]*$ilosc;
                echo $p[0].round(1); echo " zł";
            }
        }
        ?>

    </div>

    <div id="prawy">
        <img src="./materialy2/zakupy2.png" alt="hurtownia">
        <h3>Kontakt</h3>
        <p>telefon: <br>
            111222333 <br>
            e-mail: <br>
            hurt@wp.pl</p>
    </div>

    <footer><h4>Witrtnę wykonał Trojan Bogacki 3pir</h4></footer>

</body>
</html>