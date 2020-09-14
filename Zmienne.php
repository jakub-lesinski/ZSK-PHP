<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmienne</title>
</head>
<body>
    <?php
    $name = 'Janusz';
    $username = 'Nowak';
    echo 'Imię: $name</br>';
    //konkatenacja
    echo "Imię: $name".", Nazwisko: $username</br>";
    echo 'tekst';

    //typy danych
    //bolean
    $prawda =true;
    $fałsz = false;

    //zapisuj nazwy zmiennych w języku angielskim!!
    echo $prawda;
    echo $fałsz; //brak wyśweitlania 0

    //integer
    $bin = 0b1010; //10
    $oct = 011; //9
    $dec = 11; //11
    $hex = 0xA; //10

    echo "</br>$bin<hr>";
    echo "</br>$oct<hr>";
    echo "</br>$dec<hr>";
    echo "</br>$hex<hr>";

    //składnia herdoc
    $name = 'Anna';

    $text = <<< LABEL
    Heredoc</br>
    Imię: $name</br>
    <hr>
    LABEL;

    echo $text;

    echo <<< L
    Heredoc 2</br>
    Imię: $name<hr>
    L;

    $city = 'Poznań';

    echo "Nazwa zmiennej: \$city, wartość: $city";

    ?>
</body>
</html>