<?php
namespace Elaborata\Mercado\Produtos;
/**
 * Description of Produto
 *
 * @author aluno
 */
class Produto
{
private $codigo;
private $nome;
private $precoUnit;
private $qtdEstoque;
private $desconto;


        
        public function getCodigo()
        {
            return $this->codigo;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getPrecoUnit() {
            return $this->precoUnit;
        }

        public function getQtdEstoque() {
            return $this->qtdEstoque;
        }

        public function getDesconto()
        {
            return $this->desconto;
        }

        public  function setCodigo($codigo) {
            $this->codigo = $codigo;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        function setPrecoUnit($precoUnit) {
            $this->precoUnit = $precoUnit;
        }

        public function setQtdEstoque($qtdEstoque) {
            $this->qtdEstoque = $qtdEstoque;
        }

        public function setDesconto($desconto) {
            $this->desconto = $desconto;
        }


}
