<?php

interface RelatorioGenerator
{
    public function gerar(array $lista);
}

class PDFGenerator implements RelatorioGenerator
{
    public function gerar(array $lista)
    {
        return 'relatório em PDF';
    }
}

class XLSGenerator implements RelatorioGenerator
{
    public function gerar(array $lista)
    {
        return 'relatório em XLS';
    }
}

class Produto
{
    public function __construct(
        protected RelatorioGenerator $relatorioGenerator
    ) {
    }

    public function relatorio()
    {
        $produtos = ['produto1', 'produto2'];

        $relatorio = $this->relatorioGenerator->gerar($produtos);

        echo $relatorio;
    }
}

$produto = new Produto(new XLSGenerator);
$produto->relatorio();