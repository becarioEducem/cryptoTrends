<?php 
    //Obtenim les 5 trending cryptos de l'API de coingecko i retornem un array d'arrays amb les dades de les criptodivises
    function getTrendingCoins(){
        $res = file_get_contents("https://api.coingecko.com/api/v3/search/trending");
        $res = json_decode($res, true);
        $coins = $res['coins'];
        $coinsArray = array();
        foreach($coins as $coin){
            array_push($coinsArray, $coin['item']);
        }
        array_splice($coinsArray, 5);
        return $coinsArray;
    }
    
    //TODO: CAL ACABAR LA FUNCIÓ
    //TODO: @PARAM1 = ARRAY DE CRYPTODIVISES QUE CAL QUE PRESENTI LA GRID
    //TODO: @PARAM2 = ARRAY DE CRYPTODIVISES AMB SEGUIMENT
    function getHTMLCoinsGrid(){
        $grid = "  <table class=\"table table-hover border border-primary rounded\"><thead><tr class=\"table-primary\">
        <th>Crypto</th>
        <th>Símbol</th>
        <th>#Cap.Mercat</th>
        <th>Icona</th>
        <th>Preu BTC</th>
        <th colspan=\"2\">Seguiment</th>
        </thead></tr><tbody>";
        //TODO: CALDRÀ RECUPERAR LES DADES DE CADA CRYPTO PER ANAR GENERANT LES FILES DE LA TAULA
        //TODO: INVESTIGAR VIA DEPURACIÓ EL FORMAT DE LES DADES RETORNADES PER GETTRENDINGCOINS()
        $grid  .= "</tbody></table>";
        return $grid ;
    }
