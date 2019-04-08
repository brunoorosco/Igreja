-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Abr-2019 às 21:56
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

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
  `endereco` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `niver` date DEFAULT NULL,
  `cem` varchar(15) DEFAULT NULL,
  `cargo` varchar(15) DEFAULT NULL,
  `cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cadastrado` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso`
--

CREATE TABLE `acesso` (
  `idmembro` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nivel_acesso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`idmembro`, `username`, `password`, `nivel_acesso`) VALUES
(54, 'analu.luz', '7c4a8d09ca3762af61e59520943dc26494f8941b', 5),
(36, 'analu.luz@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2),
(53, 'brunoorosco', '7c4a8d09ca3762af61e59520943dc26494f8941b', 4),
(1, 'brunoorosco@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(53, 'pastor@pastor', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `idTurma` int(11) NOT NULL,
  `aluno` int(11) NOT NULL,
  `dataCadastro` date NOT NULL,
  `respCadastro` int(11) NOT NULL
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
-- Estrutura da tabela `encontrista`
--

CREATE TABLE `encontrista` (
  `idEncontrista` int(10) NOT NULL,
  `nomeEnc` varchar(45) NOT NULL,
  `telEnc` varchar(15) DEFAULT NULL,
  `endEnc` varchar(50) DEFAULT NULL,
  `sexoEnc` varchar(10) NOT NULL,
  `CEM` varchar(25) DEFAULT NULL,
  `nascEnc` date DEFAULT NULL,
  `cadastrado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `observacao` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `encontrista`
--

