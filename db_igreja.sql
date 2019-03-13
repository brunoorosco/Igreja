-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Mar-2019 às 20:49
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
-- Estrutura da tabela `acesso`
--

CREATE TABLE `acesso` (
  `idLogin` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `idmembro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`idLogin`, `username`, `password`, `idmembro`) VALUES
(1, 'brunoorosco@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(3, 'analu.luz@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 4);

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
  `telEnc` varchar(15) NOT NULL,
  `telEncamigo1` varchar(15) NOT NULL,
  `amigo1` varchar(20) NOT NULL,
  `telEncamigo2` varchar(15) NOT NULL,
  `amigo2` varchar(20) NOT NULL,
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

INSERT INTO `encontrista` (`idEncontrista`, `nomeEnc`, `telEnc`, `telEncamigo1`, `amigo1`, `telEncamigo2`, `amigo2`, `endEnc`, `emailEnc`, `sexoEnc`, `CEM`, `nascEnc`, `cadastrado`) VALUES
(1, 'Bruno Orosco', '(11) 94071-4391', '(11) 94071-4391', 'João', '(25) 13688-8', 'Maria', 'Rua Gupeva,56, São Miguel Paulista', 'brunoorosco@gmail.com', 'Masculino', '', '1987-03-29', '2019-02-17 10:56:06'),
(2, 'Ana Lucia', '(11) 1111-11111', '(11) 1111-11111', '', '(11) 1111-11111', '', 'R.: Gupeva, 56', 'ana@teste', 'Feminino', 'Lica', '1973-07-14', '2019-02-17 10:56:06'),
(3, 'Fulano', '(11) 1111-11111', '(11) 1111-11111', '', '(11) 1111-11111', '', 'guaba', 'teste@teste', 'masculino', 'Teste', '2019-02-04', '2019-02-17 10:56:06'),
(4, 'Eva', '(11) 1111-11111', '(11) 1111-11111', '', '(11) 1111-11111', '', 'Muros de Ouro', 'eva@adao', 'Feminino', 'Deus', '2019-02-20', '2019-02-17 10:56:06');

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
(9, 'evento teste', '2019-02-27 00:00:00', '0000-00-00 00:00:00', '#ffff80'),
(10, 'bruno', '2019-02-28 00:00:00', '0000-00-00 00:00:00', '#8000ff'),
(11, 'Escola de Profetas', '2019-03-20 00:00:00', '2019-03-26 00:00:00', '#00ffff'),
(21, 'Discipulado', '2019-02-20 00:00:00', '2019-02-21 00:00:00', '#0071c5'),
(22, 'Escola de Profetas', '2019-03-08 19:30:00', '2019-03-09 22:00:00', '#40E0D0'),
(23, 'Escola de Profetas', '2019-02-25 00:00:00', '2019-02-28 00:00:00', '#0071c5'),
(24, 'Bruno Orosco', '2019-03-12 00:00:00', '2019-03-13 00:00:00', '#FFD700');

-- --------------------------------------------------------

--
-- Estrutura da tabela `infocursos`
--

CREATE TABLE `infocursos` (
  `idCursos` int(10) NOT NULL,
  `nomeCursos` varchar(50) NOT NULL,
  `tema` varchar(40) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `infocursos`
--

INSERT INTO `infocursos` (`idCursos`, `nomeCursos`, `tema`, `data`) VALUES
(1, 'Escola de Profetas', 'Escatologia------', '0000-00-00'),
(2, 'Discipulado', 'teste', '0000-00-00'),
(3, 'Escola de Profeta', 'Geografia Biblica', '2019-03-12'),
(4, 'Discipulado', 'Visao', '2019-05-15');

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
  `CPF` varchar(15) NOT NULL,
  `cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `membros`
--

INSERT INTO `membros` (`idmembros`, `nome`, `nasc`, `endereco`, `telefone`, `supervisao`, `cargo`, `email`, `CPF`, `cadastro`) VALUES
(1, 'Bruno Orosco', '1987-03-29', 'gupeva, 56', '11940714391', 'LIca', 'Lider', 'brunoorosco@gmail.com', '0', '2019-01-26 12:40:36'),
(2, 'Orosco', '0000-00-00', 'Rua Gupeva,56', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco@gmail.com', '351.176.528-51', '2019-01-26 12:40:36'),
(3, 'Roberta Orosco', '0000-00-00', 'R. Gupeva', '(11) 25136-888', 'Lica', 'Líder', 'r.luzorosco@gmail.com', '351.176.528-51', '2019-01-26 12:40:36'),
(4, 'Ana Lucia', '1973-07-14', 'gupeva, 56 - Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com', '168.892.938-00', '2019-01-27 12:28:15'),
(5, 'FUlano', '1970-01-01', 'ciclano', '(11) 11111-1111', 'Seper', 'Auxiliar', 'brubbdf@teste.com', '161.511.615-61', '2019-01-27 15:11:25'),
(6, 'Orosco', '1987-03-29', 'Rua Gupeva,56, São Miguel Paulista', '(11) 94071-4391', 'Ajaxcity', 'Pastor', 'brunoorosco@gmail.com', '351.176.528-51', '2019-02-03 14:57:16'),
(7, 'Bruno Orosco', '1970-01-01', 'Rua Gupeva,56, São Miguel Paulista', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco@gmail.com', '', '2019-02-05 21:43:52'),
(8, 'teste', '2019-02-11', 'teste', '11998355651', '', 'Membro', 'brurru@gmail.com', '', '2019-02-22 21:12:42'),
(9, 'Escola de Profetas', '1970-01-01', 'av. ipes', '(11) 94071-4391', 'lica', 'Membro', 'fifehadaga@directmail24.net', '', '2019-03-01 21:29:31'),
(10, 'Escola de Profetas', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco123@gmail.com', '', '2019-03-03 20:25:42'),
(11, 'Escola de Profetas', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco12.@gmail.com', '', '2019-03-03 20:25:54'),
(12, 'Bruno Orosco', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco@gmail.com12', '', '2019-03-03 20:33:29'),
(13, 'Bruno Orosco', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco@gmail.com123', '', '2019-03-04 02:57:34'),
(14, 'Escola de Profetas', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Todas', 'Supervisor', 'muvicej@freehotmail.net1', '', '2019-03-04 02:59:55'),
(15, 'Escola de Profetas', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Todas', 'Supervisor', 'muvicej@freehotmail.net12', '', '2019-03-04 03:02:05'),
(16, 'Escola de Profetas', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Todas', 'Líder', 'fifehadaga@directmail24.net1', '', '2019-03-04 03:02:35'),
(17, 'Escola de Profetas', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Todas', 'Líder', 'fifehadaga@directmail24.net12', '', '2019-03-04 03:03:21'),
(18, 'Escola de Profetas', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Todas', 'Líder', 'fifehadaga@directmail24.net123', '', '2019-03-04 03:04:54'),
(19, 'Escola de Profetas', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Todas', 'Líder', 'fifehadaga@directmail24.net1234', '', '2019-03-04 03:05:13'),
(20, 'Escola de Profetas', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Todas', 'Líder', 'fifehadaga@directmail24.net12345', '', '2019-03-04 03:05:31'),
(21, 'Escola de Profetas', '1987-03-29', 'rua Gupeva, 56 Vila Curuça', '(11) 94071-4391', 'Todas', 'Líder', 'fifehadaga@directmail24.net123456', '', '2019-03-04 03:07:27');

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
  `id` int(10) NOT NULL,
  `alunos` int(10) NOT NULL,
  `curso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id`, `alunos`, `curso`) VALUES
(1, 1, 1),
(2, 4, 2),
(3, 5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acesso`
--
ALTER TABLE `acesso`
  ADD PRIMARY KEY (`idLogin`),
  ADD KEY `acesso_fk_1` (`idmembro`);

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
-- Indexes for table `testeapp`
--
ALTER TABLE `testeapp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turma_ibfk_1` (`alunos`),
  ADD KEY `curso` (`curso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acesso`
--
ALTER TABLE `acesso`
  MODIFY `idLogin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `encontrista`
--
ALTER TABLE `encontrista`
  MODIFY `idEncontrista` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `infocursos`
--
ALTER TABLE `infocursos`
  MODIFY `idCursos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `membros`
--
ALTER TABLE `membros`
  MODIFY `idmembros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `testeapp`
--
ALTER TABLE `testeapp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `turma_ibfk_2` FOREIGN KEY (`curso`) REFERENCES `infocursos` (`idCursos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
