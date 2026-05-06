<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kvíz</title>
    <style>
        body {
            font-family: Arial;
            padding: 20px;
        }
        .vysledek {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Jednoduchý kvíz</h1>

<?php
$body = 0;

if (isset($_GET["otazka1"])) {

    if ($_GET["otazka1"] == "1500") {
        $body++;
    }

    if ($_GET["otazka2"] == "Gouda") {
        $body++;
    }

    if ($_GET["otazka3"] == "Eidam") {
        $body++;
    }

    echo "<div class='vysledek'>";
    echo "Máš " . $body . " správné odpovědi ze 3.<br>";

    if ($body == 3) {
        echo "<img src='https://i.ytimg.com/vi/7aWL2iEb6y4/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCjAXpQrRdSPRG75PAvEqVn77J21g'>";
    } elseif ($body == 2) {
        echo "Přemýšlej dál <br>";
        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/a/a4/Le_Penseur_by_Rodin_%28Kunsthalle_Bielefeld%29_2014-04-10.JPG'>";
    } else {
        echo "Už to asni nezkoušej <br>";
        echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtn0XEpOimQq4UULCR7QriHJoLNwsXTUHnWg&s'>";
    }

    echo "</div>";
}
?>

<form>
    <label>1. Kolik děr má průměrné kolo sýru?</label><br>
    <input type="text" name="otazka1"><br><br>

    <label>2. Jaký sýr mají myše nejradši?</label><br>
    <input type="text" name="otazka2"><br><br>

    <label>3. Jaký sýr je nejprodávanější u nás?</label><br>
    <input type="text" name="otazka3"><br><br>

    <button>Odeslat</button>
</form>

</body>
</html>
