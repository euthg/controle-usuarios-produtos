-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/05/2025 às 00:53
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste123`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL COMMENT 'FK - Código Identificador do produto',
  `descricao` varchar(80) NOT NULL COMMENT 'Descrição do Produto',
  `quantidade` int(11) NOT NULL COMMENT 'Quantidade do produto',
  `valor_unitario` double NOT NULL COMMENT 'Valor Unitário do produto',
  `flg_ativos` char(1) NOT NULL COMMENT 'Produto ativo: \r\nS-sim/N-não'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `descricao`, `quantidade`, `valor_unitario`, `flg_ativos`) VALUES
(1, 'Corsa 2014 type R-GT', 1, 7000000, 'S'),
(3, 'FIAT UNO TURBO COM ESCADA ', 1, 1000000, 'S');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL COMMENT 'PK - Código identificador do tipo de usuário',
  `descricao` varchar(30) NOT NULL COMMENT 'Descrição do tipo de usuário',
  `flg_ativos` int(1) NOT NULL COMMENT 'usuario Ativo: S/N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `descricao`, `flg_ativos`) VALUES
(1, 'Admin', 0),
(2, 'Comum', 0),
(3, 'Funcionário', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL COMMENT 'PK - Código identificador do usuário',
  `id_tipo_usuario` int(11) NOT NULL COMMENT 'FK - Código identificador do tipo de usuário',
  `nome` varchar(80) DEFAULT NULL COMMENT 'Nome do usuário',
  `login` varchar(60) NOT NULL COMMENT 'E-mail de acesso',
  `senha` varchar(32) NOT NULL COMMENT 'Senha de acesso',
  `flg_ativos` char(1) DEFAULT NULL COMMENT 'Usuário ativo: S-Sim / N-Não',
  `data_nasc` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL COMMENT 'Foto do usuário'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_tipo_usuario`, `nome`, `login`, `senha`, `flg_ativos`, `data_nasc`, `foto`) VALUES
(4, 1, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'S', '2006-03-25', NULL),
(6, 1, 'Thiago', 'thsilva.p.05@gmail.com', '202cb962ac59075b964b07152d234b70', 'S', '2005-10-08', 'img/573ceb161fb15cbbf5c85abe4bbcc30a.png'),
(7, 2, 'João', 'joao@teste.com', '81dc9bdb52d04dc20036dbd8313ed055', 'N', '2000-05-16', NULL),
(8, 1, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'S', '0000-00-00', NULL),
(9, 1, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'S', '0000-00-00', NULL),
(10, 1, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'S', '0000-00-00', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_tipo_usuario` (`id_tipo_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'FK - Código Identificador do produto', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK - Código identificador do tipo de usuário', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK - Código identificador do usuário', AUTO_INCREMENT=11;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
