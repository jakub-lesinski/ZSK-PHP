<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dołączanie plików</title>
</head>
<body>
    <h3>Początek pliku</h3>
    <?php
    include './3_1_file.php';
    include_once './3_1_file.php';

    echo 'Require<br>';
    require './3_1_file.php';
    require_once './3_1_file.php'





    ?>
    <h3>koniec pliku</h3>
</body>
</html>