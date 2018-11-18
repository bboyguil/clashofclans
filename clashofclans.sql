-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Fev-2018 às 09:49
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clashofclans`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atributos`
--

CREATE TABLE `atributos` (
  `atributos-ID` int(11) NOT NULL,
  `alvoPreferido` varchar(50) NOT NULL,
  `tipoAtaque` varchar(50) NOT NULL,
  `espacoOcupacao` varchar(5) NOT NULL,
  `velocidadeMovimento` varchar(5) NOT NULL,
  `velocidadeAtaque` varchar(10) NOT NULL,
  `nivelQuartel` varchar(5) NOT NULL,
  `alcance` varchar(20) NOT NULL,
  `tropaID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atributos`
--

INSERT INTO `atributos` (`atributos-ID`, `alvoPreferido`, `tipoAtaque`, `espacoOcupacao`, `velocidadeMovimento`, `velocidadeAtaque`, `nivelQuartel`, `alcance`, `tropaID`) VALUES
(1, 'Dano dobrado em recursos (x2)', 'Corpo a copo (Terrestre apenas)', '1', '32', '1 Segundo', '4', '0.4 quadrados', 1),
(2, 'Dano dobrado em recursos (x2)', 'Corpo a copo (Terrestre apenas)', '1', '32', '1s', '2', '0.4 quadrados', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `baseconstrutor`
--

CREATE TABLE `baseconstrutor` (
  `tropas` varchar(200) NOT NULL,
  `defesas` varchar(200) NOT NULL,
  `recursos` varchar(200) NOT NULL,
  `prediosExercito` varchar(200) NOT NULL,
  `outros` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `imagem-ID` int(11) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `legenda` varchar(100) DEFAULT NULL,
  `tropaID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`imagem-ID`, `img`, `legenda`, `tropaID`) VALUES
(1, 'img/gigante-1-2.png', 'Nível 1 à 2', 1),
(2, 'img/gigante-3-4.png', 'Nível 3 à 4', 1),
(3, 'img/gigante-5.png', 'Nível 5', 1),
(4, 'img/gigante-6.png', 'Nível 6', 1),
(5, 'img/gigante-7.png', 'Nível 7', 1),
(6, 'img/gigante-8.png', 'Nível 8', 1),
(7, 'img/barbaro-1-2.png', 'Nível 1 à 2', 2),
(8, 'img/barbaro-3-4.png', 'Nível 3 à 4', 2),
(9, 'img/barbaro-5.png', 'Nível 5', 2),
(10, 'img/barbaro-6.png', 'Nível 6', 2),
(11, 'img/barbaro-7.png', 'Nível 7', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis`
--

CREATE TABLE `niveis` (
  `nivelID` int(11) NOT NULL,
  `nivel` varchar(100) NOT NULL,
  `danoSegundo` varchar(100) NOT NULL,
  `danoAtaque` varchar(100) NOT NULL,
  `pontosVida` varchar(100) NOT NULL,
  `custoTreinamento` varchar(1000) NOT NULL,
  `custoUpdate` varchar(100) NOT NULL,
  `nivelLaboratorio` varchar(100) NOT NULL,
  `tempoUpdate` varchar(100) NOT NULL,
  `tropaID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `niveis`
--

INSERT INTO `niveis` (`nivelID`, `nivel`, `danoSegundo`, `danoAtaque`, `pontosVida`, `custoTreinamento`, `custoUpdate`, `nivelLaboratorio`, `tempoUpdate`, `tropaID`) VALUES
(24, '7', '30', '30', '125', '250', '6000000', '8', '14 dias', 2),
(2, '1', '8	', '8', '45', '25', 'N/D', 'N/D', 'N/D', 1),
(3, '2', '11', '11', '54', '40', '50.000', '1', '6 horas', 1),
(4, '3', '14', '14', '65', '60', '150.000', '3', '1 dia', 1),
(5, '4', '18', '18', '78', '80', '500.000', '5', '3 dias', 1),
(6, '5', '23', '23', '95', '150', '1.500.000', '6', '5 dias', 1),
(7, '6', '26', '26', '110', '200', '4.500.000', '7', '10 dias', 1),
(8, '7', '30', '30', '125', '250', '6.000.000', '8', '14 dias', 1),
(23, '6', '26', '26', '110', '200', '4500000', '7', '10 dias', 2),
(22, '5', '23', '23', '95', '150', '1500000', '6', '5 dias', 2),
(21, '4', '18', '18', '78', '80', '500000', '5', '3 dias', 2),
(20, '3', '14', '14', '65', '60', '150000', '3', '1 dia', 2),
(19, '2', '11', '11', '54', '40', '50000', '1', '6 horas', 2),
(18, '1', '8', '8', '45', '25', 'N/D', 'N/D', 'N/D', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `treino`
--

CREATE TABLE `treino` (
  `treino-ID` int(11) NOT NULL,
  `numeroQuarteis` varchar(20) DEFAULT NULL,
  `duracaoTreino` varchar(20) DEFAULT NULL,
  `tropaID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `treino`
--

INSERT INTO `treino` (`treino-ID`, `numeroQuarteis`, `duracaoTreino`, `tropaID`) VALUES
(1, '1', '28 segundos', 1),
(2, '2', '10 segundos', 1),
(3, '3', '9 segundos', 1),
(4, '4', '7 segundos', 1),
(5, '1', '28 segundos', 2),
(6, '2', '10 segundos', 2),
(7, '3', '9 segundos', 2),
(8, '4', '7 segundos', 2),
(9, '1', '28 segundos', 3),
(10, '2', '10 segundos', 3),
(11, '3', '9 segundos', 3),
(12, '4', '7 segundos', 3),
(13, '1', '28 segundos', 4),
(14, '2', '10 segundos', 4),
(15, '3', '9 segundos', 4),
(16, '4', '7 segundos', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tropas`
--

CREATE TABLE `tropas` (
  `tropaID` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `frase` text,
  `descricao` text,
  `imagem` varchar(100) DEFAULT NULL,
  `imagens` int(11) DEFAULT NULL,
  `caracteristicas` int(11) DEFAULT NULL,
  `tempoTreino` int(11) DEFAULT NULL,
  `nivelID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tropas`
--

INSERT INTO `tropas` (`tropaID`, `nome`, `frase`, `descricao`, `imagem`, `imagens`, `caracteristicas`, `tempoTreino`, `nivelID`) VALUES
(1, 'Gigante', 'O gigante é grande e sua força é como de um touro doido cagando.', 'Arena Products Store – WordPress Plugin has hundreds features which we are unable to explaine here, We believe You can’t find these awesome features anywhere bundeled in 1 plugin with life time FREE updates, Also you can extend it’s functionality and usability by using add-ons (extension plugins), so why we say, Sky is the only limit, please visit demo site to see it in action.', 'img/main-gigante.png', 1, 1, 1, 1),
(2, 'Bárbaro', 'O Bárbaro é muito louco ele é forte e entrano meio dos tiros.', 'Neste vídeo vamos mostrar como é possível combinar dados de duas ou mais tabelas relacionadas em uma consulta utilizando a cláusula INNER JOIN, além de outros tipos de JOINS, no SQL Server.', 'img/main-barbaro.png', 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vila`
--

CREATE TABLE `vila` (
  `id` int(11) NOT NULL,
  `tropas` varchar(255) NOT NULL,
  `defesas` varchar(255) NOT NULL,
  `recursos` varchar(255) NOT NULL,
  `predioExercito` varchar(200) NOT NULL,
  `outras` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atributos`
--
ALTER TABLE `atributos`
  ADD PRIMARY KEY (`atributos-ID`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`imagem-ID`);

--
-- Indexes for table `niveis`
--
ALTER TABLE `niveis`
  ADD PRIMARY KEY (`nivelID`);

--
-- Indexes for table `treino`
--
ALTER TABLE `treino`
  ADD PRIMARY KEY (`treino-ID`);

--
-- Indexes for table `tropas`
--
ALTER TABLE `tropas`
  ADD PRIMARY KEY (`tropaID`);

--
-- Indexes for table `vila`
--
ALTER TABLE `vila`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atributos`
--
ALTER TABLE `atributos`
  MODIFY `atributos-ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `imagem-ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `niveis`
--
ALTER TABLE `niveis`
  MODIFY `nivelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `treino`
--
ALTER TABLE `treino`
  MODIFY `treino-ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tropas`
--
ALTER TABLE `tropas`
  MODIFY `tropaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vila`
--
ALTER TABLE `vila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
