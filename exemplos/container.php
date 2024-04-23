<?php

class Container
{
    private array $dados;

    public function bind($chave, $funcao)
    {
        $this->dados[$chave] = $funcao;
    }

    public function make($chave)
    {
        return $this->dados[$chave]();
    }
}