<?php

/* Arquivo responsável por instanciar os objetos envolvidos na exclusão de
 * um Consultor.
 */

// Inclui os arquivos de classe necessários.

include_once 'Cursos.php';
include_once 'CursoDAO.php';

// Recebe os dados do formulário.

$CodCurso = filter_input(INPUT_GET, "CodCurso");

// Instancia os objetos e seta seus atributos.

$cursos = new Cursos();
$cursos->setCodCurso($CodCurso);

// Aciona a classe de persistência para manipulação dos dados.

$cursoDAO = new CursoDAO();
$cursoDAO->delete($cursos);

echo "<br><a href='Index.php'>Início</a>";