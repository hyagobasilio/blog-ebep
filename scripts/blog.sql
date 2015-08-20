-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 20-Ago-2015 às 07:24
-- Versão do servidor: 5.5.44-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(1, 'Educação'),
(2, 'Entretenimento'),
(3, 'Esporte');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `conteudo` longtext COLLATE utf8_unicode_ci,
  `data_postagem` datetime DEFAULT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `conteudo`, `data_postagem`, `id_categoria`) VALUES
(1, 'Homem aranha sofre acidente', 'Por volta das 10h30, a moeda norte-americana avançava 2,12%, a R$ 3,2942 na venda, após marcar na véspera a maior alta em quase dois meses. Veja cotação.\r\nÉ a maior alta desde 19 de março, quando o dólar fechou em R$ 3,2965. Antes disso, a maior cotação do dólar foi registrada em abril de 2003.\r\n\r\nMais tarde, o Banco Central dará continuidade à rolagem dos swaps cambiais que vencem em agosto, com oferta de até 6 mil contratos, equivalentes a venda futura de dólares.\r\nNa véspera, o dólar avançou 1,65% frente ao real, a R$ 3,2257 na venda. Na semana e no mês, a moeda acumula alta de 1% e 3,76%, respectivamente. No ano, a valorização é de 21,33%.\r\nPor volta das 10h30, a moeda norte-americana avançava 2,12%, a R$ 3,2942 na venda, após marcar na véspera a maior alta em quase dois meses. Veja cotação.\r\nÉ a maior alta desde 19 de março, quando o dólar fechou em R$ 3,2965. Antes disso, a maior cotação do dólar foi registrada em abril de 2003.\r\n\r\nMais tarde, o Banco Central dará continuidade à rolagem dos swaps cambiais que vencem em agosto, com oferta de até 6 mil contratos, equivalentes a venda futura de dólares.\r\nNa véspera, o dólar avançou 1,65% frente ao real, a R$ 3,2257 na venda. Na semana e no mês, a moeda acumula alta de 1% e 3,76%, respectivamente. No ano, a valorização é de 21,33%.', '2015-07-22 00:00:00', 2),
(2, 'Batman e Robin são pegos roubando banco', 'asdfasjdfklçjasdlçkfjkljkl', '0000-00-00 00:00:00', 1),
(3, 'Estou aprendendo php', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae doloremque repudiandae atque possimus minima illo molestias ipsum molestiae enim, veritatis non ut. Excepturi porro sunt ea, eius, eligendi sint blanditiis!', NULL, 0),
(4, 'Estou aprendendo php', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae doloremque repudiandae atque possimus minima illo molestias ipsum molestiae enim, veritatis non ut. Excepturi porro sunt ea, eius, eligendi sint blanditiis!', '0000-00-00 00:00:00', 0),
(6, 'hyago', 'hyaoijfajsd kllk', '2015-07-30 10:44:01', 1),
(12, 'Hyago Gostoso', 'lindo tesão', '2015-08-10 08:15:26', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_UNIQUE` (`login`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `email`, `senha`) VALUES
(6, 'hyago', 'hyagobasilio', 'hyagohba@gmail.com', '123456'),
(7, 'hyago', 'asdfasdf', 'hyagoh12@gmail.com', '123212');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
