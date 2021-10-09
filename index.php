<?php

    $ch = curl_init("https://swapi.dev/api/people");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $res = json_decode(curl_exec($ch));

    // echo '<pre>';
    // var_dump($res);
    // echo '</pre>';

    foreach ($res->results as $key) {
        echo "<hr>";
        // var_dump($key);
        echo "Nome: {$key->name} <br>";
        echo "Altura: {$key->height}";
    }
    

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumindo API</title>
</head>
<body>
    
</body>
</html>