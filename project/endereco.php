<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petrópolis', 'bairro qualquer', 'minha rua', '50');
$outroEndereco = new Endereco('Rio', 'centro', 'uma rua aí', '10');


//echo $umEndereco->rua;
echo $umEndereco->logradoro = "aaa";
exit();

echo $umEndereco . PHP_EOL;
echo $outroEndereco;