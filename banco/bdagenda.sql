-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/07/2024 às 04:02
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdagenda`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbamigos`
--

CREATE TABLE `tbamigos` (
  `cod` int(11) NOT NULL,
  `amigo` varchar(90) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `whats` varchar(20) DEFAULT NULL,
  `datanasc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbamigos`
--

INSERT INTO `tbamigos` (`cod`, `amigo`, `email`, `telefone`, `whats`, `datanasc`) VALUES
(1, 'KleberKleber', 'Klebinho@gmail.com', '123456789', '75267253617', '1981-02-25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcormecial`
--

CREATE TABLE `tbcormecial` (
  `cod` int(11) NOT NULL,
  `nome` varchar(90) DEFAULT NULL,
  `comercio` varchar(90) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `whats` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcormecial`
--

INSERT INTO `tbcormecial` (`cod`, `nome`, `comercio`, `telefone`, `whats`) VALUES
(1, 'João Guilherme', 'Chiquititass', '6546768', '75267253617');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `cod` int(11) NOT NULL,
  `nome` varchar(90) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `imagem` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbusuario`
--

INSERT INTO `tbusuario` (`cod`, `nome`, `email`, `senha`, `imagem`) VALUES
(1, 'BruBru', 'bruna@gmail.com', '456', NULL),
(2, 'Taiga', 'taiga@gmail.com', '123', '../usuarios/Aisaka san.jpg'),
(3, 'klebi', 'mae@gmail.com', '123', '../usuarios/caminhao.jfif');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbamigos`
--
ALTER TABLE `tbamigos`
  ADD PRIMARY KEY (`cod`);

--
-- Índices de tabela `tbcormecial`
--
ALTER TABLE `tbcormecial`
  ADD PRIMARY KEY (`cod`);

--
-- Índices de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbamigos`
--
ALTER TABLE `tbamigos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbcormecial`
--
ALTER TABLE `tbcormecial`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
