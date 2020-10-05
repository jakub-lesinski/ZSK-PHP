<?php

    $text = <<<T
        zsk - Zespół 
        Szkół
         Komunikacji<br>
    T;

    echo $text;
    echo nl2br($text);

    $name = "JanUsZ";

    // zamiana na małe litery
    echo strtolower($name), '<br>';

    // zamiana na duże litery
    echo strtoupper($name), '<br>';

    $name = 'januSZ koWalski';
    // zamiana pierwszej litery na dużą
    echo ucfirst($name), '<br>';

    // zamiana wszystkich pierwszych liter na duże
    echo ucwords($name), '<br>';

    $name = <<<T
        janusz
    T;
// jak się da ucfirst to powiększy spację ale nie słowo
    echo ucwords($name), '<br>';

    # Lorem ipsum
    $lorem = <<<Lorem
    LoremIpsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
    Lorem;

    echo $lorem;
    echo wordwrap($lorem, 40, '<br>');
    echo wordwrap($lorem, 40, '<hr>');

    // czyszczenie zawartości buffora
    ob_clean();
?>