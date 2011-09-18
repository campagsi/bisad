-- phpMyAdmin SQL Dump
-- version 3.4.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 18/09/2011 às 01h52min
-- Versão do Servidor: 5.0.92
-- Versão do PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `decisaoo_indicadores`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `indicadores`
--

CREATE TABLE IF NOT EXISTS `indicadores` (
  `id` int(11) NOT NULL auto_increment,
  `tipo_indicadore_id` int(11) NOT NULL,
  `data` date NOT NULL,
  `tipo_medida_id` int(11) NOT NULL,
  `meta` int(11) NOT NULL,
  `tolerancia` int(11) NOT NULL,
  `aviso` int(11) NOT NULL,
  `realizacao` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_indicadores_tipo_indicadores` (`tipo_indicadore_id`),
  KEY `tipo_medida_id` (`tipo_medida_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_indicadores`
--

CREATE TABLE IF NOT EXISTS `tipo_indicadores` (
  `id` int(11) NOT NULL auto_increment,
  `descricao` varchar(45) default NULL,
  `ativo` tinyint(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_medidas`
--

CREATE TABLE IF NOT EXISTS `tipo_medidas` (
  `id` int(11) NOT NULL auto_increment,
  `descricao` varchar(45) default NULL,
  `ativo` tinyint(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
