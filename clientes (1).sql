-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Mar-2023 às 15:28
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
  `cli_fone` varchar(20) NOT NULL,
  `cli_cpf` varchar(15) NOT NULL,
  `cli_dtnascimento` date NOT NULL,
  PRIMARY KEY (`cli_cod`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cli_cod`, `cli_nome`, `cli_fone`, `cli_cpf`, `cli_dtnascimento`) VALUES
(1, 'Matheus', '122332412', '12312345', '2005-08-26'),
(4, 'pao', '123123123', '21321231513', '2023-04-01'),
(5, 'Matheus', '123123123', '12312345', '2005-08-26');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`pro_cod`, `pro_descricao`, `pro_quantidade`, `pro_preco`, `pro_dtvalidade`) VALUES
(2, 'FeijÃ£o', 10, 5, '2023-04-07'),
(3, 'Bisteca', 20, 15, '2050-09-28'),
(4, 'Lasanha', 25, 20, '2050-02-20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
