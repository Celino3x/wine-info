-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Fev-2023 às 17:56
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `wine-info`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `wine`
--

CREATE TABLE `wine` (
  `id_wine` int(11) NOT NULL,
  `nome_wine` varchar(250) NOT NULL,
  `origem_wine` varchar(250) NOT NULL,
  `safra_wine` varchar(10) NOT NULL,
  `temperatura_wine` varchar(10) NOT NULL,
  `harmonizacao_wine` varchar(400) NOT NULL,
  `foto_wine` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `wine`
--

INSERT INTO `wine` (`id_wine`, `nome_wine`, `origem_wine`, `safra_wine`, `temperatura_wine`, `harmonizacao_wine`, `foto_wine`) VALUES
(1, 'Chateau DEsclans Whispering', 'França - Provence', '2021', '9', 'Opte por pratos mais leves, carnes brancas, frutos do mar, molhos à base de frutas vermelhas, azeite, ervas frescas, manteiga e queijos cremosos. Dicas: tartar de salmão, peixe grelhado com legumes, salada caprese no palito, espaguete com legumes salteados.', '7b24cee801b2a9fdbbf1d67684ebd06d.png'),
(2, 'John Duval Eligo Shiraz', 'Austrália - Barossa Valley', '2016', '15', 'Opte por pratos mais estruturados, carnes assadas, defumadas ou ensopadas, molhos mais intensos, à base de tomate, especiarias ou queijos. Dicas: costela no bafo, bife ancho na manteiga de ervas, aligot de mandioquinha com mix de cogumelos na manteiga.', '2cb76b8c7cc192926b523439f27df7d7.png'),
(3, 'El Misionero Crianza D.O. La Mancha Tempranillo', 'Espanha - La Mancha', '2015', '15', 'Maminha grelhada, churrasco, joelho de porco à pururuca, paella caipira, quibe de carne de soja assado, queijos semiduros.', 'b6a39cae47d71e7d6a7ffdd6e6eb2e7e.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `wine`
--
ALTER TABLE `wine`
  ADD PRIMARY KEY (`id_wine`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `wine`
--
ALTER TABLE `wine`
  MODIFY `id_wine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
