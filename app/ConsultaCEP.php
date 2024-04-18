<?php

namespace App;

class ConsultaCEP
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