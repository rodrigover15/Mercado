<?php

namespace Elaborata\Mercado\Produtos;
/**
 * Description of Estoque
 *
 * @author aluno
 */
class Estoque
{
  static private $instance = null;
  private $produto;

  
  public function __construct()
  {
      
  }
   static public function getInstance()
  {
    return self::$instance;

   }
      
  public function totalDisponivel()
  {
      
  }
  
  /**
   * Adiciona o produto ao gerenciador de estoque
   * @param  $produto
   * @return Estoque
     */
  public function addEstoque(Produto $produto)
  {
      
        $prodEstoque = $this->retornaProduto($produto);
        
        if($prodEstoque  ==  null)
        {
        array_push($this->produto, $produto);
        }
          else
        {   
              $nome = ($produto->getNome() != null ? $produto->getNome())
              $prodEstoque->setNome($nome);
              
            $quant =( $produto->getQTDestoque() > 0) ? $produto->getQtdEstoque() + $prodEstoque->getQtdEstoque: $prod->getQtdEstoque();
            $preco = ($produto->getPrecoUnit() >  0) ? $produto->getPrecoUnit()  : $prodEstoque->getPrecoUnit()
              
             
        }
        
        return $this;
  }
  
  
  /**
  * Deleta o produto ao gerenciador de estoque
  * @param  $produto
  * @return Estoque
  */
  
  
  public function deletaEstoque(Produto $produto,$quant)
  {   
     $quantidadeEstoque = $produto ->getQtdEstoque();
      if()
      {
          
      }
  }
  
  
  public function procuraProduto($codigo)
  {
     foreach ($this->produto as $produto)
     {
       if($produto->getCodigo() == $codigo)
       {
         return $produto;
       }
     }
  return null;
  }
}

public function retornaProduto(Produto $produto)
{
  foreach($this->produto as $prodEstoque)
  {
      
  }
}
