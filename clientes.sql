-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Mar-2023 às 19:57
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `cli_cod` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(150) NOT NULL,
  `cli_senha` varchar(200) NOT NULL,
  `cli_fone` varchar(20) NOT NULL,
  `cli_cpf` varchar(15) NOT NULL,
  `cli_dtnascimento` date NOT NULL,
  PRIMARY KEY (`cli_cod`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cli_cod`, `cli_nome`, `cli_senha`, `cli_fone`, `cli_cpf`, `cli_dtnascimento`) VALUES
(1, 'Matheus', '81dc9bdb52d04dc20036dbd8313ed055', '129332412', '12312345', '2005-08-26'),
(4, 'pao', '', '123123123', '21321231513', '2023-04-01'),
(6, 'Queijo', '', '1234567890', '12312368', '2015-02-26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `pro_cod` int(11) NOT NULL AUTO_INCREMENT,
  `pro_descricao` varchar(300) NOT NULL,
  `pro_quantidade` int(11) NOT NULL,
  `pro_preco` float NOT NULL,
  `pro_dtvalidade` date NOT NULL,
  PRIMARY KEY (`pro_cod`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`pro_cod`, `pro_descricao`, `pro_quantidade`, `pro_preco`, `pro_dtvalidade`) VALUES
(3, 'Bisteca', 20, 15, '2026-02-28'),
(4, 'Lasanha', 25, 20, '2050-02-20'),
(5, 'Queijo', 20, 19, '2023-04-07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE IF NOT EXISTS `vendedor` (
  `ven_cod` int(11) NOT NULL AUTO_INCREMENT,
  `ven_nome` varchar(150) NOT NULL,
  `ven_senha` varchar(200) NOT NULL,
  `ven_endereco` varchar(100) NOT NULL,
  `ven_dtnasc` date NOT NULL,
  PRIMARY KEY (`ven_cod`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`ven_cod`, `ven_nome`, `ven_senha`, `ven_endereco`, `ven_dtnasc`) VALUES
(1, 'Matheus', '81dc9bdb52d04dc20036dbd8313ed055', 'Rua 01', '2005-08-26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
