<?php

/* Classe de DOMÍNIO responsável pela representação de CURSOS.
 * Contém atributos e métodos Getter e Setter.
 */

class Cursos
{
    private $CodCurso;
    private $NomeCurso;
    private $DescCurso;
    private $Agenda;
    
    function getCodCurso() {
        return $this->CodCurso;
    }

    function getNomeCurso() {
        return $this->NomeCurso;
    }

    
    function getDescCurso() {
        return $this->DescCurso;
    }

    function getAgenda() {
        return $this->Agenda;
    }

    function setCodCurso($codCurso) {
        $this->CodCurso = $codCurso;
    }

    function setNomeCurso($nomeCurso) {
        $this->NomeCurso = $nomeCurso;
    }

    function setDescCurso($descCurso) {
        $this->DescCurso = $descCurso;
    }

    function setAgenda($agenda) {
        $this->Agenda = $agenda;
    }
}