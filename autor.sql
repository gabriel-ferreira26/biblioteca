-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jul-2021 às 17:07
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `data_bibli`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `idAutor` int(11) NOT NULL,
  `nomeAutor` varchar(100) NOT NULL,
  `nascimentoAutor` date NOT NULL,
  `bibliografiaAutor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`idAutor`, `nomeAutor`, `nascimentoAutor`, `bibliografiaAutor`) VALUES
(6, 'Wilhelm Grimm', '1786-02-24', 'Wilhelm Karl Grimm (Hanau, 24 de fevereiro de 1786 — Berlim, 16 de dezembro de 1859) é o mais novo dos famosos Irmãos Grimm,[1] conhecidos por compilarem contos, alguns dos mais famosos que conhecemos, como A Bela Adormecida, Branca de Neve, Chapeuzinho Vermelho, Cinderela, João e Maria, O Pequeno Polegar e Rapunzel.'),
(7, 'Sidney Sheldon', '1917-05-12', 'Nasceu em chicago e aos 20 anos começou sua carreira como roteirista'),
(8, 'Rupi Kaur', '1992-10-05', 'Rupi Kaur é uma poeta feminista contemporânea, escritora e artista da palavra falada. Ela é popularmente conhecida como Instapoet pela atenção que ela ganha online com seus poemas no Instagram. Ela publicou um livro de poesia e prosa intitulado \"milk and honey\" em 2015.'),
(9, 'Marcelo Duarte', '1964-10-31', 'Marcelo Duarte é um jornalista brasileiro. É formado pela Escola de Comunicações e Artes da Universidade de São Paulo e fundador da editora Panda Books. É conhecido pela série de livros O Guia dos Curiosos, que começou a ser lançada em 10 de maio de 1995 e que já tem nove diferentes volumes.'),
(10, 'Maria José Dupré', '1984-05-15', 'Maria José Dupré, que também utilizou o pseudônimo Sra. Leandro Dupré, foi uma escritora brasileira, que ficou conhecida por sua obra-prima, Éramos Seis, e pela série de livros infantis sobre o Cachorrinho Samba.'),
(11, 'Luiz Fernando Verissimo', '1936-09-26', 'Luis Fernando Verissimo é um escritor, humorista, cartunista, tradutor, roteirista de televisão, autor de teatro e romancista brasileiro. Já foi publicitário e revisor de jornal. É ainda músico, tendo tocado saxofone em alguns conjuntos.'),
(12, 'L. Frank Baum ', '1919-05-06', 'Lyman Frank Baum, mais conhecido como L. Frank Baum, foi um escritor, editor, ator, roteirista, produtor de cinema e teosofista norte-americano. Foi criador de um dos mais populares livros escritos na literatura americana infantil, O Mágico de Oz.'),
(13, 'William Shakespeare', '1616-05-23', 'William Shakespeare foi um poeta, dramaturgo e ator inglês, tido como o maior escritor do idioma inglês e o mais influente dramaturgo do mundo. É chamado frequentemente de poeta nacional da Inglaterra e de \"Bardo do Avon\".');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`idAutor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `idAutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
