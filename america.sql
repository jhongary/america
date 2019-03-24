-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2019 at 03:24 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 5.6.40-5+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `america`
--

-- --------------------------------------------------------

--
-- Table structure for table `autos`
--

CREATE TABLE `autos` (
  `id` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `placa` varchar(255) NOT NULL,
  `nromov` int(11) NOT NULL,
  `deleted` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `persona_id` int(11) DEFAULT NULL,
  `fabricacion` varchar(150) DEFAULT NULL,
  `imagen` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `autos`
--

INSERT INTO `autos` (`id`, `marca`, `modelo`, `tipo`, `color`, `placa`, `nromov`, `deleted`, `created`, `modified`, `user_id`, `persona_id`, `fabricacion`, `imagen`) VALUES
(1, 'TOYOTA', 'sprinter', 'taxi', 'VERDE', '2594ZUD', 54, NULL, '2018-02-27 02:45:30', '2018-05-31 07:15:08', 4, NULL, '147', '5b0fcb2c-90a8-47e2-8318-05d00d550163.jpg'),
(2, 'nissan', 'plateado', 'vagoneta', NULL, '123zed', 34, NULL, '2018-05-01 21:59:13', '2018-05-01 21:59:13', 4, 2, '2005', NULL),
(3, 'qwe', 'qwe', 'vagoneta', 'rojo', '123qwe', 56, NULL, '2018-05-01 22:20:37', '2018-05-31 23:46:21', 4, NULL, '1234', '5b10b37d-6048-441c-aa97-05ee0d550163.jpg'),
(4, 'zxc', 'zxc', 'taxi', NULL, 'zxcz', 23, NULL, '2018-05-01 22:21:29', '2018-05-01 22:21:29', 4, NULL, '1874', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `autos_personas`
--

CREATE TABLE `autos_personas` (
  `id` int(11) NOT NULL,
  `auto_id` int(11) DEFAULT NULL,
  `persona_id` int(11) DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autos_personas`
--

INSERT INTO `autos_personas` (`id`, `auto_id`, `persona_id`, `deleted`, `created`, `modified`) VALUES
(1, 2, 4, NULL, '2019-03-24 13:51:17', '2019-03-24 13:51:17'),
(2, 1, 2, NULL, '2019-03-24 13:51:27', '2019-03-24 13:51:27'),
(3, 3, 2, '2019-03-24 14:00:36', '2019-03-24 13:51:29', '2019-03-24 14:00:36');

-- --------------------------------------------------------

--
-- Table structure for table `idiomas`
--

CREATE TABLE `idiomas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `principal` int(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `auto_id` int(11) NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `ci` varchar(40) DEFAULT NULL,
  `nro_movil` int(11) DEFAULT NULL,
  `telefono` varchar(40) DEFAULT NULL,
  `domicilio` varchar(50) DEFAULT NULL,
  `auto_id` int(11) DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `fecha_ci` date DEFAULT NULL,
  `fecha_lic` date DEFAULT NULL,
  `fecha_inco` date DEFAULT NULL,
  `celular` varchar(100) DEFAULT NULL,
  `zona` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `motivo_baja` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellido`, `ci`, `nro_movil`, `telefono`, `domicilio`, `auto_id`, `deleted`, `created`, `modified`, `fecha_ci`, `fecha_lic`, `fecha_inco`, `celular`, `zona`, `estado`, `imagen`, `id_user`, `categoria`, `motivo_baja`) VALUES
(2, 'raul juan3', 'marin candia', '7015842', 14, '7063589', 'callebueno', 2, NULL, '2018-02-16 02:37:38', '2018-05-09 23:49:36', '2018-04-23', NULL, '2018-05-09', '', 'central', 'Deshabilitado', '5af3b340-1df4-46e8-aab8-0bf80d550163.jpg', 4, 'B', ''),
(4, 'cccc', 'rrrrr', '22222', 14, '', '', 1, NULL, '2018-04-24 00:28:12', '2018-07-08 11:03:26', NULL, '2018-04-10', '2018-07-08', '', 'miraflores', 'Habilitado', '', 4, 'A', ''),
(6, 'xxxxx', 'xxxx', '2323', 28, '', '', 3, '2019-02-18 00:00:00', '2018-05-09 15:06:08', '2019-03-21 13:04:49', NULL, NULL, '2019-03-21', '', 'werwer', 'Habilitado', NULL, 3, '', ''),
(7, 'carlos', 'calle', '7777777', NULL, '222222', '', NULL, NULL, '2018-05-29 21:51:24', '2018-07-07 09:07:22', '2018-05-29', '2018-05-15', '2018-07-07', '555555', 'el alto', 'Deshabilitado', NULL, 4, '', 'muy pirata');

-- --------------------------------------------------------

--
-- Table structure for table `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20170810180708, 'Initial', '2017-11-12 23:13:23', '2017-11-12 23:13:24', 0),
(20170811181940, 'AlterPisos', '2017-11-12 23:13:24', '2017-11-12 23:13:24', 0),
(20170815195524, 'CreateClientes', '2017-11-12 23:13:24', '2017-11-12 23:13:25', 0),
(20170821203135, 'CreateConceptos', '2017-11-12 23:13:25', '2017-11-12 23:13:25', 0),
(20170823204240, 'CreateSubconceptos', '2017-11-12 23:13:25', '2017-11-12 23:13:25', 0),
(20180120162102, 'CreatePersonas', '2018-01-20 20:37:46', '2018-01-20 20:37:47', 0),
(20180120164240, 'CreateAutos', '2018-01-20 20:44:44', '2018-01-20 20:44:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tarifas`
--

CREATE TABLE `tarifas` (
  `id` int(11) NOT NULL,
  `inicio` varchar(200) DEFAULT NULL,
  `destino` varchar(200) DEFAULT NULL,
  `diurno` varchar(100) DEFAULT NULL,
  `nocturno` varchar(100) DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarifas`
--

INSERT INTO `tarifas` (`id`, `inicio`, `destino`, `diurno`, `nocturno`, `deleted`, `created`, `modified`) VALUES
(1, 'Miraflores', 'obrajes', '18', '20', NULL, '2018-06-10 17:14:28', '2018-06-10 17:14:39'),
(2, 'Miraflores', 'plaza Avaroa', '15', '18', NULL, '2018-06-10 17:26:07', '2018-06-10 17:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `edificio_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nombre`, `username`, `password`, `role`, `edificio_id`, `created`, `modified`, `deleted`, `telefono`, `direccion`, `email`) VALUES
(3, 'gary', 'gary', '6e3cd96451ce57e998a063c75077cacb5dd8e462', 'Administrador', NULL, '2017-11-12 19:42:05', '2018-04-10 22:36:30', NULL, NULL, NULL, NULL),
(4, 'america', 'america', 'e0f4f88c62a6df72a86effb5c8ef7fe6d4448629', 'Administrador', NULL, '2018-04-21 23:28:07', '2019-03-21 11:58:27', NULL, NULL, NULL, NULL),
(5, 'Diego', 'Diego', '6e3cd96451ce57e998a063c75077cacb5dd8e462', 'Administrador', NULL, '2019-03-21 11:56:37', '2019-03-21 12:37:57', NULL, '78818675', 'Mercedario', 'diego@gmail.com'),
(6, 'wwww', 'www', '6e3cd96451ce57e998a063c75077cacb5dd8e462', 'Administrador', NULL, '2019-03-21 12:44:04', '2019-03-21 12:44:27', NULL, '71865241', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `autos_personas`
--
ALTER TABLE `autos_personas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autos`
--
ALTER TABLE `autos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `autos_personas`
--
ALTER TABLE `autos_personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tarifas`
--
ALTER TABLE `tarifas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
