-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Out-2020 às 00:59
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `expessoa`
--

CREATE TABLE `expessoa` (
  `id` int(11) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cidade` varchar(85) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(85) NOT NULL,
  `datanascimento` date NOT NULL,
  `profissao` varchar(85) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `expessoa`
--

INSERT INTO `expessoa` (`id`, `tipo`, `nome`, `endereco`, `cidade`, `estado`, `celular`, `email`, `datanascimento`, `profissao`, `usuario`, `data`) VALUES
(2, 'fisica', 'Armando Volta', 'Rua dos Pardais, 34', 'Marialva', 'PR', '(44) 9999-9996', 'armando@volta.com', '2020-09-03', 'Médico', 'Chico Anysio', '2020-10-10'),
(4, 'juridica', 'TecSoft', 'Rua Piratininga, 234', 'Maringá', 'PR', '(44) 9999-9997', 'tecsoft@tec.com', '2020-10-12', 'Softhouse', 'Chico Anysio', '2020-10-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cidade` varchar(85) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(85) NOT NULL,
  `datanascimento` date NOT NULL,
  `profissao` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `tipo`, `nome`, `endereco`, `cidade`, `estado`, `celular`, `email`, `datanascimento`, `profissao`) VALUES
(1, 'fisica', 'Emerson Amaral Bueno de Camargo', 'Avenida XV de Novembro', 'Maringá', 'PR', '9999-9999', 'emersonb6@hotmail.com', '1973-02-03', 'Professor'),
(2, 'juridica', 'Softhouse Show de Soluções', 'Avenida Tiradentes, 233', 'Maringá', 'PR', '(44)9999-9991', 'solucao@show.com.br', '2010-08-12', 'Programador'),
(3, 'fisica', 'Ana Julia de Camargo', 'Avenida Cerro Azul, 234', 'Maringá', 'PR', '(44) 9999-9992', 'anajulia@id.me', '2002-04-14', 'Estudante'),
(8, 'fisica', 'Emanuele da Silva', 'Rua Campos Sales, 344', 'Maringá', 'PR', '(44)9999-9995', 'emanuele@este.com', '2020-09-15', 'Professora'),
(11, 'fisica', 'Elieth Camargo', 'Rua Campos Sales, 23', 'Maringá', 'PR', '(44) 9999-9997', 'elieth@eli.com', '2020-10-07', 'Farmaceutica'),
(13, 'juridica', 'SYMA Informática', 'Avenida Herval, 34', 'Maringá', 'PR', '(44)9999-9993', 'syma@syma.com', '1999-01-12', 'Loja de Informática'),
(15, 'fisica', 'Teodoro da Fonseca', 'Avenida Tiradentes, 233', 'Maringá', 'PR', '(44)9999-9994', 'teodora@fonseca.com', '1878-01-12', 'Coronel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(85) NOT NULL,
  `login` varchar(55) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`, `tipo`) VALUES
(1, 'Chico Anysio', 'chico', 'Y2hpY28=', 'admin'),
(2, 'Tomb Raider', 'teste', 'MTIzNDU2', 'normal'),
(15, 'Marco Fenix', 'teste2', 'dGVzdGU=', 'normal'),
(16, 'Princípe Knot', 'teste3', 'dGVzdGU=', 'admin'),
(17, 'Darth Vader', 'teste4', 'dGVzdGU=', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `expessoa`
--
ALTER TABLE `expessoa`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `expessoa`
--
ALTER TABLE `expessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
