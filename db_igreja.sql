-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Ago-2019 às 21:56
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_igreja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aceita_jesus`
--

CREATE TABLE `aceita_jesus` (
  `id` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `aceit_reconc` varchar(12) NOT NULL,
  `cadastro` date NOT NULL,
  `batizado` varchar(5) DEFAULT NULL,
  `cem` varchar(25) DEFAULT NULL,
  `idade` varchar(5) DEFAULT '0',
  `fixo` varchar(15) DEFAULT NULL,
  `cargo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `aceita_jesus`
--

INSERT INTO `aceita_jesus` (`id`, `nome`, `endereco`, `telefone`, `aceit_reconc`, `cadastro`, `batizado`, `cem`, `idade`, `fixo`, `cargo`) VALUES
(1, 'Elieser Cezário da Silva Jr.', 'Rua Francicsco Martinho 182 - Suzano', '948947271', 'reconciliou', '2018-12-01', 'sim', 'Sup.Silvani', NULL, NULL, NULL),
(2, 'Cleison Melo', 'estrada dos Indios 285 - Itaqua ', '964044194', 'reconciliou', '2018-12-07', 'não', 'Sup.Geovana', NULL, NULL, NULL),
(3, 'Cintia Albuquerque Lorasque', 'Rua Apiranga 04 - jd.Ipe', '41725896', 'reconciliou', '2018-12-09', 'sim', 'Sup.Valdirene', NULL, NULL, NULL),
(4, 'Cleberson Alberto de Jesus', 'Rua Carana Branca 201 - J.Helena', '999662157', 'reconciliou', '2018-12-09', 'sim', '', NULL, NULL, NULL),
(5, 'Andre Aziago dos Santos', 'Rua Anajatuba 19A - Itaim Pta', '985762711', 'reconciliou', '2018-12-09', 'sim', 'Pr.Joel', NULL, NULL, NULL),
(6, 'Samuel Mendes', 'Rua Francisco Antonio Meira - Vl.Mara', '986559951', 'reconciliou', '2018-12-09', 'não', '', NULL, NULL, NULL),
(7, 'Rogerio Soares da Silva', 'Rua Castanheira do Brejo 295 - J.Ipe', '970690241', 'aceitou', '2018-12-09', 'não', 'Sup.Luizinho', NULL, NULL, NULL),
(8, 'Felipe Cesar Rodrigues', 'Rua Rosa Musgo 475 - J.Miragaia', '970211055', 'reconciliou', '2018-12-09', 'sim', 'Pra.Wanda', NULL, NULL, NULL),
(9, 'Rinaldo Lorasque Filho', 'Rua Apiranga 04 - J.Ipe', '27292218', 'reconciliou', '2018-12-09', 'sim', 'Sup.Valdirene', NULL, NULL, NULL),
(10, 'Edmar Gomes da Silva', 'Rua Sebastiao Aves - camargo Novo', '964402320', 'aceitou', '2018-12-09', 'não', 'Sup.Geovana', NULL, NULL, NULL),
(11, 'Valeria Fernandes dos Santos ', 'Rua piranema - J.Campos', '940874019', 'reconciliou', '2018-12-09', 'sim', '', NULL, NULL, NULL),
(12, 'Jair Jose Luis', 'Rua Erva do Fogo 110 - J.Ipe', '964383005', 'reconciliou', '2018-12-09', 'sim', 'Sup.Valdirene', NULL, NULL, NULL),
(13, 'Eunice Nunes  Magaldi ', 'Rua Gravata de Pedra 16 - J.Ipe', '973456393', 'aceitou', '2018-12-09', 'não', '', NULL, NULL, NULL),
(14, 'Sivaldo Souza ', 'Rua Agua Vermelha 17 casa 3', '959455437', 'reconciliou', '2018-12-09', 'sim', '', NULL, NULL, NULL),
(15, 'Joao Vitor Lopes da Silva', 'Rua Gravata de Pedra 19 - J.Ipe', '951496802', 'reconciliou', '2018-12-21', 'sim', 'Sup.Lika', NULL, NULL, NULL),
(16, 'Ana Paula Rodrigues', 'Rua Cotia 114 - J.Campos', '', 'reconciliou', '2018-12-21', 'sim', 'Sup.Sandra', NULL, NULL, NULL),
(17, 'Antonio Leite da Silva Filho', 'Rua Gesiaba 17 - J.Campos', '951496802', 'reconciliou', '2018-12-21', 'sim', 'Sup.Lika', NULL, NULL, NULL),
(18, 'Cristiane Viana de Jesus', 'Rua Jose Martins Lisboa 2204 - Pantanal', '987079288', 'aceitou', '2018-12-23', 'não', '', NULL, NULL, NULL),
(19, 'Lucimar Alves da Silva', 'Baleeira Branca 366 - J.Ipe', '996839001', 'reconciliou', '2018-12-23', 'sim', 'Sup.Lika', NULL, NULL, NULL),
(20, 'Jussara Domingues Pimentel', 'Rua Obai 25 - J.Nazare', '977535724', 'reconciliou', '2018-12-23', 'sim', 'Pra.Bete', NULL, NULL, NULL),
(21, 'Richard Marques Gomes', 'Rua Gherardt Holts 7B - J.Silva Teles', '984430359', 'aceitou', '2018-12-23', 'não', 'Sup.Mirtes', NULL, NULL, NULL),
(22, 'Beatriz Pimentel Nunes Gonsalves', 'Rua Melchiades Nunes de Campos 452 - pq.sta Rita', '', 'reconciliou', '2018-12-23', 'não', 'Sup.Lika', NULL, NULL, NULL),
(23, 'Elza Bento Bezerra ', 'Rua Melchiades Nunes de Campos 452 - pq.sta Rita', '38082046', 'reconciliou', '2018-12-23', 'sim', 'Sup.Lika', NULL, NULL, NULL),
(24, 'Kaua Henrique Ramos Oliveira', 'Rua Ipe Roxo 1704 - Itaim Pta', '940761125', 'aceitou', '2019-01-04', 'não', 'Sup. Zô', NULL, NULL, NULL),
(25, 'Gabriela Queiroz da Silva ', 'Rua Virginia Ferne 88 - Cohab 2', '949235284', 'reconciliou', '2019-01-13', 'sim', '', NULL, NULL, NULL),
(26, 'Vitor Gratao ', 'Rua Palmeira das Bermudas 658 - Jd.Ipe', '996406714', 'reconciliou', '2019-01-13', 'sim', '', NULL, NULL, NULL),
(27, 'Larissa Rodrigues Santos', 'Francisca Marrique Guerra 103 A - Jd.Ipe', '94944332', 'aceitou', '2019-01-18', 'não', 'Sup.Valdirene', NULL, NULL, NULL),
(28, 'Renan david', 'Rua Castanheiro do Brejo 55 - Jd.Ipe', '940097687', 'aceitou', '2019-01-18', 'não', '', NULL, NULL, NULL),
(29, 'Andressa Mayumuihod Yamath', 'Rua Namesio Candido Gomes 151 - Vl.Zeferina', '979712378', 'aceitou', '2019-01-18', 'não', '', NULL, NULL, NULL),
(30, 'Natalia Viana', 'Av.dos Ipes - Jd.Ipe', '957936180', 'reconciliou', '2019-01-20', 'não', '', NULL, NULL, NULL),
(31, 'Jonathan da Silva', 'Rua Machiche 35 - Jd.Eloisa', '981754649', 'reconciliou', '2019-01-20', 'não', '', NULL, NULL, NULL),
(32, 'Edson Bispo dos Santos', 'R.S.Pedro de Jequitinhonha 78 - J.S.Carlos', '977258045', 'reconciliou', '2019-01-20', 'sim', 'Sup. Martim', NULL, NULL, NULL),
(33, 'Jenifer Silva Demortoli', 'R.S.Pedro de Jequitinhonha 78 - J.S Carlos', '981538915', 'reconciliou', '2019-01-20', 'sim', 'Sup. Martim', NULL, NULL, NULL),
(34, 'Maria Celia Patricio', 'Av.dos Igarapes - Jd.Ipe', '993611632', 'reconciliou', '2019-01-25', 'sim', 'Sup.Valdirene', NULL, NULL, NULL),
(35, 'Alexsandro Alve de Araujo', 'Rua Adriano Seabra 60 - Pq.Paulistano', '42115281', 'aceitou', '2019-01-25', 'não', '', NULL, NULL, NULL),
(36, 'Renata lima', 'Rua Mendanha 32 - Jd.Carolina', '29630294', 'aceitou', '2019-01-27', 'não', 'Sup.Martim', NULL, NULL, NULL),
(37, 'Jean Sales Santos', 'Rua lagoa Cajuba 101 - Jd.Campos', '962604750', 'reconciliou', '2019-01-27', 'não', 'Sup.Martim', NULL, NULL, NULL),
(38, 'Marisa Lopes Vicente', 'Rua |Gravata de Pedra 19 - Jd. Ipe', '951496802', 'reconciliou', '2019-01-27', 'sim', 'Pr. Joel/Regiane', NULL, NULL, NULL),
(39, 'Jose Silva Nogueira', 'Glochonias 110 A - Cidade Nova S.Miguel', '', 'aceitou', '2019-01-27', 'não', 'Pr. Joel/Regiane', NULL, NULL, NULL),
(40, 'Leonardo Bezerra Omena', 'Rua Betula Negra - Jd.Nelia', '982518015', 'reconciliou', '2019-01-27', 'sim', 'Sup. Aldo/Silvani', NULL, NULL, NULL),
(41, 'Jean Michel dos Santos', 'Rua Massato Sakai 180 - Ferraz', '940326399', 'reconciliou', '2019-01-27', 'sim', 'Sup.Jaqueline', NULL, NULL, NULL),
(42, 'Amanda Laurentino dos Sabntos', 'Rua Lourenco Paganucci 593 - Ferraz', '9836838991', 'reconciliou', '2019-01-27', 'sim', 'Sup. Zô/Fátima', NULL, NULL, NULL),
(43, 'Eliane Lourenco', 'Rua Porto do Bezerra 660 - Guaianases', '981805166', 'aceitou', '2019-02-10', 'sim', 'Sup. Clarice/Luiz', NULL, NULL, NULL),
(44, 'Tatiana Macedo Dunda', 'Rua Igarapes 980 - Jd dos ipes', '965826114', 'aceitou', '2019-02-17', 'não', 'Pr. Laercio/Vera', NULL, NULL, NULL),
(45, 'Juliana Silveiro dos Santos', 'Rio Itapicu Mirim N?95 - Camargo Novo', '983612420', 'aceitou', '2019-02-17', 'sim', '', NULL, NULL, NULL),
(46, 'Gabriel Martins de Souza', 'Dr. Gil Martins 96 - Itaim', '96652702', 'reconciliou', '2019-02-17', 'não', 'Sup. Valdirene', NULL, NULL, NULL),
(47, 'Bruno Rodrigues', 'Rua: Jacaranda Rosa 307 - Jd. Noemia', '(11) 95107-6652', 'reconciliou', '2019-02-22', 'sim', 'Sup. Valdirene', NULL, NULL, NULL),
(48, 'Joselito Da Silva Oliveira', 'Av. Carrego Tijuco Preto 188 - Jd. Oliveira', '', 'reconciliou', '2019-02-24', 'não', 'Sup. Giovanna', NULL, NULL, NULL),
(49, 'Carlos Alberto Ribeiro', 'Rua Macauba Mirim 231 - Jd dos ipes', '983874818', 'reconciliou', '2019-02-24', 'sim', 'Rita Obreira', NULL, NULL, NULL),
(50, 'Amanda Cristina Soares', 'Pedro Ferraz Lopes 370 - Jd Campos ', '22648683', 'reconciliou', '2019-02-24', 'sim', 'Sup. Valdirene', NULL, NULL, NULL),
(51, 'Matheus Ferreira Calado', 'Rua Alpercata 19', '959775150', 'reconciliou', '2019-02-24', 'não', '', NULL, NULL, NULL),
(52, 'Thayane de Souza Carvalho', 'Rua Dolores de Aquino 28 - Jundiapeba', '932304606', 'reconciliou', '2019-02-24', 'não', '', NULL, NULL, NULL),
(53, 'Robson Viana de Jesus', 'Av.Jose Martim Lisboa 2168 - jd.S.Martinho Helena', '', 'aceitou', '2019-02-26', 'não', 'Sup.Lika', NULL, NULL, NULL),
(54, 'Rosangela de Oliveira Santos', 'R. Gal.Dalton Teixeira 133 - vl.Mara', '', 'reconciliou', '2019-03-01', 'sim', '', NULL, NULL, NULL),
(55, 'Leticia Vitoria Santos', 'R.Mateus Barbosa Resende 287 A - pq.sta Rita', '958792952', 'reconciliou', '2019-03-03', 'não', '', NULL, NULL, NULL),
(56, 'Vitoria nascimeto Neves Conceicao', 'Av. dos Ipes 1060 - Jd,Ipe', '954404968', 'reconciliou', '2019-03-03', 'não', '', NULL, NULL, NULL),
(57, 'Rayane Vitoria Alves dos Santos', 'R. Padre Eduardo Roberto 127 - S.miguel', '951461358', 'reconciliou', '2019-03-03', 'não', 'Sup.Valdirene', NULL, NULL, NULL),
(58, 'Leandro Jose da Slva', 'R.Francisca Manrique Guerra 9C - Jd.Ipe', '952720453', 'reconciliou', '2019-03-03', 'sim', 'Sup.Valdirene', NULL, NULL, NULL),
(59, 'Roberto Borges Bonfim', 'Rua Gequirame de Goias 515 apto 2 - Vila Curuca', '987992995', 'reconciliou', '2019-03-03', 'sim', 'Sup.Lika', NULL, NULL, NULL),
(60, 'Patricia Gomes P. Guedes', 'Rua Gequirame de Goias 515 apto 2 - Vila Curuca', '987992885', 'reconciliou', '2019-03-03', 'sim', 'Sup.Lika', NULL, NULL, NULL),
(61, 'Marivan Ferreira Barros', 'Sabiá Laranjeira 113 - Vila Mara', '25857006', 'aceitou', '2019-03-05', 'não', 'Pr.Joel', NULL, NULL, NULL),
(62, 'Juliana de ALmeida S.', 'Av.dos Ipes 1294 - Jd. Ipe', '954119720', 'reconciliou', '2019-03-05', 'sim', 'Sup.Valdirene', NULL, NULL, NULL),
(63, 'Joao Carlos Ribeiro de Amorim', 'Rua Gravata de pedra 535 - Jd.Ipe', '975893150', 'reconciliou', '2019-03-05', 'não', 'Sup. Fabio/Sandra', NULL, NULL, NULL),
(64, 'Normalicia Ferreira ', 'Rua Sabia Laranjeira 113 - Vl. Mara', '', 'aceitou', '2019-03-05', 'não', 'Pr.Joel', NULL, NULL, NULL),
(65, 'Livia Michele dos Santos Matos', 'Rua Cipó do Reino 119 - Jd.ipe', '', 'aceitou', '2019-03-05', 'sim', 'Sup.Valdirene', NULL, NULL, NULL),
(66, 'Ana Paula Novaes de Jesus', 'Rua Cio da Terra 11 - Itaim Pta', '', 'reconciliou', '2019-03-05', 'sim', '', NULL, NULL, NULL),
(67, 'Rafaela Cardoso Gonsalves', 'Av.Joao Batista Santiago 455 - Jd.Robrú', '', 'aceitou', '2019-03-05', 'não', '', NULL, NULL, NULL),
(68, 'Milena Gomes Fernandes', 'Rua Pedro Rodrigues 86 - pq.sta Rita', '991241930', 'reconciliou', '2019-03-17', 'sim', 'Pr.Claudio/Edi', NULL, NULL, NULL),
(69, 'Marcela Gomes Fernandes', 'Rua Pedro Rdrigues 86 - Pq.Sta Rita', '991692312', 'reconciliou', '2019-03-17', 'sim', 'Pr.Claudio/Edi', NULL, NULL, NULL),
(70, 'Romero Kopps Junior', 'Rua Aricanga 974 - Jd.Silva Teles', '954646486', 'aceitou', '2019-03-17', 'não', 'Sup.Lika', NULL, NULL, NULL),
(71, 'Fernanda Cristina de Farias', 'Rua Aricanga 974 - Jd.Silva Teles', '941472010', 'aceitou', '2019-03-17', 'não', 'Sup.Lika', NULL, NULL, NULL),
(72, 'Daniela Santos de Jesus ', 'Rua das Gaivotas 06 - Vale da Brisas', '950383374', 'aceitou', '2019-03-22', 'não', 'Pr.Wagner', NULL, NULL, NULL),
(73, 'Julia Matos', 'Rua Jangaba 03 - Itaim Pta', '986687952', 'aceitou', '2019-03-22', 'não', '', NULL, NULL, NULL),
(74, 'Fabio Falcão ', 'Rua Pedro de Castilho 1012 - Jacana', '977916442', 'reconciliou', '2019-03-22', 'sim', '', NULL, NULL, NULL),
(75, 'Edvaldo Gomes de Lima', 'Rua Paulo Arnes 46 - Cid.Nova S.Miguel', '20359880', 'reconciliou', '2019-03-22', 'sim', '', NULL, NULL, NULL),
(76, 'Wanderclayson O. da Cruz', 'Rua Julia 25 - Vl.Esperenca', '', 'reconciliou', '2019-03-22', 'não', 'Sup. Fabio/Sandra', NULL, NULL, NULL),
(77, 'Fabiano da Cruz Feliz', 'Av.dos Ipes - Jd.Ipe\",\"25621081', '', 'reconciliou', '2019-03-24', 'não', 'Sup. Fabio/Sandra', NULL, NULL, NULL),
(78, 'Erika Souza Santos', 'Rua Macauba Mirim264 - Jd.Ipe', '999866513', 'aceitou', '2019-03-24', 'não', 'Sup.Waguerson', NULL, NULL, NULL),
(79, 'Genilson Elias Oliveira', 'Rua Corrego do Tijuco Preto 190 A - Itaim Pta', '954673090', 'aceitou', '2019-03-24', 'não', '', NULL, NULL, NULL),
(80, 'Adriana Salalori de Souza', 'Rua Carlos Coco 72 - JD.SilvaTeles', '36783687', 'reconciliou', '2019-03-24', 'sim', 'Sup.Zô', NULL, NULL, NULL),
(81, 'Solange de Assis', 'R. Prof.Assis Veloso 458 fundos - Vila Rosalia', '997756320', 'reconciliou', '2019-03-24', 'sim', 'Sup.Valdirene', NULL, NULL, NULL),
(82, 'Cristina Rolim de Lima', 'Rua Andre Martins 60 - Freguesia do ó', '979733565', 'reconciliou', '2019-03-24', 'sim', '', NULL, NULL, NULL),
(83, 'Diego Alves', 'Rua Peroba rosa 169 - Miragaia', '947459699', 'reconciliou', '2019-03-24', 'sim', 'Sup.Waguerson', NULL, NULL, NULL),
(84, 'Edmilson Freitas de Oliveira', 'Rua Vianopolis 237 - Vl.Maria Alta', '9567709020', 'reconciliou', '2019-03-26', 'sim', '', NULL, NULL, NULL),
(87, 'Tatiana Vitoria Melo Silva', 'Rua Domingues Vidigal Jd Jaraguá', '', 'Aceitou', '2019-05-05', 'não', 'Pr. Laércio/Vera', '11', '', NULL),
(88, 'Thiago dos Santos Damasceno ', 'Rua Caraipe das Aguas,566 Jd Ipe', '', 'Reconciliou', '2019-05-05', 'sim', '', '33', '(25) 1291-85', NULL),
(89, 'Kathleen Yasmin Alves da Silva', 'Rua Higino Messa 100,Vl Curuçá', '(11) 94179-3170', 'Reconciliou', '2019-05-05', 'não', '', '19', '', NULL),
(90, 'Maria Mercedes Mareri', 'Rua Pimenta D\'agua 18, Itaim', '(11) 96207-7212', 'Aceitou', '2019-05-05', 'não', 'Lika', '30', '', NULL),
(91, 'Fabiana Coutinho Muniz', 'Rua Louro Tinga,196 Vl Progresso', '(11) 98252-1090', 'Reconciliou', '2019-05-05', 'não', 'Lika', '37', '', NULL),
(92, 'Marcia Moura ', 'Rua Fridolino Chimango,11 Jd Silva Teles', '', 'Aceitou', '2019-05-05', 'não', 'WAGUERSON', '42', '(11) 2561-8448', NULL),
(93, 'Tatiane Nascimento Katawatis', 'Rua rio D\'ouro, 26 Jd Jaraguá', '(11) 98270-6076', 'Reconciliou', '2019-05-05', 'sim', 'Pr. Laércio/Vera', '30', '', NULL),
(94, 'Gabriel Fernandes Souza Martins', 'Rua Guaivira 21 SP', '(11) 96258-8075', 'Aceitou', '2019-05-05', 'não', 'Lika', '15', '', NULL),
(95, 'Joâo Vitor Braga Alves', 'Rua Sabiá Laranjeira,268 Jd Helena', '', 'Aceitou', '2019-05-05', 'não', 'Jd. Helena', '18', '', NULL),
(96, 'Eduardo Arcanjo Alves Silva', 'Rua Palmeira das Bermudas, 71 Jd Ipe', '(11) 95928-1448', 'Reconciliou', '2019-05-05', 'não', 'Novo Tempo', '22', '', NULL),
(97, 'Carolina Chagas Alves', 'Rua Carana Branca 15 A', '(11) 96967-0438', 'Reconciliou', '2019-05-05', 'não', '', '13', '', NULL),
(98, 'RONALDO ALVEZ PEREIRA', 'RUA GERHARDT HOLTZ, 226, JARDIM SILVA ', '(11) 98429-1725', 'Reconciliou', '2019-05-05', 'não', '', '32', '', NULL),
(99, 'ANA VITÓRIA ANDRADE', 'RUA GRAVATÁ DA PEDRA, 37', '', 'Aceitou', '2019-05-05', 'não', '', '10', '', NULL),
(100, 'RODRIGO ARRAZ DOS SANTOS', 'RUA ARNALDO MAMED JUNIOR, 17', '', 'Reconciliou', '2019-05-05', 'sim', '', '34', '', NULL),
(101, 'FILIPE DE AQUINO PONTES', 'RUA ALMEIDA DOS REIS, 54, BLOCO D, AP 42', '(11) 98702-1082', 'Reconciliou', '2019-05-05', 'sim', '', '27', '', NULL),
(102, 'ALISSON ROBERTO ', 'AVENIDA JULIO TUPI, 59', '(11) 94758-2774', 'Reconciliou', '2019-05-05', 'sim', 'WAGUERSON', '28', '', NULL),
(103, 'VINICIOS DE SOUZA RODRIGUES', 'RUA RIO D\'OURO, 44A', '', 'Aceitou', '2019-05-05', 'sim', 'Todas', '9', '(11) 2561-2114', NULL),
(104, 'ADRIELE PIRES', 'RUA ROSA MUSGO, 103', '(11) 97805-9763', 'Reconciliou', '2019-05-17', 'sim', 'Pr. Laércio/Vera', '15', '', NULL),
(105, 'ANDRESSA SOUZA DE OLIVEIRA', 'RUA MACAÚBA MIRIM, 234', '', 'Reconciliou', '2019-05-17', 'sim', '', '34', '(11) 3678-1884', NULL),
(106, 'MATEUS DAS NEVES SILVA', 'RUA RIO DO OURO, 92', '(11) 98463-8891', 'Aceitou', '2019-05-17', 'não', 'Pr. Laércio/Vera', '11', '', NULL),
(107, 'CAMILA FERREIRA DA SILVA', 'RUA ERVA DO SERENO, 506, JARDIM PANTANAL', '(11) 94885-9444', 'Reconciliou', '2019-05-19', 'não', 'Novo Tempo', '24', '', NULL),
(108, 'BIANCA LIMA SOIER', 'RUA PIMENTA D\'ÁGUA, 80', '(11) 96601-5149', 'Reconciliou', '2019-05-19', 'não', '', '24', '', NULL),
(109, 'ANA JULIA VIEIRA PIMENTA', 'RUA TERRA SEM MALES, 32', '(11) 98534-3436', 'Reconciliou', '2019-05-19', 'não', 'Todas', '11', '', NULL),
(110, 'ALEXSANDER JULIO DAMASCENO DOS SANTOS', 'RUA CASTANHEIRO DO BREJO, 90', '(11) 93207-9329', 'Aceitou', '2019-05-19', 'não', 'WAGUERSON', '17', '', NULL),
(111, 'JULIA SIQUEIRA', 'RUA BALIEIRA BRANCA, 211', '(11) 98146-7736', 'Aceitou', '2019-05-19', 'não', 'WAGUERSON', '10', '', NULL),
(112, 'CAMILA ALVES DOS SANTOS', 'RUA VITORIO CAPILANO', '(11) 97707-9080', 'Reconciliou', '2019-05-19', 'não', 'Novo Tempo', '30', '', NULL),
(113, 'ESTEFANE FERREIRA ALVES', 'RUA TRAVESSA EUGENIO MELARA, 173, VILA PROGRESSO', '(11) 98177-8298', 'Reconciliou', '2019-05-19', 'sim', 'Carapicuiba', '37', '', NULL),
(114, 'Alécio Pereira Alencar', 'Rua Flor Boreal,114 Jd Ipe', '', 'Aceitou', '2019-05-24', 'não', 'Pr. Laércio/Vera', '20', '', NULL),
(115, 'Gerson Laurindo de Almeida', 'Rua Rio Sao Francisco do Mogiano,215 Vl Progresso', '(11) 98327-1492', 'Reconciliou', '2019-05-24', 'sim', 'Zô', '27', '', NULL),
(116, 'Luiz Carlos Pereira da Silva', 'Rua Cipó do Reino,85 Jd Ipe', '(11) 97806-6024', 'Aceitou', '1970-01-01', 'não', 'Martim/Shirley', '51', '', NULL),
(117, 'Nilson Angelo da Silva Mendes', 'Rua das Andorinhas,99 Vale das Brisas', '(11) 94302-3206', 'Reconciliou', '2019-05-24', 'não', 'Itu', '14', '', NULL),
(118, 'Ana Flávia Ramos da Silva', 'Rua das Andorinhas,99 Vale das Brisas', '(11) 93024-2262', 'Reconciliou', '2019-05-24', 'não', 'Itu', '17', '', NULL),
(119, 'Ana Carolina Ramos', 'Rua das Andorinhas,99 Vale das Brisas', '(11) 93024-2262', '', '2019-05-24', 'não', 'Itu', '12', '', NULL),
(120, 'Dayane Aparecida de Jesus', 'Rua das Gaivotas', '(11) 95322-5288', 'Reconciliou', '2019-05-24', 'não', 'Itu', '17', '', NULL),
(125, 'Diego Alves Damasceno', 'Rua Rio D\'ouro,56 Jd Jaraguá', '', 'Reconciliou', '2019-05-24', 'não', 'Pr. Laércio/Vera', '', '(11) 2566-8900', 'Membro'),
(126, 'William Alves de Souza Silva', 'Rua Manima,470', '(11) 95949-7145', 'Reconciliou', '2019-05-24', 'sim', 'Valdirene', '', '', 'Membro'),
(127, 'Yara Soares da Silva', 'Rua das Gaivotas,23A', '(11) 94112-1735', 'Reconciliou', '2019-05-24', 'não', 'Itu', '', '', 'Membro'),
(128, 'Dener Gerelado Piola', 'Rua Congonhas do Sertão,378 Jd Ipe', '(11) 96445-5439', 'Reconciliou', '2019-05-24', 'não', 'Pr. Joel/Regiane', '', '', 'Membro'),
(129, 'Sophia Souza Gratão', 'Rua Macaúba Mirim,234 Jd Ipe', '(11) 94106-2910', 'Reconciliou', '2019-05-24', 'não', 'Pr. Laércio/Vera', '', '', 'Membro'),
(130, 'Alécio Pereira Alencar da Silva', 'Rua Flor Boreal,141 Jd Ipe', '', 'Aceitou', '2019-05-24', 'não', 'Pr. Laércio/Vera', '', '', 'Membro'),
(131, 'Gerson Laurindo de Oliveira', 'Rua São Francisco do Mogiano,215 Vl Progresso', '(11) 98327-1492', 'Reconciliou', '2019-05-24', 'sim', 'Zô', '27', '', 'Membro'),
(132, 'Livia Maria Lima Queiroz', 'Rua Amaporã,143 Jd Campos', '(11) 98271-5821', 'Reconciliou', '2019-05-26', 'sim', 'Todas', '32', '', 'Visitante'),
(133, 'Wellington Nascimento da Silva', 'Rua Sebastião Alves,7A Pq.Sta Rita', '(11) 97051-5181', 'Aceitou', '2019-05-26', 'não', 'Casais', '23', '', 'Membro'),
(134, 'Thayná Fernanda de Oliveira Silva', 'Rua Sebastião Alves,7A Pq Sta Rita', '(11) 95251-0837', 'Reconciliou', '2019-05-26', 'sim', 'Casais', '22', '', 'Membro'),
(135, 'Welder Alves', 'Rua Congonhas do Sertão,52 Jd Ipe', '(11) 94233-5332', 'Reconciliou', '2019-05-26', 'sim', 'Pr. Joel/Regiane', '', '', 'Membro'),
(136, 'Hilary dos Santos', 'Rua Leonildes da Conceição Diniz,69 Miragaia', '(11) 99435-4582', 'Reconciliou', '2019-05-31', 'não', 'Pr. Joel/Regiane', '13', '', 'Membro'),
(137, 'Vitoria Nascimento', 'Av.dos Ipes,1060 Jd.Ipe', '(11) 95440-4968', 'Reconciliou', '2019-05-31', 'não', 'Pr. Joel/Regiane', '13', '', 'Membro'),
(138, 'Nicolly C.L.de Oliveira', 'Rua Guarapariba,434 Jd Lageado', '(11) 94004-2968', 'Reconciliou', '2019-05-31', 'não', 'Martim/Shirley', '14', '', 'Membro'),
(139, 'Leandro da Silva', 'Rua Registro Velho,328 Jd Campos', '(11) 95403-9653', 'Reconciliou', '2019-06-01', 'sim', '', '36', '', 'Visitante'),
(140, 'Wellington Patrick Rapace Alves', 'Rua Lactancio,147 Vl Curuçá', '(11) 97767-9514', 'Reconciliou', '2019-06-01', 'não', 'Valdirene', '22', '', 'Membro'),
(141, 'Marcone Carlos Castro', 'Rua  Noturno Mineiro,13 Jd Miragaia', '(11) 95194-1404', 'Reconciliou', '2019-06-02', 'não', 'WAGUERSON', '11', '', 'Membro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessonew`
--

CREATE TABLE `acessonew` (
  `id` int(10) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ativo` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nivel_acesso` int(5) DEFAULT NULL,
  `userID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `acessonew`
--

INSERT INTO `acessonew` (`id`, `username`, `password`, `ativo`, `nivel_acesso`, `userID`) VALUES
(13, 'analu.luz@hotmail.com', 'a8ceb47cf691a7a6548f61a53572d6e76481541e', 's', 1, NULL),
(27, 'jaquelinesouza_2006@hotmail.com', '1e5b8e951c0c48790f62e3f59396c5d70ed48c89', 's', 2, NULL),
(28, 'laerciomkids@hotmail.com', '62848ff71498f30f17e8af53b1c8fc64dce8016f', 's', 6, NULL),
(29, 'prdanielmorse@gmail.com', 'f50dd7eb93c36128aa3c7f318827667ae1e8a92d', 's', 1, NULL),
(32, 'brunoorosco@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 's', 1, NULL),
(35, 'TTARCILA.9FONSECA@HOTMAIL.COM', '7676b94aeab20ec701ef44a668b47a4bdabe331e', 's', 4, NULL),
(36, 'martimramalhovieira@gmail.com', 'b958967352ebbac7aaa2f487395229eb52fdbba5', 's', 2, NULL),
(37, 'shirley.viviane5@yahoo.com.br', '1ea1e86d64176f4088cddb018b1e72714ddaface', 's', 2, NULL),
(38, 'Mirtesbs@hotmail.com', 'df484203d40c3a7d4a9cac1daea496f4ba2049b0', 's', 2, NULL),
(39, 'adm_progresso@hotmail.com', '92efb62aa297019d8e4f09698b78227149863b0b', 's', 3, NULL),
(52, 'ericass_30santos@hotmail.com', '64b31cb7cb4435925d71a39505f101753a8f8075', 's', 2, NULL),
(53, 'fabinhoduipe@hotmail.com', 'cc4bb6ddcaffcfe5be44364056f0cb2418975029', 's', 2, NULL),
(54, 'waguerson.oliveira@gmail.com', '441ce9750a03d6174a11f485d6f448b580b270ad', 's', 2, NULL),
(81, 'elianalikapequeno@gmail.com', '3b6f4f36cf8530873f6d77413623a371e881f8cf', 's', 2, NULL),
(82, 'bia.clarice@yahoo.com.br', '9045554175b585337357e659bcedfef40c784475', 's', 2, NULL),
(84, 'marcus_otto@hotmail.com', '079773a6cb61ac1b0c49ce4584a1b175709637a9', 's', NULL, NULL),
(85, 'rafa_gomes19@yahoo.com.br', '7905fb13dbc9084bb7701a9a1d2e8d6e2725f08b', 's', NULL, NULL),
(86, 'valdireneclamor@yahoo.com.br', '5eb19632c1fad1708878b239484820baf2982cf3', 's', 5, NULL),
(87, 'franciscofabio705@hotmail.com', 'bac2f02cb89079ca3374cf41f710c3eb6be19ada', 's', 2, NULL),
(88, 'sandradantassiqueirafrancisco0@gmail.com', '85c830235799fdb185ef2785e2be56e49992cadf', 's', 2, NULL),
(89, 'lucasorsi95@gmail.com', 'e1cdbeb9e1039530f25bd58db42d6233a1503b10', 's', NULL, NULL),
(90, 'francildo68f@gmail.com', '69b496da9f3245aaebd7591aaddf075820b6e0d6', 's', 2, NULL),
(91, 'willian.uei@hotmail.com', '0c1c2387d4c632c092d11ac5b170969c1d286815', 's', 2, NULL),
(92, 'sumariacunha@hotmail.com', '0155f33ae9d85f83367171b54bcdc2e4b3e78c08', 's', 2, NULL),
(93, 'eliane.filo@bol.com.br', '589036d84393ee556f51c419a3fa78429c55a57b', 's', 3, NULL),
(94, 'kakocunha48@gmail.com', '34e253fa05ab09a5f058f8da103df0cd01f4a409', 's', 3, NULL),
(95, 'anderson.alves777@gmail.com', '2da9acf0e7cea34a8514052367cc1817e5593996', 's', 3, NULL),
(96, 'magna_osilva@yahoo.com.br', 'c0780b96f199a83286bd728138b9f59640f6b33c', 's', 2, NULL),
(97, 'aguia.bilhares@yahoo.com.br', '63b8e61e450f08bf24865dc1c50652fbb77155e1', 's', 3, NULL),
(98, 'aguia.bilhares@yahoo.com.br', '1d4e65029a6773675a5fd60991d99a1a434341e4', 's', 3, NULL),
(99, 'RI.AVIVAC@HOTMAIL.COM', '7be3f962ae1af47b68d2955ae53be02aefb5b6a4', 's', 2, NULL),
(101, 'kelly.naoesquecerasenha@gmail.com', '5397de72d45232230342f0f7c490fb8a172b23c9', 's', 2, NULL),
(103, 'gisellygihrf@gmail.com', '6c8d8decd731208b5e28fc46a1d547c37c0f2f1f', 's', NULL, NULL),
(153, 'supervisor@supervisor', '7c4a8d09ca3762af61e59520943dc26494f8941b', 's', 2, NULL),
(159, 'thauane.melissa@gmail.com', 'c25fd8da46283c2bc6122d3f00f759263d9fa3f5', 's', NULL, NULL),
(160, 'joel.santos@novelis.com ', '7c4a8d09ca3762af61e59520943dc26494f8941b', 's', 3, NULL),
(161, '953225288dayane@gmail.com', 'e489ce51ff945c85699acb6705d284ec3bc7d5c9', 's', 2, 273);

-- --------------------------------------------------------

--
-- Estrutura da tabela `batizando`
--

CREATE TABLE `batizando` (
  `id` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `aniversario` date DEFAULT NULL,
  `cem` int(10) DEFAULT NULL,
  `batismo` int(10) NOT NULL,
  `sexo` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `batizando`
--

INSERT INTO `batizando` (`id`, `nome`, `aniversario`, `cem`, `batismo`, `sexo`) VALUES
(1, 'Samyra Alves', NULL, 1, 15, 'F'),
(2, 'teste batismo', '2019-07-22', 1, 16, 'M'),
(3, 'teste edicao', '1972-10-16', 0, 15, 'M'),
(4, 'teste edicao', '1972-10-16', 0, 15, 'M'),
(17, 'BRUNO DO NASCIMENTO OROSCO', '1987-03-29', 2, 15, 'M'),
(18, 'Mirtes Barbosa da Silva ', '1978-03-31', 5, 15, 'F'),
(19, 'teste edicao', '1987-03-29', 6, 16, 'M'),
(20, 'teste edicao', '1972-10-16', 8, 15, 'M'),
(24, 'ADRIANA ALBUQUERQUE DE LIMA', '1978-03-31', 2, 15, 'F'),
(25, 'BRUNA CAROLINY DE SOUZA ', '1978-03-31', 2, 15, 'F'),
(27, 'CHRISTOPHER BATISTA DOS SANTOS ', '1978-03-31', 2, 16, 'M'),
(28, 'ANDRÉ LUIZ', '1972-10-16', 12, 15, 'M'),
(29, 'THIAGO DA SILVA GOMES', '1972-10-16', 11, 15, 'M'),
(30, 'JANAINA TAVARES DE SOUZA', '1978-03-31', 8, 16, 'F'),
(31, 'Leonardo Mauriz de Oliveira', '1970-01-01', 7, 15, 'M'),
(32, 'Ana Lucia Luz Orosco', '1970-01-01', 2, 15, NULL),
(33, 'BRUNO DO NASCIMENTO OROSCO', '1970-01-01', NULL, 15, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cem`
--

CREATE TABLE `cem` (
  `id` int(10) NOT NULL,
  `responsavel` int(10) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `nome_cem` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `cem`
--

INSERT INTO `cem` (`id`, `responsavel`, `endereco`, `nome_cem`) VALUES
(1, 85, '', 'Zô/Fátima'),
(2, 76, '', 'Lika'),
(3, 46, '', 'Wargueson'),
(4, 26, '', 'Casais'),
(5, 200, '', 'Joel/Regiane'),
(6, 17, '', 'Laércio/Vera'),
(7, 21, '', 'Martim/Shirley'),
(8, 77, '', 'Luiz/Clarice'),
(9, 86, '', 'William/Sumalia'),
(10, 81, '', 'Valdirene'),
(11, 89, '', 'Marcos/Eliane'),
(12, 95, '', 'kids'),
(13, 46, '', 'Wagner/Rosana');

-- --------------------------------------------------------

--
-- Estrutura da tabela `config_sistem`
--

CREATE TABLE `config_sistem` (
  `id` int(10) NOT NULL,
  `funcao` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `config_sistem`
--

INSERT INTO `config_sistem` (`id`, `funcao`, `_status`) VALUES
(1, 'todos_membros', 's'),
(2, 'filtro_membros', '2');

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
  `sexoEnc` varchar(10) DEFAULT NULL,
  `CEM` varchar(25) DEFAULT NULL,
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
(26, 'CAUÃ LIMA MARTINS', '(11) 98617-0775', 'RUA GIL MARTINS ', 'Masculino', 'Valdirene', ''),
(27, 'FABIO DA MAIA', '(11) 97375-9520', 'RUA ANTONIO GOMES 22', 'Masculino', 'Valdirene', ''),
(28, 'ANDRE RODRIGUES', '(11) 95109-0248', 'RUA NICANOR NOGUEIRA 208', 'Masculino', 'Valdirene', ''),
(29, 'TAMIRES INARA DA COSTA BATISTA ', '(11) 97957-0508', 'RUA MANOEL BARBALHO DE LIMA 11', 'Feminino', 'Valdirene', ''),
(30, 'MARINEIDE DA SILVA ', '(11) 98459-5846', 'AV MARIA SANTANA 943', 'Feminino', 'Valdirene', ''),
(31, 'VINICIUS DE ASSIS SOUZA', '(11) 95148-8145', '', 'Masculino', 'Valdirene', ''),
(32, 'SUELEN ALMEIDA SANTOS ', '(11) 94875-5101', '', 'Feminino', 'Valdirene', ''),
(33, 'SUSICLEI DE ALMEIDA', '(11) 25843-520', '', 'Feminino', 'Valdirene', ''),
(34, 'STEFANE FERREIRA DA SILVA ', '(11) 94872-1555', '', 'Feminino', 'Pr. Joel', ''),
(35, 'NORMALUCIA F. BARROS', '(11) 94116-0601', '', 'Feminino', 'Pr. Joel', ''),
(36, 'CAMILY FERREIRA PASSARELLI', '', '', 'Feminino', 'Pr. Joel', ''),
(37, 'JULIA APARECIDA', '(11) 98260-3540', '', 'Feminino', 'Pr. Joel', ''),
(38, 'RENATA MARIA LIMA BETTIN', '(11) 95386-9819', '', 'Feminino', 'Martim/Shirley', ''),
(39, 'JEAN SALES SANTOS', '(11) 96260-4750', '', 'Masculino', 'Martim/Shirley', ''),
(40, 'LUCAS CARDOSO DE OLIVEIRA', '(11) 93152-6625', '', 'Masculino', 'Martim/Shirley', ''),
(41, 'ELAINE GOMES DE OLIVEIRA', '(11) 98282-9874', '', 'Feminino', 'Martim/Shirley', ''),
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
(94, 'IRISANDRA H. M. DA SILVA ', '', '', 'Feminino', 'Lika', ''),
(99, 'NICOLE CAMARA DO AMOR', '', '', 'Feminino', 'Pr. Joel', ''),
(100, 'CLEITON SILVA SOUZA', '', '', 'Masculino', 'Lika', ''),
(101, 'COSME DE JESUS ', '', '', 'Masculino', 'Lika', ''),
(103, 'ALEX BRUNO SALES', '', '', 'Masculino', 'Lika', ''),
(104, 'ISAIAS APARECIDO DOS SANTOS ', '', '', 'Masculino', 'Lika', ''),
(105, 'EUCLIDES BORGES', '', '', 'Masculino', 'Lika', ''),
(107, 'LARISSA SANTOS DE CARVALHO', '', '', 'Feminino', 'Lika', ''),
(108, 'CLAUDIA DOS SANTOS SILVA ', '', '', 'Feminino', 'Lika', ''),
(109, 'CARLOS ROBERTO SANTOS DE OLIVEIRA', '', '', 'Masculino', 'Lika', ''),
(110, 'GABRIELA THAYNA SANTIAGO MACHADO', '', '', 'Feminino', 'Lika', ''),
(111, 'GABRIELE VICTORIA BONFIM', '', '', 'Feminino', 'Lika', ''),
(112, 'LARISSA OLIVEIRA SANTOS ', '', '', 'Feminino', 'Lika', ''),
(113, 'JOSENILTON ARAUJO DA SILVA ', '', '', 'Masculino', 'Lika', ''),
(114, 'GISELE SILVA SANTANA ', '', '', 'Feminino', 'Lika', ''),
(115, 'JENIFER DE BORTOLE', '', '', 'Feminino', 'Martim/Shirley', ''),
(116, 'TATIANE DOS SANTOS FRANCA', '', '', 'Feminino', 'Martim/Shirley', ''),
(117, 'MISLENE G. DE OLIVEIRA', '', '', 'Masculino', 'Martim/Shirley', ''),
(118, 'ELLEN CRISTINA BEZERRA', '', '', 'Feminino', 'Martim/Shirley', ''),
(119, 'ANA LUIZA SALES SANTOS', '', '', 'Feminino', 'Martim/Shirley', ''),
(120, 'ELIZABETH DA CONCEIÇÃO', '', '', 'Feminino', 'Martim/Shirley', ''),
(121, 'JULICIDE NOBRE DA SILVA ', '', '', 'Feminino', 'Martim/Shirley', ''),
(122, 'KAREN SUELEN DA SILVA', '', '', 'Feminino', 'Martim/Shirley', ''),
(123, 'RONALDO LUIZ JUNIOR ', '', '', 'Masculino', 'Martim/Shirley', ''),
(124, 'MACIEL DE SOUZA NOBRE', '', '', 'Masculino', 'Martim/Shirley', ''),
(125, 'LEANDRO FERNANDES MACEDO', '', '', 'Masculino', 'Martim/Shirley', ''),
(126, 'ADALBERTO ANTONIO DE OLIVEIRA', '', '', 'Masculino', 'Martim/Shirley', ''),
(127, 'MARCOS FERREIRA DOS SANTOS ', '', '', 'Masculino', 'Martim/Shirley', ''),
(128, 'ANA VITORIA ANDRADE', '', '', 'Feminino', 'Pr. Joel', ''),
(129, 'MARINA', '', '', 'Feminino', 'Pr. Joel', ''),
(130, 'MOACIR MOREIRA', '', '', 'Masculino', 'Pr. Joel', ''),
(131, 'LUIZ CARLOS PEREIRA', '', '', 'Masculino', 'Pr. Joel', ''),
(132, 'EDILSON FREITAS DA SILVA ', '', '', 'Masculino', 'Pr. Joel', ''),
(133, 'ELTON PEREIRA DA SILVA ', '', '', 'Masculino', 'Pr. Joel', ''),
(134, 'MARIA DAS DORES BARBOSA', '', '', 'Feminino', 'Pr. Joel', ''),
(135, 'MARCIA REGINA MACHADO', '', '', 'Feminino', 'Pr. Joel', ''),
(136, 'LUANA LIMA SANTOS ', '', '', 'Feminino', 'Pr. Joel', ''),
(137, 'ELENILDA OLIVEIRA DAMACENO', '', '', 'Feminino', 'Pr. Joel', ''),
(138, 'CELIA DE OLIVEIRA', '', '', 'Feminino', 'Pr. Joel', ''),
(139, 'ANDRESSA MAYUI YAMADA', '', '', 'Feminino', 'WAGUERSON', ''),
(140, 'MARIA DAS GRAÇAS RODRIGO', '', '', 'Feminino', 'WAGUERSON', ''),
(141, 'SAMARA DOS SANTOS SILVA ', '', '', 'Feminino', 'WAGUERSON', ''),
(142, 'MARIA DAS DORES SANTOS ', '', '', 'Feminino', 'WAGUERSON', ''),
(143, 'SONIA MARIA OLIVEIRA', '', '', 'Feminino', 'WAGUERSON', ''),
(144, 'ELIANA DOS SANTOS FONSECA', '', '', 'Feminino', 'WAGUERSON', ''),
(145, 'ELIZABETE FERREIRA DOS SANTOS ', '', '', 'Feminino', 'WAGUERSON', ''),
(146, 'ERIKA SOUZA SANTOS', '', '', 'Feminino', 'WAGUERSON', ''),
(147, 'ERICA GOMES DOS SANTOS ', '', '', 'Feminino', 'WAGUERSON', ''),
(148, 'ROMERO KAPPS JUNIOR ', '', '', 'Masculino', 'WAGUERSON', ''),
(149, 'CHESTER CARLOS DA SILVA ', '', '', 'Masculino', 'WAGUERSON', ''),
(150, 'NATANAEL GOMES ARAUJO', '', '', 'Masculino', 'WAGUERSON', ''),
(151, 'AILTON DA SILVA MUNIZ', '', '', 'Masculino', 'Jaqueline', ''),
(152, 'DAVID DA COSTA', '', '', 'Masculino', 'Jaqueline', ''),
(153, 'MARIA MARGARIDA MANZANI', '', '', 'Feminino', 'Jaqueline', ''),
(154, 'ESTER', '', '', 'Feminino', 'Jaqueline', ''),
(155, 'FABIANA COUTINHO MUNIZ', '', '', 'Feminino', 'Jaqueline', ''),
(156, 'IVAN JOSE DA SILVA JUNIOR', '', '', 'Masculino', 'Casais', ''),
(157, 'WELLINGTON NASCIMENTO', '', '', 'Masculino', 'Casais', ''),
(158, 'THAYNA FERNANDA DE OLIVEIRA', '', '', 'Feminino', 'Casais', ''),
(159, 'KESLY KAROLLYN DA SILVA ', '', '', 'Feminino', 'Casais', ''),
(160, 'THIAGO NUNES DA COSTA ', '', '', 'Masculino', 'Casais', ''),
(161, 'REBECA DANIELE DA SILVA ', '', '', 'Feminino', 'Valdirene', ''),
(162, 'NILSON RYAN DE JESUS', '', '', 'Masculino', 'Valdirene', ''),
(163, 'RAYANE VITORIA', '', '', 'Feminino', 'Valdirene', ''),
(164, 'PATRICIA DE JESUS FERREIRA', '', '', 'Feminino', 'Valdirene', ''),
(165, 'CAMILA ALVES DOS SANTOS ', '', '', 'Feminino', 'Valdirene', ''),
(166, 'DANIELE GUIMARÃES', '', '', 'Feminino', 'Gledson/Vanessa', ''),
(167, 'THIAGO ANTONIO NEVES ', '', '', 'Masculino', 'Aldo', ''),
(168, 'ULICES RICARDO PINTO ', '', '', 'Masculino', 'Aldo', ''),
(169, 'RICARDO PINTO DE ABREU', '', '', 'Masculino', 'Aldo', ''),
(170, 'GABRIEL ALVES FEITOZA', '', '', 'Masculino', 'Martim/Shirley', ''),
(171, 'MARIA APARECIDA ALVES', '', '', 'Feminino', 'Martim/Shirley', ''),
(172, 'TATIANA MACEDO DUNDA', '', '', 'Feminino', 'Pr.Laercio/Vera', ''),
(173, 'MACIEL SANTANA DOS SANTOS ', '', '', 'Masculino', 'Pr.Laercio/Vera', ''),
(174, 'JULIO CESAR DOS SANTOS', '', '', 'Masculino', 'Pr.Laercio/Vera', ''),
(175, 'ALECIO PEREIRA ALENCAR', '', '', 'Masculino', 'Pr.Laercio/Vera', ''),
(176, 'DIEGO ALVES DAMASCENO', '', '', 'Masculino', 'Pr.Laercio/Vera', ''),
(177, 'MANOEL MARCOS BEZERRA', '', '', 'Masculino', 'Carapicuiba', ''),
(178, 'CAROLINE ADOLFO KOVALINKINAS', '', '', 'Feminino', 'Carapicuiba', ''),
(179, 'GERSON LUIZ MELO', '', '', 'Masculino', 'Zô', ''),
(180, 'ROSANGELO CUNHA MOREIRA', '', '', 'Masculino', 'Zô', ''),
(181, 'CAIO CEZAR ALMEIDA', '', '', 'Masculino', 'Zô', ''),
(182, 'KAROLINA FERREIRA SANTOS', '', '', 'Feminino', 'Zô', ''),
(183, 'JENIFFER CASTRO SANTOS', '', '', 'Feminino', 'Zô', ''),
(184, 'JULIANA QUITERIA DOS ANJOS ', '', '', 'Feminino', 'Zô', ''),
(185, 'RENATO MIGUEL', '', '', 'Masculino', 'Zô', ''),
(186, 'DANIELA PEREIRA ALVES ', '', '', 'Feminino', 'Zô', ''),
(187, 'EMERSON ALVES OLIVEIRA', '', '', 'Feminino', 'Zô', ''),
(188, 'SAMYRA ALVES', '', '', 'Feminino', 'Zô', ''),
(189, 'ROSIMEIRE DE OLIVEIRA', '', '', 'Feminino', 'Itaqua', ''),
(190, 'GABRIELLE CONCEIÇÃO', '', '', 'Feminino', 'Itaqua', ''),
(191, 'VALERIA DE LIMA ', '', '', 'Feminino', 'Itaqua', ''),
(192, 'ALAN ASSIS DUARTE', '', '', 'Masculino', 'WAGUERSON', ''),
(193, 'NILTON HENRIQUE ', '', '', 'Masculino', 'Itu', ''),
(194, 'YARA', '', '', 'Feminino', 'Itu', ''),
(195, 'NILSON ANGELO DA SILVA ', '', '', 'Masculino', 'Itu', ''),
(196, 'ANA FLAVIA RAMOS', '', '', 'Feminino', 'Itu', ''),
(197, 'ANA CAROLINA DA SILVA ', '', '', 'Feminino', 'Itu', ''),
(198, 'MARIA AMELIA GOMES', '', '', 'Feminino', 'Itu', ''),
(199, 'DAYANE ', '', '', 'Feminino', 'Itu', ''),
(200, 'ELAINE BATISTA DA CUNHA ', '', '', 'Feminino', 'Eliseu /Marlene', ''),
(201, 'JONAS QUIRINO DA CUNHA ', '', '', 'Masculino', 'Eliseu /Marlene', ''),
(202, 'DAVI CUNHA QUIRINO', '', '', 'Masculino', 'Eliseu /Marlene', ''),
(203, 'HENRIQUE JOSE CAMPOS', '', '', 'Masculino', 'Eliseu /Marlene', ''),
(204, 'SONIA MARIA BATISTA', '', '', 'Feminino', 'Eliseu /Marlene', ''),
(205, 'SONIA MARIA VALDEMAR', '', '', 'Feminino', 'Gledson/Vanessa', ''),
(206, 'EDSON BISPO DOS SANTOS ', '', '', 'Masculino', 'Martim/Shirley', ''),
(208, 'ELIZABETH C. DA CONCEIÇÃO', '(11) 92733-079', 'RUA GUARAPARIBA 434', 'Feminino', 'Martim/Shirley', ''),
(209, 'ELLEN CRISTINA BEZERRA', '(11) 97802-4445', 'RUA:LAGOA CAJULA 116', 'Feminino', 'Martim/Shirley', ''),
(210, 'ELAINE NOGUEIRA DE OLIVEIRA', '(11) 94444-7558', 'RUA: CARCANI 31', 'Feminino', 'Martim/Shirley', ''),
(211, 'GUILHERME RAMALHO VILAÇA', '(11) 98082-7581', 'RUA:CARAIPE DAS AGUAS 509', 'Masculino', 'Martim/Shirley', ''),
(212, 'RENATA MARIA LIMA BITTEM ', '(11) 95386-9819', 'RUA: MENDANHA ', 'Feminino', 'Martim/Shirley', ''),
(213, 'ELAINE CARDOSO DE OLIVEIRA', '(11) 98031-2261', 'RUA: LAGOA CAJUBA 101', 'Feminino', 'Martim/Shirley', ''),
(214, 'LEANDRO FERNANDES MACEDO', '(11) 94986-3722', 'RUA: LAGOA CAJUBA 116', 'Masculino', 'Martim/Shirley', ''),
(215, 'ELAINE CARDOSO DOS SANTOS ', '(11) 94810-4505', 'RUA: LAGOA CAJUBA 116', 'Feminino', 'Martim/Shirley', ''),
(216, 'ANA LUIZA SALES SANTOS ', '(11) 96812-5934', 'RUA LAGOA CAJUBA 101', 'Feminino', 'Martim/Shirley', ''),
(217, 'JEAN SALES SANTOS', '(11) 96260-4750', 'RUA:LAGOA CAJUBA 101', 'Masculino', 'Martim/Shirley', ''),
(218, 'ADALBERTO ANTONIO DE OLIVEIRA', '(11) 94088-4181', 'RUA: GUARAPARIBA 434', 'Masculino', 'Martim/Shirley', ''),
(219, 'ELAINE GOMES DE OLIVEIRA SANTOS ', '(11) 94728-6824', 'RUA:GUARAPARIBA 434', 'Feminino', 'Martim/Shirley', ''),
(220, 'JOYCE GABRIELA C. RIBEIRO', '(11) 94680-6729', 'RUA:PALMEIRA DAS BERMUDAS 826', 'Feminino', 'Valdirene', ''),
(221, 'CAMILA ALVES DOS SANTOS ', '', 'RUA:VITORIO CAPELORO ', 'Feminino', 'Valdirene', ''),
(222, 'MARINEIDE DA SILVA ', '', 'RUA:PALMEIRA DAS BERMUDAS 863', 'Feminino', 'Valdirene', ''),
(223, 'KAROLINE ALVES DE OLIVEIRA SILVA ', '(11) 98594-1162', 'RUA:PALMEIRA DAS BERMUDAS 863', 'Feminino', 'Valdirene', ''),
(224, 'GUSTAVO HENRIQUE C. RIBEIRO ', '(11) 94680-6729', 'RUA: PALMEIRA DAS BERMUDAS 826', 'Masculino', 'Valdirene', ''),
(225, 'SUSICLER LEME DE ALMEIDA ', '(11) 94036-9116', 'RUA:BORBOLETA AMARELA ', 'Feminino', 'Valdirene', ''),
(226, 'SUELEN ALMEIDA SANTOS ', '(11) 94875-5105', 'RUA:BORBOLETA AMARELA 210', 'Feminino', 'Valdirene', ''),
(227, 'RAYANE VITORIA ', '(11) 95966-5531', 'RUA:DR. GIL MARTINS ', 'Feminino', 'Valdirene', ''),
(228, 'CAUÃ DE LIMA MARTINS', '(11) 25856-186', 'RUA: CORDILHEIRA DO ARARIPE ', 'Masculino', 'Valdirene', ''),
(229, 'VINICIUS DE ASSIS SOUZA', '', 'RUA: PROF ASSIS VELOSO ', 'Masculino', 'Valdirene', ''),
(230, 'NILSON RYAN ALVES DE JESUS', '(11) 43061-043', 'RUA: DR GILMAR MARTINS', 'Masculino', 'Valdirene', ''),
(231, 'RITA DE CASSIA FERREIRA DOS SANTOS LARANJEIRA', '(11) 95836-0704', 'RUA:ITAPRINA 141', 'Feminino', 'Lika', ''),
(232, 'THALITA LILIANE', '(11) 96760-6651', 'RUA:DOS IGARAPES 282', 'Feminino', 'Lika', ''),
(233, 'ALEX BRUNO J. SALES ', '(11) 99336-3512', 'AV:DOS IPÊS 282', 'Masculino', 'Lika', ''),
(234, 'GABRIEL FERNANDES DE SOUZA ', '(11) 96258-8075', 'RUA: GUAUIVA', 'Masculino', 'Lika', ''),
(235, 'MATHEUS FERNANDES', '(11) 96258-8075', 'RUA: GUAIUREIRA 121', 'Masculino', 'Lika', ''),
(236, 'CLEITON DA SILVA SOUSA', '(11) 98281-4037', 'AV:FREDERICO MARTINS DA COSTA CARVALHO 469', 'Masculino', 'Lika', ''),
(237, 'PATRICIA GOMES ', '(11) 98799-2995', 'RUA:LEQUIRANA DE GOIAS 515 APTO 1', 'Feminino', 'Lika', ''),
(238, 'ROBERTO BORGES BONFIM', '(11) 98799-2995', 'RUA:JEQUIRANA DE GOIAS 515 APTO 1', 'Masculino', 'Lika', ''),
(239, 'FELIPE CESAR R. DE SOUZA', '(11) 98494-1710', 'RUA: ROSA MUSGO 475', 'Masculino', 'WAGUERSON', ''),
(240, 'SAMUEL DOS SANTOS CARVALHO', '(11) 94984-5811', 'RUA:CARMO DE MINA 32', 'Masculino', 'Itaqua', ''),
(241, 'WANDERGLEISON O. CRUZ', '', 'RUA: CRUZEIRO 282', 'Masculino', 'Itaqua', ''),
(242, 'RAQUEL MARIA FERRAZ', '(11) 96440-5068', 'RUA:CRUZEIRO 284', 'Feminino', 'Itaqua', ''),
(243, 'ROSEMEIRE OLIVEIRA ', '(11) 98568-0588', 'RUA:CRUZEIRO 282', 'Feminino', 'Itaqua', ''),
(244, 'CHESTER CARLOS DA SILVA ', '(11) 95194-1404', 'RUA:NOTURNO MINEIRO 13', 'Masculino', 'WAGUERSON', ''),
(245, 'SAMARA DOS SANTOS ', '(11) 95934-9945', 'RUA:ERVA BOTÃO', 'Feminino', 'WAGUERSON', ''),
(246, 'ANDRESSA MAYUMI R. YAMADA', '', '', 'Feminino', 'WAGUERSON', ''),
(247, 'ROMERO KAPPS JUNIOR ', '', 'RUA:ARICANGA 974', 'Masculino', 'WAGUERSON', ''),
(248, 'ALISSON ROBERTO FRAGA', '', '', 'Masculino', 'WAGUERSON', ''),
(249, 'LILIAN BRITO GOMES DOS SANTOS ', '(11) 95431-5963', 'RUA:JACAREANA 9', 'Feminino', 'WAGUERSON', ''),
(250, 'ERIKA BRITO GOMES DOS SANTOS ', '', '', 'Feminino', 'WAGUERSON', ''),
(251, 'ROSELI BRITO DOS SANTOS ', '', 'RUA:JACAREANA 9', 'Feminino', 'WAGUERSON', ''),
(252, 'DANIELA SANTOS DE JESUS ', '(11) 95038-3374', 'RUA:DAS GAIVOTAS ', 'Feminino', 'Itu', ''),
(253, 'DAYANE APARECIDA JESUS', '(11) 95322-5288', 'RUA:DAS GAIVOTAS ', 'Feminino', 'Itu', ''),
(254, 'NILTON HENRIQUE LIMA JUNIOR ', '(11) 94211-8878', 'RUA:DAS GAIVOTAS ', 'Masculino', 'Itu', ''),
(255, 'LUIZ FERNANDO BILLER JAQUES ', '(11) 97247-2633', 'RUA:DOS COLIBRIS 6.173', 'Masculino', 'Itu', ''),
(256, 'MARIA DE FATIMA SANTOS DA SILVA ', '(11) 93144-3215', 'RUA:LOURO LINGA 16 A ', 'Feminino', 'Jaqueline', ''),
(257, 'SUELLEN DE JESUS SILVA ', '(11) 99391-8515', 'AV:JOÃO BATISTA SANTIAGO 523', 'Feminino', 'Jaqueline', ''),
(258, 'AILTON ROSA MUNIZ ', '', 'RUA:LOUROTINGA ', 'Masculino', 'Jaqueline', ''),
(259, 'KELLY VIEIRA SOBRAL', '(11) 95398-6539', 'RUA:ODETE AMARAL', 'Feminino', 'Jaqueline', ''),
(260, 'GUILHERME AUGUSTO', '(11) 97747-2233', '', 'Masculino', 'Jaqueline', ''),
(261, 'ESTER FERREIRA ALVES ', '(11) 98177-8298', 'TRAVESSA EUGENIO MILARA 173', 'Feminino', 'Jaqueline', ''),
(262, 'CLAUDIANE ROSEMERE DE OLIVEIRA', '(11) 94029-1684', 'RUA:MATASO SAKAI 180', 'Feminino', 'Jaqueline', ''),
(263, 'RENATO MIGUEL ', '(16) 98150-0589', 'RUA:ANTONIO ALVES FERREIRA 371', 'Masculino', 'Zô', ''),
(264, 'DANIELA P. ALVES ', '(11) 97372-4827', 'RUA:SÃO GONÇALO DO RIO DAS PEDRAS 972', 'Feminino', 'Zô', ''),
(265, 'JENIFFER CASTRO DOS SANTOS ', '(11', 'RUA: CAMPALA 30', 'Feminino', 'Zô', ''),
(266, 'CAIO CEZAR ALMEIDA DOS SANTOS ', '(11) 99915-7117', 'RUA:CABO DAS TORMENTAS 254', 'Masculino', 'Zô', ''),
(267, 'JULIANA QUITERIA DOS ANJOS ALMEIDA ', '(11) 99915-5998', '', 'Feminino', 'Zô', ''),
(268, 'CAROLINE ADOLFO KOVALINKINAS', '(11) 95405-260', 'RUA:MONTE AZUL PAULISTA 346', 'Feminino', 'Luizinho/Clarice', ''),
(269, 'ROGERIO SOARES DA SILVA ', '(11) 97069-0241', 'RUA: CASTANHEIRO DO BREJO 295', 'Masculino', 'Luizinho/Clarice', ''),
(270, 'NILDA ', '', 'RUA:SABIA LARANJEIRA', 'Feminino', 'Pr. Joel', ''),
(271, 'ALEXSANDER BRAGA ALVES ', '(11) 96806-6437', 'RUA:SABIA LARANJEIRA268', 'Masculino', 'Pr. Joel', ''),
(272, 'REGINALDO TADEU', '(11) 94746-2771', 'RUA:GITIRANA 75', 'Masculino', 'Pr. Joel', ''),
(273, 'TATIANA MACEDO DUNDA ', '(11) 96581-6114', 'RUA:IGARAPES 980', 'Feminino', 'Prs.Laércio/Vera', ''),
(274, 'THIAGO ANTONIO NUNES ', '(11) 95377-1749', 'RUA: SALVADOR PIRES MONTEIRO 4', 'Masculino', 'Willian/Sumalia', ''),
(275, 'JULIA APARECIDA DIAS', '(11) 98260-3540', 'AV:DOS IPES 571', 'Feminino', 'Prs.Bete/ Julio', ''),
(276, 'ANA VITORIA ANDRADE', '(11) 94617-6543', 'RUA:GRAVATA DA PEDRA 37', 'Feminino', 'Prs.Bete/ Julio', ''),
(277, 'ANDRE RODRIGUES ', '(11) 95109-0248', 'RUA:NICANOR NOGUEIRA ', 'Masculino', 'Prs.Bete/ Julio', ''),
(278, 'GEOVANNA TAVARES DA SILVA ', '(11) 98694-7297', 'RUA:PALMEIRA REAL 92', 'Feminino', 'Prs.Bete/ Julio', ''),
(279, 'DANIEL WILLIAM BORGES DE ALMEIDA ', '(11) 98220-1524', 'RUA:MANUEL BARBALHA DE LIMA ', 'Masculino', 'Prs.Bete/ Julio', ''),
(280, 'IVAN ', '', '', 'Masculino', 'Casais', ''),
(281, 'MICHELLY RIBEIRO LUZ ', '(94) 79387-10', 'RUA:MATEUS BARBOSA DE RESENDE 85', 'Feminino', 'Casais', ''),
(282, 'DENER SANTOS LUZ ', '(11) 94796-7754', 'RUA:MATEUS BARBOSA RESENDE 85', 'Masculino', 'Casais', ''),
(283, 'CELMA MARTINEZ CRUZ', '(11) 46420-881', 'RUA:ANGELO FRAZIO 364', 'Feminino', 'Casais', ''),
(284, 'THAYNA FERNANDA DE OLIVEIRA SILVA ', '(11) 95251-8837', '', 'Feminino', 'Casais', ''),
(285, 'WELLINGTON NASCIMENTO DA SILVA ', '(11) 97051-5181', 'RUA:SEBASTIÃO ALVES 7 A ', 'Masculino', 'Casais', '');

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
(91, 130, 94),
(109, 134, 99),
(110, 134, 100),
(111, 134, 101),
(113, 134, 103),
(114, 134, 104),
(115, 134, 105),
(117, 134, 107),
(118, 134, 108),
(119, 134, 109),
(120, 134, 110),
(121, 134, 111),
(122, 134, 112),
(123, 134, 113),
(124, 134, 114),
(125, 134, 115),
(126, 134, 116),
(127, 134, 117),
(128, 134, 118),
(129, 134, 119),
(130, 134, 120),
(131, 134, 121),
(132, 134, 122),
(133, 134, 123),
(134, 134, 124),
(135, 134, 125),
(136, 134, 126),
(137, 134, 127),
(138, 134, 128),
(139, 134, 129),
(140, 134, 130),
(141, 134, 131),
(142, 134, 132),
(143, 134, 133),
(144, 134, 134),
(145, 134, 135),
(146, 134, 136),
(147, 134, 137),
(148, 134, 138),
(149, 134, 139),
(150, 134, 140),
(151, 134, 141),
(152, 134, 142),
(153, 134, 143),
(154, 134, 144),
(155, 134, 145),
(156, 134, 146),
(157, 134, 147),
(158, 134, 148),
(159, 134, 149),
(160, 134, 150),
(161, 134, 151),
(162, 134, 152),
(163, 134, 153),
(164, 134, 154),
(165, 134, 155),
(166, 134, 156),
(167, 134, 157),
(168, 134, 158),
(169, 134, 159),
(170, 134, 160),
(171, 134, 161),
(172, 134, 162),
(173, 134, 163),
(174, 134, 164),
(175, 134, 165),
(176, 134, 166),
(177, 134, 167),
(178, 134, 168),
(179, 134, 169),
(180, 134, 170),
(181, 134, 171),
(182, 134, 172),
(183, 134, 173),
(184, 134, 174),
(185, 134, 175),
(186, 134, 176),
(187, 134, 177),
(188, 134, 178),
(189, 134, 179),
(190, 134, 180),
(191, 134, 181),
(192, 134, 182),
(193, 134, 183),
(194, 134, 184),
(195, 134, 185),
(196, 134, 186),
(197, 134, 187),
(198, 134, 188),
(199, 134, 189),
(200, 134, 190),
(201, 134, 191),
(202, 134, 192),
(203, 134, 193),
(204, 134, 194),
(205, 134, 195),
(206, 134, 196),
(207, 134, 197),
(208, 134, 198),
(209, 134, 199),
(210, 134, 200),
(211, 134, 201),
(212, 134, 202),
(213, 134, 203),
(214, 134, 204),
(215, 134, 205),
(216, 134, 206),
(218, 42, 208),
(219, 42, 209),
(220, 42, 210),
(221, 42, 211),
(222, 42, 212),
(223, 42, 213),
(224, 42, 214),
(225, 42, 215),
(226, 42, 216),
(227, 42, 217),
(228, 42, 218),
(229, 42, 219),
(230, 42, 220),
(231, 42, 221),
(232, 42, 222),
(233, 42, 223),
(234, 42, 224),
(235, 42, 225),
(236, 42, 226),
(237, 42, 227),
(238, 42, 228),
(239, 42, 229),
(240, 42, 230),
(241, 42, 231),
(242, 42, 232),
(243, 42, 233),
(244, 42, 234),
(245, 42, 235),
(246, 42, 236),
(247, 42, 237),
(248, 42, 238),
(249, 42, 239),
(250, 42, 240),
(251, 42, 241),
(252, 42, 242),
(253, 42, 243),
(254, 42, 244),
(255, 42, 245),
(256, 42, 246),
(257, 42, 247),
(258, 42, 248),
(259, 42, 249),
(260, 42, 250),
(261, 42, 251),
(262, 42, 252),
(263, 42, 253),
(264, 42, 254),
(265, 42, 255),
(266, 42, 256),
(267, 42, 257),
(268, 42, 258),
(269, 42, 259),
(270, 42, 260),
(271, 42, 261),
(272, 42, 262),
(273, 42, 263),
(274, 42, 264),
(275, 42, 265),
(276, 42, 266),
(277, 42, 267),
(278, 42, 268),
(279, 42, 269),
(280, 42, 270),
(281, 42, 271),
(282, 42, 272),
(283, 42, 273),
(284, 42, 274),
(285, 42, 275),
(286, 42, 276),
(287, 42, 277),
(288, 42, 278),
(289, 42, 279),
(290, 42, 280),
(291, 42, 281),
(292, 42, 282),
(293, 42, 283),
(294, 42, 284),
(295, 42, 285);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

CREATE TABLE `equipe` (
  `id` int(10) NOT NULL,
  `membro` int(10) NOT NULL,
  `encontro` int(10) NOT NULL,
  `tarefaEnc` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(12, 'Conferência EU +1', '#FF4500', '2019-07-06 14:00:00', '2019-07-06 22:00:00'),
(13, 'Mulheres em Ação', '#FF1493', '2019-06-08 19:00:00', '2019-06-08 21:00:00'),
(14, 'Vigília', '#8B0000', '2019-06-08 23:00:00', '2019-06-09 04:00:00'),
(15, 'Batizado', '#0071c5', '2019-07-28 18:30:00', '2019-07-28 20:30:00'),
(16, 'Batizado', '', '2019-03-31 18:30:00', '2019-03-31 20:30:00');

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
  `data_inicial` date NOT NULL,
  `tipo` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `info_encontro`
--

INSERT INTO `info_encontro` (`id`, `n_encontro`, `data_inicial`, `tipo`) VALUES
(1, 130, '2019-03-22', 'Encontro'),
(2, 134, '2019-05-24', 'Encontro'),
(3, 42, '2019-06-21', 'Reencontro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_reencontro`
--

CREATE TABLE `info_reencontro` (
  `id` int(10) NOT NULL,
  `n_reencontro` int(5) NOT NULL,
  `data_inicial` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(16, 'Jaqueline Tavares de Souza', '1981-09-20', 'rua Castanheira do Brejo, 136', '(11) 94829-7524', 'Jaqueline', 'Supervisor', 'jaquelinesouza_2006@hotmail.com', '2019-03-02 21:19:40'),
(17, 'Laércio Carlos de Lima', '1956-02-02', 'Avenida Ipê Roxo 1339 Jardim Jaragua', '(11) 94179-4640', 'Pr. Laércio/Vera', 'Pastor', 'laerciomkids@hotmail.com', '2019-03-02 21:22:20'),
(18, 'DANIEL MORSE', '1969-06-16', 'RUA ANTONIO JOÃO DE MEDEREIROS,465 BLOCO 3 APTO 23', '(11) 97203-2556', 'Todas', 'Bispo', 'prdanielmorse@gmail.com', '2019-03-02 21:23:51'),
(20, 'TARCILA DOS SANTOS FONSECA', '1983-12-09', 'RUA CASTANHEIRO DO BREJO 322', '(11) 98510-0508', 'WAGUERSON', 'Líder', 'TTARCILA.9FONSECA@HOTMAIL.COM', '2019-03-11 12:13:18'),
(21, 'Martim Ramalho Vieira', '1980-12-28', 'Rua : Folha Dourada ,92', '(11) 95984-9430', 'Martim/Shirley', 'Supervisor', 'martimramalhovieira@gmail.com', '2019-03-15 16:00:54'),
(22, 'Shirley Viviane Vieira', '1982-08-05', 'Rua : Folha Dourada ,92', '(11) 98261-1344', 'Martim/Shirley', 'Supervisor', 'shirley.viviane5@yahoo.com.br', '2019-03-15 16:26:21'),
(23, 'Mirtes Barbosa da Silva ', '1970-01-01', 'Avenida caraipe das águas, 1171', '(11) 95159-176', 'Mirtes', 'Supervisor', 'Mirtesbs@hotmail.com', '2019-03-15 18:14:25'),
(24, 'Carine Reis Torres ', '1986-12-29', 'Palha brava 222', '(11) 98255-1613', 'Mirtes', 'Líder', 'carine29.reis@hotmail.com', '2019-03-15 20:29:53'),
(25, 'Sandra louriene Marques da silva', '1970-01-01', 'Rua caminho quatro,306 bloco H ap 31 Guarulhos ', '(11) 98443-0359', 'Mirtes ', 'Anfitrião', '.lindinhas2@hotmail.com', '2019-03-15 21:07:19'),
(26, 'Ednilsa Araujo Gomes', '1978-07-30', 'Rua Angelo Frazilio, 360', '(11) 97370-2874', 'Casais', 'Pastor', 'adm_progresso@hotmail.com', '2019-03-19 17:28:51'),
(31, 'BRUNO DO NASCIMENTO OROSCO', '1987-03-29', '', '(11) 94071-4391', 'Lika', 'Líder', 'brunoorosco@gmail.com', '2019-03-19 23:37:30'),
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
(76, 'ELIANA ALVES PEQUENO', '1968-07-07', 'R. Caraipes das Águas, 1816', '(11) 97381-9825', 'Lika', 'Supervisor', 'elianalikapequeno@gmail.com', '2019-04-04 23:20:20'),
(77, 'CLARICE REGINA SANTOS PEQUENO', '1981-12-09', 'Rua Congonha do Sertao n 3', '(11) 95429-8133', 'Luizinho/Clarice', 'Supervisor', 'bia.clarice@yahoo.com.br', '2019-04-04 23:35:32'),
(79, 'Marcus Vinicius Otoni de Morais', '1993-09-22', 'rua do pombo correio n 290', '(11) 98528-0170', 'Valdirene', 'Líder', 'marcus_otto@hotmail.com', '2019-04-04 23:43:31'),
(80, 'Cláudio Silva Gomes ', '1975-07-19', 'Rua Ângelo Frazilio 360', '(11) 99710-9359', 'Casais', 'Pastor', 'rafa_gomes19@yahoo.com.br', '2019-04-04 23:46:21'),
(81, 'Valdirene Oliveira Bispo dos Santos', '1969-02-25', 'rua faveira do igapo 274 fds', '(11) 97961-6246', 'Valdirene', 'Supervisor', 'valdireneclamor@yahoo.com.br', '2019-04-04 23:47:21'),
(82, 'FABIO FRANCISCO', '1970-01-01', 'Rua Congonha do Sertao n 52', '(11) 99299-8995', 'Fabio/Sandra', 'Supervisor', 'franciscofabio705@hotmail.com', '2019-04-04 23:54:26'),
(83, 'SANDRA  DANTAS SIQUEIRA FRANCISCO', '1970-01-01', 'Rua Congonha do Sertao n 52', '(11) 95861-8250', 'Fabio/Sandra', 'Supervisor', 'sandradantassiqueirafrancisco0@gmail.com', '2019-04-04 23:57:42'),
(84, 'LUCAS ORSI', '1994-07-27', 'R. Caraipes das Águas, 1816', '(11) 98655-5716', 'Lika', 'Líder', 'lucasorsi95@gmail.com', '2019-04-05 00:05:20'),
(85, 'Francildo Silva de Oliveira', '1968-02-23', 'av ipe roxo 1704', '(11) 97961-2622', 'Zô', 'Supervisor', 'francildo68f@gmail.com', '2019-04-05 00:10:37'),
(86, 'Willian da Cunha Leao', '1984-02-28', 'rua ilha dos ratones 35', '(11) 94243-8311', 'Willian/Sumaria', 'Supervisor', 'willian.uei@hotmail.com', '2019-04-05 00:15:44'),
(87, 'SUMARIA ALMEIDA LEAO', '1981-02-10', 'rua ilha dos ratones 35', '(11) 99332-1325', 'Willian/Sumaria', 'Supervisor', 'sumariacunha@hotmail.com', '2019-04-05 00:19:16'),
(88, 'Eliane de Oliveira Cunha', '1979-07-06', 'Rua Agrimensor Sugaya 551 Ap 33 Bl-B', '(11) 97256-0467', 'Pr. Marcos/Eliane', 'Pastor', 'eliane.filo@bol.com.br', '2019-04-05 00:22:56'),
(89, 'Marcos Silva da Cunha', '1974-12-20', 'Rua Agrimensor Sugaya 551 AP 33 BL -B', '(11) 97256-0467', 'Pr. Marcos/Eliane', 'Pastor', 'kakocunha48@gmail.com', '2019-04-05 00:25:30'),
(90, 'Anderson Alves dos Santos', '1984-01-27', 'Rua Arnaldo Cintra, 190', '(11) 99887-9336', 'Pr. Anderson', 'Pastor', 'anderson.alves777@gmail.com', '2019-04-05 00:31:03'),
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
(138, 'SUÉLEN ALMEIDA SANTOS', '1993-11-25', 'RUA BORBOLETA AMARELA,210 JD HELENA', '(11) 94875-5105', 'Valdirene', 'Membro', 'suelen.25.santos@gmail.com', '2019-04-20 01:50:51'),
(139, 'VINICIUS DE ASSIS SOUZA', '2003-08-01', 'RUA PROFESSOR ASSIS VELOSO,SÃO MIGUEL', '(11) 95148-8145', 'Valdirene', 'Membro', 'vini.souza.2014@hotmail.com', '2019-04-20 02:15:13'),
(140, 'DIEGO AUGUSTO DE SOUZA', '1992-02-26', 'RUA AMORA,JD IPE', '(11) 98867-3248', 'Valdirene', 'Membro', 'diegoaugustosouza18@gmail.com', '2019-04-20 02:31:01'),
(141, 'ANDREONE FELIPE FONSECA', '1994-05-17', 'RUA CRESCENTE,295 JD BARTIRA', '(11) 95444-6656', 'Valdirene', 'Membro', 'andreonefonseca@outlook.com', '2019-04-20 02:33:24'),
(142, 'LUCIMAR LOURDES DE MORAIS', '1959-09-02', 'RUA DO POMBO CORREIO,290 JD IPE', '(11) 95913-5582', 'Valdirene', 'Líder', 'lucmarl.morais@hotmail.com', '2019-04-20 02:51:15'),
(143, 'SABRINA SOUZA DE OLIVEIRA', '1999-12-17', 'RUA DUILIO LERNADUZZI,448 VL PARANAGUÁ', '(11) 95068-4703', 'Valdirene', 'Líder', 'sabrina.souza00@outlook.com', '2019-04-20 02:53:53'),
(144, 'ANDERSON OLIVEIRA BISPO DOS SANTOS', '1999-03-21', 'RUA FAVEIRA DO IGAPO 274 JD IPE', '(11) 95454-4210', 'Valdirene', 'Líder', 'aobs_2010@hotmail.com', '2019-04-20 02:56:19'),
(145, 'CLÉCIOMARCIO FRANCISCO DA SILVA', '1998-08-02', 'RUA OLIVIA COELHO MARTINS,447 JD MAIA', '(11) 95253-0407', 'Valdirene', 'Líder', 'cleciomarcio.junior@outlook.com', '2019-04-20 03:00:25'),
(146, 'JOYCE GABRIELA CARVALHO RIBEIRO', '2007-02-02', 'PALMEIRA DAS BERMUDAS JD IPE', '(11) 96874-4101', 'Valdirene', 'Auxiliar', 'lucianaribeiroosilva@gmail.com', '2019-04-20 03:12:50'),
(147, 'LUSIMAR MARIA SILVA', '1957-10-15', 'RUA PALMEIRA DAS BERMUDAS 826,JD IPE', '(11) 94680-6729', 'Valdirene', 'Auxiliar', 'lusimarmaria1957@hotmail.com', '2019-04-20 03:16:26'),
(148, 'GUSTAVO  HENRIQUE CARVALHO RIBEIRO', '2007-02-02', 'RUA PALMEIRA DAS BERMUDAS 826 JD IPE', '(11) 94680-6729', 'Valdirene', 'Auxiliar', 'lucianaribeiroosilva@gmail', '2019-04-20 03:20:04'),
(149, 'GABRIELE OLIVEIRA BISPO DOS SANTOS', '2004-03-17', 'RUA FAVEIRA DO IGAPO 274 JD IPE', '(11) 98535-0217', 'Valdirene', 'Auxiliar', 'gabirene2004@gmail.com', '2019-04-20 03:23:28'),
(151, 'GELSON BISPO DOS SANTOS', '1993-04-10', 'AV.MARECHAL TITO 3097 ITAIM PTA', '(11) 95968-5362', 'Valdirene', 'Líder', '', '2019-04-23 15:05:56'),
(152, 'RINALDO LORASQUE ', '1968-04-07', 'AV IGARAPES 1285 JD IPE', '(11) 98240-2702', 'Valdirene', 'Líder', 'Rinaldolorasque@bendsteel.com.br', '2019-04-24 02:29:19'),
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
(200, 'JOEL SANTOS', '1980-04-30', 'Rua. Cairapes das Aguas', '(11) 97101-7977', 'Pr. Joel/Regiane', 'Pastor', 'joel.santos@novelis.com ', '2019-05-21 14:50:47'),
(201, 'MAGNA DE OLIVEIRA SILVA ALVES', '1984-08-18', 'RUA ARNALDO CINTRA, 190', '(11) 99507-1196', 'Pr. Anderson', 'Supervisor', 'magna_osilva@yahoo.com.br', '2019-06-01 23:00:48'),
(202, 'CLARICE REGINA SANTOS PEQUENO', '1981-12-09', 'RUA CONGONHAS DO SERTAO, 3', '(11) 95924-8133', 'Luizinho/Clarice', 'Supervisor', 'bia.clarice@yahoo.com.br', '2019-06-01 23:03:32'),
(205, 'ADNA MELO', '1999-11-04', 'AV: JOSÉ MARTINS LISBOA', '(11) 94898-2394', 'Jaqueline', 'Auxiliar', '', '2019-06-02 00:57:01'),
(206, 'SUELLEN  DE JESUS SILVA', '1998-08-27', 'AV: JOÃO BATISTA SANTIAGO,523', '(11) 99391-8515', 'Jaqueline', 'Membro', 'suellen383@gmail.com', '2019-06-02 01:02:15'),
(207, 'ISABELE REGINA DE FRANÇA', '2007-09-22', 'RUA CONGONHAS DO SERTAO, 3', '(11) 95924-8133', 'Luizinho/Clarice', 'Membro', 'isabele.regina.f@hotmail.com', '2019-06-02 01:03:26'),
(208, 'MATEUS LIMA MARTINS', '2000-06-26', 'RUA MORRO DA BABILONIA,27', '(11) 94933-3861', 'Jaqueline', 'Líder', 'limamartinsff@gmail.com', '2019-06-02 01:04:10'),
(210, 'AMANDA MELO', '2000-12-24', 'RUA SARGENTO BASÍLIO M. DE SANTANA', '(11) 95967-8937', 'Jaqueline', 'Auxiliar', 'amandapereira349@gmail.com', '2019-06-02 01:09:10'),
(211, 'MATEUS LIMA MARTINS', '2000-06-26', 'RUA MORRO DA BABILONIA ,27', '(11) 94933-3861', 'Jaqueline', 'Líder', 'limamartinsff@gmail.com', '2019-06-02 01:11:31'),
(214, 'ANDRÉ LUIZ', '1992-08-29', 'AV: JOSÉ MARTINS LISBOA', '(11) 95972-1857', 'Jaqueline', 'Líder', '', '2019-06-02 01:14:45'),
(215, 'ALDENIZE MELO', '1994-09-07', 'AV: JOSÉ MARTINS LISBOA,2179 A', '(11) 96524-1415', 'Jaqueline', 'Líder', '', '2019-06-02 01:16:16'),
(216, 'CLAUDIANE ROSEMERE DE OLIVEIRA', '1988-08-15', 'RUA MASATO SAKAI,180', '(11) 94029-1684', 'Jaqueline', 'Auxiliar', '', '2019-06-02 01:17:47'),
(217, 'CLAYZER DOS SANTOS', '1980-04-24', 'RUA MANAJÓS,26', '(11) 95401-6690', 'Jaqueline', 'Líder', '', '2019-06-02 01:19:25'),
(218, 'DAVID DE JESUS SILVA ', '1994-10-19', 'AV: JOÃO BATISTA SANTIAGO,523', '(11) 98666-3630', 'Jaqueline', 'Líder', '', '2019-06-02 01:20:55'),
(219, 'DIEGO OLIVEIRA DA SILVA', '1990-02-09', 'RUA BERLIN DE AZEVEDO VIEIRA,06', '(11) 99398-4414', 'Jaqueline', 'Líder', '', '2019-06-02 01:23:11'),
(220, 'JANAINA TAVARES DE SOUZA', '1983-10-26', 'RUA ISABEL MORALES DE O.M.,696A', '(11) 95119-4336', 'Jaqueline', 'Líder', '', '2019-06-02 01:24:12'),
(221, 'JEAN MICHEL', '1986-08-01', 'RUA MASATO SAKAI,180', '(11) 94032-6399', 'Jaqueline', 'Membro', '', '2019-06-02 01:25:51'),
(222, 'JOYCE SOARES ', '1990-07-10', 'RUA JOÃO BATISTA SANTIAGO,523', '(11) 94819-2377', 'Jaqueline', 'Líder', '', '2019-06-02 01:27:31'),
(223, 'LEILIANE OLIVEIRA DOS SANTOS', '1982-03-03', 'RUA MANAJÓS,26', '(11) 96216-6338', 'Jaqueline', 'Auxiliar', '', '2019-06-02 01:29:17'),
(224, 'LIVIA FERNANDA SOUZA', '1991-05-26', 'RUA GUAPIRA,881', '(11) 95704-2429', 'Jaqueline', 'Líder', '', '2019-06-02 01:30:23'),
(228, 'LUIZ FERNANDO MANZANI', '1986-02-19', 'RUA PIMENTA D\'ÁGUA,188', '(11) 94845-4104', 'Jaqueline', 'Líder', 'nandoavivanoiva@gmail.com', '2019-06-02 01:36:07'),
(229, 'LUIS HENRIQUE LIMA GAIOT', '2003-07-02', 'RUA PARREIRA BRAVA,315', '(11) 95357-7482', 'Jaqueline', 'Membro', 'luish747474@gmail.com', '2019-06-02 01:39:18'),
(230, 'MARIA DE FATIMA SANTOS DA SILVA', '1970-01-01', 'RUA LOURO TINGA,387', '(11) 93144-3215', 'Jaqueline', 'Membro', '', '2019-06-02 01:41:17'),
(231, 'VIVIANE OLIVEIRA DA SILVA', '1982-08-29', 'RUA PEROBA ROSA,49', '(11) 99836-5125', 'Jaqueline', 'Membro', '', '2019-06-02 01:42:32'),
(232, 'MARIA DE FATIMA SANTOS DA SILVA', '1968-01-13', 'RUA LOURO TINGA,387', '(11) 93144-3215', 'Jaqueline', 'Membro', '', '2019-06-02 01:43:21'),
(237, 'KLARICE OLIVEIRA DOS SANTOS', '2011-07-27', 'RUA MANAJÓS,26', '(11) 96216-6338', 'Jaqueline', 'Membro', '', '2019-06-02 02:19:41'),
(238, 'JHONATAN OLIVEIRA DOS SANTOS', '2016-07-27', 'RUA MANAJÓS,26', '(11) 96216-6338', 'Jaqueline', 'Membro', '', '2019-06-02 02:20:31'),
(239, 'SARA REGINA GOMES XAVIER', '1997-09-05', 'RUA JOAO FRANCO DOS REIS,26', '(11) 96552-0228', 'Luizinho/Clarice', 'Auxiliar', 'sara@tubelab.tv', '2019-06-02 02:43:38'),
(240, 'SONIA REGINA GOMES XAVIER', '1964-07-31', 'RUA JOAO FRANCO DOS REIS,26', '(11) 96903-9850', 'Luizinho/Clarice', 'Auxiliar', 'sonia86202070@gmail.com', '2019-06-02 02:45:25'),
(241, 'ROGERIO SOARES DA SILVA', '1968-07-28', 'RUA CASTANHEIRA DO BREJO, 84', '(11) 97069-0241', 'Luizinho/Clarice', 'Membro', 'juridicorogerio@ig.com.br', '2019-06-02 02:50:31'),
(243, 'CAROLINE ADOLFO KOVALINKINAS', '1981-12-10', 'RUA MONTE AZUL PAULISTA, 120', '(11) 95405-2603', 'Luizinho/Clarice', 'Membro', '', '2019-06-02 02:56:37'),
(247, 'MANOEL MARCOS BEZERRA AMERICO', '1994-03-17', 'RUA MONTE AZUL PAULISTA, 120', '(11) 98253-3099', 'Luizinho/Clarice', 'Membro', '', '2019-06-02 02:58:50'),
(253, 'CAMILLA CRISTINA AMORIM CARVALHO', '1990-03-12', 'RUA : CARMO DE MINAS ,32', '(11) 94972-8550', 'Martim/Shirley', 'Líder', 'camilacarvalho750@gmail.com', '2019-06-04 20:31:30'),
(254, 'SAMUEL SANTOS CARVALHO', '1982-10-24', 'RUA : CARMO DE MINAS ,32', '(11) 94984-5811', 'Martim/Shirley', 'Líder', 'samuelcarvalho750@gmail.com', '2019-06-04 20:34:45'),
(255, 'EDIVALDO ANTÔNIO OLIVEIRA', '1981-11-09', 'RUA: CARNANI ,31', '(11) 94022-6092', 'Martim/Shirley', 'Anfitrião', '', '2019-06-04 21:13:08'),
(256, 'ELAINE NOGUEIRA OLIVEIRA', '1981-08-07', 'RUA: CARNANI ,31', '(11) 94444-7558', 'Martim/Shirley', 'Anfitrião', '', '2019-06-04 21:14:56'),
(257, 'BIANCA NOGUEIRA OLIVEIRA', '2002-04-01', 'RUA: CARNANI ,31', '(11) 98043-3674', 'Martim/Shirley', 'Anfitrião', '', '2019-06-04 21:16:31'),
(258, 'ADALBERTO ANTÔNIO DE OLIVEIRA', '1974-08-24', 'RUA: GUARAPARIBA ,434', '(11) 94088-4181', 'Martim/Shirley', 'Anfitrião', 'elizabethvitoria.ecceo@gmail.com', '2019-06-04 21:58:49'),
(259, 'ELISABETE CRISTINA CONCEIÇÃO', '1992-08-24', 'RUA: GUARAPARIBA ,434', '(11) 96273-3079', 'Martim/Shirley', 'Membro', 'elizabethvitoria.ecceo@gmail.com', '2019-06-04 22:01:12'),
(260, 'MISLENE GOMES DE OLIVEIRA', '1987-04-05', 'RUA: GUARAPARIBA ,434', '(11) 97991-3310', 'Martim/Shirley', 'Anfitrião', 'mislenegomes28@gmail.com', '2019-06-04 22:03:49'),
(261, 'ELAINE GOMES DE OLIVEIRA', '1981-11-09', 'RUA: GUARAPARIBA ,434', '(11) 94728-6824', 'Martim/Shirley', 'Anfitrião', 'Elaine20014@mail.com', '2019-06-04 22:15:01'),
(263, 'MAGDA RAMALHO VILAÇA', '1976-11-05', 'RUA: CARAIPES DAS ÁGUAS , 509', '(11) 98082-7581', 'Martim/Shirley', 'Líder', '', '2019-06-05 04:19:32'),
(264, 'JOÃO HALISSON OLIVEIRA', '1976-12-27', 'RUA: LAGOA CAJUBA ,101', '(11) 96742-5690', 'Martim/Shirley', 'Líder', 'halisson_3051@hotmail.com', '2019-06-05 04:22:49'),
(265, 'ELAINE CARDOSO OLIVEIRA', '1980-03-25', 'RUA: LAGOA CAJUBA ,  101', '(11) 98031-2261', 'Martim/Shirley', 'Auxiliar', 'elaine.c.s2009@hotmail.com', '2019-06-05 04:26:14'),
(266, 'ANDERSON JOSÉ DA SILVA FERRARI', '1979-05-25', 'AV.IPE ROXO,493 JD IPE', '(11) 97682-9149', 'Valdirene', 'Líder', 'andersilvaferrari@gmail.com', '2019-06-07 01:40:42'),
(267, 'VANESSA FERRARI DA SILVA', '1979-11-21', 'AV.IPE ROXO,493 JD IPE', '(11) 96588-1295', 'Valdirene', 'Líder', 'vanesferrari@hotmail.com', '2019-06-07 01:42:32'),
(268, 'MÁRCIA RAMALHO VIEIRA SANTOS', '1970-04-25', 'RUA: CIPÓ DO REINO ,85', '(11) 95106-6977', 'Martim/Shirley', 'Líder', 'maravisa10@bol.com.br', '2019-06-07 15:58:49'),
(269, 'DORIVAL PEREIRA DOS SANTOS', '1957-08-09', 'RUA: CIPÓ DO REINO ,85', '(11) 97806-6024', 'Martim/Shirley', 'Líder', 'maravisa10@bol.com.br', '2019-06-07 16:03:09'),
(270, 'DORIVAL PEREIRA DOS SANTOS', '1957-08-09', 'RUA: CIPÓ DO REINO ,85', '(11) 97806-6024', 'Martim/Shirley', 'Líder', '', '2019-06-07 16:05:05'),
(271, 'ROSÂNGELA SALVADOR DOS SANTOS', '1985-01-16', 'RUA: CIPÓ DO REINO ,85', '(11) 94539-7316', 'Martim/Shirley', 'Líder', 'angelassgabriel160185@gmail.com', '2019-06-07 16:12:07'),
(272, 'DAVID RAMALHO DOS SANTOS', '1991-11-02', 'RUA: CIPÓ DO REINO ,85', '(11) 94539-7316', 'Martim/Shirley', 'Líder', 'drscorintiano@bol.com.br', '2019-06-07 16:14:58'),
(273, 'DAYANE APARECIDA DE JESUS', '2002-01-20', 'RUA DAS GAIVOTAS, 06 -  VALE DAS BRISAS', '(11) 95322-5288', 'Prs Wagner/Rosana', 'Membro', '953225288dayane@gmail.com', '2019-06-12 20:28:27'),
(274, 'DANIELA SANTOS DE JESUS', '1984-12-06', 'VALE DAS BRISAS, RUA DAS GAIVOTAS N°06', '(11) 95038-3374', 'Prs Wagner/Rosana', 'Membro', '', '2019-06-12 20:56:32'),
(275, 'NILTON HENRIQUE LIMA JUNIOR', '1983-02-08', 'VALE DAS BRISAS, RUA DAS GAIVOTAS N°06', '(11) 94211-8878', 'Prs Wagner/Rosana', 'Membro', '', '2019-06-12 20:57:56'),
(276, 'DAYANE APARECIDA DE JESUS DA FONSECA', '2002-01-20', 'VALE DAS BRISAS, RUA DAS GAIVOTAS N°06', '(11) 95322-5288', 'Prs Wagner/Rosana', 'Membro', '953225288dayane@gmail.com', '2019-06-12 20:59:55'),
(277, 'MARIA VITORIA JESUS DA FONSECA', '2005-09-26', 'VALE DAS BRISAS, RUA DAS GAIVOTAS N°06', '(11) 95038-3374', 'Prs Wagner/Rosana', 'Membro', '', '2019-06-12 21:01:01'),
(278, 'ANA FLAVIA RAMOS DA SILVA', '2002-03-31', 'VALE DAS BRISAS, RUA DAS ANDORINHAS N°8585', '(11) 93024-2262', 'Prs Wagner/Rosana', 'Membro', 'ANAFLAVIARAMOS068@GMAIL.COM', '2019-06-12 21:07:06'),
(279, 'ANA CAROLINA RAMOS DA SILVA', '2007-03-28', 'VALE DAS BRISAS, RUA DAS ANDORINHAS N°8585', '(11) 99481-4378', 'Prs Wagner/Rosana', '', '', '2019-06-12 21:11:14'),
(280, 'ANA PAULA RAMOS DA SILVA FERREIRA', '1993-03-20', 'VALE DAS BRISAS, RUA DAS ANDORINHAS Nº83', '(11) 97351-8500', 'Prs Wagner/Rosana', 'Membro', '', '2019-06-12 21:17:15'),
(281, 'ALEXANDRE APARECIDO FERREIRA', '1977-05-20', 'VALE DAS BRISAS, RUA DAS ANDORINHAS N°83', '(11) 97351-8500', 'Prs Wagner/Rosana', 'Membro', '', '2019-06-12 21:19:20'),
(282, 'MARIA FERREIRA SAISA', '1951-11-05', 'VALE DAS BRISAS, RUA DAS GAIVOTAS ', '(11) 95029-7736', 'Prs Wagner/Rosana', 'Membro', '', '2019-06-12 21:23:53'),
(283, 'MATHEUS RIBEIRO SILVA DE MEDEIROS', '2004-07-14', 'ENTRADA MUNICIPAL DA SERVIDÃO, Nº6854-9-VAREJÃO', '(11) 95308-2532', 'Prs Wagner/Rosana', 'Membro', 'MATHEUSRIBEIRO4002@GMAIL.COM', '2019-06-12 21:32:59');

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
-- Estrutura da tabela `reencontrista`
--

CREATE TABLE `reencontrista` (
  `idReencontrista` int(10) NOT NULL,
  `nomeEnc` varchar(45) NOT NULL,
  `telEnc` varchar(15) DEFAULT NULL,
  `observacao` varchar(150) DEFAULT NULL,
  `endEnc` varchar(50) DEFAULT NULL,
  `sexoEnc` varchar(10) DEFAULT NULL,
  `CEM` varchar(25) DEFAULT NULL,
  `cadastrado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reencontro`
--

CREATE TABLE `reencontro` (
  `id` int(10) NOT NULL,
  `id_reencontrista` int(10) NOT NULL,
  `id_reencontro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas_equipe`
--

CREATE TABLE `tarefas_equipe` (
  `id` int(5) NOT NULL,
  `funcao_encontro` varchar(10) NOT NULL,
  `cor` varchar(7) DEFAULT '#ffffff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aceita_jesus`
--
ALTER TABLE `aceita_jesus`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `acessonew`
--
ALTER TABLE `acessonew`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nivel_acesso` (`nivel_acesso`),
  ADD KEY `username` (`username`),
  ADD KEY `userID` (`userID`);

--
-- Índices para tabela `batizando`
--
ALTER TABLE `batizando`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cem`
--
ALTER TABLE `cem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `config_sistem`
--
ALTER TABLE `config_sistem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `encontrista`
--
ALTER TABLE `encontrista`
  ADD PRIMARY KEY (`idEncontrista`);

--
-- Índices para tabela `encontro`
--
ALTER TABLE `encontro`
  ADD PRIMARY KEY (`id_encontro`),
  ADD KEY `fk_encontro` (`n_encontro`),
  ADD KEY `fk_enco` (`encontrista`);

--
-- Índices para tabela `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipe` (`membro`),
  ADD KEY `id` (`encontro`) USING BTREE,
  ADD KEY `tarefaEnc` (`tarefaEnc`);

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `infocursos`
--
ALTER TABLE `infocursos`
  ADD PRIMARY KEY (`idCursos`);

--
-- Índices para tabela `info_encontro`
--
ALTER TABLE `info_encontro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk` (`n_encontro`);

--
-- Índices para tabela `info_reencontro`
--
ALTER TABLE `info_reencontro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `n_reencontro` (`n_reencontro`);

--
-- Índices para tabela `membros`
--
ALTER TABLE `membros`
  ADD PRIMARY KEY (`idmembros`),
  ADD KEY `email_index` (`email`) USING BTREE;

--
-- Índices para tabela `nivel_acesso`
--
ALTER TABLE `nivel_acesso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reencontrista`
--
ALTER TABLE `reencontrista`
  ADD PRIMARY KEY (`idReencontrista`);

--
-- Índices para tabela `reencontro`
--
ALTER TABLE `reencontro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_reencontro` (`id_reencontro`),
  ADD KEY `reencontro_ibfk_1` (`id_reencontrista`);

--
-- Índices para tabela `tarefas_equipe`
--
ALTER TABLE `tarefas_equipe`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `teste`
--
ALTER TABLE `teste`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alunos` (`alunos`),
  ADD KEY `curso` (`curso`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aceita_jesus`
--
ALTER TABLE `aceita_jesus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT de tabela `acessonew`
--
ALTER TABLE `acessonew`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT de tabela `batizando`
--
ALTER TABLE `batizando`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `cem`
--
ALTER TABLE `cem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `config_sistem`
--
ALTER TABLE `config_sistem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `encontrista`
--
ALTER TABLE `encontrista`
  MODIFY `idEncontrista` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT de tabela `encontro`
--
ALTER TABLE `encontro`
  MODIFY `id_encontro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT de tabela `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `infocursos`
--
ALTER TABLE `infocursos`
  MODIFY `idCursos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `info_encontro`
--
ALTER TABLE `info_encontro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `info_reencontro`
--
ALTER TABLE `info_reencontro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `membros`
--
ALTER TABLE `membros`
  MODIFY `idmembros` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

--
-- AUTO_INCREMENT de tabela `nivel_acesso`
--
ALTER TABLE `nivel_acesso`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `reencontrista`
--
ALTER TABLE `reencontrista`
  MODIFY `idReencontrista` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `reencontro`
--
ALTER TABLE `reencontro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tarefas_equipe`
--
ALTER TABLE `tarefas_equipe`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `teste`
--
ALTER TABLE `teste`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `acessonew`
--
ALTER TABLE `acessonew`
  ADD CONSTRAINT `acessoNEW_ibfk_1` FOREIGN KEY (`nivel_acesso`) REFERENCES `nivel_acesso` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `acessoNEW_ibfk_2` FOREIGN KEY (`username`) REFERENCES `membros` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `acessoNEW_ibfk_3` FOREIGN KEY (`userID`) REFERENCES `membros` (`idmembros`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `encontro`
--
ALTER TABLE `encontro`
  ADD CONSTRAINT `fk_enco` FOREIGN KEY (`encontrista`) REFERENCES `encontrista` (`idEncontrista`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_encontro` FOREIGN KEY (`n_encontro`) REFERENCES `info_encontro` (`n_encontro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `equipe_ibfk_1` FOREIGN KEY (`membro`) REFERENCES `membros` (`idmembros`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `equipe_ibfk_2` FOREIGN KEY (`encontro`) REFERENCES `info_encontro` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `equipe_ibfk_3` FOREIGN KEY (`tarefaEnc`) REFERENCES `tarefas_equipe` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `reencontro`
--
ALTER TABLE `reencontro`
  ADD CONSTRAINT `reencontro_ibfk_1` FOREIGN KEY (`id_reencontrista`) REFERENCES `reencontrista` (`idReencontrista`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reencontro_ibfk_2` FOREIGN KEY (`id_reencontro`) REFERENCES `info_reencontro` (`n_reencontro`) ON DELETE CASCADE ON UPDATE CASCADE;

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
