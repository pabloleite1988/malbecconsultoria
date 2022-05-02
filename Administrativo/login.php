<?php

include_once 'Usuario.php';
include_once 'UsuarioDAO.php';

$Nome = filter_input(INPUT_POST, "NomeUsuario");
$Senha = filter_input(INPUT_POST, "SenhaUsuario");

$usuario = new Usuario();
$usuario->setNomeUsuario($Nome);
$usuario->setSenhaUsuario($Senha);

$usuarioDAO = new UsuarioDAO();
$usuarioDAO->doLogin($usuario);




?>