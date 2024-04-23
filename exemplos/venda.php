<?php

class PDFGenerator
{
    public function __construct(
        private array $configuracoes
    ) {
        
    }

    public function gerar()
    {
        echo "PDF gerado";
    }
}

class Mailer
{
    public function __construct(
        private array $dadosConta
    ) {
        
    }

    public function enviar()
    {
        echo "email enviado";
    }
}

class Venda
{
    public function __construct(
        protected PDFGenerator $PDFGenerator,
        protected Mailer $mailer
    ){
        
    }

    public function notificar()
    {
        $this->PDFGenerator->gerar();

        echo "<br>";

        $this->mailer->enviar();
    }
}

include('container.php');
$app = new Container;

$app->bind('venda', function() {
    $PDFGenerator = new PDFGenerator([
        'folha' => 'a4',
    ]);
    
    $mailer = new Mailer([
        'email' => 'joao@treinaweb.com.br',
        'SMTP' => 'asd.com'
    ]);
    
    return new Venda($PDFGenerator, $mailer);
});

$venda = $app->make('venda');
$venda->notificar();


