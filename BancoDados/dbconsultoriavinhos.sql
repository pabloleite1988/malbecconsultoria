-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Dez-2019 às 18:03
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbconsultoriavinhos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `CodSolicitacao` int(10) UNSIGNED NOT NULL,
  `Cliente_CodCliente` int(10) UNSIGNED DEFAULT NULL,
  `NomeSolicitacao` varchar(45) DEFAULT NULL,
  `TipoSolicitacao` varchar(45) DEFAULT NULL,
  `DataCriacao` date DEFAULT NULL,
  `HorarioCriacao` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atendimento`
--

INSERT INTO `atendimento` (`CodSolicitacao`, `Cliente_CodCliente`, `NomeSolicitacao`, `TipoSolicitacao`, `DataCriacao`, `HorarioCriacao`) VALUES
(1, 7, 'Visita de Alinhamento de Plantação', 'Consultoria', '2019-12-20', '20:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `CodCliente` int(10) UNSIGNED NOT NULL,
  `NomeCliente` varchar(45) DEFAULT NULL,
  `EndCliente` varchar(100) DEFAULT NULL,
  `RendaCliente` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`CodCliente`, `NomeCliente`, `EndCliente`, `RendaCliente`) VALUES
(7, 'Jô Vassali', 'Rua Tiradentes, 21/102 - Leopoldina(MG)', '7500.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultor`
--

