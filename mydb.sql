-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conhecimentos`
--

CREATE TABLE IF NOT EXISTS `conhecimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_qualidade` text NOT NULL,
  `nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeEmpresa` varchar(45) NOT NULL,
  `areaAtuacao` varchar(45) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `cnpj` int(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nomeEmpresa`, `areaAtuacao`, `telefone`, `email`, `cnpj`) VALUES
(1, 'a', 'a', 1111, 'a', 1111),
(2, 'Alalal', 'Alalal', 2147483647, 'Jhajhajahaj', 2147483647),
(3, 'teste', 'teste', 92291123, 'dyeni_souza@hotmail.com', 2147483647),
(4, 'fff', 'fff', 92291123, 'dyeni.souza@gmail.com', 66666666),
(9, 'aaaa', 'dddd', 92291123, 'dyeni.souza@gmail.com', 66666666),
(10, 'aaaa', 'dddd', 92291123, 'dyeni.souza@gmail.com', 66666666),
(11, 'teste', 'teste', 92291123, 'sudhushdu', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `experiencias`
--

CREATE TABLE IF NOT EXISTS `experiencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `experiencia1` text,
  `experiencias2` text,
  `experiencias3` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `interesses`
--

CREATE TABLE IF NOT EXISTS `interesses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_interesse` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `loginempresa`
--

CREATE TABLE IF NOT EXISTS `loginempresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `senha` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='				' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `loginusuario`
--

CREATE TABLE IF NOT EXISTS `loginusuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Login_UNIQUE` (`login`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` int(11) NOT NULL,
  `datanascimento` int(11) NOT NULL,
  `sexo` char(1) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `nomePai` varchar(100) DEFAULT NULL,
  `nomeMae` varchar(100) DEFAULT NULL,
  `estados` varchar(50) NOT NULL,
  `cep` int(11) NOT NULL,
  `areaAtuacao` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `telefone_UNIQUE` (`telefone`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `telefone`, `datanascimento`, `sexo`, `endereco`, `cidade`, `nomePai`, `nomeMae`, `estados`, `cep`, `areaAtuacao`) VALUES
(1, 'Teste', 'teste', 92291123, 16, 'F', 'jdausdksadbsad', 'Alvorada', 'teste', 'teste', 'RS', 94838240, 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE IF NOT EXISTS `vaga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `areaVaga` varchar(45) NOT NULL,
  `grauEstudo` varchar(45) DEFAULT NULL,
  `requisitos` varchar(45) NOT NULL,
  `descricao` text NOT NULL,
  `salario` double NOT NULL,
  `beneficios` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`id`, `areaVaga`, `grauEstudo`, `requisitos`, `descricao`, `salario`, `beneficios`) VALUES
(1, 'aaa', 'aaa', 'aaa', 'aaa', 122, 'aaaa'),
(2, 'teste', 'teste', 'bkdasbkdskadksdkbjh', 'sydgyugdsagdgysud', 92222, 'ydgyuasydgysaudg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
