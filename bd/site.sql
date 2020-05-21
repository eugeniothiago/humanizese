-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 12/06/2015 às 19h24min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(500) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id`, `imagem`) VALUES
(1, '1.png'),
(2, '2.png'),
(3, '3.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `index`
--

CREATE TABLE IF NOT EXISTS `index` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `texto` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `index`
--

INSERT INTO `index` (`id`, `titulo`, `texto`) VALUES
(1, 'CONHEÇA O PROJETO', '        Visamos o estímulo de doações através da internet, facilitando o processo de comunicação entre quem doa e quem recebe. \r\n	Acreditamos que cada pessoa pode fazer a diferença, e juntos podemos trazer conforto e mobilidade para aqueles que precisam dela para viver melhor.\r\n	Uma sociedade solidária e atuante em função dos mais necessitados pode mudar uma nação inteira.\r\n	Faça seu cadastro e desfrute já de poder ajudar quem mais precisa.'),
(2, 'POR UM MUNDO MAIS HUMANO', 'Aqui você encontra equipamentos para portadores de deficiência física ou locomotiva. Você pode tanto anunciar seu produto como solicitar um deles diretamente com o doador.\r\n	Juntos, podemos ajudar muitas pessoas. Anuncie agora  e torne-se parte dessa mudança.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sexo` varchar(1) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(40) COLLATE utf8_bin NOT NULL,
  `nome` varchar(60) COLLATE utf8_bin NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(11) CHARACTER SET latin1 NOT NULL,
  `cidade` varchar(30) COLLATE utf8_bin NOT NULL,
  `estado` varchar(20) COLLATE utf8_bin NOT NULL,
  `data` varchar(10) CHARACTER SET latin1 NOT NULL,
  `endereco` varchar(40) COLLATE utf8_bin NOT NULL,
  `foto` varchar(1000) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=44 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `sexo`, `senha`, `nome`, `email`, `telefone`, `cidade`, `estado`, `data`, `endereco`, `foto`) VALUES
(38, '', 'admin', 'Administrador', 'admin@admin.com', '', '', '', '', '', ''),
(43, 'm', '123', 'Islan Del Rey', 'teste@teste.com', '', 'Ipanema', 'M', '1995-06-06', 'Rua Cantareira Lopez, 195', 'c00fc8658e52900ef60d4bad99eea27f.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `estado` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `descricao` varchar(1000) CHARACTER SET utf32 NOT NULL,
  `imagem` varchar(1000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `emailuser` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'identificação de quem postou o produto',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `estado`, `descricao`, `imagem`, `emailuser`) VALUES
(20, 'Muletas', 'Excelente', 'Um m', '079584ab482056ca8670c3b067d3ab46.jpg', 'teste@teste.com'),
(23, 'Aparelho Auditivo', 'Excelente', 'Manchado com cera de ouvido, porém 100% utilizável', '5177201ece0f7c23e537adcc836feec1.jpg', 'teste@teste.com'),
(24, 'Prótese ShadowRunner', 'Excelente', 'Prótese para esportistas, consulte especialista', '7255ba476f7b67da07dd7d362c738946.jpg', 'teste@teste.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
