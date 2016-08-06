<?php

require_once './Produtos/Estoque.php';
require_once './Produtos/Produto.php';


use Elaborata\Mercado\Produtos\Produto;
use Elaborata\Mercado\Produtos\Estoque;

$prod1 = new Produto();
$prod1 ->setCodigo('12536');
$prod1 ->setNome("Arroz Tio jao");
$prod1 ->setPrecoUnit(2.5);
$prod1 ->setQtdEstoque(2) ;
$prod1 ->setDesconto(0);

$prod2 = new Produto();
$prod2 ->setCodigo('124536');
$prod2 ->setNome(" Feijao Tio jao");
$prod2 ->setPrecoUnit(2.0);
$prod2 ->setQtdEstoque(5) ;
$prod2 ->setDesconto(0);

$estoque = new Estoque();
var_dump($estoque);
$estoque -> addEstoque($prod1);
$estoque -> addEstoque($prod2);
var_dump($estoque);
//$estoque->procuraProduto('12536');
//$estoque ->procuraProduto('124536');

//$estoque ->deletaEstoque($produto, 2);
//$estoque ->deletaEstoque($produto, 3);

 



 





