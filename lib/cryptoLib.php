<?php 
    //Obtenim les 7 trending cryptos de l'API de coingecko i retornem un array d'arrays amb les dades de les criptodivises
    function getTrendingCoins(){
        $res = file_get_contents("https://api.coingecko.com/api/v3/search/trending");
        $res = json_decode($res, true);
        $coins = $res['coins'];
        $coinsArray = array();
        foreach($coins as $coin){
            array_push($coinsArray, $coin['item']);
        }
        return $coinsArray;
    }
