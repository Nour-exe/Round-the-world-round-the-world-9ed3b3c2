<?php 

$inputField = $argv[1];

define(
    "MUNTGELD" ,  
    [
    "50" => "euro",
    "20" => "euro",
    "10" => "euro",
    "5" => "euro",
    "2" => "euro",
    "1" => "euro",
    "0.50" => "cents",
    "0.20" => "cents",
    "0.10" => "cents",
    "0.05" => "cents",
    "0.01" => "cents"
    ]
);

foreach ( MUNTGELD as $moneyValue => $type ){
    $moneyValue = (float)$moneyValue;
    $inputField = round($inputField, 1);

    if (floor($inputField / $moneyValue) > 0) {
        $amount = floor($inputField / $moneyValue);
        echo $amount . "x" . $moneyValue. PHP_EOL;
        $inputField = $inputField - ($amount * $moneyValue);
      
    }
}

?>