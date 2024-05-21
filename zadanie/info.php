<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar">
        <h1><a href="index.php">Menu</a></h1>
        <ul>
            <li><a href="calculator.php">Kalkulator Spalania</a></li>
            <li><a href="info.php">Informacje nt. pojazdu</a></li>
            <li><a href="contact.php">Kontakt</a></li>
        </ul>
    </div>
    <main>
        <div class="top">
            Aplikacja webowa: inf 03
        </div>
        <div class="mid">
            <fieldset>
                <legend>Wybierz pojazd z listy</legend>
                <select name="" id="">
                    <option value="" disabled selected>Wybierz</option>
                </select>
            </fieldset>
            <div class="wynik">
                <h2>Samochody</h2>
                <div id="samochody">Po wybraniu opcji tu wyświetlą się informacje o samochodzie

                <?php   
                if (isset($_POST["samochod"])) {
                    $pojazd = $_POST["samochod"];
                    echo("$pojazd");
                }
            ?>
                </div>
            </div>
        </div>
        <footer>
            Imie i nazwisko: Jakub Kiecok
        </footer>
    </main>
</body>
</html>