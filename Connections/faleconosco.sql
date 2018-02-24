-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Nov-2015 às 00:35
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `faleconosco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `controle`
--

CREATE TABLE IF NOT EXISTS `controle` (
  `idControle` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`idControle`),
  UNIQUE KEY `status` (`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3;

--
-- Extraindo dados da tabela `controle`
--

INSERT INTO `controle` (`idControle`, `status`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `idLinks` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `linkCurto` varchar(50) NOT NULL,
  PRIMARY KEY (`idLinks`),
  UNIQUE KEY `url` (`url`),
  UNIQUE KEY `linkCurto` (`linkCurto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `links`
--

INSERT INTO `links` (`idLinks`, `title`, `url`, `linkCurto`) VALUES
(2, 'SmartCar: Login', 'pags/login.php', 'login'),
(3, 'SmartCar: Fale Conosco', 'pags/faleconosco.php', 'faleconosco'),
(4, 'SmartCar: Servicos', 'pags/servicos.php', 'servicos'),
(5, 'SmartCar: Acessorios', 'pags/acessorios.php', 'acessorios'),
(6, 'SmartCar: Cadastre-se', 'pags/cadastro.php', 'cadastro'),
(7, 'SmartCar: O km', 'pags/carros.php', 'carros'),
(8, 'SmartCar: Doblo 2015', 'pags/conhecaseucarro/doblo2015.php', 'doblo2015'),
(14, 'SmartCar: Fiat 500 2015', 'pags/conhecaseucarro/fiat5002015.php', 'fiat5002015'),
(15, 'SmartCar: Queridinhos', 'Mostro.php', 'mostro'),
(16, 'SmartCar: Uno 2015', 'pags/conhecaseucarro/uno2015.php', 'uno2015'),
(17, 'SmartCar: Novo Uno 2015', 'pags/conhecaseucarro/novouno2015.php', 'novouno2015'),
(18, 'SmartCar: Novo Palio Fire 2015', 'pags/conhecaseucarro/novopaliofire2015.php', 'novopaliofire2015'),
(19, 'SmartCar: Novo Palio 2015', 'pags/conhecaseucarro/novopalio2015.php', 'novopalio2015'),
(20, 'SmartCar: Fiat 500 Abarth 2015', 'pags/conhecaseucarro/fiat500abarth2015.php', 'fiat500abarth2015'),
(21, 'SmartCar: Novo Bravo 2016', 'pags/conhecaseucarro/novobravo2016.php', 'novobravo2016'),
(22, 'SmartCar: Novo Punto 2016', 'pags/conhecaseucarro/novopunto2016.php', 'novopunto2016'),
(24, 'SmartCar: Grand Siena 2015', 'pags/conhecaseucarro/grandsiena2015.php', 'grandsiena2015'),
(25, 'SmartCar: Siena 2015', 'pags/conhecaseucarro/siena2015.php', 'siena2015'),
(26, 'SmartCar: Novo Linea 2016', 'pags/conhecaseucarro/novolinea2016.php', 'novolinea2016'),
(27, 'SmartCar: Weekend 2015', 'pags/conhecaseucarro/weekend2015.php', 'weekend2015'),
(28, 'SmartCar: Strada 2015', 'pags/conhecaseucarro/strada2015.php', 'strada2015'),
(29, 'SmartCar: Freemont 2015', 'pags/conhecaseucarro/freemont2015.php', 'freemont2015'),
(30, 'SmartCar: Idea 2015', 'pags/conhecaseucarro/idea2015.php', 'idea2015');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `idLogin` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`idLogin`),
  UNIQUE KEY `nivel` (`nivel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idLogin`, `nivel`) VALUES
(1, 0),
(2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu_cliente_vip`
--

CREATE TABLE IF NOT EXISTS `menu_cliente_vip` (
  `idMenuadmin` int(10) NOT NULL AUTO_INCREMENT,
  `Caminho` varchar(50) NOT NULL,
  `rotulo` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`idMenuadmin`),
  UNIQUE KEY `Caminho` (`Caminho`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `menu_cliente_vip`
--

INSERT INTO `menu_cliente_vip` (`idMenuadmin`, `Caminho`, `rotulo`, `title`) VALUES
(2, 'index.php', 'Home', 'Pagina inicial'),
(3, 'index.php?p=carros', '0 KM', 'Carros 0 KM'),
(4, 'index.php?p=servicos', 'Servicos', 'Nossos serviços'),
(5, 'index.php?p=acessorios', 'acessorios', 'Nossos Acessorios'),
(6, 'index.php?p=faleconosco', 'Fale Conosco', 'Duvidas, reclamações fale aqui '),
(7, 'index.php?p=login', 'Login', 'Faça Login'),
(9, 'index.php?p=mostro', 'Monte seu perfil', 'Escolha sua peças');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu_funcionario`
--

CREATE TABLE IF NOT EXISTS `menu_funcionario` (
  `idMenuadmin` int(10) NOT NULL AUTO_INCREMENT,
  `Caminho` varchar(50) NOT NULL,
  `rotulo` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`idMenuadmin`),
  UNIQUE KEY `Caminho` (`Caminho`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `menu_funcionario`
--

INSERT INTO `menu_funcionario` (`idMenuadmin`, `Caminho`, `rotulo`, `title`) VALUES
(2, 'index.php', 'Home', 'Pagina inicial'),
(3, 'index.php?p=carros', '0 KM', 'Carros 0 KM'),
(4, 'index.php?p=servicos', 'Servicos', 'Nossos serviços'),
(5, 'index.php?p=acessorios', 'Acessorios', 'Nossos Acessorios'),
(6, 'index.php?p=faleconosco', 'Fale Conosco', 'Duvidas, reclamações fale aqui '),
(7, 'index.php?p=login', 'Login', 'Faça Login'),
(9, 'index.php?p=mostro', 'Queridinhos', 'Escolha sua peças');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu_padrao`
--

CREATE TABLE IF NOT EXISTS `menu_padrao` (
  `idMenuadmin` int(10) NOT NULL AUTO_INCREMENT,
  `Caminho` varchar(50) NOT NULL,
  `rotulo` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`idMenuadmin`),
  UNIQUE KEY `Caminho` (`Caminho`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `menu_padrao`
--

INSERT INTO `menu_padrao` (`idMenuadmin`, `Caminho`, `rotulo`, `title`) VALUES
(2, 'index.php', 'Home', 'Pagina inicial'),
(3, 'index.php?p=carros', '0 KM', 'Carros 0 KM'),
(4, 'index.php?p=servicos', 'Servicos', 'Nossos serviços'),
(5, 'index.php?p=acessorios', 'Acessorios', 'Nossos Acessorios'),
(6, 'index.php?p=faleconosco', 'Fale Conosco', 'Duvidas, reclamações fale aqui '),
(7, 'index.php?p=login', 'Login', 'Faça Login'),
(8, 'index.php?p=cadastro', 'Cadastre-se', 'Faça seu  cadastro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `idPost` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `idControle` varchar(255) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `telefone` char(13) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY (`idPost`),
  UNIQUE KEY `idPost` (`idPost`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(65) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(65) NOT NULL,
  `cidade` varchar(65) NOT NULL,
  `fixo` varchar(65) NOT NULL,
  `celular` varchar(65) NOT NULL,
  `bairro` varchar(65) NOT NULL,
  `idLogin` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `email`, `senha`, `cidade`, `fixo`, `celular`, `bairro`, `idLogin`) VALUES
(1, 'Carlos Eduardo', 'eduardo191949@hotmail.com', 'dc599a9972fde3045dab59dbd1ae170b', 'Rio de Janeiro', '', '', 'Austin', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
