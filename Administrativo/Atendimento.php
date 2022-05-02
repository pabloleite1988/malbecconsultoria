<?php

/* Classe de DOMÍNIO responsável pela representação de CURSOS.
 * Contém atributos e métodos Getter e Setter.
 */

class Atendimento
{
    private $CodSolicitacao;
    private $Cliente;
    private $NomeSolicitacao;
    private $TipoSolicitacao;
	private $DataCriacao;
	private $HoraCriacao;
    
    function getCodSolicitacao() {
        return $this->CodSolicitacao;
    }

    function getCliente() {
        return $this->Cliente;
    }

    
    function getNomeSolicitacao() {
        return $this->NomeSolicitacao;
    }

    function getTipoSolicitacao() {
        return $this->TipoSolicitacao;
    }

    function getDataCriacao() {
        return $this->DataCriacao;
    }

    function getHoraCriacao() {
        return $this->HoraCriacao;
    }

    function setCodSolicitacao($CodSolicitacao) {
        $this->CodSolicitacao = $CodSolicitacao;
    }

    function setCliente($Cliente) {
        $this->Cliente = $Cliente;
    }
	
	function setNomeSolicitacao($NomeSolicitacao) {
        $this->NomeSolicitacao = $NomeSolicitacao;
    }
	
	function setTipoSolicitacao($TipoSolicitacao) {
        $this->TipoSolicitacao = $TipoSolicitacao;
    }
	
	function setDataCriacao($DataCriacao) {
        $this->DataCriacao = $DataCriacao;
    }
	
	function setHoraCriacao($HoraCriacao) {
        $this->HoraCriacao = $HoraCriacao;
    }
}