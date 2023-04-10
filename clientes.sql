-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Abr-2023 às 14:06
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cli_cod` int(11) NOT NULL,
  `cli_nome` varchar(150) NOT NULL,
  `cli_senha` varchar(200) NOT NULL,
  `cli_fone` varchar(20) NOT NULL,
  `cli_cpf` varchar(15) NOT NULL,
  `cli_dtnascimento` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cli_cod`, `cli_nome`, `cli_senha`, `cli_fone`, `cli_cpf`, `cli_dtnascimento`) VALUES
(1, 'Matheus', '81dc9bdb52d04dc20036dbd8313ed055', '129332412', '12312345', '2005-08-26'),
(8, 'Paulo', '81dc9bdb52d04dc20036dbd8313ed055', '18329923234', '12345678912', '2000-03-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `com_cod` int(11) NOT NULL,
  `com_vendedor` varchar(200) NOT NULL,
  `com_comprador` varchar(200) NOT NULL,
  `com_produto` varchar(200) NOT NULL,
  `com_quantidade` int(11) NOT NULL,
  `com_preco` float NOT NULL,
  `com_preco_total` float NOT NULL,
  `com_data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`com_cod`, `com_vendedor`, `com_comprador`, `com_produto`, `com_quantidade`, `com_preco`, `com_preco_total`, `com_data`) VALUES
(54, 'Matheus', 'Matheus', 'Queijo', 2, 38, 0, '2023-04-10 08:56:49'),
(55, 'Matheus', 'Matheus', 'Lasanha', 2, 40, 80, '2023-04-10 00:00:00'),
(56, 'Matheus', 'Matheus', 'Queijo', 2, 38, 0, '2023-04-10 08:57:31'),
(57, 'Matheus', 'Matheus', 'Lasanha', 2, 40, 0, '2023-04-10 08:57:31'),
(58, 'Matheus', 'Matheus', 'Queijo', 2, 38, 58, '2023-04-10 08:58:43'),
(59, 'Matheus', 'Matheus', 'Lasanha', 1, 20, 58, '2023-04-10 08:58:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `pro_cod` int(11) NOT NULL,
  `pro_vendedor` varchar(200) NOT NULL,
  `pro_descricao` varchar(300) NOT NULL,
  `pro_quantidade` int(11) NOT NULL,
  `pro_preco` float NOT NULL,
  `pro_dtvalidade` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`pro_cod`, `pro_vendedor`, `pro_descricao`, `pro_quantidade`, `pro_preco`, `pro_dtvalidade`) VALUES
(5, 'Matheus', 'Queijo', 78, 19, '2023-06-15'),
(4, 'Matheus', 'Lasanha', 90, 20, '2050-02-20'),
(3, 'Matheus', 'Bisteca', 140, 15, '2026-02-28'),
(6, 'Matheus', 'Hamburguer', 198, 20, '2023-06-08'),
(7, 'Matheus', 'Alface', 195, 9, '2023-08-16'),
(8, 'Matheus', 'Pão de queijo', 20, 20, '2023-08-17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `ven_cod` int(11) NOT NULL,
  `ven_nome` varchar(150) NOT NULL,
  `ven_senha` varchar(200) NOT NULL,
  `ven_endereco` varchar(100) NOT NULL,
  `ven_dtnasc` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`ven_cod`, `ven_nome`, `ven_senha`, `ven_endereco`, `ven_dtnasc`) VALUES
(1, 'Matheus', '81dc9bdb52d04dc20036dbd8313ed055', 'Rua 01', '2005-08-26'),
(2, 'Paulo', 'e10adc3949ba59abbe56e057f20f883e', 'Rua 02', '2006-04-19');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cli_cod`);

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`com_cod`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`pro_cod`);

--
-- Índices para tabela `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`ven_cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cli_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `com_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `pro_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `ven_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
