-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 22-Maio-2019 às 14:39
-- Versão do servidor: 10.3.14-MariaDB
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
-- Database: `id8520277_secretariacac`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aceita_jesus`
--

CREATE TABLE `aceita_jesus` (
  `id` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `aceit_reconc` varchar(12) NOT NULL,
  `cadastro` date NOT NULL,
  `batizado` varchar(5) DEFAULT NULL,
  `cem` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aceita_jesus`
--

INSERT INTO `aceita_jesus` (`id`, `nome`, `endereco`, `telefone`, `aceit_reconc`, `cadastro`, `batizado`, `cem`) VALUES
(1, 'Elieser Cezário da Silva Jr.', 'Rua Francicsco Martinho 182 - Suzano', '948947271', 'reconciliou', '2018-12-01', 'sim', 'Sup.Silvani'),
(2, 'Cleison Melo', 'estrada dos Indios 285 - Itaqua ', '964044194', 'reconciliou', '2018-12-07', 'não', 'Sup.Geovana'),
(3, 'Cintia Albuquerque Lorasque', 'Rua Apiranga 04 - jd.Ipe', '41725896', 'reconciliou', '2018-12-09', 'sim', 'Sup.Valdirene'),
(4, 'Cleberson Alberto de Jesus', 'Rua Carana Branca 201 - J.Helena', '999662157', 'reconciliou', '2018-12-09', 'sim', ''),
(5, 'Andre Aziago dos Santos', 'Rua Anajatuba 19A - Itaim Pta', '985762711', 'reconciliou', '2018-12-09', 'sim', 'Pr.Joel'),
(6, 'Samuel Mendes', 'Rua Francisco Antonio Meira - Vl.Mara', '986559951', 'reconciliou', '2018-12-09', 'não', ''),
(7, 'Rogerio Soares da Silva', 'Rua Castanheira do Brejo 295 - J.Ipe', '970690241', 'aceitou', '2018-12-09', 'não', 'Sup.Luizinho'),
(8, 'Felipe Cesar Rodrigues', 'Rua Rosa Musgo 475 - J.Miragaia', '970211055', 'reconciliou', '2018-12-09', 'sim', 'Pra.Wanda'),
(9, 'Rinaldo Lorasque Filho', 'Rua Apiranga 04 - J.Ipe', '27292218', 'reconciliou', '2018-12-09', 'sim', 'Sup.Valdirene'),
(10, 'Edmar Gomes da Silva', 'Rua Sebastiao Aves - camargo Novo', '964402320', 'aceitou', '2018-12-09', 'não', 'Sup.Geovana'),
(11, 'Valeria Fernandes dos Santos ', 'Rua piranema - J.Campos', '940874019', 'reconciliou', '2018-12-09', 'sim', ''),
(12, 'Jair Jose Luis', 'Rua Erva do Fogo 110 - J.Ipe', '964383005', 'reconciliou', '2018-12-09', 'sim', 'Sup.Valdirene'),
(13, 'Eunice Nunes  Magaldi ', 'Rua Gravata de Pedra 16 - J.Ipe', '973456393', 'aceitou', '2018-12-09', 'não', ''),
(14, 'Sivaldo Souza ', 'Rua Agua Vermelha 17 casa 3', '959455437', 'reconciliou', '2018-12-09', 'sim', ''),
(15, 'Joao Vitor Lopes da Silva', 'Rua Gravata de Pedra 19 - J.Ipe', '951496802', 'reconciliou', '2018-12-21', 'sim', 'Sup.Lika'),
(16, 'Ana Paula Rodrigues', 'Rua Cotia 114 - J.Campos', '', 'reconciliou', '2018-12-21', 'sim', 'Sup.Sandra'),
(17, 'Antonio Leite da Silva Filho', 'Rua Gesiaba 17 - J.Campos', '951496802', 'reconciliou', '2018-12-21', 'sim', 'Sup.Lika'),
(18, 'Cristiane Viana de Jesus', 'Rua Jose Martins Lisboa 2204 - Pantanal', '987079288', 'aceitou', '2018-12-23', 'não', ''),
(19, 'Lucimar Alves da Silva', 'Baleeira Branca 366 - J.Ipe', '996839001', 'reconciliou', '2018-12-23', 'sim', 'Sup.Lika'),
(20, 'Jussara Domingues Pimentel', 'Rua Obai 25 - J.Nazare', '977535724', 'reconciliou', '2018-12-23', 'sim', 'Pra.Bete'),
(21, 'Richard Marques Gomes', 'Rua Gherardt Holts 7B - J.Silva Teles', '984430359', 'aceitou', '2018-12-23', 'não', 'Sup.Mirtes'),
(22, 'Beatriz Pimentel Nunes Gonsalves', 'Rua Melchiades Nunes de Campos 452 - pq.sta Rita', '', 'reconciliou', '2018-12-23', 'não', 'Sup.Lika'),
(23, 'Elza Bento Bezerra ', 'Rua Melchiades Nunes de Campos 452 - pq.sta Rita', '38082046', 'reconciliou', '2018-12-23', 'sim', 'Sup.Lika'),
(24, 'Kaua Henrique Ramos Oliveira', 'Rua Ipe Roxo 1704 - Itaim Pta', '940761125', 'aceitou', '2019-01-04', 'não', 'Sup. Zô'),
(25, 'Gabriela Queiroz da Silva ', 'Rua Virginia Ferne 88 - Cohab 2', '949235284', 'reconciliou', '2019-01-13', 'sim', ''),
(26, 'Vitor Gratao ', 'Rua Palmeira das Bermudas 658 - Jd.Ipe', '996406714', 'reconciliou', '2019-01-13', 'sim', ''),
(27, 'Larissa Rodrigues Santos', 'Francisca Marrique Guerra 103 A - Jd.Ipe', '94944332', 'aceitou', '2019-01-18', 'não', 'Sup.Valdirene'),
(28, 'Renan david', 'Rua Castanheiro do Brejo 55 - Jd.Ipe', '940097687', 'aceitou', '2019-01-18', 'não', ''),
(29, 'Andressa Mayumuihod Yamath', 'Rua Namesio Candido Gomes 151 - Vl.Zeferina', '979712378', 'aceitou', '2019-01-18', 'não', ''),
(30, 'Natalia Viana', 'Av.dos Ipes - Jd.Ipe', '957936180', 'reconciliou', '2019-01-20', 'não', ''),
(31, 'Jonathan da Silva', 'Rua Machiche 35 - Jd.Eloisa', '981754649', 'reconciliou', '2019-01-20', 'não', ''),
(32, 'Edson Bispo dos Santos', 'R.S.Pedro de Jequitinhonha 78 - J.S.Carlos', '977258045', 'reconciliou', '2019-01-20', 'sim', 'Sup. Martim'),
(33, 'Jenifer Silva Demortoli', 'R.S.Pedro de Jequitinhonha 78 - J.S Carlos', '981538915', 'reconciliou', '2019-01-20', 'sim', 'Sup. Martim'),
(34, 'Maria Celia Patricio', 'Av.dos Igarapes - Jd.Ipe', '993611632', 'reconciliou', '2019-01-25', 'sim', 'Sup.Valdirene'),
(35, 'Alexsandro Alve de Araujo', 'Rua Adriano Seabra 60 - Pq.Paulistano', '42115281', 'aceitou', '2019-01-25', 'não', ''),
(36, 'Renata lima', 'Rua Mendanha 32 - Jd.Carolina', '29630294', 'aceitou', '2019-01-27', 'não', 'Sup.Martim'),
(37, 'Jean Sales Santos', 'Rua lagoa Cajuba 101 - Jd.Campos', '962604750', 'reconciliou', '2019-01-27', 'não', 'Sup.Martim'),
(38, 'Marisa Lopes Vicente', 'Rua |Gravata de Pedra 19 - Jd. Ipe', '951496802', 'reconciliou', '2019-01-27', 'sim', 'Pr. Joel/Regiane'),
(39, 'Jose Silva Nogueira', 'Glochonias 110 A - Cidade Nova S.Miguel', '', 'aceitou', '2019-01-27', 'não', 'Pr. Joel/Regiane'),
(40, 'Leonardo Bezerra Omena', 'Rua Betula Negra - Jd.Nelia', '982518015', 'reconciliou', '2019-01-27', 'sim', 'Sup. Aldo/Silvani'),
(41, 'Jean Michel dos Santos', 'Rua Massato Sakai 180 - Ferraz', '940326399', 'reconciliou', '2019-01-27', 'sim', 'Sup.Jaqueline'),
(42, 'Amanda Laurentino dos Sabntos', 'Rua Lourenco Paganucci 593 - Ferraz', '9836838991', 'reconciliou', '2019-01-27', 'sim', 'Sup. Zô/Fátima'),
(43, 'Eliane Lourenco', 'Rua Porto do Bezerra 660 - Guaianases', '981805166', 'aceitou', '2019-02-10', 'sim', 'Sup. Clarice/Luiz'),
(44, 'Tatiana Macedo Dunda', 'Rua Igarapes 980 - Jd dos ipes', '965826114', 'aceitou', '2019-02-17', 'não', 'Pr. Laercio/Vera'),
(45, 'Juliana Silveiro dos Santos', 'Rio Itapicu Mirim N?95 - Camargo Novo', '983612420', 'aceitou', '2019-02-17', 'sim', ''),
(46, 'Gabriel Martins de Souza', 'Dr. Gil Martins 96 - Itaim', '96652702', 'reconciliou', '2019-02-17', 'não', 'Sup. Valdirene'),
(47, 'Bruno Rodrigues', 'Rua: Jacaranda Rosa 307 - Jd. Noemia', '(11) 95107-6652', 'reconciliou', '2019-02-22', 'sim', 'Sup. Valdirene'),
(48, 'Joselito Da Silva Oliveira', 'Av. Carrego Tijuco Preto 188 - Jd. Oliveira', '', 'reconciliou', '2019-02-24', 'não', 'Sup. Giovanna'),
(49, 'Carlos Alberto Ribeiro', 'Rua Macauba Mirim 231 - Jd dos ipes', '983874818', 'reconciliou', '2019-02-24', 'sim', 'Rita Obreira'),
(50, 'Amanda Cristina Soares', 'Pedro Ferraz Lopes 370 - Jd Campos ', '22648683', 'reconciliou', '2019-02-24', 'sim', 'Sup. Valdirene'),
(51, 'Matheus Ferreira Calado', 'Rua Alpercata 19', '959775150', 'reconciliou', '2019-02-24', 'não', ''),
(52, 'Thayane de Souza Carvalho', 'Rua Dolores de Aquino 28 - Jundiapeba', '932304606', 'reconciliou', '2019-02-24', 'não', ''),
(53, 'Robson Viana de Jesus', 'Av.Jose Martim Lisboa 2168 - jd.S.Martinho Helena', '', 'aceitou', '2019-02-26', 'não', 'Sup.Lika'),
(54, 'Rosangela de Oliveira Santos', 'R. Gal.Dalton Teixeira 133 - vl.Mara', '', 'reconciliou', '2019-03-01', 'sim', ''),
(55, 'Leticia Vitoria Santos', 'R.Mateus Barbosa Resende 287 A - pq.sta Rita', '958792952', 'reconciliou', '2019-03-03', 'não', ''),
(56, 'Vitoria nascimeto Neves Conceicao', 'Av. dos Ipes 1060 - Jd,Ipe', '954404968', 'reconciliou', '2019-03-03', 'não', ''),
(57, 'Rayane Vitoria Alves dos Santos', 'R. Padre Eduardo Roberto 127 - S.miguel', '951461358', 'reconciliou', '2019-03-03', 'não', 'Sup.Valdirene'),
(58, 'Leandro Jose da Slva', 'R.Francisca Manrique Guerra 9C - Jd.Ipe', '952720453', 'reconciliou', '2019-03-03', 'sim', 'Sup.Valdirene'),
(59, 'Roberto Borges Bonfim', 'Rua Gequirame de Goias 515 apto 2 - Vila Curuca', '987992995', 'reconciliou', '2019-03-03', 'sim', 'Sup.Lika'),
(60, 'Patricia Gomes P. Guedes', 'Rua Gequirame de Goias 515 apto 2 - Vila Curuca', '987992885', 'reconciliou', '2019-03-03', 'sim', 'Sup.Lika'),
(61, 'Marivan Ferreira Barros', 'Sabiá Laranjeira 113 - Vila Mara', '25857006', 'aceitou', '2019-03-05', 'não', 'Pr.Joel'),
(62, 'Juliana de ALmeida S.', 'Av.dos Ipes 1294 - Jd. Ipe', '954119720', 'reconciliou', '2019-03-05', 'sim', 'Sup.Valdirene'),
(63, 'Joao Carlos Ribeiro de Amorim', 'Rua Gravata de pedra 535 - Jd.Ipe', '975893150', 'reconciliou', '2019-03-05', 'não', 'Sup. Fabio/Sandra'),
(64, 'Normalicia Ferreira ', 'Rua Sabia Laranjeira 113 - Vl. Mara', '', 'aceitou', '2019-03-05', 'não', 'Pr.Joel'),
(65, 'Livia Michele dos Santos Matos', 'Rua Cipó do Reino 119 - Jd.ipe', '', 'aceitou', '2019-03-05', 'sim', 'Sup.Valdirene'),
(66, 'Ana Paula Novaes de Jesus', 'Rua Cio da Terra 11 - Itaim Pta', '', 'reconciliou', '2019-03-05', 'sim', ''),
(67, 'Rafaela Cardoso Gonsalves', 'Av.Joao Batista Santiago 455 - Jd.Robrú', '', 'aceitou', '2019-03-05', 'não', ''),
(68, 'Milena Gomes Fernandes', 'Rua Pedro Rodrigues 86 - pq.sta Rita', '991241930', 'reconciliou', '2019-03-17', 'sim', 'Pr.Claudio/Edi'),
(69, 'Marcela Gomes Fernandes', 'Rua Pedro Rdrigues 86 - Pq.Sta Rita', '991692312', 'reconciliou', '2019-03-17', 'sim', 'Pr.Claudio/Edi'),
(70, 'Romero Kopps Junior', 'Rua Aricanga 974 - Jd.Silva Teles', '954646486', 'aceitou', '2019-03-17', 'não', 'Sup.Lika'),
(71, 'Fernanda Cristina de Farias', 'Rua Aricanga 974 - Jd.Silva Teles', '941472010', 'aceitou', '2019-03-17', 'não', 'Sup.Lika'),
(72, 'Daniela Santos de Jesus ', 'Rua das Gaivotas 06 - Vale da Brisas', '950383374', 'aceitou', '2019-03-22', 'não', 'Pr.Wagner'),
(73, 'Julia Matos', 'Rua Jangaba 03 - Itaim Pta', '986687952', 'aceitou', '2019-03-22', 'não', ''),
(74, 'Fabio Falcão ', 'Rua Pedro de Castilho 1012 - Jacana', '977916442', 'reconciliou', '2019-03-22', 'sim', ''),
(75, 'Edvaldo Gomes de Lima', 'Rua Paulo Arnes 46 - Cid.Nova S.Miguel', '20359880', 'reconciliou', '2019-03-22', 'sim', ''),
(76, 'Wanderclayson O. da Cruz', 'Rua Julia 25 - Vl.Esperenca', '', 'reconciliou', '2019-03-22', 'não', 'Sup. Fabio/Sandra'),
(77, 'Fabiano da Cruz Feliz', 'Av.dos Ipes - Jd.Ipe\",\"25621081', '', 'reconciliou', '2019-03-24', 'não', 'Sup. Fabio/Sandra'),
(78, 'Erika Souza Santos', 'Rua Macauba Mirim264 - Jd.Ipe', '999866513', 'aceitou', '2019-03-24', 'não', 'Sup.Waguerson'),
(79, 'Genilson Elias Oliveira', 'Rua Corrego do Tijuco Preto 190 A - Itaim Pta', '954673090', 'aceitou', '2019-03-24', 'não', ''),
(80, 'Adriana Salalori de Souza', 'Rua Carlos Coco 72 - JD.SilvaTeles', '36783687', 'reconciliou', '2019-03-24', 'sim', 'Sup.Zô'),
(81, 'Solange de Assis', 'R. Prof.Assis Veloso 458 fundos - Vila Rosalia', '997756320', 'reconciliou', '2019-03-24', 'sim', 'Sup.Valdirene'),
(82, 'Cristina Rolim de Lima', 'Rua Andre Martins 60 - Freguesia do ó', '979733565', 'reconciliou', '2019-03-24', 'sim', ''),
(83, 'Diego Alves', 'Rua Peroba rosa 169 - Miragaia', '947459699', 'reconciliou', '2019-03-24', 'sim', 'Sup.Waguerson'),
(84, 'Edmilson Freitas de Oliveira', 'Rua Vianopolis 237 - Vl.Maria Alta', '9567709020', 'reconciliou', '2019-03-26', 'sim', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso`
--

CREATE TABLE `acesso` (
  `idmembro` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nivel_acesso` int(5) DEFAULT NULL,
  `ativo` char(1) DEFAULT 's'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`idmembro`, `username`, `password`, `nivel_acesso`, `ativo`) VALUES
