<?php
require_once "vendor/autoload.php";

    use coutinho\buscacep\Search;    
    $busca = new Search;
    $resultado = $busca->getAddressFromZipcode('01001-000');
    print_r($resultado);
