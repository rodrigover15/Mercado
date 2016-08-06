<?php

namespace Elaborata\Mercado\Produtos;
/**
 * Description of Estoque
 *
 * @author aluno
 */
class Estoque
{
  private $produto;

  public function totalDisponivel()
  {
      
  }
  public function addEstoque($produto)
  {
         if(is_numeric($produto))
         {
             $this->$produto = $produto +1;
         }
  }
  public function deletaEstoque($produto,$quant)
  {
      
  }
  public function procuraProduto($codigo)
  {
     $this->codigo = $codigo;
  }
}