(13, 'analu.luz@hotmail.com', 'a8ceb47cf691a7a6548f61a53572d6e76481541e', 1, 's'),
(27, 'jaquelinesouza_2006@hotmail.com', '1e5b8e951c0c48790f62e3f59396c5d70ed48c89', 2, 's'),
(28, 'laerciomkids@hotmail.com', '62848ff71498f30f17e8af53b1c8fc64dce8016f', 6, 's'),
(29, 'prdanielmorse@gmail.com', 'f50dd7eb93c36128aa3c7f318827667ae1e8a92d', 1, 's'),
(32, 'brunoorosco@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 's'),
(35, 'TTARCILA.9FONSECA@HOTMAIL.COM', '7676b94aeab20ec701ef44a668b47a4bdabe331e', 4, 's'),
(36, 'martimramalhovieira@gmail.com', '53a650406fb870febb5f4a7cc1fd5d89c65222c4', 2, 's'),
(37, 'shirley.viviane5@yahoo.com.br', '1ea1e86d64176f4088cddb018b1e72714ddaface', 2, 's'),
(38, 'Mirtesbs@hotmail.com', 'df484203d40c3a7d4a9cac1daea496f4ba2049b0', 2, 's'),
(39, 'adm_progresso@hotmail.com', '92efb62aa297019d8e4f09698b78227149863b0b', 3, 's'),
(52, 'ericass_30santos@hotmail.com', '64b31cb7cb4435925d71a39505f101753a8f8075', 2, 's'),
(53, 'fabinhoduipe@hotmail.com', 'cc4bb6ddcaffcfe5be44364056f0cb2418975029', 2, 's'),
(54, 'waguerson.oliveira@gmail.com', '441ce9750a03d6174a11f485d6f448b580b270ad', 2, 's'),
(81, 'elianalikapequeno@gmail.com', '3b6f4f36cf8530873f6d77413623a371e881f8cf', 2, 's'),
(82, 'bia.clarice@yahoo.com.br', '9045554175b585337357e659bcedfef40c784475', 2, 's'),
(84, 'marcus_otto@hotmail.com', '079773a6cb61ac1b0c49ce4584a1b175709637a9', NULL, 's'),
(85, 'rafa_gomes19@yahoo.com.br', '7905fb13dbc9084bb7701a9a1d2e8d6e2725f08b', NULL, 's'),
(86, 'valdireneclamor@yahoo.com.br', '5eb19632c1fad1708878b239484820baf2982cf3', 5, 's'),
(87, 'franciscofabio705@hotmail.com', 'bac2f02cb89079ca3374cf41f710c3eb6be19ada', 2, 's'),
(88, 'sandradantassiqueirafrancisco0@gmail.com', '85def7f35f255040492bfd5b7465eb596752a7dd', 2, 's'),
(89, 'lucasorsi95@gmail.com', 'e1cdbeb9e1039530f25bd58db42d6233a1503b10', NULL, 's'),
(90, 'francildo68f@gmail.com', '69b496da9f3245aaebd7591aaddf075820b6e0d6', 2, 's'),
(91, 'willian.uei@hotmail.com', '0c1c2387d4c632c092d11ac5b170969c1d286815', 2, 's'),
(92, 'sumariacunha@hotmail.com', '0155f33ae9d85f83367171b54bcdc2e4b3e78c08', 2, 's'),
(93, 'eliane.filo@bol.com.br', '589036d84393ee556f51c419a3fa78429c55a57b', 3, 's'),
(94, 'kakocunha48@gmail.com', '34e253fa05ab09a5f058f8da103df0cd01f4a409', 3, 's'),
(95, 'anderson.alves777@gmail.com', '2da9acf0e7cea34a8514052367cc1817e5593996', 3, 's'),
(96, 'magna_osilva@yahoo.com', 'c0780b96f199a83286bd728138b9f59640f6b33c', 2, 's'),
(97, 'aguia.bilhares@yahoo.com.br', '63b8e61e450f08bf24865dc1c50652fbb77155e1', 3, 's'),
(98, 'aguia.bilhares@yahoo.com.br', '1d4e65029a6773675a5fd60991d99a1a434341e4', 3, 's'),
(99, 'RI.AVIVAC@HOTMAIL.COM', '7be3f962ae1af47b68d2955ae53be02aefb5b6a4', 2, 's'),
(101, 'kelly.naoesquecerasenha@gmail.com', '5397de72d45232230342f0f7c490fb8a172b23c9', 2, 's'),
(103, 'gisellygihrf@gmail.com', '6c8d8decd731208b5e28fc46a1d547c37c0f2f1f', NULL, 's'),
(153, 'supervisor@supervisor', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, 's'),
(159, 'thauane.melissa@gmail.com', 'c25fd8da46283c2bc6122d3f00f759263d9fa3f5', NULL, 's'),
(160, 'joel.santos@novelis.com ', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3, 's');

-- --------------------------------------------------------

--
-- Estrutura da tabela `config_sistem`
--

CREATE TABLE `config_sistem` (
  `id` int(10) NOT NULL,
  `funcao` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `_status` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `config_sistem`
--

INSERT INTO `config_sistem` (`id`, `funcao`, `_status`) VALUES
(1, 'todos_membros', 's');

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
  `CEM` varchar(25) NOT NULL,
  `observacao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `encontrista`
--

INSERT INTO `encontrista` (`idEncontrista`, `nomeEnc`, `telEnc`, `endEnc`, `sexoEnc`, `CEM`, `observacao`) VALUES
(5, 'ALINE VAZ MACHADO SILVA', '(11) 95374-1617', 'RUA: IGARAPE AGUA AZUL ', 'Feminino', 'WAGUERSON', ''),
(6, 'FRANCISCO CLEBE DA SILVA ', '(11) 98387-7057', 'RUA: JOÃO DE MESQUITA 33', 'Masculino', 'WAGUERSON', ''),
(7, 'FRANCIELE PLOVEIRA DE LIMA ', '(11) 95211-0945', 'RUA PEROBA ROSA 181', 'Feminino', 'WAGUERSON', ''),
(8, 'MARCELY TALITA DA SILVA ', '(11) 97581-6578', 'RUA CONGONHAS DO SERTÃO 328', 'Feminino', 'WAGUERSON', ''),
(9, 'LEANDRO RAMALHO NEIVA', '(11) 94811-6495', 'RUA OSORIO FRANCO VILHENA ', 'Masculino', 'WAGUERSON', ''),
(10, 'DIEGO ALVES ', '(11) 94745-9699', 'RUA PEROBA ROSA 169', 'Masculino', 'WAGUERSON', ''),
(11, 'ALEX SANTOS SALES', '', '', 'Masculino', 'WAGUERSON', ''),
(12, 'GIOVANNA DIAS GALARTE', '(11) 99233-8082', 'AV MARECHAL TITO 823', 'Feminino', 'WAGUERSON', ''),
(13, 'KATHELEEN CRISTINA DA S. RODRIGUES', '(11) 94953-7194', 'RUA DA TABOA 34', 'Feminino', 'WAGUERSON', ''),
(14, 'JULIANA SILVERIO DOS SANTOS', '(11) 98196-0779', 'RUA RIO ITAPICU MIRIM 34', 'Feminino', 'WAGUERSON', ''),
(15, 'ERICA SOUZA SANTOS ', '(11) 99986-6513', '', 'Feminino', 'WAGUERSON', ''),
(16, 'KELLY VIEIRA SOBRAL', '(11) 95398-6539', 'RUA ODETE AMARAL 58', 'Feminino', 'Jaqueline', ''),
(17, 'CARLOS EDUARDO DE AGUIAR', '(11) 94685-8511', 'RUA JOSE JUNQUEIRA 12', 'Masculino', 'Jaqueline', ''),
(18, 'EDILAINE SOARES', '', 'RUA CARAIPE DAS AGUAS 210', 'Feminino', 'Jaqueline', ''),
(19, 'GUILHERME AUGUSTO RODRIGUES NASCIMENTO', '(11) 97747-2283', '', 'Masculino', 'Jaqueline', ''),
(20, 'SULLEN DE JESUS SILVA', '(11) 99391-8515', 'RUA JOÃO BATISTA SANTIAGO 523', 'Feminino', 'Jaqueline', ''),
(21, 'JORDAM SANTOS ', '', '', 'Masculino', 'Jaqueline', ''),
(22, 'GABRIEL BEZERRA', '', '', 'Masculino', 'Jaqueline', ''),
(23, 'LUIS FERNANDO', '', '', 'Masculino', 'Carapicuiba', ''),
(24, 'ROBSON PATRICK SILVA ', '', '', 'Masculino', 'Carapicuiba', ''),
(25, 'ROGERIO SOARES DA SILVA ', '(11) 97069-0241', 'RUA CASTANHEIRO DO BREJO 84', 'Masculino', 'Carapicuiba', ''),
(26, 'CAUÃ LIMA MARTINS', '(11) 98617-0775', 'RUA GIL MARTINS ', 'Masculino', 'Novo Tempo(Valdirene)', ''),
(27, 'FABIO DA MAIA', '(11) 97375-9520', 'RUA ANTONIO GOMES 22', 'Masculino', 'Novo Tempo(Valdirene)', ''),
(28, 'ANDRE RODRIGUES', '(11) 95109-0248', 'RUA NICANOR NOGUEIRA 208', 'Masculino', 'Novo Tempo(Valdirene)', ''),
(29, 'TAMIRES INARA DA COSTA BATISTA ', '(11) 97957-0508', 'RUA MANOEL BARBALHO DE LIMA 11', 'Feminino', 'Novo Tempo(Valdirene)', ''),
(30, 'MARINEIDE DA SILVA ', '(11) 98459-5846', 'AV MARIA SANTANA 943', 'Feminino', 'Novo Tempo(Valdirene)', ''),
(31, 'VINICIUS DE ASSIS SOUZA', '(11) 95148-8145', '', 'Masculino', 'Novo Tempo(Valdirene)', ''),
(32, 'SUELEN ALMEIDA SANTOS ', '(11) 94875-5101', '', 'Feminino', 'Novo Tempo(Valdirene)', ''),
(33, 'SUSICLEI DE ALMEIDA', '(11) 25843-520', '', 'Feminino', 'Novo Tempo(Valdirene)', ''),
(34, 'STEFANE FERREIRA DA SILVA ', '(11) 94872-1555', '', 'Feminino', 'Pr. Joel', ''),
(35, 'NORMALUCIA F. BARROS', '(11) 94116-0601', '', 'Feminino', 'Pr. Joel', ''),
(36, 'CAMILY FERREIRA PASSARELLI', '', '', 'Feminino', 'Pr. Joel', ''),
(37, 'JULIA APARECIDA', '(11) 98260-3540', '', 'Feminino', 'Pr. Joel', ''),
(38, 'RENATA MARIA LIMA BETTIN', '(11) 95386-9819', '', 'Feminino', 'Martins/Shirley', ''),
(39, 'JEAN SALES SANTOS', '(11) 96260-4750', '', 'Masculino', 'Martins/Shirley', ''),
(40, 'LUCAS CARDOSO DE OLIVEIRA', '(11) 93152-6625', '', 'Masculino', 'Martins/Shirley', ''),
(41, 'ELAINE GOMES DE OLIVEIRA', '(11) 98282-9874', '', 'Feminino', 'Martins/Shirley', ''),
(42, 'DANIELA SANTOS DE JESUS', '', '', 'Feminino', 'Itu', ''),
(43, 'MATEUS RIBEIRO SILVA DE MENDEIROS', '', '', 'Masculino', 'Itu', ''),
(44, 'JOÃO CARLOS AMORIM', '', '', 'Masculino', 'Itaqua', ''),
(45, 'ARHUR ALEIXO', '', '', 'Masculino', 'Itaqua', ''),
(46, 'WANDERGLEISON O. CRUZ', '', '', 'Masculino', 'Itaqua', ''),
(47, 'VANESSA SOARES DE ALMEIDA ', '', '', 'Feminino', 'Itaqua', ''),
(48, 'KAROLINE O. DA SILVA ', '', '', 'Feminino', 'Casais', ''),
(49, 'KEMILY FERREIRA DE ALMEIDA ', '', '', 'Feminino', 'Casais', ''),
(50, 'ALEXANDRE DE SOUZA JUNIOR ', '', '', 'Masculino', 'Casais', ''),
(51, 'MATHEUS DIAS DE OLIVEIRA', '', '', 'Masculino', 'Casais', ''),
(52, 'CELMA MARTINS SANTOS ', '', '', 'Feminino', 'Casais', ''),
(53, 'AGATHA MARTINS CRUZ', '', '', 'Feminino', 'Casais', ''),
(54, 'DANIELE DE ALMEIDA COSTA ', '', '', 'Feminino', 'Mirtes', ''),
(55, 'THIAGO NASCIMENTO LIMA ', '', '', 'Masculino', 'Mirtes', ''),
(56, 'SERGIO MOREIRA DOS SANTOS ', '', '', 'Masculino', 'Mirtes', ''),
(57, 'ANDREIA FELIX PEIXOTO', '', '', 'Feminino', 'Pr.Laercio/Pra.Vera', ''),
(58, 'GABRIEL RODRIGUES SANTANA', '', '', 'Masculino', 'Pr.Laercio/Pra.Vera', ''),
(59, 'BIANCA SODRE FELIX SANTANA', '', '', 'Feminino', 'Pr.Laercio/Pra.Vera', ''),
(60, 'LAUANE DO N. BONFIM', '', '', 'Feminino', 'Pr.Laercio/Pra.Vera', ''),
(61, 'RAIANY JULIA M. NASCIMENTO ', '', '', 'Feminino', 'Pr.Laercio/Pra.Vera', ''),
(62, 'DANIEL SILVA MATIAS DOS SANTOS ', '', '', 'Masculino', 'Aldo', ''),
(63, 'JAMILLE RODRIGUES CABRAL', '', '', 'Feminino', 'Aldo', ''),
(64, 'ALINE MOREIRA MEDEIROS', '', '', 'Feminino', 'Aldo', ''),
(65, 'ICARO SILVA BATATINO', '', '', 'Masculino', 'Aldo', ''),
(66, 'SANDRO RICARDO DE SOUZA', '', '', 'Masculino', 'Gledson/Vanessa', ''),
(67, 'EDNILSON BRUNO ', '', '', 'Masculino', 'Gledson/Vanessa', ''),
(68, 'SEVERINO JOÃO DE SOUZA ', '', '', 'Masculino', 'Gledson/Vanessa', ''),
(69, 'CLEISON MELO', '', '', 'Masculino', 'Gledson/Vanessa', ''),
(70, 'PRISCILA REHENE MACEDO', '', '', 'Feminino', 'Zô', ''),
(71, 'ADINA CORREIA DA SILVA ', '', '', 'Feminino', 'Zô', ''),
(72, 'EVELIN DA CRUZ MEDINA ', '', '', 'Feminino', 'Zô', ''),
(73, 'FABIANA ', '', '', 'Feminino', 'Zô', ''),
(74, 'FABIO ANTÃO', '', '', 'Masculino', 'Zô', ''),
(75, 'EDVALDO GOMES LIMA ', '', '', 'Masculino', 'Zô', ''),
(76, 'GLEDSON DE JESUS CORREIA', '', '', 'Masculino', 'Zô', ''),
(77, 'MAGDA MORAIS LEITE ', '', '', 'Masculino', 'Zô', ''),
(79, 'LUIZ CARLOS VERAS', '', '', 'Masculino', 'Zô', ''),
(80, 'ROBERTO BORGES BONFIM', '', '', 'Masculino', 'Lika', ''),
(81, 'PATRICIA GOMES PEDRINA ', '', '', 'Feminino', 'Lika', ''),
(82, 'VINICIUS CORDEIRO ', '(11) 98799-2995', '', 'Masculino', 'Lika', ''),
(83, 'VITORIA VIEIRA SOUSA FELIX', '(11) 95384-2344', '', 'Feminino', 'Lika', ''),
(84, 'LUIS FERNANDO SANTOS LUZ', '(11) 97334-0996', '', 'Masculino', 'Lika', ''),
(85, 'RITA DE CASSIA FERREIRA SANTOS ', '(11) 95836-0704', '', 'Feminino', 'Lika', ''),
(87, 'MATHEUS F. CALADO DA SILVA ', '', '', 'Masculino', 'Lika', ''),
(88, 'JANICLEIA SAMPAIO DE SOUZA ', '', '', 'Feminino', 'Lika', ''),
(89, 'JONATHAN DE PAULA SANTOS', '', '', 'Masculino', 'Lika', ''),
(90, 'KAUAN WILLIAM BEZERRA', '', '', 'Masculino', 'Lika', ''),
(91, 'BRUNA ALBUQUERQUE DE LIMA ', '', '', 'Feminino', 'Lika', ''),
(92, 'AGNALDO CARDEAL DE BONFIM', '', '', 'Masculino', 'Lika', ''),
(93, 'MICHEL DO CARMO DE LIMA ', '', '', 'Masculino', 'Lika', ''),
(94, 'IRISANDRA H. M. DA SILVA ', '', '', 'Feminino', 'Lika', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `encontro`
--

CREATE TABLE `encontro` (
  `id_encontro` int(10) NOT NULL,
  `n_encontro` int(10) NOT NULL,
  `encontrista` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `encontro`
--

INSERT INTO `encontro` (`id_encontro`, `n_encontro`, `encontrista`) VALUES
(2, 130, 5),
(3, 130, 6),
(4, 130, 7),
(5, 130, 8),
(6, 130, 9),
(7, 130, 10),
(8, 130, 11),
(9, 130, 12),
(10, 130, 13),
(11, 130, 14),
(12, 130, 15),
(13, 130, 16),
(14, 130, 17),
(15, 130, 18),
(16, 130, 19),
(17, 130, 20),
(18, 130, 21),
(19, 130, 22),
(20, 130, 23),
(21, 130, 24),
(22, 130, 25),
(23, 130, 26),
(24, 130, 27),
(25, 130, 28),
(26, 130, 29),
(27, 130, 30),
(28, 130, 31),
(29, 130, 32),
(30, 130, 33),
(31, 130, 34),
(32, 130, 35),
(33, 130, 36),
(34, 130, 37),
(35, 130, 38),
(36, 130, 39),
(37, 130, 40),
(38, 130, 41),
(39, 130, 42),
(40, 130, 43),
(41, 130, 44),
(42, 130, 45),
(43, 130, 46),
(44, 130, 47),
(45, 130, 48),
(46, 130, 49),
(47, 130, 50),
(48, 130, 51),
(49, 130, 52),
(50, 130, 53),
(51, 130, 54),
(52, 130, 55),
(53, 130, 56),
(54, 130, 57),
(55, 130, 58),
(56, 130, 59),
(57, 130, 60),
(58, 130, 61),
(59, 130, 62),
(60, 130, 63),
(61, 130, 64),
(62, 130, 65),
(63, 130, 66),
(64, 130, 67),
(65, 130, 68),
(66, 130, 69),
(67, 130, 70),
(68, 130, 71),
(69, 130, 72),
(70, 130, 73),
(71, 130, 74),
(72, 130, 75),
(73, 130, 76),
(74, 130, 77),
(76, 130, 79),
(77, 130, 80),
(78, 130, 81),
(79, 130, 82),
(80, 130, 83),
(81, 130, 84),
(82, 130, 85),
(84, 130, 87),
(85, 130, 88),
(86, 130, 89),
(87, 130, 90),
(88, 130, 91),
(89, 130, 92),
(90, 130, 93),
(91, 130, 94);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `inicioevento` datetime NOT NULL,
  `terminoevento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `color`, `inicioevento`, `terminoevento`) VALUES
(1, 'Encontro nº 130', '#999999', '2019-03-22 20:00:00', '2019-03-24 20:30:00'),
(2, 'Encontro nº 134', '#F7D358', '2019-05-24 20:00:00', '2019-05-26 20:30:00'),
(3, 'Encontro nº 138', '#642EFE', '2019-08-23 20:00:00', '2019-08-25 20:30:00'),
(4, 'Aniversário de 20 Anos da Comunidade', '#FF4500', '2019-05-04 20:00:00', '2019-05-04 22:00:00'),
(5, 'Santa Ceia', '#228B22', '2019-05-05 18:30:00', '2019-05-05 20:30:00'),
(6, 'Reencontro com Deus nº42', '#8B4513', '2019-06-21 20:00:00', '2019-06-23 20:30:00'),
(12, 'Conferência EU +1', '#FF4500', '2019-07-06 14:00:00', '2019-07-06 22:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `infocursos`
--

CREATE TABLE `infocursos` (
  `idCursos` int(10) NOT NULL,
  `nomeCursos` varchar(50) DEFAULT NULL,
  `tema` varchar(50) DEFAULT NULL,
  `data_` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `infocursos`
--

INSERT INTO `infocursos` (`idCursos`, `nomeCursos`, `tema`, `data_`) VALUES
(1, 'Escola de Profeta', 'Nossa Visão', '2019-03-12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_encontro`
--

CREATE TABLE `info_encontro` (
  `id` int(10) NOT NULL,
  `n_encontro` int(10) NOT NULL,
  `data_inicio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `info_encontro`
--

INSERT INTO `info_encontro` (`id`, `n_encontro`, `data_inicio`) VALUES
(1, 130, '2019-03-22'),
(2, 134, '2019-05-24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `membros`
--

CREATE TABLE `membros` (
  `idmembros` int(10) NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nasc` date NOT NULL,
  `endereco` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `supervisao` varchar(25) CHARACTER SET utf8 NOT NULL,
  `cargo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `cadastro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `membros`
--

INSERT INTO `membros` (`idmembros`, `nome`, `nasc`, `endereco`, `telefone`, `supervisao`, `cargo`, `email`, `cadastro`) VALUES
(2, 'Ana Lucia Luz Orosco', '1973-07-14', 'rua Gupeva, 56 Vila Curuça', '(11) 98355-5651', 'Lika', 'Líder', 'analu.luz@hotmail.com', '2019-02-02 21:47:10'),
(16, 'Jaqueline Tavares de Souza', '1981-09-20', 'rua Castanheira do Brejo, 136', '(11) 94829-7524', 'Jd. Robru', 'Supervisor', 'jaquelinesouza_2006@hotmail.com', '2019-03-02 21:19:40'),
(17, 'Laércio Carlos de Lima', '1956-02-02', 'Avenida Ipê Roxo 1339 Jardim Jaragua', '(11) 94179-4640', 'Pr. Laércio/Vera', 'Pastor', 'laerciomkids@hotmail.com', '2019-03-02 21:22:20'),
(18, 'DANIEL MORSE', '1969-06-16', 'RUA ANTONIO JOÃO DE MEDEREIROS,465 BLOCO 3 APTO 23', '(11) 97203-2556', 'Todas', 'Bispo', 'prdanielmorse@gmail.com', '2019-03-02 21:23:51'),
(20, 'TARCILA DOS SANTOS FONSECA', '1983-12-09', 'RUA CASTANHEIRO DO BREJO 322', '(11) 98510-0508', 'WAGUERSON', 'Líder', 'TTARCILA.9FONSECA@HOTMAIL.COM', '2019-03-11 12:13:18'),
(21, 'Martim Ramalho Vieira', '1980-12-28', 'Rua : Folha Dourada ,92', '(11) 95984-9430', 'São Miguel Paulista', 'Supervisor', 'martimramalhovieira@gmail.com', '2019-03-15 16:00:54'),
(22, 'Shirley Viviane Vieira', '1982-08-05', 'Rua : Folha Dourada ,92', '(11) 98261-1344', 'São Miguel Paulista', 'Supervisor', 'shirley.viviane5@yahoo.com.br', '2019-03-15 16:26:21'),
(23, 'Mirtes Barbosa da Silva ', '1970-01-01', 'Avenida caraipe das águas, 1171', '(11) 95159-176', 'Mirtes', 'Supervisor', 'Mirtesbs@hotmail.com', '2019-03-15 18:14:25'),
(24, 'Carine Reis Torres ', '1986-12-29', 'Palha brava 222', '(11) 98255-1613', 'Mirtes', 'Líder', 'carine29.reis@hotmail.com', '2019-03-15 20:29:53'),
(25, 'Sandra louriene Marques da silva', '1970-01-01', 'Rua caminho quatro,306 bloco H ap 31 Guarulhos ', '(11) 98443-0359', 'Mirtes ', 'Anfitrião', '.lindinhas2@hotmail.com', '2019-03-15 21:07:19'),
(26, 'Ednilsa Araujo Gomes', '1978-07-30', 'Rua Angelo Frazilio, 360', '(11) 97370-2874', 'Casais', 'Pastor', 'adm_progresso@hotmail.com', '2019-03-19 17:28:51'),
(31, 'Bruno do Nascimento Orosco', '1987-03-29', '', '(11) 94071-4391', 'Lika', 'Líder', 'brunoorosco@gmail.com', '2019-03-19 23:37:30'),
(32, 'Leonardo Mauriz de Oliveira', '1980-02-28', 'Rua Guiraro, 173 - Ap 04 Bl A', '(11) 99289-1969', 'Casais', 'Auxiliar', 'newcar@autocenternewcar.com.br', '2019-03-20 13:10:20'),
(33, 'Luana Dias Bezerra', '1983-08-08', 'Rua Guiraro 173 - Apto 04 Bl A', '(11) 98809-1166', 'Casais', 'Auxiliar', 'luanadiasguma@yahoo.com', '2019-03-20 13:11:24'),
(34, 'Renata Gabriela da Silva Ramalho', '1994-09-26', 'Rua Eurides Fernandes do Nascimento, 504', '(11) 95483-7305', 'Casais', 'Auxiliar', 'renatta.gabii@gmail.com', '2019-03-20 13:12:45'),
(35, 'Diogo Juan Ramalho Santos', '1988-07-16', 'Rua Eurides Fernandes do Nascimento, 504', '(11) 95873-2032', 'Casais', 'Líder', 'diogo.juan2@gmail.com', '2019-03-20 13:14:07'),
(36, 'Jessica Santos de Oliveira', '1989-10-14', 'Rua Francisca Marinque Guerra, 72', '(11) 94893-0021', 'Casais', 'Líder', 'jessica.santos.oliv@gmail.com', '2019-03-20 13:15:04'),
(37, 'Felipe Salustiano Soares', '1991-05-23', 'Rua Francisca Mairinque Guerra, 72', '(11) 94862-3271', 'Casais', 'Líder', 'felipe_salustiano@hotmail.com', '2019-03-20 13:16:06'),
(38, 'Priscila Graziele dos Santos Magalhaes', '1986-01-30', 'Rua Antonio Joao de Medeiros, 758 Bl E Apt 52', '(11) 95916-1667', 'Casais', 'Auxiliar', 'priscilgraziele3@gmail.com', '2019-03-20 13:17:19'),
(39, 'Marco Antonio Claro de Souza', '1984-11-14', 'Rua Joao Antonio de Medeiros, 758 Bl E Ap 52', '(11) 96649-8779', 'Casais', 'Líder', 'marco@agenciaskn.com.br', '2019-03-20 13:18:45'),
(40, 'Dener Santos Luz', '1981-07-22', 'Rua Matheus Barbosa de Resende, 85 B', '(11) 94796-7754', 'Casais', 'Auxiliar', 'denerluz22@gmail.com', '2019-03-20 13:19:42'),
(41, 'Michelly Ribeiro Luz', '1990-04-20', 'Rua Matheus Barbosa de Resende, 85 B', '(11) 94796-8710', 'Casais', 'Auxiliar', 'michellyribeiroluz@gmail.com', '2019-03-20 13:20:38'),
(42, 'Alexsandro da Silva Gomes', '1974-02-26', 'Rua Joao Antonio de Medeiros, 65 Bl 4 Ap 13', '(11) 98796-2870', 'Casais', 'Líder', 'alx10@live.com', '2019-03-20 13:21:32'),
(43, 'Edivania Ferreira Gomes', '1968-11-27', 'Rua Joao Antonio de Medeiros, 465 Bl 4 Ap 13', '(11) 95282-2404', 'Casais', 'Auxiliar', 'vaninha.fgomes@gmail.com', '2019-03-20 13:23:03'),
(44, 'Erica Silva Santos', '1983-05-21', 'Rua Caraipe das Aguas, 207', '(11) 96155-2509', 'Casais', 'Supervisor', 'ericass_30santos@hotmail.com', '2019-03-20 13:24:34'),
(45, 'Fabio Alexandre Silva Santos', '1979-05-19', 'Rua Caraipe das Aguas, 207', '(11) 96559-4424', 'Casais', 'Supervisor', 'fabinhoduipe@hotmail.com', '2019-03-20 13:25:26'),
(46, 'WAGUERSON DE OLIVEIRA', '1971-12-14', 'RUA ENGENHO VELHO 238', '(11) 97490-0408', 'WAGUERSON', 'Supervisor', 'waguerson.oliveira@gmail.com', '2019-03-29 15:30:47'),
(47, 'LILIAN BRITO GOMES DOS SANTOS', '2000-11-15', 'RUA JACAREANA 9', '(11) 95431-5963', 'WAGUERSON', 'Auxiliar', 'LILIAN18H@OUTLOOK.COM', '2019-03-29 15:53:32'),
(48, 'FERNANDA ANDREIA DE LIMA GODOI', '1980-08-01', 'AV GUABA 98 B', '(11) 98732-1006', 'WAGUERSON', 'Líder', 'FERNANDA.LIMAGODOY01@GMAIL.COM', '2019-03-29 16:17:45'),
(49, 'RODRIGO DOS SANTOS GODOI', '1981-01-04', 'AV GUABA 98 B', '(11) 98732-1006', 'WAGUERSON', 'Líder', 'RODRIGO.GODOY04@GMAIL.COM', '2019-03-29 16:18:57'),
(50, 'VICTOR DE SIQUEIRA MOREIRA', '2000-02-02', 'RUA BALEEIRA BRANCA 12', '(11) 98390-7496', 'WAGUERSON', 'Líder', 'VICTORMOREIRA6055@GMAIL.COM', '2019-03-29 16:24:30'),
(51, 'DANIELA DOS SANTOS TARDIOLLE', '1999-07-06', 'RUA PALMEIRA DAS BERMUDAS 1.374', '(11) 98390-7496', 'WAGUERSON', 'Auxiliar', 'PEDANIMA@GMAIL.COM', '2019-03-29 17:28:53'),
(52, 'APARECIDA MARIA LUCIANO', '1970-01-01', 'RUA CAFE DO BRASIL 98', '(11) 98673-1380', 'WAGUERSON', 'Auxiliar', 'CIDA.LUCIANO59@HOTMAIL.COM', '2019-03-30 18:58:16'),
(53, 'CARLA CRISTINA DOS SANTOS', '1970-01-01', 'RUA ANTENAS 52', '(11) 98286-5042', 'WAGUERSON', 'Auxiliar', 'CARLA_CRISTINASB@HOTMAIL.COM', '2019-03-30 18:59:48'),
(54, 'ROSINEIDE TEREZINHA DE ANDRADE ', '1971-07-10', 'RUA JOÃO MESQUITA 33', '(11) 95983-6811', 'WAGUERSON', 'Auxiliar', 'ROSINEIDETEREZINHA10@GMAIL.COM', '2019-03-30 19:04:07'),
(55, 'DAVID NUNES DOS SANTOS ', '1972-01-25', 'RUA JOÃO MESQUITA 33', '(11) 95983-6811', 'WAGUERSON', 'Auxiliar', 'DAVIDNUNESRDS@GMAIL.COM', '2019-03-30 19:05:15'),
(56, 'JESSICA RODRIGUES DA SILVA ', '1970-01-01', 'RUA PALMEIRA DAS BERMUDAS 605', '(11) 97968-7888', 'WAGUERSON', 'Líder', 'JE.RODRIGUES.SILVA@HOTMAIL.COM', '2019-03-30 19:09:27'),
(57, 'WALLACE CHRISTIAN M. DA SILVA ALVES ', '1998-08-01', 'RUA MÃE D\'AGUA 66', '(11) 97954-7741', 'WAGUERSON', 'Líder', 'WALLACECHRISTIAN35@GMAIL.COM', '2019-03-30 19:12:28'),
(58, 'JAQUELINE DOS SANTOS OLIVEIRA', '1985-04-13', 'RUA MARIO MASINE 238', '(11) 95457-8026', 'WAGUERSON', 'Auxiliar', 'JAQUE1385@GMAIL.COM', '2019-03-30 19:17:00'),
(59, 'LEANDRO RAMALHO NEIVA', '1987-12-26', 'RUA OSORIO FRANCO VILHENA 984', '(11) 95457-8026', 'WAGUERSON', 'Auxiliar', 'LEANDRORAMALHO8726@GMAIL.COM', '2019-03-30 19:19:12'),
(60, 'RICARDO PINTO DE MORAES', '1976-12-26', 'RUA CASTANHEIRO DO BREJO 322', '(11) 98510-0508', 'WAGUERSON', 'Líder', 'RICARDOKAIKEKAUE@GMAIL.COM', '2019-03-30 19:34:33'),
(61, 'ANA PAULA APARECIDA DA SILVA GODOI', '1988-06-09', 'RUA GUIRARO 331', '(11) 94958-5014', 'WAGUERSON', 'Auxiliar', 'ANAPAULA1_LINDA_GATINHA@HOTMAIL.COM', '2019-03-30 19:36:52'),
(62, 'BRUNA CAROLINY DE SOUZA ', '1994-06-17', 'RUA DARCI MANO 213', '(11) 96070-9329', 'WAGUERSON', 'Líder', 'BCAROLINY1994@HOTMAIL.COM', '2019-03-30 19:48:17'),
(63, 'MARIA LUIZA SABINO ', '1997-04-17', 'RUA MORRO DA BABILONIA 91', '(11) 96337-4497', 'WAGUERSON', 'Líder', 'MARIALUIZASABINO05@GMAIL.COM', '2019-03-30 19:54:34'),
(64, 'KEVIN LEOPOLDINO KAMIA', '1996-08-01', 'RUA MORRO DA BABILONIA 91', '(11) 96337-4497', 'WAGUERSON', 'Auxiliar', 'KEVINHO_KLK@GMAIL.COM', '2019-03-30 19:56:18'),
(65, 'DANIELA BATISTA LIRA', '1985-07-15', 'RUA CANTIDIANO GUIMARÃES 13', '(11) 96217-1001', 'WAGUERSON', 'Auxiliar', 'DANIELABATISTALIRA@GMAIL.COM', '2019-03-30 19:59:27'),
(66, 'LETICIA MONTEIRO DA SILVA ', '1982-08-25', 'RUA BALEEIRA BRANCA 116', '(11) 98837-9936', 'WAGUERSON', 'Líder', 'S2LETICIA.SILVAS2@GMAIL.COM', '2019-04-01 16:20:58'),
(67, 'SIMONE MARIANO DA SILVA ', '1973-06-28', 'RUA MÃE D´AGUA 66', '(11) 94960-8941', 'WAGUERSON', 'Líder', 'MARIANOSSIMONE@GMAIL.COM', '2019-04-01 16:23:46'),
(68, 'MARIAH EDUARDA FERREIRA GOMES ', '2001-06-19', 'RUA ANTONIO JOÃO DE MEDEIROS 465', '(11) 94895-7737', 'WAGUERSON', 'Líder', 'MARIAH.EFGOMES@GMAIL.COM', '2019-04-01 16:28:40'),
(69, 'GABRIEL BARUCH FERREIRA GOMES ', '2003-12-26', 'RUA ANTONIO JOÃO DE MEDEIROS 465', '(11) 94895-7737', 'WAGUERSON', 'Auxiliar', 'BARUCH.FERREIRA@GMAIL.COM', '2019-04-01 16:29:35'),
(70, 'GUILHERME DA SILVA NASCIEMNTO', '2003-05-20', 'RUA BALIEIRA BRANCA 116', '(11) 99233-8082', 'WAGUERSON', 'Líder', 'GUILHERME29051996@GMAIL.COM', '2019-04-01 18:09:52'),
(71, 'JOÃO SEVERINO DE SOUZA ', '1965-08-20', 'AV ALVARO DOS SANTOS MATOS 157', '(11) 97968-9629', 'WAGUERSON', 'Líder', 'JOAOSBOY@YAHOO.COM.BR', '2019-04-01 18:36:37'),
(72, 'ADRIANA A. DE LIMA SOUZA', '1972-10-16', 'AV ALVARO DOS SANTOS MATOS 157', '(11) 97968-9629', 'WAGUERSON', 'Auxiliar', 'LIMA.DRI@YAHOO.COM.BR', '2019-04-01 18:49:21'),
(76, 'Eliana Alves Pequeno', '1968-07-07', 'R. Caraipes das Águas, 1816', '(11) 97381-9825', 'Lika', 'Supervisor', 'elianalikapequeno@gmail.com', '2019-04-04 23:20:20'),
(77, 'Clarice Regina Santos Pequeno', '1981-12-09', 'Rua Congonha do Sertao n 3', '(11) 95429-8133', 'Carapicuiba', 'Supervisor', 'bia.clarice@yahoo.com.br', '2019-04-04 23:35:32'),
(79, 'Marcus Vinicius Otoni de Morais', '1993-09-22', 'rua do pombo correio n 290', '(11) 98528-0170', 'Novo Tempo', 'Líder', 'marcus_otto@hotmail.com', '2019-04-04 23:43:31'),
(80, 'Cláudio Silva Gomes ', '1975-07-19', 'Rua Ângelo Frazilio 360', '(11) 99710-9359', 'Casais', 'Pastor', 'rafa_gomes19@yahoo.com.br', '2019-04-04 23:46:21'),
(81, 'Valdirene Oliveira Bispo dos Santos', '1969-02-25', 'rua faveira do igapo 274 fds', '(11) 97961-6246', 'Novo Tempo', 'Supervisor', 'valdireneclamor@yahoo.com.br', '2019-04-04 23:47:21'),
(82, 'FABIO FRANCISCO', '1970-01-01', 'Rua Congonha do Sertao n 52', '(11) 99299-8995', 'Itaqua', 'Supervisor', 'franciscofabio705@hotmail.com', '2019-04-04 23:54:26'),
(83, 'SANDRA  DANTAS SIQUEIRA FRANCISCO', '1970-01-01', 'Rua Congonha do Sertao n 52', '(11) 95861-8250', 'Itaqua', 'Supervisor', 'sandradantassiqueirafrancisco0@gmail.com', '2019-04-04 23:57:42'),
(84, 'Lucas Orsi', '1994-07-27', 'R. Caraipes das Águas, 1816', '(11) 98655-5716', 'Lika', 'Líder', 'lucasorsi95@gmail.com', '2019-04-05 00:05:20'),
(85, 'Francildo Silva de Oliveira', '1968-02-23', 'av ipe roxo 1704', '(11) 97961-2622', 'Zo', 'Supervisor', 'francildo68f@gmail.com', '2019-04-05 00:10:37'),
(86, 'Willian da Cunha Leao', '1984-02-28', 'rua ilha dos ratones 35', '(11) 94243-8311', 'Jd. kemel', 'Supervisor', 'willian.uei@hotmail.com', '2019-04-05 00:15:44'),
(87, 'Sumaria Almeida Leao', '1981-02-10', 'rua ilha dos ratones 35', '(11) 99332-1325', 'Jd. kemel', 'Supervisor', 'sumariacunha@hotmail.com', '2019-04-05 00:19:16'),
(88, 'Eliane de Oliveira Cunha', '1979-07-06', 'Rua Agrimensor Sugaya 551 Ap 33 Bl-B', '(11) 97256-0467', 'Pr. Marcos/Eliane', 'Pastor', 'eliane.filo@bol.com.br', '2019-04-05 00:22:56'),
(89, 'Marcos Silva da Cunha', '1974-12-20', 'Rua Agrimensor Sugaya 551 AP 33 BL -B', '(11) 97256-0467', 'Pr. Marcos/Eliane', 'Pastor', 'kakocunha48@gmail.com', '2019-04-05 00:25:30'),
(90, 'Anderson Alves dos Santos', '1984-01-27', 'Rua Arnaldo Cintra, 190', '(11) 99887-9336', 'Pr. Anderson', 'Pastor', 'anderson.alves777@gmail.com', '2019-04-05 00:31:03'),
(91, 'Magna de Oliveira SIlva Alves', '1984-08-18', 'Rua Arnaldo Cintra, 190', '(11) 99507-1196', 'Pr. Anderson', 'Supervisor', 'magna_osilva@yahoo.com', '2019-04-05 00:32:19'),
(92, 'Wagner William Andrade de Matos', '1977-03-07', 'r. arvore de umbela, n. 143', '(11) 96393-6297', 'Itu', 'Pastor', 'aguia.bilhares@yahoo.com.br', '2019-04-05 00:36:17'),
(93, 'Rosana Miranda da Silva Matos', '1967-05-28', 'r. arvore de umbela, n. 143', '(11) 96393-6297', 'Itu', 'Pastor', 'aguia.bilhares@yahoo.com.br', '2019-04-05 00:38:21'),
(94, 'RITA DE CASSIA RIBEIRO', '1966-09-19', 'R MACAUBA MIRIM 233 ', '(11) 98225-8516', 'RITA', 'Supervisor', 'RI.AVIVAC@HOTMAIL.COM', '2019-04-05 00:49:41'),
(95, 'Kelly Cristina Leopoldino kamiya', '1976-05-15', 'Rua morro da Babilônia 91', '(11) 91371-684', 'Kids', 'Supervisor', 'kelly.naoesquecerasenha@gmail.com', '2019-04-06 00:58:55'),
(97, 'GISELLY RAMOS FERREIRA', '1993-08-03', 'RUA PROFESSOR ANTONIO DE CASTRO LOPES,517', '(11) 95488-0862', 'Zô', 'Líder', 'gisellygihrf@gmail.com', '2019-04-18 14:58:48'),
(98, 'ALEX PEREIRA DE OLIVEIRA', '1988-10-03', 'RUA PROFESSOR ANTONIO DE CASTRO LOPES,517', '(11) 97754-7616', 'Zô', 'Líder', 'alexpereiradeoliveira88@hotmail.com', '2019-04-18 15:00:22'),
(99, 'KAUE HENRIQUE RAMOS DE OLIVEIRA', '2010-06-08', 'RUA PROFESSOR ANTONIO DE CASTRO LOPES,517', '(11) 95488-0862', 'Zô', 'Membro', 'kauehrdeoliveira@gmail.com', '2019-04-18 15:06:08'),
(100, 'ELIANE CRISTINA DE NEGREIROS OLIVEIRA ', '1979-11-09', 'RUA ITAJUIBE,2447 BLOCO D APTO 42', '(11) 99139-2889', 'Zô', 'Membro', 'eliane_negreiros@hotmail.com', '2019-04-18 16:44:47'),
(101, 'ROSANGELA MARIA PEREIRA DIAS', '1982-05-03', 'RUA POMBO CORREIO,11', '(11) 95998-2396', 'Zô', 'Líder', 'rosangelamaria-03@hotmail.com', '2019-04-18 17:10:59'),
(102, 'RUBENS SOUZA MAIA ', '1978-05-29', 'RUA DO POMBO CORREIO,11', '(11) 95497-3126', 'Zô', 'Líder', 'rosariaequipamentos@hotmail.com', '2019-04-18 17:13:37'),
(103, 'WILSON PEREIRA DE OLIVEIRA ', '1986-06-25', 'RUA JOSE ALEXANDRE MACHADO,552', '(11) 98309-7687', 'Zô', 'Líder', 'wil.son25@hotmail.com', '2019-04-18 17:15:33'),
(104, 'ESTER PEREIRA DE SOUZA DIAS', '2011-01-25', 'RUA DO POMBO CORREIO,11', '(11) 95998-2396', 'Zô', 'Membro', 'bekinha2029@gmail.com', '2019-04-18 17:17:46'),
(105, 'RAFAELA PEREIRA DE OLIVEIRA ', '2015-06-25', 'RUA JOSE ALEXANDRE MACHADO 552', '(11) 98309-7687', 'Zô', 'Membro', 'rfamodel@gmail.com', '2019-04-18 17:19:40'),
(106, 'GRACE KELLY LEILA DE OLIVEIRA', '1989-06-12', 'RUA JOSE ALEXANDRE MACHADO,552', '(11) 98330-6371', 'Zô', 'Líder', 'gklo1225@gmail.com', '2019-04-18 17:22:01'),
(107, 'DENISE RIBEIRO DE JESUS LEITE', '1988-06-08', 'RUA FRANCISCA MANRIQUE GUERRA,394', '(11) 95985-9404', 'Zô', 'Líder', 'deniseribeiro88@gmail.com', '2019-04-18 17:24:26'),
(108, 'SUELI RIBEIRO GARCIA', '1978-10-16', 'RUA CARAIPE DAS AGUAS ,872', '(11) 99913-3626', 'Zô', 'Líder', 'suelirs.garcia@gmail.com', '2019-04-18 17:26:31'),
(109, 'GUSTAVO RIKELMY RIBEIRO VIEIRA ', '2003-09-01', 'RUA CARAIPE DAS AGUAS ,872', '(11) 99913-3626', 'Zô', 'Auxiliar', 'gu.rikelmy@hotmail.com', '2019-04-18 17:28:23'),
(110, 'ELISÂNGELA SANTOS DE OLIVEIRA ', '1989-12-14', 'RUA PEROBA ROSA,303', '(11) 95114-0756', 'Zô', 'Líder', 'elisangelaso@gmail.com', '2019-04-18 17:31:01'),
(111, 'SIMONE RIBEIRO DA SILVA ', '1977-09-17', 'RUA CARAIPE DAS AGUAS ,887', '(11) 95844-5785', 'Zô', 'Auxiliar', 'somoneribeiro@gmail.com', '2019-04-18 17:32:32'),
(112, 'STEPHANIE RODRIGUES SANTOS RAMALHO', '1992-12-07', 'RUA CAFE BRASIL,71', '(11) 95954-6723', 'Zô', 'Líder', 'teca_ag@hotmail.com', '2019-04-18 17:35:16'),
(113, 'ROGERIO OLIVEIRA DOS SANTOS', '1977-08-17', 'RUA ISABEL MORALES DE OLIVEIRA,476', '(11) 98544-5758', 'Zô', 'Auxiliar', 'rogerio.oliveirasantos@hotmail.com', '2019-04-18 17:37:29'),
(114, 'ANDREIA PEREIRA FLORINDO', '1972-06-04', 'RUA LOURENÇO DA VEIGA,161', '(11) 98475-5875', 'Zô', 'Líder', 'andreia.florindo234@hotmail.com', '2019-04-18 17:39:25'),
(115, 'TAYNA RIBEIIRO DE OLIVEIRA ', '2002-09-17', 'RUA CARAIPE DAS AGUAS ,887', '(11) 95876-2548', 'Zô', 'Membro', 'taynaribeiro234@gmail.com', '2019-04-18 17:41:16'),
(116, 'ALEDXSSANDER DE OLIVEIRA ', '1979-01-17', 'RUA BELISARIO BENITEZ, 276', '(11) 96986-5874', 'Zô', 'Líder', 'alexssanderabencoado@hotmail.com', '2019-04-18 17:44:30'),
(117, 'LAIS ALVEZ ', '1986-11-14', 'AVENIDA PAPA JOAO PAULO1,4020', '(11) 95875-4862', 'Zô', 'Membro', 'lais.mayumi1@gmail.com', '2019-04-18 17:46:09'),
(118, 'MARIA CRISTINA RIBEIRO DE OLIVEIRA', '1973-07-13', 'RUA BELISARIO BENITEZ, 276', '(11) 94578-5265', 'Zô', 'Líder', 'mcristinaoliveira@hotmail.com', '2019-04-18 17:47:19'),
(119, 'JULIA RIBEIRO SOUZA ', '2005-09-12', 'RUA BELISARIO BENITEZ, 276', '(11) 95428-6808', 'Zô', 'Auxiliar', 'juliaju1209@hotmail.com', '2019-04-18 18:20:48'),
(120, 'PAULO SANTOS DE OLIVEIRA', '2013-07-08', 'RUA PEROBA ROSA,303', '(11) 95848-7528', 'Zô', 'Membro', 'paulosantos@gmail.com', '2019-04-18 18:21:57'),
(121, 'PEDRO SANTOS DE OLIVEIRA ', '2013-07-08', 'RUA PEROBA ROSA,303', '(11) 98548-7512', 'Zô', 'Membro', 'pedrosantos@gmail.com', '2019-04-18 18:22:48'),
(122, 'GLAIDE SANTOS PONTE SALVATO', '1982-01-26', 'RUA JOSIMAR CERQUEIRA,22', '(11) 96582-4587', 'Zô', 'Auxiliar', 'gsps@gmail.com', '2019-04-18 18:25:36'),
(123, 'MAGAIVER LEITE RIBEIRO', '1986-11-27', 'RUA FRANCISCA MARINQUE GUERRA, 594', '(11) 99958-6485', 'Zô', 'Auxiliar', 'magaiverleite1770@gmail.com', '2019-04-18 18:27:39'),
(124, 'ELAINE CRISTINA DE NEGREIROS OLIVEIRA ', '1979-11-09', 'RUA ITAJUIBE,2447 BLOCO D APTO 42', '(11) 99139-2889', 'Zô', 'Membro', 'elaine_negreiros@hotmail.com', '2019-04-18 18:28:18'),
(125, 'ELIANE SOARES DOS SANTOS ', '1969-04-26', 'RUA KAMPALA PENHA,55', '(11) 98548-7548', 'Zô', 'Líder', 'eliane.soares@hotmail.com', '2019-04-18 18:30:55'),
(126, 'JENIFFER CASTRO DOS SANTOS', '2005-05-17', 'RUA KAMPALA PENHA,55', '(11) 96585-4852', 'Zô', 'Membro', 'jenicastro@gmail.com', '2019-04-18 18:32:49'),
(127, 'EMILI CASTRO DOS SANTOS ', '2005-05-17', 'RUA KAMPALA PENHA,55', '(11) 95845-7552', 'Zô', 'Membro', 'EMICASTRO@GMAIL.COM', '2019-04-18 18:34:32'),
(128, 'ELENILSON SANTOS', '1995-12-02', 'RUA KAMPALA,55', '(11) 98854-8752', 'Zô', 'Membro', 'ELENILSOONST@HOTMAIL.COM', '2019-04-18 18:35:50'),
(129, 'ELIELSOM SANTOS', '1995-12-25', 'RUA KAMPALA,55', '(11) 98852-5457', 'Zô', 'Membro', 'ELISANTOS@HOTMAIL.COM', '2019-04-18 18:37:30'),
(130, 'FERNANDO FELIS DA SILVA', '1978-02-03', 'RUA OSORIO FRANCO VILHEMA,953', '(11) 95625-8754', 'Zô', 'Auxiliar', 'FERNANDOFELIS38@GMAL.COM', '2019-04-18 18:39:40'),
(131, 'ANA DINA SANTOS DE NEGREIROS', '1953-02-21', 'RUA JOSE ELEUTERIO DOS SANTOS ,252', '(11) 98548-7224', 'Zô', 'Líder', 'ANADINANEGREIROS@GMAIL.COM', '2019-04-18 18:41:19'),
(132, 'KATY GARCIA ', '1995-01-21', 'RUA JARDIM DAS MARGARIDAS,272', '(11) 98623-5478', 'Zô', 'Auxiliar', 'KATY-MARGARIDA@HOTMAIL.COM', '2019-04-18 18:42:56'),
(133, 'AGATHA RODRIGUES SILVA', '2006-02-03', 'RUA CAFE BRASIL,71', '(11) 95648-8802', 'Zô', 'Membro', 'agathas@gmail.com', '2019-04-18 18:44:43'),
(134, 'GUILHERME HENRIQUE RODRIGUES SILVA', '2009-09-12', 'RUA CAFE BRASIL ,71', '(11) 95458-2457', 'Zô', 'Membro', 'gui.henrique@gmil.com', '2019-04-18 18:46:24'),
(135, 'MARIO LUIZ DOS SANTOS RAMALHO RODRIGUES', '1988-10-31', 'RUA CAFE BRASIL.71', '(11) 98956-2873', 'Zô', 'Líder', 'marioramalho@icloud.com', '2019-04-18 18:47:45'),
(136, 'PAMELA APARECIDA PIARETI DE NEGREIROS', '1989-12-05', 'RUA JOSE ELEUTERIO DOS SANTOS,252', '(11) 97754-8254', 'Zô', 'Líder', 'piaretipamela@gmail.com', '2019-04-18 18:49:54'),
(137, 'RODRIGO HENRIQUE DE NEGREIROS ', '1986-01-29', 'RUA JOSE ELEUTERIO DOS SANTOS,252', '(11) 95482-6574', 'Zô', 'Líder', 'rodrigohnegreiros@yahoo.com.br', '2019-04-18 18:51:42'),
(138, 'SUÉLEN ALMEIDA SANTOS', '1993-11-25', 'RUA BORBOLETA AMARELA,210 JD HELENA', '(11) 94875-5105', 'Novo Tempo', 'Membro', 'suelen.25.santos@gmail.com', '2019-04-20 01:50:51'),
(139, 'VINICIUS DE ASSIS SOUZA', '2003-08-01', 'RUA PROFESSOR ASSIS VELOSO,SÃO MIGUEL', '(11) 95148-8145', 'Novo Tempo', 'Membro', 'vini.souza.2014@hotmail.com', '2019-04-20 02:15:13'),
(140, 'DIEGO AUGUSTO DE SOUZA', '1992-02-26', 'RUA AMORA,JD IPE', '(11) 98867-3248', 'Novo Tempo', 'Membro', 'diegoaugustosouza18@gmail.com', '2019-04-20 02:31:01'),
(141, 'ANDREONE FELIPE FONSECA', '1994-05-17', 'RUA CRESCENTE,295 JD BARTIRA', '(11) 95444-6656', 'Novo Tempo', 'Membro', 'andreonefonseca@outlook.com', '2019-04-20 02:33:24'),
(142, 'LUCIMAR LOURDES DE MORAIS', '1959-09-02', 'RUA DO POMBO CORREIO,290 JD IPE', '(11) 95913-5582', 'Novo Tempo', 'Líder', 'lucmarl.morais@hotmail.com', '2019-04-20 02:51:15'),
(143, 'SABRINA SOUZA DE OLIVEIRA', '1999-12-17', 'RUA DUILIO LERNADUZZI,448 VL PARANAGUÁ', '(11) 95068-4703', 'Novo Tempo', 'Líder', 'sabrina.souza00@outlook.com', '2019-04-20 02:53:53'),
(144, 'ANDERSON OLIVEIRA BISPO DOS SANTOS', '1999-03-21', 'RUA FAVEIRA DO IGAPO 274 JD IPE', '(11) 95454-4210', 'Novo Tempo', 'Líder', 'aobs_2010@hotmail.com', '2019-04-20 02:56:19'),
(145, 'CLÉCIOMARCIO FRANCISCO DA SILVA', '1998-08-02', 'RUA OLIVIA COELHO MARTINS,447 JD MAIA', '(11) 95253-0407', 'Novo Tempo', 'Líder', 'cleciomarcio.junior@outlook.com', '2019-04-20 03:00:25'),
(146, 'JOYCE GABRIELA CARVALHO RIBEIRO', '2007-02-02', 'PALMEIRA DAS BERMUDAS JD IPE', '(11) 96874-4101', 'Novo Tempo', 'Auxiliar', 'lucianaribeiroosilva@gmail.com', '2019-04-20 03:12:50'),
(147, 'LUSIMAR MARIA SILVA', '1957-10-15', 'RUA PALMEIRA DAS BERMUDAS 826,JD IPE', '(11) 94680-6729', 'Novo Tempo', 'Auxiliar', 'lusimarmaria1957@hotmail.com', '2019-04-20 03:16:26'),
(148, 'GUSTAVO  HENRIQUE CARVALHO RIBEIRO', '2007-02-02', 'RUA PALMEIRA DAS BERMUDAS 826 JD IPE', '(11) 94680-6729', 'Novo Tempo', 'Auxiliar', 'lucianaribeiroosilva@gmail', '2019-04-20 03:20:04'),
(149, 'GABRIELE OLIVEIRA BISPO DOS SANTOS', '2004-03-17', 'RUA FAVEIRA DO IGAPO 274 JD IPE', '(11) 98535-0217', 'Novo Tempo', 'Auxiliar', 'gabirene2004@gmail.com', '2019-04-20 03:23:28'),
(151, 'GELSON BISPO DOS SANTOS', '1993-04-10', 'AV.MARECHAL TITO 3097 ITAIM PTA', '(11) 95968-5362', 'Novo Tempo', 'Líder', '', '2019-04-23 15:05:56'),
(152, 'RINALDO LORASQUE ', '1968-04-07', 'AV IGARAPES 1285 JD IPE', '(11) 98240-2702', 'Novo Tempo', 'Líder', 'Rinaldolorasque@bendsteel.com.br', '2019-04-24 02:29:19'),
(153, 'teste edicao', '1970-01-01', 'teste teste', '(11)12344-4444', 'Lika', 'Supervisor', 'supervisor@supervisor', '2019-05-02 15:49:26'),
(154, 'THAUANE MELISSA COSTA MOREIRA', '1995-03-28', 'SERAFINA D \'ABRIL,61', '(11) 98700-2145', 'Quatro Seres', 'Líder', 'thauane.melissa@gmail.com', '2019-05-11 00:51:39'),
(155, 'COSME DE JESUS JUNIOR', '1993-01-20', 'Jose Martins Lisboa 2168', '(11) 96463-8498', 'Lika', 'Membro', 'cosmedejesusjunior93@gmail.com', '2019-05-14 02:00:20'),
(156, 'CLEICE ALVES DA SILVA ', '1980-03-02', 'AV. DOS IPÊS 1376', '(11) 98450-2913', 'Lika', 'Líder', 'cleicealsilvaped@hotmail.com', '2019-05-14 02:21:39'),
(157, 'ALBENIZE MELO', '1974-02-19', 'AV JOSÉ MARTINS LISBOA 2179', '(11) 96545-0812', 'Lika', 'Auxiliar', 'Melo.albenize@hotmail.com', '2019-05-14 02:29:58'),
(158, 'ROBERTO BORGES BONFIM ', '1981-05-05', 'Jequirana de goias 515  ', '(11) 96452-2132', 'Lika', 'Membro', 'Robertbborges@81.com.br', '2019-05-14 02:55:03'),
(159, 'ROQUE THOME DE OLIVEIRA', '1960-03-08', 'RUA ARICANGA 1252', '(11) 96693-4040', 'Lika', 'Auxiliar', 'lucasorsi@live.com', '2019-05-14 02:58:25'),
(160, 'IVANILDE SILVA SANTOS DE OLIVEIRA', '1964-08-03', 'RUA ARICANGA 1252', '(11) 97778-6674', 'Lika', 'Auxiliar', 'lucasorsi1@live.com', '2019-05-14 03:00:29'),
(161, 'GABRIELA EDUARDA GOMES DE SOUZA', '1993-09-01', 'RUA ROSA MUSGO, 25 A', '(11) 98151-4877', 'Lika', 'Auxiliar', 'gabriela.gsbio@gmail.com', '2019-05-14 03:33:18'),
(162, 'ÂNGELA MUZEL DA SILVA   ', '1961-12-22', 'Antônio cação 58 ', '(11) 94893-3703', 'Lika', 'Auxiliar', 'lucasorsi2@live.com', '2019-05-14 03:37:27'),
(163, 'MARIELE CHAGAS DA SILVA', '1986-09-02', 'MELCHIADES NERES DE CAMPOS 120', '(11) 94981-0992', 'Lika', 'Líder', 'marielichagasdasilvabela@gmil.com', '2019-05-14 03:41:55'),
(164, 'Marcos Antônio da Silva', '1981-04-29', 'Melchiades Neres de Campos 120', '(11) 96149-6037', 'Lika', 'Líder', 'marielichagasdasilvabela2@gmil.com', '2019-05-14 03:46:10'),
(165, 'Camily Janaina Chagas da Silva', '2003-07-15', 'Melchiades Neres de Campos 120', '(11) 96973-7840', 'Lika', 'Auxiliar', 'marielichagasdasilvabela3@gmil.com', '2019-05-14 03:49:52'),
(166, 'VANESSA CRISTINA DA SILVA ', '1970-01-01', 'RUA ANTÔNIO CAÇÃO 85', '(11) 95467-8626', 'Lika', 'Membro', 'NESSA.PITTY68@GMAIL.COM', '2019-05-14 14:06:26'),
(167, 'ADRIANA ALBUQUERQUE DE LIMA', '1978-03-31', 'Rua', '(11) 98543-2751', 'Lika', 'Auxiliar', 'dribruna@hotmail.com', '2019-05-14 14:08:28'),
(168, 'SHEILA DA SILVA HENRIQUE', '1981-05-18', 'RUA ANTÔNIO CAÇÃO 85', '(11) 95986-9437', 'Lika', 'Auxiliar', 'Sheila.henrique@atento.com.br', '2019-05-14 14:10:14'),
(169, 'LEANDRO BATISTA DA SILVA', '1983-09-07', 'Palmeira das bermudas 128 ', '(11) 98153-3432', 'Lika', 'Líder', NULL, '2019-05-14 14:38:29'),
(172, 'TAMAR PEREIRA DANTAS DE LIMA', '1985-09-22', 'Rua Folha Dourada 62', '(11) 98736-2088', 'Lika', 'Líder', 'tamar.pereira@yahoo.com.br', '2019-05-14 15:12:50'),
(173, 'FELIPE ZWIR', '1988-01-08', 'RUA GUAIUVIRA 121', '(11) 96258-8075', 'Lika', 'Membro', 'felipezwir@hotmail.com', '2019-05-14 16:39:00'),
(174, 'BRUNA RODRIGUES DOS SANTOS', '1992-03-05', 'RUA PARAITINGA 336', '(11) 95828-6450', 'Lika', 'Líder', 'BRUNABILLY_@HOTMAIL.COM', '2019-05-14 16:41:14'),
(175, 'CHRISTOPHER BATISTA DOS SANTOS ', '1992-03-19', 'RUA PARAITINGA 336', '(11) 98632-6089', 'Lika', 'Líder', 'lucasorsi1@gmail.com', '2019-05-14 16:43:43'),
(176, 'TATIANE OLIVEIRA SILVA ', '1981-04-18', 'RUA NOTURNO MINEIRO 22', '(11) 97211-3352', 'Lika', 'Líder', 'TATIA_NENE@HOTMAIL.COM', '2019-05-14 16:46:41'),
(177, 'CARLOS EDUARDO RODRIGUES XAVIER ', '1987-07-14', 'RUA NOTURNO MINEIRO 22', '(11) 99981-1767', 'Lika', 'Membro', 'CEDUARDU@HOTMAIL.COM', '2019-05-14 16:53:00'),
(178, 'CARMEM LUCIA S. FARIAS', '1964-04-19', 'DIAS DE ÁVILA 10', '(11) 98987-6612', 'Lika', 'Líder', 'carmem.s.farias@hotmail.com', '2019-05-14 19:08:24'),
(179, 'JOSÉ  MARCOS DE OLIVEIRA FARIAS', '1964-01-25', 'DIAS DE ÁVILA 10', '(11) 98160-9159', 'Lika', 'Líder', 'j.marcos64@Outlook.com', '2019-05-14 19:10:29'),
(180, 'MARIA DAS DORES SILVA ', '1976-07-22', 'PALMEIRAS DAS BERMUDAS 128', '(11) 97803-3550', 'Lika', 'Membro', 'naotememail@gmail.com', '2019-05-14 19:18:04'),
(181, 'RODRIGO SILVA SANTANA ', '2001-10-28', 'PALMEIRAS DAS BERMUDAS 128', '(11) 96833-7169', 'Lika', 'Membro', 'naotem.email@gmail.com', '2019-05-14 19:19:34'),
(182, 'LÍDIA CANDIDO B. SILVA ', '1985-01-16', 'PALMEIRAS DAS BERMUDAS 128', '(11) 98153-3432', 'Lika', 'Auxiliar', 'nao.tem.email@gmail.com', '2019-05-14 19:21:11'),
(183, 'MATEUS FERNANDES ', '2008-04-12', 'GUAIUVIRA 121', '(11) 96258-8075', 'Lika', 'Auxiliar', 'naotememail1@gmail.com', '2019-05-14 19:23:02'),
(184, 'PATRICIA FERNANDES ', '1977-03-20', 'GUAIUVIRA 121', '(11) 96258-8075', 'Lika', 'Líder', 'naotem.email2@gmail.com', '2019-05-14 19:24:22'),
(185, 'NICOLAS DA SILVA CRISTIA', '2005-10-30', 'RUA ANTÔNIO CAÇÃO 85', '(11) 95986-9437', 'Lika', 'Membro', 'naotememail3@gmail.com', '2019-05-14 19:26:58'),
(186, 'JORGE SILVA FILHO', '1973-11-06', 'BERNADINO SILVA 6', '(11) 96736-1007', 'Lika', 'Líder', 'naotememail4@hotmail.com', '2019-05-14 19:35:02'),
(187, 'AGATHA CHRISTYE DE LIMA SOUZA', '1999-02-18', 'AV.ALVARO DOS SANTOS MATTOS,157, PQ SANTA RITA ', '(11) 99444-4345', 'Quatro Seres', 'Auxiliar', 'AGATHALIMASOUZA@GMAIL.COM', '2019-05-14 19:42:01'),
(188, 'GISLAINE RIBEIRO ', '1995-05-10', 'RUA MACAUBA MIRIM,233- JARDIM DOS PES ', '(11) 95439-7967', 'Quatro Seres', 'Membro', 'GIH.NERES19@HOTMAIL.COM', '2019-05-14 20:10:07'),
(189, 'WELDER ALVES DE ALMEIDA', '1998-02-17', 'RUA CONGONHA DO SERTÃO,52-JARDIM DOS YPES', '(11) 94233-5332', 'Quatro Seres', 'Membro', 'welderalves.bass@gmail.com', '2019-05-14 20:22:37'),
(190, 'CAMILA ALVES DE CASTRO', '1970-01-01', 'RUA DOUTOR FRANCISCO TANCREDI,789- PQ PAULISTANO', '(11) 94971-5323', 'Quatro Seres', 'Membro', 'camila_silvaesilva@hotmail.com', '2019-05-14 20:36:37'),
(192, 'GABRIEL PEREIRA CAXIAS ', '1994-08-09', 'RUA ASCENSO FERNANDES, 297- PQ PAULISTANO', '(11) 95202-8871', 'Quatro Seres', 'Membro', 'gabs.caxias7@gmail.com', '2019-05-14 20:39:45'),
(193, 'LUIS CLAUDIO BORGES DA SILVA', '1994-04-16', 'RUA COQUEIRO CARANDÁ,352- JARDIM DOS YPES', '(11) 96591-8021', 'Quatro Seres', 'Membro', 'luis_zinho@live.com', '2019-05-14 20:44:54'),
(194, 'THIAGO DA SILVA GOMES', '1986-03-24', 'AV.ALVARO DOS SANTOS MATTOS,151, PQ SANTA RITA ', '(11) 98393-7839', 'Quatro Seres', 'Supervisor', 'tgmesnre@gmail.com', '2019-05-14 20:47:47'),
(195, 'EDSON MOREIRA COSTA', '1969-12-12', 'AV FERNANDO FIGUEIREDO LINS 38', '(11) 98565-0736', 'Lika', 'Líder', 'edymc33@hotmail.com', '2019-05-15 00:30:31'),
(196, 'ELLEN MAYARA FEITOSA DA COSTA', '2003-07-13', 'AV FERNANDO FIGUEIREDO LINS 38', '(11) 96777-8015', 'Lika', 'Auxiliar', 'ellencosta1203@gmail.com', '2019-05-15 00:33:37'),
(197, 'SÔNIA CLOTILDE FEITOSA DA COSTA', '1964-04-17', 'AV FERNANDO FIGUEIREDO LINS 38', '(11) 96686-4621', 'Lika', 'Auxiliar', 'soniafc174@gmail.com', '2019-05-15 00:36:47'),
(200, 'JOEL SANTOS', '1980-04-30', 'Rua. Cairapes das Aguas', '(11) 97101-7977', 'Jd. Helena', 'Pastor', 'joel.santos@novelis.com ', '2019-05-21 14:50:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_acesso`
--

CREATE TABLE `nivel_acesso` (
  `id` int(10) NOT NULL,
  `nivel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `nivel_acesso`
--

INSERT INTO `nivel_acesso` (`id`, `nivel`) VALUES
(1, 'Administrativo'),
(2, 'Supervisor'),
(3, 'Pastor'),
(4, 'secretariaEnc'),
(5, 'Apoio'),
(6, 'Curso');

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

CREATE TABLE `teste` (
  `id` int(10) NOT NULL,
  `nome` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id` int(11) NOT NULL,
  `alunos` int(10) NOT NULL,
  `curso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aceita_jesus`
--
ALTER TABLE `aceita_jesus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acesso`
--
ALTER TABLE `acesso`
  ADD PRIMARY KEY (`idmembro`),
  ADD KEY `fk_user` (`username`),
  ADD KEY `nivel_acesso` (`nivel_acesso`);

--
-- Indexes for table `config_sistem`
--
ALTER TABLE `config_sistem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `encontrista`
--
ALTER TABLE `encontrista`
  ADD PRIMARY KEY (`idEncontrista`);

--
-- Indexes for table `encontro`
--
ALTER TABLE `encontro`
  ADD PRIMARY KEY (`id_encontro`),
  ADD KEY `fk_encontro` (`n_encontro`),
  ADD KEY `fk_enco` (`encontrista`);

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
-- Indexes for table `info_encontro`
--
ALTER TABLE `info_encontro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk` (`n_encontro`);

--
-- Indexes for table `membros`
--
ALTER TABLE `membros`
  ADD PRIMARY KEY (`idmembros`),
  ADD KEY `email_index` (`email`) USING BTREE;

--
-- Indexes for table `nivel_acesso`
--
ALTER TABLE `nivel_acesso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teste`
--
ALTER TABLE `teste`
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
-- AUTO_INCREMENT for table `aceita_jesus`
--
ALTER TABLE `aceita_jesus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `acesso`
--
ALTER TABLE `acesso`
  MODIFY `idmembro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `config_sistem`
--
ALTER TABLE `config_sistem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `encontrista`
--
ALTER TABLE `encontrista`
  MODIFY `idEncontrista` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `encontro`
--
ALTER TABLE `encontro`
  MODIFY `id_encontro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `infocursos`
--
ALTER TABLE `infocursos`
  MODIFY `idCursos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `info_encontro`
--
ALTER TABLE `info_encontro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membros`
--
ALTER TABLE `membros`
  MODIFY `idmembros` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `nivel_acesso`
--
ALTER TABLE `nivel_acesso`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teste`
--
ALTER TABLE `teste`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acesso`
--
ALTER TABLE `acesso`
  ADD CONSTRAINT `acesso_ibfk_1` FOREIGN KEY (`username`) REFERENCES `membros` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nivel_acesso` FOREIGN KEY (`nivel_acesso`) REFERENCES `nivel_acesso` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `encontro`
--
ALTER TABLE `encontro`
  ADD CONSTRAINT `fk_enco` FOREIGN KEY (`encontrista`) REFERENCES `encontrista` (`idEncontrista`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_encontro` FOREIGN KEY (`n_encontro`) REFERENCES `info_encontro` (`n_encontro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`alunos`) REFERENCES `membros` (`idmembros`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `turma_ibfk_2` FOREIGN KEY (`curso`) REFERENCES `infocursos` (`idCursos`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
