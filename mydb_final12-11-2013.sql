/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.34 : Database - mydb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mydb` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `mydb`;

/*Table structure for table `areavagas` */

DROP TABLE IF EXISTS `areavagas`;

CREATE TABLE `areavagas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `areavaga` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

/*Data for the table `areavagas` */

insert  into `areavagas`(`id`,`areavaga`) values (1,'Analise e Desenvolvimento de Sistemas'),(2,'Analise de Sistemas'),(3,'Antropologia'),(4,'Arquitetura e Urbanismo'),(5,'Artes Visuais'),(6,'Auxiliar Administrativo'),(7,'Auxiliar Contabilidade'),(8,'Auxiliar Enfermagem'),(9,'Biologia'),(10,'Ciências Contábeis'),(11,'Design Interiores'),(12,'Design Moda'),(13,'Educação Física'),(14,'Ecologia'),(15,'Farmácia e Bioquimica'),(16,'Filosofia'),(17,'Fisica'),(18,'Gastronomia'),(19,'Geografia'),(20,'História'),(21,'Letras'),(22,'Marketing'),(23,'Pedagogia'),(24,'Tecnologia da Informação'),(25,'Web Design');

/*Table structure for table `conhecimentos` */

DROP TABLE IF EXISTS `conhecimentos`;