INSERT INTO `encontrista` (`idEncontrista`, `nomeEnc`, `telEnc`, `endEnc`, `sexoEnc`, `CEM`, `nascEnc`, `cadastrado`, `observacao`) VALUES
(1, 'Bruno Orosco', '(11) 94071-4391', 'Rua Gupeva,56, São Miguel Paulista', 'Masculino', '', '1987-03-29', '2019-02-17 10:56:06', 'Maria'),
(2, 'Ana Lucia', '(11) 1111-11111', 'R.: Gupeva, 56', 'Feminino', 'Lica', '1973-07-14', '2019-02-17 10:56:06', ''),
(3, 'Fulano', '(11) 1111-11111', 'guaba', 'masculino', 'Teste', '2019-02-04', '2019-02-17 10:56:06', ''),
(4, 'Eva', '(11) 1111-11111', 'Muros de Ouro', 'Feminino', 'Deus', '2019-02-20', '2019-02-17 10:56:06', ''),
(7, 'Ana Lucia', '(11) 99835-5690', 'rua Gupeva, 56 Vila Curuça', 'Feminino', 'Lica', '1969-06-16', '2019-03-10 00:29:05', 'BE'),
(8, 'DANIEL MORSE', '(11) 94829-7524', 'rua Gupeva, 56 Vila Curuça', 'Masculino', 'Lica', '1968-06-16', '2019-03-10 00:31:57', 'BE'),
(9, 'Jaqueline Tavares de Souza', '(11) 97203-2556', 'rua Castanheira do Brejo, 136', 'Feminino', 'Lica', '1981-09-20', '2019-03-10 00:33:31', 'BE');

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
(1, 'Escola de Profetas', 'Escatologia', '1970-01-01', ''),
(2, 'Discipulado', 'teste', '0000-00-00', ''),
(3, 'Escola de Profeta', 'Geografia Biblica', '2019-03-12', ''),
(4, 'Discipulado', 'Visao', '2019-05-15', ''),
(5, 'Escola de Profeta', 'Nossa Visão', '2019-03-11', ''),
(6, 'Escola de Profeta', 'Nossa Visão', '2019-03-12', NULL),
(7, 'Escola de Profeta', 'Escatologia teste', '2019-05-15', NULL),
(8, 'Discipulado', 'Teologia', '2019-05-15', NULL);

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
(6, 'Alemanha1', '1987-03-29', 'Rua Gupeva,56, São Miguel Paulista', '(11) 94071-4391', 'Ajaxcity', 'Pastor', 'brunoorosco@gmail.com', '2019-02-03 14:57:16'),
(7, 'Brasil', '1970-01-01', 'Rua Gupeva,56, São Miguel Paulista', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco@gmail.com', '2019-02-05 21:43:52'),
(8, 'teste', '2019-02-11', 'teste', '11998355651', '', 'Membro', 'brurru@gmail.com', '2019-02-22 21:12:42'),
(9, 'josh', '1970-01-01', 'av. ipes', '(11) 94071-4391', 'lica', 'Membro', 'fifehadaga@directmail24.net', '2019-03-01 21:29:31'),
(10, 'FErnando', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco123@gmail.com', '2019-03-03 20:25:42'),
(11, 'Escola de Profetas', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco12.@gmail.com', '2019-03-03 20:25:54'),
(12, 'McDonalds', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco@gmail.com12', '2019-03-03 20:33:29'),
(13, 'Burger King', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco@gmail.com123', '2019-03-04 02:57:34'),
(36, 'Ana Lucia', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 99835-5651', 'Lica', '2', 'analu.luz@hotmail.com', '2019-03-09 23:59:33'),
(50, 'Habiibs', '2000-03-29', 'correia de andrade, 232', '(11) 94829-7524', 'Lica', 'Pastor', 'bruno.orosco@sp.senai.br', '2019-04-04 16:39:53'),
(51, 'Habiibs', '2000-03-29', 'correia de andrade, 232', '(11) 94829-7524', 'Lica', 'Pastor', 'bruno.orosco@sp.senai.br354', '2019-04-04 16:40:12'),
(52, 'Bruno Orosco', '2000-03-29', 'correia de andrade, 232', '(11) 94829-7524', 'Lica', 'Pastor', 'bruno.orosco@sp.senai.br654', '2019-04-04 16:40:48'),
(53, 'Bruno Orosco', '2000-03-29', 'correia de andrade, 232', '(11) 11111-1111', 'Lica', 'Supervisor', 'bruno.orosco@sp.senai.br852147', '2019-04-04 16:42:20'),
(54, 'Bruno Orosco', '1981-09-20', 'correia de andrade, 232', '(11) 94829-7524', 'Lica', 'Pastor', 'pastor@pastor', '2019-04-04 16:43:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_acesso`
--

CREATE TABLE `nivel_acesso` (
  `id` int(10) NOT NULL,
  `nivel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nivel_acesso`
--

INSERT INTO `nivel_acesso` (`id`, `nivel`) VALUES
(1, 'Administrativo'),
(2, 'Supervisor'),
(3, 'Pastor'),
(4, 'secretariaEnc'),
(5, 'Apoio');

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
  `id` int(11) NOT NULL,
  `alunos` int(10) NOT NULL,
  `curso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id`, `alunos`, `curso`) VALUES
(3, 7, 4),
(4, 5, 3),
(9, 11, 2),
(10, 12, 2),
(11, 8, 2),
(15, 10, 2),
(16, 9, 2),
(17, 2, 2),
(21, 5, 2),
(22, 9, 2),
(26, 7, 2),
(28, 3, 2),
(89, 1, 1),
(90, 13, 1),
(95, 5, 1),
(96, 12, 1),
(97, 10, 1),
(99, 9, 1),
(100, 3, 1),
(101, 7, 3),
(102, 8, 3),
(104, 36, 5),
(105, 13, 5),
(106, 5, 5),
(108, 11, 4),
(109, 5, 4),
(110, 12, 4),
(111, 10, 8),
(112, 5, 8),
(113, 2, 8),
(114, 8, 8);

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
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD KEY `aluno` (`aluno`);

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
  ADD KEY `email_index` (`email`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `alunos` (`alunos`),
  ADD KEY `curso` (`curso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aceitoujesus`
--
ALTER TABLE `aceitoujesus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idCursos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `membros`
--
ALTER TABLE `membros`
  MODIFY `idmembros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `nivel_acesso`
--
ALTER TABLE `nivel_acesso`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testeapp`
--
ALTER TABLE `testeapp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acesso`
--
ALTER TABLE `acesso`
  ADD CONSTRAINT `acesso_fk_1` FOREIGN KEY (`idmembro`) REFERENCES `membros` (`idmembros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `alunos_ibfk_1` FOREIGN KEY (`aluno`) REFERENCES `membros` (`idmembros`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
