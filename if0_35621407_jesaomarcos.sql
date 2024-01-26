-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Jan-2024 às 19:41
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `if0_35621407_jesaomarcos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `albuns`
--

CREATE TABLE `albuns` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `capa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `albuns`
--

INSERT INTO `albuns` (`id`, `titulo`, `capa`) VALUES
(1, 'Olimpiadas 2022', '../img/albuns/Olimpiadas 2022/olimpiadas1.jpg'),
(2, 'Retiro JE 2022', '../img/albuns/Retiro JE 2022/retiro1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `album` varchar(200) NOT NULL,
  `caminho` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`id`, `album`, `caminho`) VALUES
(1, '1', '../img/albuns/Olimpiadas 2022/olimpiadas1.jpg'),
(2, '1', '../img/albuns/Olimpiadas 2022/olimpiadas2.jpg'),
(3, '1', '../img/albuns/Olimpiadas 2022/olimpiadas3.jpg'),
(4, '1', '../img/albuns/Olimpiadas 2022/olimpiadas4.jpg'),
(5, '1', '../img/albuns/Olimpiadas 2022/olimpiadas5.jpg'),
(6, '1', '../img/albuns/Olimpiadas 2022/olimpiadas6.jpg'),
(7, '2', '../img/albuns/Retiro JE 2022/retiro1.jpg'),
(8, '2', '../img/albuns/Retiro JE 2022/retiro2.jpg'),
(9, '2', '../img/albuns/Retiro JE 2022/retiro3.jpg'),
(10, '2', '../img/albuns/Retiro JE 2022/retiro4.jpg'),
(11, '2', '../img/albuns/Retiro JE 2022/retiro5.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicas`
--

CREATE TABLE `musicas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `artista` varchar(200) NOT NULL,
  `letra` varchar(5000) NOT NULL,
  `capa` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `musicas`
--

INSERT INTO `musicas` (`id`, `titulo`, `artista`, `letra`, `capa`) VALUES
(1, 'SANTO DEUS', 'Talita Pagliarin', 'As Tuas Promessas Sao Inigualaveis<br>\r\n\r\nO Teu Cuidado É Incomparavel<br>\r\n\r\nPois Tu Conheces Bem O Meu Interior<br>\r\n\r\nMe Chamas Pelo Nome E Sabes Quem Eu Sou<br>\r\n\r\nSanto Deus, És Dono Do Meu Coracao<br>\r\n\r\nSanto Deus, Minha Vida Esta Em Tuas Maos<br>\r\n\r\nSanto Deus, És O Ar Que Eu Respiro, És A Vida Em Mim<br>\r\n\r\nSanto Deus, Eu Só Posso Confiar Em Ti<br>\r\n\r\nPois O Teu Querer É O Melhor Pra Mim<br>\r\n\r\nSanto Deus Te Amo Para Sempre<br>\r\n\r\nE Quando Os Dias Maus Vierem Sobre Mim<br>\r\n\r\nSeguro Estarei Confiando Em Ti Meu Rei<br>\r\n\r\nPois Sei Que Nao Me Abandonaras<br>\r\n\r\nE Mesmo Em Meio As Aflicoes Cantarei:<br>', 'santodeus.jpg'),
(2, 'FILHO DO DEUS VIVO', '', '', NULL),
(3, 'EU VEJO A GLÓRIA', '', '', NULL),
(4, 'RESTAURAÇÃO', '', '', NULL),
(5, 'GRANDE DEUS', '', '', NULL),
(6, 'REI ETERNO', '', '', NULL),
(7, 'QUEBRANTADO', '', '', NULL),
(8, 'ERGA A VOZ E ADORE', '', '', NULL),
(9, 'TEU AMOR NÃO FALHA', '', '', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `albuns`
--
ALTER TABLE `albuns`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `musicas`
--
ALTER TABLE `musicas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `albuns`
--
ALTER TABLE `albuns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `musicas`
--
ALTER TABLE `musicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
