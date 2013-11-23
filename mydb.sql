-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2013 at 01:45 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Table structure for table `areavagas`
--

CREATE TABLE IF NOT EXISTS `areavagas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `areavaga` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `areavagas`
--

INSERT INTO `areavagas` (`id`, `areavaga`) VALUES
(1, 'Analise e Desenvolvimento de Sistemas'),
(2, 'Analise de Sistemas'),
(3, 'Antropologia'),
(4, 'Arquitetura e Urbanismo'),
(5, 'Artes Visuais'),
(6, 'Auxiliar Administrativo'),
(7, 'Auxiliar Contabilidade'),
(8, 'Auxiliar Enfermagem'),
(9, 'Biologia'),
(10, 'Ciências Contábeis'),
(11, 'Design Interiores'),
(12, 'Design Moda'),
(13, 'Educação Física'),
(14, 'Ecologia'),
(15, 'Farmácia e Bioquimica'),
(16, 'Filosofia'),
(17, 'Fisica'),
(18, 'Gastronomia'),
(19, 'Geografia'),
(20, 'História'),
(21, 'Letras'),
(22, 'Marketing'),
(23, 'Pedagogia'),
(24, 'Tecnologia da Informação'),
(25, 'Web Design');

-- --------------------------------------------------------

--
-- Table structure for table `conhecimentos`
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
-- Table structure for table `empresa`
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
-- Dumping data for table `empresa`
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
-- Table structure for table `experiencias`
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
-- Table structure for table `interesses`
--

CREATE TABLE IF NOT EXISTS `interesses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_interesse` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loginempresa`
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
-- Table structure for table `loginusuario`
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
-- Table structure for table `usuario`
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
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `telefone`, `datanascimento`, `sexo`, `endereco`, `cidade`, `nomePai`, `nomeMae`, `estados`, `cep`, `areaAtuacao`) VALUES
(1, 'Teste', 'teste', 92291123, 16, 'F', 'jdausdksadbsad', 'Alvorada', 'teste', 'teste', 'RS', 94838240, 'teste');

-- --------------------------------------------------------

--
-- Table structure for table `vagas`
--

CREATE TABLE IF NOT EXISTS `vagas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `areavaga_id` int(11) NOT NULL,
  `grauestudo` varchar(250) NOT NULL,
  `requesito` varchar(250) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `salario` varchar(250) NOT NULL,
  `beneficio` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `areaVagaId_idx` (`areavaga_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `vagas`
--

INSERT INTO `vagas` (`id`, `areavaga_id`, `grauestudo`, `requesito`, `descricao`, `salario`, `beneficio`) VALUES
(1, 25, 'Técnico', 'Conhecimento em Photoshop', 'Trabalho com ferramentas adobe', '850', 'Vale Transporte,Alimentação no local'),
(2, 1, 'Estagiario', 'Conhecimento em tudo', 'Framework diversos e experiencia em tudo se não , não se candidate ', '1250', 'Vale Transporte,Alimentação no local'),
(3, 1, 'Mestrado', 'Conhecimento em Programação Java', 'Trabalho com Java Desktop', '950', 'Vale Transporte,Alimentação no local'),
(4, 1, 'Pós Graduação', 'Conhecimento em Programação C#', 'Trabalho com Java Desktop, Conhecimento em Programação C++, C, Pascal, Pascoa, Natal', '550', 'Vale Transporte,Alimentação no local'),
(5, 2, 'Pós Graduação', 'Conhecimento em analise de softwares', 'Trabalho com ferramentas diversar ...', '459', 'Vale Transporte,Alimentação no local'),
(6, 1, 'Especialista', 'Sabedoria e Conhecimento em Programação C++', 'Manejo com Front-End, experiencia em tudo se não , não se candidate', 'Á Combinar', 'Vale Transporte e Alimentação no Local'),
(7, 1, 'Estagiario', 'Vontade de Aprender', 'Manejo com ferramentas diversas no segmento', '250', 'Vale Gás'),
(8, 1, 'Estagiario', ' Determinação', 'PHP, MySQL', '250', 'Vale Refeição'),
(9, 1, 'Formado', ' Gente fina e apaixonado', ' Hibernate, Java, MySQL, ferramenta Net beans e Eclipse', '689', 'Vale Gás');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vagas`
--
ALTER TABLE `vagas`
  ADD CONSTRAINT `areaVagaId` FOREIGN KEY (`areavaga_id`) REFERENCES `areavagas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
