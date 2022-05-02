<?php

class Usuario {
    private $CodUsuario;
    private $NomeUsuario;
    private $SenhaUsuario;
    
    function getCodUsuario() {
        return $this->CodUsuario;
    }

    function getNomeUsuario() {
        return $this->NomeUsuario;
    }

    function getSenhaUsuario() {
        return $this->SenhaUsuario;
    }

    function setCodUsuario($CodUsuario) {
        $this->CodUsuario = $CodUsuario;
    }

    function setNomeUsuario($NomeUsuario) {
        $this->NomeUsuario = $NomeUsuario;
    }

    function setSenhaUsuario($SenhaUsuario) {
        $this->SenhaUsuario = $SenhaUsuario;
    }
}