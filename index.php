<?php
    //TODO: CALDRÀ INCLOURE CRYPTOLIB.PHP
    //TODO: CAL RECUPERAR LES DADES DE LA COOKIE (DESADES EN FORMAT JSON)

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //TODO: CAL REVISAR QUINES CRIPTOS HA MARCAT L'USUARI I AFEGIR-LES A LES CRIPTOS EXISTENTS A LA COOKIE
        //TODO: CAL PENSAR COM ESBRINAR SI S'HAN DESMARCAT CRIPTOS PER DESFER-NE EL SEGUIMENT A LA COOKIE
        //TODO: CAL ACTUALITZAR LA COOKIE (O ESBORRAR-LA) SI S'HAN MODIFICAT LES OPCIONS DE SEGUIMENT
    }

    //TODO: OBTENIR ARRAY DE CRIPTOS VIA CRYPTOLIB
    //Construïm la graella de crypto tendències
    $table = "  <table class=\"table table-hover border border-primary rounded\"><thead><tr class=\"table-primary\">
                <th>Crypto</th>
                <th>Símbol</th>
                <th>#Cap.Mercat</th>
                <th>Icona</th>
                <th>Preu BTC</th>
                <th colspan=\"2\">Seguiment</th>
                </thead></tr><tbody>";
    //TODO: CALDRÀ RECUPERAR LES DADES DE CADA CRYPTO PER ANAR GENERANT LES FILES DE LA TAULA
    //TODO: INVESTIGAR VIA DEPURACIÓ EL FORMAT DE LES DADES RETORNADES PER GETTRENDINGCOINS()
    $table .= "</tbody></table>";
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--
        //TODO: CANVIAR AUTOR WEB
    -->
    <meta name="author" content="David González" />
    <link rel="icon" href="./img/favicon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/main.css" />
    <title>Crypto Trends - Examen Parcial M7UF1 - DAM2</title>
</head>
<body>
    <h1 class="m-5">Crypto Trends</h1>
    <!-- 
        //TODO: MOSTRAR EN UN FORMULARI WEB TAULA DE CRYPTOS I OPCIÓ DE DESAR SEGUIMENT 
    -->
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>