-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Mar-2019 às 22:03
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_igreja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aceitoujesus`
--

CREATE TABLE `aceitoujesus` (
  `id` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `niver` date NOT NULL,
  `cem` varchar(15) DEFAULT NULL,
  `cargo` varchar(15) DEFAULT NULL,
  `cadastro` date NOT NULL,
  `cadastrado` int(10) DEFAULT NULL,
  `aceit_reconc` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aceitoujesus`
--

INSERT INTO `aceitoujesus` (`id`, `nome`, `endereco`, `telefone`, `email`, `niver`, `cem`, `cargo`, `cadastro`, `cadastrado`, `aceit_reconc`) VALUES
(1, 'Bruno Orosco', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'analu.luz@hotmail.com', '0000-00-00', 'Seper', 'Líder', '2019-03-27', NULL, ''),
(2, 'Bruno Orosco', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'analu.luz@hotmail.com', '0000-00-00', 'Seper', 'Líder', '2019-03-27', NULL, ''),
(6, 'Bruno Orosco', 'rua Castanheira do Brejo, 136', '(11) 94071-4391', 'prdanielmorse@gmail.com1', '0000-00-00', 'Ajaxcity', 'Pastor', '2019-03-27', 1, ''),
(7, 'Jaqueline Tavares de Souza', 'av. ipes', '(11) 99835-5651', 'analu.luz@hotmail.com', '0000-00-00', 'Casais', 'Auxiliar', '2019-03-27', 1, ''),
(8, 'DANIEL MORSE', 'av. ipes', '(11) 94071-4391', 'prdanielmorse@gmail.com1', '0000-00-00', 'Lica', 'Líder', '2019-03-27', 1, ''),
(9, 'Bruno Orosco', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'analu.luz@hotmail.com', '0000-00-00', 'Lica', 'Supervisor', '1973-07-14', NULL, 'Aceitou'),
(10, 'Jaqueline Tavares de Souza', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'analu.luz@hotmail.com', '0000-00-00', 'Seper', 'Líder', '1973-07-14', NULL, 'Aceitou'),
(11, 'Bruno Orosco', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'analu.luz@hotmail.com', '1973-07-14', 'Lica', 'Auxiliar', '2019-02-20', NULL, 'Aceitou'),
(12, 'Bruno Orosco', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'brunoorosco@gmail.com', '1973-07-14', 'Seper', 'Líder', '2019-02-20', NULL, 'Reconciliou'),
(13, 'Bruno Orosco', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'muvicej@freehotmail.net', '1987-03-29', 'Casais', 'Anfitrião', '2019-02-20', NULL, 'Reconciliou');

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso`
--

CREATE TABLE `acesso` (
  `idmembro` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nivel_acesso` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`idmembro`, `username`, `password`, `nivel_acesso`) VALUES
