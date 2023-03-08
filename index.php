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

        ?>
    </div>

    <div id="srodkowy">
        <h3>Ile będą kosztować Twoje zakupy?</h3> <br>
        <form action="" method="post">
            Wybierz artykuł
            <select>
                <option>Zeszyt 60 kartek</option>
                <option>Zeszyt 32 kartki</option>
                <option>Cyrkiel</option>
                <option>Linijka 30 cm</option>
                <option>Ekierka</option>
                <option>Linijka 50cm</option>
            </select> <br>
            <label for="inp">liczba sztuk</label>
            <input id='in'type="number" value="1" name="inp"> <br>
            <input type="submit" value="OBLICZ">
        </form>
        <?php

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