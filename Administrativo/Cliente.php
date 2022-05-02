<?php

/* Classe de DOMÍNIO responsável pela representação do CLIENTE.
 * Contém atributos e métodos Getter e Setter.
 */

class Cliente
{
    private $CodCliente;
    private $NomeCliente;
    private $EndCliente;
    private $RendaCliente;
    
    function getCodCliente() {
        return $this->CodCliente;
    }

    function getNomeCliente() {
        return $this->NomeCliente;
    }

    function getEndCliente() {
        return $this->EndCliente;
    }

    
    function getRendaCliente() {
        return $this->RendaCliente;
    }

    function setCodCliente($CodCliente) {
        $this->CodCliente = $CodCliente;
    }

    function setNomeCliente($NomeCliente) {
        $this->NomeCliente = $NomeCliente;
    }

    function setEndCliente($EndCliente) {
        $this->EndCliente = $EndCliente;
    }

    function setRendaCliente($RendaCliente) {
        $this->RendaCliente = $RendaCliente;
    }
}