(36, 'analu.luz@hotmail.com', '3c346c2b123f27bb40e63a1e70bb27775d467282', NULL),
(77, 'analu.luz@hotmail.com258', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL),
(45, 'analu.luz@hotmail.com4567', 'aa8de967198ad9096967f713cb78fb3403d5439d', NULL),
(39, 'analu.luz@hotmail.com54', '194a1bfc933341bef8a7f5d039a2327f6014a14c', NULL),
(48, 'analu.luz@hotmail.com543', 'a4115d73043708716e363c985bec038511645ee7', NULL),
(42, 'analu.luz@hotmail.com557567', '02c2e3fe65d73c84fc01fb4ef1ade4b46ac1a8e9', NULL),
(43, 'analu.luz@hotmail.com648', '812b12d53d773c12aac69f806b04111c71dfa408', NULL),
(52, 'analu.luz@hotmail.com6789', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL),
(51, 'analu.luz@hotmail.com685', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL),
(46, 'analu.luz@hotmail.com7897', 'b9475926e233577cdf33d27954dbf49b8c7a2352', NULL),
(56, 'analu.luz@hotmail.com852', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL),
(57, 'analu.luz@hotmail.com87', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL),
(75, 'analu.luz@hotmail.com8745', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL),
(41, 'analu.luz@hotmail.com945', 'af00846462b5e414e8bf3cf970049e11d6abb2d9', NULL),
(47, 'analu.luz@hotmail.comhj', '1df05a94e7c735d97e339dcbd9712cc3a73b7d32', NULL),
(90, 'analu.luz@hotmail.comi', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL),
(1, 'brunoorosco@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(40, 'brunoorosco@gmail.com1234', 'cf50cfb7933c23bdfa58006e7f988e78dab43820', NULL),
(54, 'brunoorosco@gmail.com369', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL),
(76, 'brunoorosco@gmail.com852147', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL),
(74, 'brunoorosco@gmail.com9858', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL),
(79, 'brunoorosco@gmail.comjh', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL),
(37, 'muvicej@freehotmail.net132', 'a2d78249966807ea8e110c7e7c48898642275b44', NULL),
(38, 'prdanielmorse@gmail.com187', '10ad64aaa2153dbc809a096f56f3dc7021e36938', NULL),
(44, 'prdanielmorse@gmail.com1897', 'bf626070e1b38398aca4ccb3e6461256d46c0be4', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `apoio_db`
--

CREATE TABLE `apoio_db` (
  `id` int(10) NOT NULL,
  `membro` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `niver` date NOT NULL,
  `cargo` varchar(15) NOT NULL,
  `cem` varchar(15) NOT NULL,
  `cadastro` date NOT NULL,
  `aceit_reconc` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `idCursos` int(10) NOT NULL,
  `nomeAluno` varchar(50) NOT NULL,
  `chamada` tinyint(1) NOT NULL,
  `dataAula` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `depart_db`
--

CREATE TABLE `depart_db` (
  `id` int(10) NOT NULL,
  `departamento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `depart_db`
--

INSERT INTO `depart_db` (`id`, `departamento`) VALUES
(1, 'kids'),
(2, 'Quatro Seres'),
(3, 'treinamento'),
(4, 'encontro'),
(7, 'secretaria'),
(8, 'apoio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `encontrista`
--

CREATE TABLE `encontrista` (
  `idEncontrista` int(10) NOT NULL,
  `nomeEnc` varchar(45) NOT NULL,
  `telEnc` varchar(15) NOT NULL,
  `amigo1` varchar(20) NOT NULL,
  `telEncamigo1` varchar(15) NOT NULL,
  `amigo2` varchar(20) NOT NULL,
  `telEncamigo2` varchar(15) NOT NULL,
  `endEnc` varchar(50) NOT NULL,
  `emailEnc` varchar(40) NOT NULL,
  `sexoEnc` varchar(10) NOT NULL,
  `CEM` varchar(25) NOT NULL,
  `nascEnc` date NOT NULL,
  `cadastrado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `encontrista`
--

INSERT INTO `encontrista` (`idEncontrista`, `nomeEnc`, `telEnc`, `amigo1`, `telEncamigo1`, `amigo2`, `telEncamigo2`, `endEnc`, `emailEnc`, `sexoEnc`, `CEM`, `nascEnc`, `cadastrado`) VALUES
(1, 'Bruno Orosco', '(11) 94071-4391', 'João', '(11) 94071-4391', 'Maria', '(25) 13688-8', 'Rua Gupeva,56, São Miguel Paulista', 'brunoorosco@gmail.com', 'Masculino', '', '1987-03-29', '2019-02-17 10:56:06'),
(2, 'Ana Lucia', '(11) 1111-11111', '', '(11) 1111-11111', '', '(11) 1111-11111', 'R.: Gupeva, 56', 'ana@teste', 'Feminino', 'Lica', '1973-07-14', '2019-02-17 10:56:06'),
(3, 'Fulano', '(11) 1111-11111', '', '(11) 1111-11111', '', '(11) 1111-11111', 'guaba', 'teste@teste', 'masculino', 'Teste', '2019-02-04', '2019-02-17 10:56:06'),
(4, 'Eva', '(11) 1111-11111', '', '(11) 1111-11111', '', '(11) 1111-11111', 'Muros de Ouro', 'eva@adao', 'Feminino', 'Deus', '2019-02-20', '2019-02-17 10:56:06'),
(7, 'Ana Lucia', '(11) 99835-5690', 'Jota', '(11) 11111-1111', 'BE', '(22) 22222-2222', 'rua Gupeva, 56 Vila Curuça', 'analu.luz@hotmail.com', 'Feminino', 'Lica', '1969-06-16', '2019-03-10 00:29:05'),
(8, 'DANIEL MORSE', '(11) 94829-7524', 'Jota', '(11) 11111-1111', 'BE', '(22) 22222-2222', 'rua Gupeva, 56 Vila Curuça', 'prdanielmorse@gmail.com', 'Masculino', 'Lica', '1968-06-16', '2019-03-10 00:31:57'),
(9, 'Jaqueline Tavares de Souza', '(11) 97203-2556', 'Jota', '(11) 11111-1111', 'BE', '(55) 11447-8981', 'rua Castanheira do Brejo, 136', 'muvicej@freehotmail.net', 'Feminino', 'Lica', '1981-09-20', '2019-03-10 00:33:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `inicioevento` datetime NOT NULL,
  `terminoevento` datetime NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `inicioevento`, `terminoevento`, `color`) VALUES
(1, 'reuniao', '2019-03-02 00:00:00', '2019-02-02 00:00:00', '#efefef'),
(3, 'Escola de Profetas', '2019-03-03 00:00:00', '2019-03-03 00:00:00', '#ff8000'),
(5, 'Discipulado', '2019-02-04 00:00:00', '2019-02-06 00:00:00', '#ff0000'),
(8, 'Escola de Profetas', '2019-02-09 00:00:00', '2019-02-15 00:00:00', '#00ff40'),
(11, 'Escola de Profetas', '2019-03-20 00:00:00', '2019-03-26 00:00:00', '#00ffff'),
(21, 'Discipulado', '2019-04-20 00:00:00', '2019-04-21 00:00:00', '#0071c5'),
(22, 'Escola de Profetas', '2019-03-08 19:30:00', '2019-03-09 22:00:00', '#40E0D0'),
(23, 'Escola de Profetas', '2019-02-25 00:00:00', '2019-02-28 00:00:00', '#0071c5'),
(24, 'teste evento', '2019-03-11 20:00:00', '2019-03-11 22:00:00', '#FFD700');

-- --------------------------------------------------------

--
-- Estrutura da tabela `infocursos`
--

CREATE TABLE `infocursos` (
  `idCursos` int(10) NOT NULL,
  `nomeCursos` varchar(50) NOT NULL,
  `tema` varchar(40) NOT NULL,
  `data_` date NOT NULL,
  `resp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `infocursos`
--

INSERT INTO `infocursos` (`idCursos`, `nomeCursos`, `tema`, `data_`, `resp`) VALUES
(1, 'Escola de Profetas', 'Escatologia', '2019-05-20', ''),
(2, 'Discipulado', 'teste', '2019-03-11', ''),
(3, 'Escola de Profeta', 'Geografia Biblica', '2019-03-12', ''),
(4, 'Discipulado', 'Visao', '2019-05-15', ''),
(5, 'Escola de Profeta', 'Nossa Visão', '2019-03-11', ''),
(6, 'Escola de Profeta', 'Nossa Visão', '2019-03-12', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `membros`
--

CREATE TABLE `membros` (
  `idmembros` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `nasc` date NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `supervisao` varchar(45) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `membros`
--

INSERT INTO `membros` (`idmembros`, `nome`, `nasc`, `endereco`, `telefone`, `supervisao`, `cargo`, `email`, `cadastro`) VALUES
(1, 'Bruno Orosco', '1987-03-29', 'gupeva, 56', '11940714391', 'Lica', 'Lider', 'brunoorosco@gmail.com', '2019-01-26 12:40:36'),
(2, 'Orosco', '0000-00-00', 'Rua Gupeva,56', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco@gmail.com', '2019-01-26 12:40:36'),
(3, 'Roberta Orosco', '0000-00-00', 'R. Gupeva', '(11) 25136-888', 'Lica', 'Líder', 'r.luzorosco@gmail.com', '2019-01-26 12:40:36'),
(5, 'FUlano', '1970-01-01', 'ciclano', '(11) 11111-1111', 'Seper', 'Auxiliar', 'brubbdf@teste.com', '2019-01-27 15:11:25'),
(6, 'kuka', '1987-03-29', 'Rua Gupeva,56, São Miguel Paulista', '(11) 94071-4391', 'Ajaxcity', 'Pastor', 'brunoorosco@gmail.com', '2019-02-03 14:57:16'),
(7, 'bruno 1', '1970-01-01', 'Rua Gupeva,56, São Miguel Paulista', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco@gmail.com', '2019-02-05 21:43:52'),
(8, 'teste', '2019-02-11', 'teste', '11998355651', 'Casais', 'Membro', 'brurru@gmail.com', '2019-02-22 21:12:42'),
(9, 'scholl1', '1970-01-01', 'av. ipes', '(11) 94071-4391', 'lica', 'Membro', 'fifehadaga@directmail24.net', '2019-03-01 21:29:31'),
(10, 'joao', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco123@gmail.com', '2019-03-03 20:25:42'),
(11, 'Escola de Profetas', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco12.@gmail.com', '2019-03-03 20:25:54'),
(12, 'joseph', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco@gmail.com12', '2019-03-03 20:33:29'),
(13, 'apple', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco@gmail.com123', '2019-03-04 02:57:34'),
(36, 'Ana Lucia', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', '2', 'analu.luz@hotmail.com', '2019-03-09 23:59:33'),
(37, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'muvicej@freehotmail.net132', '2019-03-30 18:06:25'),
(38, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'prdanielmorse@gmail.com187', '2019-03-30 18:06:47'),
(39, 'DANIEL MORSE', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com54', '2019-03-30 18:07:59'),
(40, 'Bruno Orosco', '1981-09-20', 'rua Castanheira do Brejo, 136', '(11) 94071-4391', 'Lica', '', 'brunoorosco@gmail.com1234', '2019-03-30 18:09:59'),
(41, 'Jaqueline Tavares de Souza', '1981-09-20', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com945', '2019-03-30 18:13:56'),
(42, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com557567', '2019-03-30 18:17:32'),
(43, 'Jaqueline Tavares de Souza', '1973-07-14', 'rua Castanheira do Brejo, 136', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com648', '2019-03-30 18:20:45'),
(44, 'Bruno Orosco', '1981-09-20', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Supervisor', 'prdanielmorse@gmail.com1897', '2019-03-30 18:21:18'),
(45, 'Jaqueline Tavares de Souza', '1981-09-20', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com4567', '2019-03-30 18:48:37'),
(46, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com7897', '2019-03-30 18:50:18'),
(47, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.comhj', '2019-03-30 21:09:06'),
(48, 'Bruno Orosco', '1981-09-20', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Lica', 'Líder', 'analu.luz@hotmail.com543', '2019-03-30 21:10:59'),
(49, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'brunoorosco@gmail.com98', '2019-03-30 21:21:31'),
(50, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com658', '2019-03-30 21:58:36'),
(51, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com685', '2019-03-30 22:02:07'),
(52, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com6789', '2019-03-30 22:03:10'),
(54, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'brunoorosco@gmail.com369', '2019-03-30 22:07:22'),
(55, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com669', '2019-03-30 22:12:14'),
(56, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com852', '2019-03-30 22:13:07'),
(57, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com87', '2019-03-30 22:20:22'),
(58, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com9874', '2019-03-30 22:27:58'),
(59, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com987487', '2019-03-30 22:28:15'),
(60, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com854', '2019-03-30 22:29:07'),
(61, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com8541', '2019-03-30 22:29:24'),
(62, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com85415', '2019-03-30 22:29:45'),
(63, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com854158', '2019-03-30 22:30:12'),
(64, 'Jaqueline Tavares de Souza', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'brunoorosco@gmail.com854', '2019-03-30 22:30:28'),
(65, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com741', '2019-03-30 22:30:50'),
(66, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com7412', '2019-03-30 22:32:15'),
(67, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com74128', '2019-03-30 22:33:28'),
(68, 'Bruno Orosco', '1981-09-20', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'muvicej@freehotmail.net987', '2019-03-30 22:33:42'),
(69, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'brunoorosco@gmail.com654', '2019-03-30 22:34:44'),
(70, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Bispo', 'analu.luz@hotmail.com584', '2019-03-30 22:35:37'),
(71, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Bispo', 'analu.luz@hotmail.com5841', '2019-03-30 22:36:16'),
(72, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Bispo', 'analu.luz@hotmail.com58418', '2019-03-30 22:39:35'),
(73, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'brunoorosco@gmail.com985', '2019-03-30 22:39:58'),
(74, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'brunoorosco@gmail.com9858', '2019-03-30 22:41:14'),
(75, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com8745', '2019-03-30 22:43:17'),
(76, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'brunoorosco@gmail.com852147', '2019-03-30 22:44:18'),
(77, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com258', '2019-03-30 22:52:59'),
(78, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Bispo', 'analu.luz@hotmail.comdf', '2019-03-31 14:52:16'),
(79, 'Bruno Orosco', '1981-09-20', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Pastor', 'brunoorosco@gmail.comjh', '2019-03-31 14:53:26'),
(80, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Supervisor', 'brunoorosco@gmail.xn--coml-2oa', '2019-03-31 14:54:39'),
(81, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'prdanielmorse@gmail.com1jk', '2019-03-31 14:54:55'),
(82, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.comssdfgfd', '2019-03-31 15:45:47'),
(83, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com2555', '2019-03-31 19:01:24'),
(84, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Bispo', 'brunoorosco@gmail.com3215', '2019-03-31 19:03:02'),
(85, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Bispo', 'analu.luz@hotmail.com54353', '2019-03-31 19:05:04'),
(86, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Pastor', 'analu.luz@hotmail.comcd', '2019-03-31 19:07:14'),
(87, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Bispo', 'analu.luz@hotmail.combg', '2019-03-31 19:07:48'),
(88, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Bispo', 'brunoorosco@gmail.comkj', '2019-03-31 19:08:54'),
(89, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.comiu', '2019-03-31 19:13:14'),
(90, 'Bruno Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', 'Pastor', 'analu.luz@hotmail.comi', '2019-03-31 19:13:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_acesso`
--

CREATE TABLE `nivel_acesso` (
  `id` int(10) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nivel_acesso`
--

INSERT INTO `nivel_acesso` (`id`, `nivel`) VALUES
(1, 'administrador'),
(2, 'administrativo'),
(3, 'Básico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `testeapp`
--

CREATE TABLE `testeapp` (
  `id` int(10) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `testeapp`
--

INSERT INTO `testeapp` (`id`, `nome`, `email`) VALUES
(1, 'Bruno', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `alunos` int(10) NOT NULL,
  `curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`alunos`, `curso`) VALUES
(36, 1),
(13, 1),
(2, 4),
(11, 2),
(5, 2),
(3, 2),
(9, 2),
(8, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aceitoujesus`
--
ALTER TABLE `aceitoujesus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acesso`
--
ALTER TABLE `acesso`
  ADD PRIMARY KEY (`username`),
  ADD KEY `acesso_fk_1` (`idmembro`);

--
-- Indexes for table `apoio_db`
--
ALTER TABLE `apoio_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depart_db`
--
ALTER TABLE `depart_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `encontrista`
--
ALTER TABLE `encontrista`
  ADD PRIMARY KEY (`idEncontrista`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infocursos`
--
ALTER TABLE `infocursos`
  ADD PRIMARY KEY (`idCursos`);

--
-- Indexes for table `membros`
--
ALTER TABLE `membros`
  ADD PRIMARY KEY (`idmembros`),
  ADD KEY `email_index` (`email`),
  ADD KEY `fk_nome` (`nome`);

--
-- Indexes for table `nivel_acesso`
--
ALTER TABLE `nivel_acesso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testeapp`
--
ALTER TABLE `testeapp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD KEY `alunos` (`alunos`),
  ADD KEY `curso` (`curso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aceitoujesus`
--
ALTER TABLE `aceitoujesus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `apoio_db`
--
ALTER TABLE `apoio_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `depart_db`
--
ALTER TABLE `depart_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `encontrista`
--
ALTER TABLE `encontrista`
  MODIFY `idEncontrista` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `infocursos`
--
ALTER TABLE `infocursos`
  MODIFY `idCursos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `membros`
--
ALTER TABLE `membros`
  MODIFY `idmembros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `testeapp`
--
ALTER TABLE `testeapp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acesso`
--
ALTER TABLE `acesso`
  ADD CONSTRAINT `acesso_fk_1` FOREIGN KEY (`idmembro`) REFERENCES `membros` (`idmembros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`alunos`) REFERENCES `membros` (`idmembros`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `turma_ibfk_2` FOREIGN KEY (`curso`) REFERENCES `infocursos` (`idCursos`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
