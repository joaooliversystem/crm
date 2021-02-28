-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Fev-2021 às 19:42
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(99) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `permissoes` varchar(150) NOT NULL,
  `situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `email`, `usuario`, `senha`, `permissoes`, `situacao`) VALUES
(3, 'Administrador', 'joao@agenciacodelabs.com', 'admin', '0192023a7bbd73250516f069df18b500', 't', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(99) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `pass`, `cpf_cnpj`, `cep`, `rua`, `bairro`, `estado`, `cidade`, `foto`, `status`) VALUES
(1, 'João Victor Sueira de Oliveira', 'joaooliversystem@gmail.com', '1720512761', '10754748685', '36800-000', 'Av Doutor Pedro Nolasco 81', 'Coroado', 'Minas Gerais', 'Carangola', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratos`
--

CREATE TABLE `contratos` (
  `id` int(99) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `id_gerente` int(99) NOT NULL,
  `situacao` int(11) NOT NULL,
  `data_inicio` varchar(255) NOT NULL,
  `data_termino` varchar(255) NOT NULL,
  `conteudo` text NOT NULL,
  `id_cliente` int(99) NOT NULL,
  `valor_contrato` varchar(255) NOT NULL,
  `forma_pagamento` varchar(255) NOT NULL,
  `parcelas` varchar(255) NOT NULL,
  `condicoes_especiais` text NOT NULL,
  `assinatura_administrador` varchar(255) NOT NULL,
  `id_emp_parceira` int(99) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas_parceiras`
--

CREATE TABLE `empresas_parceiras` (
  `id` int(99) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `freelancers`
--

CREATE TABLE `freelancers` (
  `id` int(99) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(99) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gerentes`
--

CREATE TABLE `gerentes` (
  `id` int(99) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `newslatter`
--

CREATE TABLE `newslatter` (
  `id` int(99) NOT NULL,
  `id_funcionario` int(99) NOT NULL,
  `titulo_da_campanha` varchar(255) NOT NULL,
  `situacao_campanha` int(11) NOT NULL,
  `data_inicio` varchar(255) NOT NULL,
  `previsao_termino` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `conteudo` text NOT NULL,
  `foto` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos_andamento`
--

CREATE TABLE `projetos_andamento` (
  `id` int(99) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `gerente` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `data_inicio` varchar(255) NOT NULL,
  `previsao_termino` varchar(255) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `situacao_projeto` int(11) NOT NULL,
  `foto` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos_cancelados`
--

CREATE TABLE `projetos_cancelados` (
  `id` int(99) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `gerente` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `data_inicio` varchar(255) NOT NULL,
  `previsao_termino` varchar(255) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `situacao_projeto` int(11) NOT NULL,
  `foto` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos_cotacao`
--

CREATE TABLE `projetos_cotacao` (
  `id` int(99) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `gerente` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `data_inicio` varchar(255) NOT NULL,
  `previsao_termino` varchar(255) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `situacao_projeto` int(11) NOT NULL,
  `foto` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos_finalizados`
--

CREATE TABLE `projetos_finalizados` (
  `id` int(99) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `gerente` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `data_inicio` varchar(255) NOT NULL,
  `previsao_termino` varchar(255) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `situacao_projeto` int(11) NOT NULL,
  `foto` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `empresas_parceiras`
--
ALTER TABLE `empresas_parceiras`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `freelancers`
--
ALTER TABLE `freelancers`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `gerentes`
--
ALTER TABLE `gerentes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `newslatter`
--
ALTER TABLE `newslatter`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projetos_andamento`
--
ALTER TABLE `projetos_andamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projetos_cancelados`
--
ALTER TABLE `projetos_cancelados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projetos_cotacao`
--
ALTER TABLE `projetos_cotacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projetos_finalizados`
--
ALTER TABLE `projetos_finalizados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contratos`
--
ALTER TABLE `contratos`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `empresas_parceiras`
--
ALTER TABLE `empresas_parceiras`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `freelancers`
--
ALTER TABLE `freelancers`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `gerentes`
--
ALTER TABLE `gerentes`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `newslatter`
--
ALTER TABLE `newslatter`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `projetos_andamento`
--
ALTER TABLE `projetos_andamento`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `projetos_cancelados`
--
ALTER TABLE `projetos_cancelados`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `projetos_cotacao`
--
ALTER TABLE `projetos_cotacao`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `projetos_finalizados`
--
ALTER TABLE `projetos_finalizados`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