CREATE TABLE `consultor` (
  `CodConsultor` int(10) UNSIGNED NOT NULL,
  `NomeConsultor` varchar(45) DEFAULT NULL,
  `FormConsultor` varchar(45) DEFAULT NULL,
  `EndConsultor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `consultor`
--

INSERT INTO `consultor` (`CodConsultor`, `NomeConsultor`, `FormConsultor`, `EndConsultor`) VALUES
(7, 'Luana Viches', 'Analista TI', 'Rua Independência, 400 - Juiz de Fora(MG)'),
(8, 'Haroldo Timbira', 'Analista TI', 'Rua Independência, 400 - Juiz de Fora(MG)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `CodCurso` int(10) UNSIGNED NOT NULL,
  `NomeCurso` varchar(45) DEFAULT NULL,
  `DescCurso` varchar(100) DEFAULT NULL,
  `Agenda` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`CodCurso`, `NomeCurso`, `DescCurso`, `Agenda`) VALUES
(7, 'Programação', 'Introdução à Linguagem CSS', '27/12/2019');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `Cliente_CodCliente` int(10) UNSIGNED DEFAULT NULL,
  `Cursos_CodCurso` int(10) UNSIGNED DEFAULT NULL,
  `CodMatricula` int(10) UNSIGNED NOT NULL,
  `DataMatricula` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ministra`
--

CREATE TABLE `ministra` (
  `Cursos_CodCurso` int(10) UNSIGNED DEFAULT NULL,
  `Consultor_CodConsultor` int(10) UNSIGNED DEFAULT NULL,
  `CodAula` int(10) UNSIGNED NOT NULL,
  `DataAula` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `recomendacao`
--

CREATE TABLE `recomendacao` (
  `CodRecomendacao` int(10) UNSIGNED NOT NULL,
  `Consultor_CodConsultor` int(10) UNSIGNED DEFAULT NULL,
  `Rotulo_CodigoRotulo` int(10) UNSIGNED DEFAULT NULL,
  `DataRecomendacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rotulo`
--

CREATE TABLE `rotulo` (
  `CodigoRotulo` int(10) UNSIGNED NOT NULL,
  `Cliente_CodCliente` int(10) UNSIGNED DEFAULT NULL,
  `NomeFornecedor` varchar(45) DEFAULT NULL,
  `Origem` varchar(20) DEFAULT NULL,
  `Preco` decimal(10,2) DEFAULT NULL,
  `Casta` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `CodUsuario` int(11) NOT NULL,
  `NomeUsuario` varchar(45) NOT NULL,
  `SenhaUsuario` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`CodUsuario`, `NomeUsuario`, `SenhaUsuario`) VALUES
(2, 'Admin', 'root');

-- --------------------------------------------------------

--
-- Estrutura da tabela `visita`
--

CREATE TABLE `visita` (
  `CodVisita` int(10) UNSIGNED NOT NULL,
  `CodSolicitacao` int(10) UNSIGNED DEFAULT NULL,
  `CodConsultor` int(10) UNSIGNED DEFAULT NULL,
  `DataAgendada` date DEFAULT NULL,
  `HorarioAgendado` time DEFAULT NULL,
  `DescVisita` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`CodSolicitacao`),
  ADD KEY `FK_Atendimento_2` (`Cliente_CodCliente`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CodCliente`);

--
-- Índices para tabela `consultor`
--
ALTER TABLE `consultor`
  ADD PRIMARY KEY (`CodConsultor`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`CodCurso`);

--
-- Índices para tabela `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`CodMatricula`),
  ADD KEY `FK_Matricula_2` (`Cliente_CodCliente`),
  ADD KEY `FK_Matricula_3` (`Cursos_CodCurso`);

--
-- Índices para tabela `ministra`
--
ALTER TABLE `ministra`
  ADD PRIMARY KEY (`CodAula`),
  ADD KEY `FK_Ministra_2` (`Cursos_CodCurso`),
  ADD KEY `FK_Ministra_3` (`Consultor_CodConsultor`);

--
-- Índices para tabela `recomendacao`
--
ALTER TABLE `recomendacao`
  ADD PRIMARY KEY (`CodRecomendacao`),
  ADD KEY `FK_Recomendacao_2` (`Consultor_CodConsultor`),
  ADD KEY `FK_Recomendacao_3` (`Rotulo_CodigoRotulo`);

--
-- Índices para tabela `rotulo`
--
ALTER TABLE `rotulo`
  ADD PRIMARY KEY (`CodigoRotulo`),
  ADD KEY `FK_Rotulo_2` (`Cliente_CodCliente`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`CodUsuario`);

--
-- Índices para tabela `visita`
--
ALTER TABLE `visita`
  ADD PRIMARY KEY (`CodVisita`),
  ADD KEY `FK_Visita_2` (`CodSolicitacao`),
  ADD KEY `FK_Visita_3` (`CodConsultor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atendimento`
--
ALTER TABLE `atendimento`
  MODIFY `CodSolicitacao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `CodCliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `consultor`
--
ALTER TABLE `consultor`
  MODIFY `CodConsultor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `CodCurso` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `matricula`
--
ALTER TABLE `matricula`
  MODIFY `CodMatricula` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ministra`
--
ALTER TABLE `ministra`
  MODIFY `CodAula` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `recomendacao`
--
ALTER TABLE `recomendacao`
  MODIFY `CodRecomendacao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `rotulo`
--
ALTER TABLE `rotulo`
  MODIFY `CodigoRotulo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `CodUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `visita`
--
ALTER TABLE `visita`
  MODIFY `CodVisita` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD CONSTRAINT `FK_Atendimento_2` FOREIGN KEY (`Cliente_CodCliente`) REFERENCES `cliente` (`CodCliente`) ON DELETE SET NULL;

--
-- Limitadores para a tabela `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `FK_Matricula_2` FOREIGN KEY (`Cliente_CodCliente`) REFERENCES `cliente` (`CodCliente`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_Matricula_3` FOREIGN KEY (`Cursos_CodCurso`) REFERENCES `cursos` (`CodCurso`) ON DELETE SET NULL;

--
-- Limitadores para a tabela `ministra`
--
ALTER TABLE `ministra`
  ADD CONSTRAINT `FK_Ministra_2` FOREIGN KEY (`Cursos_CodCurso`) REFERENCES `cursos` (`CodCurso`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_Ministra_3` FOREIGN KEY (`Consultor_CodConsultor`) REFERENCES `consultor` (`CodConsultor`) ON DELETE SET NULL;

--
-- Limitadores para a tabela `recomendacao`
--
ALTER TABLE `recomendacao`
  ADD CONSTRAINT `FK_Recomendacao_2` FOREIGN KEY (`Consultor_CodConsultor`) REFERENCES `consultor` (`CodConsultor`) ON DELETE NO ACTION,
  ADD CONSTRAINT `FK_Recomendacao_3` FOREIGN KEY (`Rotulo_CodigoRotulo`) REFERENCES `rotulo` (`CodigoRotulo`) ON DELETE SET NULL;

--
-- Limitadores para a tabela `rotulo`
--
ALTER TABLE `rotulo`
  ADD CONSTRAINT `FK_Rotulo_2` FOREIGN KEY (`Cliente_CodCliente`) REFERENCES `cliente` (`CodCliente`) ON DELETE SET NULL;

--
-- Limitadores para a tabela `visita`
--
ALTER TABLE `visita`
  ADD CONSTRAINT `FK_Visita_2` FOREIGN KEY (`CodSolicitacao`) REFERENCES `atendimento` (`CodSolicitacao`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_Visita_3` FOREIGN KEY (`CodConsultor`) REFERENCES `consultor` (`CodConsultor`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
