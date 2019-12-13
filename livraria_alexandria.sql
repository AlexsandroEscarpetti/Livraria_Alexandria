-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Dez-2019 às 01:51
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `livraria_alexandria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id_estoque` int(11) NOT NULL,
  `livros_id_livro` int(11) NOT NULL,
  `funcionario_id_funcionario` int(11) NOT NULL,
  `qtdd_total` smallint(15) NOT NULL,
  `qtdd_receb` smallint(15) NOT NULL,
  `dataAtualizacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id_estoque`, `livros_id_livro`, `funcionario_id_funcionario`, `qtdd_total`, `qtdd_receb`, `dataAtualizacao`) VALUES
(334, 1, 4, 5039, 12, '2019-12-11'),
(335, 5, 4, 866, 200, '2019-12-11'),
(336, 10, 4, 2024, 2, '0000-00-00'),
(337, 1, 1, 122, 122, '2019-12-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id_fornecedores` int(11) NOT NULL,
  `nome_fornecedor` varchar(90) NOT NULL,
  `endereco_fornecedor` varchar(150) NOT NULL,
  `cidade_fornecedor` varchar(50) NOT NULL,
  `telefone_fornecedor` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id_fornecedores`, `nome_fornecedor`, `endereco_fornecedor`, `cidade_fornecedor`, `telefone_fornecedor`) VALUES
(3, 'louco livros', 'Apito Rarama', 'BarÃ£o', '51555555'),
(5, 'Orion papelaria premium', 'DÃ¡rio Totta 556 ', 'Porto Alegre', '2147483647'),
(6, 'Namboo Books Brasil', 'Apito sorcio 567', 'SÃ£o Luis', '2147483647'),
(8, 'Livro DaBarra', 'DÃ¡rio santa, 556', 'Porto Alegre', '2147483647'),
(9, 'Taliaddddd', 'Rua salvador', 'Porto Alegre', '2147483647'),
(11, 'Alexandro hor Rscarpg', 'Rua DÃ¡rio gg', 'Porto Alegreg', '2147483647'),
(12, 'Pharma livros', 'rua da morte', 'poa', '2147483647'),
(13, 'Alexandro hor Rscarpettiy', 'Rua DÃ¡rio Tottatt', 'Porto Alegret', '2147483647'),
(14, 'Alexandro hor Rscarpettiy', 'Rua DÃ¡rio Tottatt', 'Porto Alegret', '51912345678');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_funcionario` int(11) NOT NULL,
  `nome_funcionario` varchar(50) NOT NULL,
  `data_da_contratacao` date NOT NULL,
  `senha_funcionario` int(11) NOT NULL,
  `Sup` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_funcionario`, `nome_funcionario`, `data_da_contratacao`, `senha_funcionario`, `Sup`) VALUES
(1, 'allan dos santos', '2015-05-22', 1234, NULL),
(2, 'alex', '2019-12-25', 1562, NULL),
(3, 'sandra', '2018-12-12', 4321, 1),
(4, 'AlexsandroJE', '2020-02-22', 1562, 1),
(10, 'Mouro', '1541-12-25', 1234, 0),
(11, 'allanx', '2001-02-22', 1234, 0),
(18, 'allanxxx', '1980-12-25', 1234, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id_livro` int(11) NOT NULL,
  `id_fornecedor` int(11) NOT NULL,
  `titulo_livro` varchar(100) NOT NULL,
  `ano_livro` smallint(4) NOT NULL,
  `edicao_livro` smallint(4) NOT NULL,
  `editora` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id_livro`, `id_fornecedor`, `titulo_livro`, `ano_livro`, `edicao_livro`, `editora`) VALUES
(1, 8, 'a Hola do terror', 2002, 42, ''),
(5, 8, 'principe da percia', 1955, 1, 'saraiva'),
(10, 6, 'Vanessa e o amor', 2012, 20, 'ManEdit'),
(11, 6, 'A morena de la', 1999, 1, 'simples edit'),
(17, 3, 'a hora Ã© agora', 2000, 20, 'Amazon');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_estoque`),
  ADD KEY `livros_id_livro_fk` (`livros_id_livro`),
  ADD KEY `funcionario_id_funcionario_fk` (`funcionario_id_funcionario`);

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id_fornecedores`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id_livro`),
  ADD KEY `id_fornecedor_fk` (`id_fornecedor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_estoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id_fornecedores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `funcionario_id_funcionario_fk` FOREIGN KEY (`funcionario_id_funcionario`) REFERENCES `funcionarios` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `livros_id_livro_fk` FOREIGN KEY (`livros_id_livro`) REFERENCES `livros` (`id_livro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `id_fornecedor_fk` FOREIGN KEY (`id_fornecedor`) REFERENCES `fornecedores` (`id_fornecedores`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
