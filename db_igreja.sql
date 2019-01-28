-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Jan-2019 às 02:45
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

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
-- Estrutura da tabela `infocursos`
--

CREATE TABLE `infocursos` (
  `idCursos` int(10) NOT NULL,
  `nomeCursos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `infocursos`
--

INSERT INTO `infocursos` (`idCursos`, `nomeCursos`) VALUES
(1, 'Escola de Profetas'),
(2, 'Discipulado');

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
  `email` varchar(45) DEFAULT NULL,
  `CPF` varchar(15) NOT NULL,
  `Cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `membros`
--

INSERT INTO `membros` (`idmembros`, `nome`, `nasc`, `endereco`, `telefone`, `supervisao`, `cargo`, `email`, `CPF`, `Cadastro`) VALUES
(1, 'Bruno Orosco', '1987-03-29', 'gupeva, 56', '11940714391', 'LIca', 'Lider', 'brunoorosco@gmail.com', '0', '2019-01-26 12:40:36'),
(2, 'Bruno Orosco', '0000-00-00', 'Rua Gupeva,56, São Miguel Paulista', '11940714391', 'Lica', 'Líder', 'brunoorosco@gmail.com', '2147483647', '2019-01-26 12:40:36'),
(3, 'Bruno Orosco', '0000-00-00', 'Rua Gupeva,56, São Miguel Paulista', '11940714391', 'Lica', 'Líder', 'brunoorosco@gmail.com', '2147483647', '2019-01-26 12:40:36'),
(4, 'Bruno Orosco', '0000-00-00', 'Rua Gupeva,56, São Miguel Paulista', '11940714391', 'Lica', 'Líder', 'brunoorosco@gmail.com', '16889293800', '2019-01-26 12:40:36'),
(5, 'Orosco', '0000-00-00', 'Rua Gupeva,56', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco@gmail.com', '351.176.528-51', '2019-01-26 12:40:36'),
(6, 'Roberta Orosco', '0000-00-00', 'R. Gupeva', '(11) 25136-888', 'Lica', 'Líder', 'r.luzorosco@gmail.com', '351.176.528-51', '2019-01-26 12:40:36'),
(7, 'Bruno Orosco', '0000-00-00', 'Rua Gupeva,56, São Miguel Paulista', '11940714391', 'Lica', 'Cargo', 'brunoorosco@gmail.com', '35117652851', '2019-01-26 12:40:36'),
(8, 'Bruno Orosco', '1987-03-29', 'Rua Gupeva,56, São Miguel Paulista', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco@gmail.com', '351.176.528-51', '2019-01-26 12:40:36'),
(9, 'Bruno Orosco', '1987-03-29', 'Rua Gupeva,56, São Miguel Paulista', '(11) 94071-4391', 'Lica', 'Líder', 'brunoorosco@gmail.com', '351.176.528-51', '2019-01-26 12:40:36'),
(10, 'Ana Lucia', '1973-07-14', 'gupeva, 56 - Vila Curuça', '(11) 99835-5651', 'Lica', 'Líder', 'analu.luz@hotmail.com', '168.892.938-00', '2019-01-27 12:28:15'),
(11, 'FUlano', '1970-01-01', 'ciclano', '(11) 11111-1111', 'Seper', 'Auxiliar', 'brubbdf@teste.com', '161.511.615-61', '2019-01-27 15:11:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infocursos`
--
ALTER TABLE `infocursos`
  ADD PRIMARY KEY (`idCursos`);

--
-- Indexes for table `membros`
--
ALTER TABLE `membros`
  ADD PRIMARY KEY (`idmembros`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infocursos`
--
ALTER TABLE `infocursos`
  MODIFY `idCursos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membros`
--
ALTER TABLE `membros`
  MODIFY `idmembros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