CREATE TABLE `conhecimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_qualidade` text NOT NULL,
  `nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `conhecimentos` */

/*Table structure for table `empresa` */

DROP TABLE IF EXISTS `empresa`;

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeEmpresa` varchar(45) NOT NULL,
  `areaAtuacao` varchar(45) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `cnpj` int(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `empresa` */

insert  into `empresa`(`id`,`nomeEmpresa`,`areaAtuacao`,`telefone`,`email`,`cnpj`) values (1,'a','a',1111,'a',1111),(2,'Alalal','Alalal',2147483647,'Jhajhajahaj',2147483647),(3,'teste','teste',92291123,'dyeni_souza@hotmail.com',2147483647),(4,'fff','fff',92291123,'dyeni.souza@gmail.com',66666666),(9,'aaaa','dddd',92291123,'dyeni.souza@gmail.com',66666666),(10,'aaaa','dddd',92291123,'dyeni.souza@gmail.com',66666666),(11,'teste','teste',92291123,'sudhushdu',0);

/*Table structure for table `experiencias` */

DROP TABLE IF EXISTS `experiencias`;

CREATE TABLE `experiencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `experiencia1` text,
  `experiencias2` text,
  `experiencias3` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `experiencias` */

/*Table structure for table `interesses` */

DROP TABLE IF EXISTS `interesses`;

CREATE TABLE `interesses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_interesse` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `interesses` */

/*Table structure for table `loginempresa` */

DROP TABLE IF EXISTS `loginempresa`;

CREATE TABLE `loginempresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `senha` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='				';

/*Data for the table `loginempresa` */

/*Table structure for table `loginusuario` */

DROP TABLE IF EXISTS `loginusuario`;

CREATE TABLE `loginusuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Login_UNIQUE` (`login`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `loginusuario` */

/*Table structure for table `tshaped` */

DROP TABLE IF EXISTS `tshaped`;

CREATE TABLE `tshaped` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `css_top` varchar(20) DEFAULT NULL,
  `css_left` varchar(20) DEFAULT NULL,
  `css_fonte` varchar(20) DEFAULT NULL,
  `css_size` varchar(20) DEFAULT NULL,
  `id_usuario` int(10) DEFAULT NULL,
  `tp_conhecimento` int(11) DEFAULT NULL,
  `texto` varchar(220) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Data for the table `tshaped` */

insert  into `tshaped`(`id`,`css_top`,`css_left`,`css_fonte`,`css_size`,`id_usuario`,`tp_conhecimento`,`texto`) values (1,'-9px','8px','\'Comic Sans MS\', cur','45px',1,0,'Cinema'),(3,'0px','361px','\'Courier New\', Couri','45px',1,0,'Dormir'),(4,'65px','132px','Tahoma, Geneva, sans','30px',1,0,'Java'),(5,'48px','303px','Tahoma, Geneva, sans','45px',1,0,'Comer'),(6,'62px','224px','Tahoma, Geneva, sans','20px',1,0,'.NET'),(7,'21px','218px','\'Comic Sans MS\', cur','20px',1,0,'Correr'),(8,'118px','62px','Tahoma, Geneva, sans','30px',1,1,'Javscript'),(9,'54px','22px','Tahoma, Geneva, sans','30px',1,1,'AnÃ¡lise'),(10,'177px','-20px','\'Comic Sans MS\', cur','30px',1,1,'GerÃªncia'),(11,'294.5px','13.5px','Tahoma, Geneva, sans','45px',1,1,'Php'),(12,'254px','44px','\'Courier New\', Couri','30px',1,1,'Jquery'),(13,'147.5px','-21.5px','Tahoma, Geneva, sans','45px',NULL,1,'Tshaped 2 teste'),(14,'34px','180px','Tahoma, Geneva, sans','20px',NULL,0,'Tshaped 2 teste'),(15,'147.5px','-21.5px','Tahoma, Geneva, sans','45px',NULL,1,'Tshaped 2 teste'),(16,'34px','180px','Tahoma, Geneva, sans','20px',NULL,0,'Tshaped 2 teste'),(17,'164.5px','28.5px','Tahoma, Geneva, sans','20px',NULL,1,'rwarawa'),(18,'45px','239px','Tahoma, Geneva, sans','20px',NULL,0,'rwara'),(19,'57px','96px','Tahoma, Geneva, sans','45px',NULL,0,'awdawdwadawd'),(20,'28px','191px','Tahoma, Geneva, sans','30px',NULL,0,'awdawd'),(21,'38px','233px','Tahoma, Geneva, sans','20px',2,0,'wadawd');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` varchar(200) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`nome`,`email`,`telefone`,`datanascimento`,`sexo`,`endereco`,`cidade`,`nomePai`,`nomeMae`,`estados`,`cep`,`areaAtuacao`) values (1,'Eduardo Brandes','eduardocbrandes@gmail.com','(51) 9362-0491',28,'M','Liberal ','Porto Alegre','Gilberto','FÃ¡tima','RS',91920,'TI'),(2,'Eduardo Brandes 2','eduardocbrandes@stefanini.com','(51) 9362-0495',28,'M','Liberal ','Porto Alegre','Gilberto','FÃ¡tima','RS',91920,'TI');

/*Table structure for table `vagas` */

DROP TABLE IF EXISTS `vagas`;

CREATE TABLE `vagas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `areavaga_id` int(11) NOT NULL,
  `grauestudo` varchar(250) NOT NULL,
  `requisito` varchar(250) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `salario` varchar(250) NOT NULL,
  `beneficio` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `areaVagaId_idx` (`areavaga_id`),
  CONSTRAINT `areaVagaId` FOREIGN KEY (`areavaga_id`) REFERENCES `areavagas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `vagas` */

insert  into `vagas`(`id`,`areavaga_id`,`grauestudo`,`requisito`,`descricao`,`salario`,`beneficio`) values (1,25,'Técnico','Conhecimento em Photoshop','Trabalho com ferramentas adobe','850','Vale Transporte,Alimentação no local'),(2,1,'Estagiario','Conhecimento em tudo','Framework diversos e experiencia em tudo se não , não se candidate ','1250','Vale Transporte,Alimentação no local'),(3,1,'Mestrado','Conhecimento em Programação Java','Trabalho com Java Desktop','950','Vale Transporte,Alimentação no local'),(4,1,'Pós Graduação','Conhecimento em Programação C#','Trabalho com Java Desktop, Conhecimento em Programação C++, C, Pascal, Pascoa, Natal','550','Vale Transporte,Alimentação no local'),(5,2,'Pós Graduação','Conhecimento em analise de softwares','Trabalho com ferramentas diversar ...','459','Vale Transporte,Alimentação no local'),(6,1,'Especialista','Sabedoria e Conhecimento em Programação C++','Manejo com Front-End, experiencia em tudo se não , não se candidate','Á Combinar','Vale Transporte e Alimentação no Local'),(7,1,'Estagiario','Vontade de Aprender','Manejo com ferramentas diversas no segmento','250','Vale Gás'),(8,1,'Estagiario',' Determinação','PHP, MySQL','250','Vale Refeição'),(9,1,'Formado',' Gente fina e apaixonado',' Hibernate, Java, MySQL, ferramenta Net beans e Eclipse','689','Vale Gás'),(10,6,'kjsadkah','khdjkahdkj','jhjkahdkjahd','',''),(11,6,'kjsadkah','khdjkahdkj','jhjkahdkjahd','',''),(12,6,'kjsadkah','khdjkahdkj','jhjkahdkjahd','',''),(13,9,'Mestrado','Ser mara e ser diva.','Mexer nus bixo.','100','hahahaha'),(14,12,'zskjzdklasjd','','','','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
