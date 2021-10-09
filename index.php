<?php

    $ch = curl_init("https://swapi.dev/api/people");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $res = json_decode(curl_exec($ch));
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Consumindo API</title>
</head>
<body class="bg-dark" style="background-image: url('https://images.unsplash.com/photo-1520034475321-cbe63696469a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80');">
        <!-- :) https://github.com/claudiovilarim/ -->
        <div class="container p-4  ">
            <div class="row">
        
                <?php foreach ($res->results as $key) { ?>
                    
                    <div class="col-md-4 p-2">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo "Nome: {$key->name}"; ?> </h5>
                            <p class="card-text"> <?php echo "Altura: {$key->height}<br>"; echo "Gênero: {$key->gender}"; ?> </p>
                            <a href="https://www.google.com.br/search?q=<?php echo "{$key->name}"; ?>" class="btn btn-warning" target="_blank"> Pesquisar sobre  </a>
                        </div>
                        </div>
                    </div>
                        
                <?php } ?>
        
            </div>
        </div>
    

</body>
</html>