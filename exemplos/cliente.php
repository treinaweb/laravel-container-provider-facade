<?php

interface CepService
{
    public function consultar(string $cep);
}

class CepServiceReal implements CepService
{
    public function consultar(string $cep)
    {
        sleep(5); //requisição http
        return 'Rua atilio zanon, sbc';
    }
}

class CepServiceFake implements CepService
{
    public function consultar(string $cep)
    {
        return 'Rua atilio zanon, sbc';
    }
}

class Cliente
{
    protected CepService $cepService;

    public function __construct(CepService $cepService)
    {
        $this->cepService = $cepService;
    }

    public function cadastrar()
    {
        $cep = '09715340';

        $endereco = $this->cepService->consultar($cep);

        echo $endereco;
        //gravar no banco o cliente com o endereço
    }
}

$cliente = new Cliente(new CepServiceFake);
$cliente->cadastrar();