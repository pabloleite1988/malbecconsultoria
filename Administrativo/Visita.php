<?php

/* Classe de DOMÍNIO responsável pela representação de CURSOS.
 * Contém atributos e métodos Getter e Setter.
 */

class Visita
{
    private $CodVisita;
    private $Atendimento;
    private $Consultor;
    private $DescVisita;
	private $HorarioAgendado;
	private $DataAgendada;
    
    function getCodVisita() {
        return $this->CodVisita;
    }

    function getAtendimento() {
        return $this->Atendimento;
    }

    
    function getConsultor() {
        return $this->Consultor;
    }

    function getDescVisita() {
        return $this->DescVisita;
    }

    function getHorarioAgendado() {
        return $this->HorarioAgendado;
    }

    function getDataAgendada() {
        return $this->DataAgendada;
    }

    function setCodVisita($CodVisita) {
        $this->CodVisita = $CodVisita;
    }

    function setAtendimento($Atendimento) {
        $this->Atendimento = $Atendimento;
    }
	
	function setConsultor($Consultor) {
        $this->Consultor = $Consultor;
    }
	
	function setDescVisita($DescVisita) {
        $this->DescVisita = $DescVisita;
    }
	
	function setHorarioAgendado($HorarioAgendado) {
        $this->HorarioAgendado = $HorarioAgendado;
    }
	
	function setDataAgendada($DataAgendada) {
        $this->DataAgendada = $DataAgendada;
    }
}