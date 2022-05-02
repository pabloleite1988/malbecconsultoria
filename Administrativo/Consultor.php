7<?php

/* Classe de DOMÍNIO responsável pela representação do CLIENTE.
 * Contém atributos e métodos Getter e Setter.
 */

class Consultor
{
    private $CodConsultor;
    private $NomeConsultor;
    private $FormConsultor;
    private $EndConsultor;
    
    function getCodConsultor() {
        return $this->CodConsultor;
    }

    function getNomeConsultor() {
        return $this->NomeConsultor;
    }

    function getFormConsultor() {
        return $this->FormConsultor;
    }

    
    function getEndConsultor() {
        return $this->EndConsultor;
    }

    function setCodConsultor($CodConsultor) {
        $this->CodConsultor = $CodConsultor;
    }

    function setNomeConsultor($NomeConsultor) {
        $this->NomeConsultor = $NomeConsultor;
    }

    function setFormConsultor($FormConsultor) {
        $this->FormConsultor = $FormConsultor;
    }

    function setEndConsultor($EndConsultor) {
        $this->EndConsultor = $EndConsultor;
    }
}