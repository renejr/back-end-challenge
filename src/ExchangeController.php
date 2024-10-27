<?php

namespace App;

use Exception;

class ExchangeController
{
    private $currencySymbols = [
        'USD' => '$',
        'BRL' => 'R$',
        'EUR' => '€'
    ];

    public function convert($amount, $from, $to, $rate)
    {
        $convertedValue = $amount * $rate;

        if (!isset($this->currencySymbols[$to])) {
            throw new Exception("Moeda destino inválida: $to");
        }

        return [
            "valorConvertido" => round($convertedValue, 2),
            "simboloMoeda" => $this->currencySymbols[$to]
        ];
    }
}
