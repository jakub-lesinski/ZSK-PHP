<?php

// wersja PHP 7.4.9
    echo PHP_VERSION, '</br>';
    //echo phpinfo();
    // interpolacja

    echo 'a','b'; // wyświetl a wyśiuetl b
    echo 'a'.'b'; // dodaj a dodaj b => wyświetl ab


    $pow = 2 ** 10;
    echo "$pow</hr>";

    //operatory bitowe 
    //and &, or |, xor ^, not ~, <<, >>
    $x = 0b1011; //11
    echo "$x</br>";

    $x = $x << 3; //1011000
    echo "$x</br>";

    $x = $x >> 2; //10110(2) => 22(10)
    echo "$x<br>";

    //porównanie

    $x = 1;
    $y = 1;

    echo $x <=> $y;


    if ($x <=> $y) {
        echo '</br>$x jest równa $y</br>';
    } else {
        echo '</br> $x nie jest równa $y</br>';
    }

    if ($x === $y) {
        echo '</br>$x jest identyczna $y</br>';
    } else {
        echo '</br> $x nie jest identyczna $y</br>';
    }

    echo gettype($x);
    echo gettype($y);

    //operatory rzutowania
    // bool, int, float, string, array, object, unset
    $test1 = '1234abc5';
    $test2 = 'test';
    $test3 = 5;
    echo 'Typ danych $test1:', getType($test1);
    $test1=(int)$test1;
    echo "<br>$test1<br>";
    echo 'Typ danych $test1:', getType($test1);

    echo 'Typ danych $test2:', getType($test2);
    $test2=(bool)$test2;
    echo "<br>$test2<br>";
    echo 'Typ danych $test2:', getType($test2);

    echo 'Typ danych $test3:', getType($test3);
    $test3 =(unset)$test3;
    echo "<br>$test3<br>";
    echo 'Typ danych $test3:', getType($test3);

    ##################################
    // rozmiar  typu intiger
    echo PHP_INT_SIZE, '<hr>'; //8

    //kontrola typu zmiennych
    // is_int(), is_float(), is_numeric(), ist_string(), is_bool(), is_null()
    $x = 1;
    echo is_int($x); //ture
    echo is_float($x); //false
    echo is_numeric($x); //true
    echo is_bool($x), '<hr>'; //false
    

    $y;
    echo is_null($y); //false
    $y = null;
    echo is_null($y); //true

    $w;
    // operator ignorowania błędów - @
    echo $w; //Notice: Undefined variable
    echo @getType($w); //null
    echo @is_null($w); //true