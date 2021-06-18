<?php

require_once 'autoload.php';

use Alura\Banco\Model\Endereco;

$umEndereco = new Endereco('Petrópolis', 'bairro Qualquer', 'Minha rua', '71B');
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma rua aí', '50');

echo $umEndereco . PHP_EOL;
echo $outroEndereco;
