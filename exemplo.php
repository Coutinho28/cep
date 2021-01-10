<?php
require_once "vendor/autoload.php";

    use coutinho\buscacep\Search;    
    $busca = new Search;
    $resultado = $busca->getAddressFromZipcode('11702840');
    print_r($resultado);