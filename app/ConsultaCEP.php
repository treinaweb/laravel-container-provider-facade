<?php

namespace App;

class ConsultaCEP implements ConsultaCEPInterface
{
    public function __construct(
        private string $apikey
    ) {
    }

    public function consulta(string $cep)
    {
        echo $this->apikey . "<br>";

        //fazer a requisição

        echo "meu endereço";
    }
}