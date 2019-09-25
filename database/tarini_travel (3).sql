-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 02:16 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tarini_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `aacorporate`
--

CREATE TABLE `aacorporate` (
  `id` int(11) NOT NULL,
  `name` varchar(555) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `email` varchar(555) NOT NULL,
  `cgn` varchar(50) NOT NULL,
  `address` varchar(555) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aacorporate`
--

INSERT INTO `aacorporate` (`id`, `name`, `phone`, `email`, `cgn`, `address`, `status`, `create_date`) VALUES
(11, 'sukanta', 0, 'sdss', 'dsd', 'asdas23', 1, '2019-01-30 17:19:57'),
(12, 'pushpak', 7786, 'vngfgh', 'dfgdfdfghfd', 'gfhf', 1, '2019-01-31 07:59:35'),
(13, 'ghfgh', 0, 'h', 'fgfghfgh', 'fghfgh', 1, '2019-02-02 12:42:39'),
(14, 'siku', 0, 'gbhg', 'hgh', 'hggh', 1, '2019-02-05 14:10:48'),
(18, 'corname', 0, 'cor email', 'cor gst no', 'cor adress', 1, '2019-02-05 15:57:33'),
(19, 'jytyjyjjy', 0, 'gjhgj', 'hgjhg', 'hmhg', 1, '2019-02-25 15:14:52'),
(20, 'nhgj', 0, 'rytyryty', 'rytryt', 'jthftf', 1, '2019-02-25 15:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `add_dutyslip_tarini`
--

CREATE TABLE `add_dutyslip_tarini` (
  `id` int(11) NOT NULL,
  `duty_slip_no` varchar(50) NOT NULL,
  `party_name` varchar(50) NOT NULL,
  `starting_date` varchar(50) NOT NULL,
  `starting_km` varchar(50) NOT NULL,
  `starting_time` varchar(50) NOT NULL,
  `place_from` varchar(50) NOT NULL,
  `advance_paid_client` varchar(50) NOT NULL,
  `advance_paid_travel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `advance`
--

CREATE TABLE `advance` (
  `id` int(11) NOT NULL,
  `employee` tinyint(1) NOT NULL,
  `eid` varchar(10) NOT NULL,
  `advance` int(10) NOT NULL,
  `date` varchar(50) NOT NULL,
  `month` tinyint(2) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advance`
--

INSERT INTO `advance` (`id`, `employee`, `eid`, `advance`, `date`, `month`, `creationDate`) VALUES
(1, 1, 'ARGC01', 100, '2019-01-28', 1, '2019-01-28 12:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(50) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `vehicle_name`) VALUES
(48, 'sapharie'),
(49, 'asdasd'),
(50, 'BOLERO'),
(51, 'HondaCity'),
(52, 'maruti'),
(53, 'volkswagen'),
(54, 'ABCDEFGH');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_bill`
--

CREATE TABLE `corporate_bill` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `duty_slip_no` int(11) NOT NULL,
  `ownerslipno` int(11) NOT NULL,
  `duty_date` date NOT NULL,
  `journey_from` varchar(55) NOT NULL,
  `journey_to` varchar(55) NOT NULL,
  `vehicle_name` varchar(555) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `vehicle_no` varchar(55) NOT NULL,
  `starting_km` varchar(55) NOT NULL,
  `closing_km` varchar(55) NOT NULL,
  `total_km` varchar(55) NOT NULL,
  `starting_date` date NOT NULL,
  `closing_date` date NOT NULL,
  `starting_time` varchar(55) NOT NULL,
  `closing_time` varchar(55) NOT NULL,
  `total_time` varchar(555) NOT NULL,
  `totalhour` varchar(55) NOT NULL,
  `charging_type` varchar(55) NOT NULL,
  `tool_gate` varchar(55) NOT NULL,
  `parking` varchar(55) NOT NULL,
  `extra_hour` varchar(55) NOT NULL,
  `extrahour_price` varchar(55) NOT NULL,
  `extra_hour_totalprice` varchar(55) NOT NULL,
  `totaldetaintion` varchar(55) NOT NULL,
  `detaintioncharge` varchar(55) NOT NULL,
  `totaldetaintioncharge` varchar(55) NOT NULL,
  `night_halt` varchar(55) NOT NULL,
  `night_halt_charge` varchar(55) NOT NULL,
  `total_night_halt_charge` varchar(55) NOT NULL,
  `kmforlitre` varchar(55) NOT NULL,
  `fuel_rate` varchar(55) NOT NULL,
  `totalfulerate` varchar(55) NOT NULL,
  `perdaycharge` varchar(55) NOT NULL,
  `priceper_km` varchar(55) NOT NULL,
  `totalpriceperkm` varchar(55) NOT NULL,
  `amount` varchar(55) NOT NULL,
  `total_adv` varchar(55) NOT NULL,
  `total_amount` varchar(55) NOT NULL,
  `py_amount` varchar(50) NOT NULL,
  `du_amount` varchar(50) NOT NULL,
  `remark` varchar(555) NOT NULL,
  `corporate_id` int(11) NOT NULL,
  `corporate_name` varchar(55) NOT NULL,
  `bill` varchar(55) NOT NULL,
  `cgst` varchar(55) NOT NULL,
  `sgat` varchar(55) NOT NULL,
  `withoutgst` varchar(55) NOT NULL,
  `withgst` varchar(55) NOT NULL,
  `taxamount` varchar(55) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `withouttooltax` varchar(55) NOT NULL,
  `withoutadvance` varchar(55) NOT NULL,
  `total_per_day_charge` varchar(55) NOT NULL,
  `days` varchar(55) NOT NULL,
  `fixedprice` varchar(55) NOT NULL,
  `fixedextrahour` varchar(55) NOT NULL,
  `fixedextrahourprice` varchar(55) NOT NULL,
  `fixedtotal_extra_hour_price` varchar(55) NOT NULL,
  `fixedextrakm` varchar(55) NOT NULL,
  `fixed_extrakm_price` varchar(55) NOT NULL,
  `fixedextrakmtotalprice` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate_bill`
--

INSERT INTO `corporate_bill` (`id`, `duty_slip_no`, `ownerslipno`, `duty_date`, `journey_from`, `journey_to`, `vehicle_name`, `vehicle_id`, `vehicle_no`, `starting_km`, `closing_km`, `total_km`, `starting_date`, `closing_date`, `starting_time`, `closing_time`, `total_time`, `totalhour`, `charging_type`, `tool_gate`, `parking`, `extra_hour`, `extrahour_price`, `extra_hour_totalprice`, `totaldetaintion`, `detaintioncharge`, `totaldetaintioncharge`, `night_halt`, `night_halt_charge`, `total_night_halt_charge`, `kmforlitre`, `fuel_rate`, `totalfulerate`, `perdaycharge`, `priceper_km`, `totalpriceperkm`, `amount`, `total_adv`, `total_amount`, `py_amount`, `du_amount`, `remark`, `corporate_id`, `corporate_name`, `bill`, `cgst`, `sgat`, `withoutgst`, `withgst`, `taxamount`, `year`, `month`, `creation_date`, `status`, `withouttooltax`, `withoutadvance`, `total_per_day_charge`, `days`, `fixedprice`, `fixedextrahour`, `fixedextrahourprice`, `fixedtotal_extra_hour_price`, `fixedextrakm`, `fixed_extrakm_price`, `fixedextrakmtotalprice`) VALUES
(2, 167, 0, '2019-02-02', 'jhkjgjg', 'jfghf', 'baleno', 1, '7675', '100', '200', '100', '2019-02-02', '2019-02-02', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', '1.7', 'Local', '100', '100', '0', '0', '0.00', '', '', '', '0', '0', '0.00', '100', '100', '100', '100', '', '', '200.00', '100', '100', '', '', '', 11, 'sukanta', '167', '2.5', '2.5', '100', '100', '0', 2019, 2, '2019-02-02 14:53:37', 1, '0', '200', '100', '0', '', '', '', '', '', '', ''),
(4, 166, 0, '2019-02-02', 'hkg', 'ghgjh', 'baleno', 1, '7675', '100', '200', '100', '2019-02-02', '2019-02-02', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', '1.7', 'Local', '100', '100', '0', '0', '0.00', '', '', '', '0', '0', '0.00', '10', '10', '100', '10000', '', '', '10100.00', '0', '10100', '', '', '', 11, 'sukanta', '166', '2.5', '2.5', '10100', '10600', '500', 2019, 2, '2019-02-02 15:52:24', 1, '10000', '10100', '10000', '0', '', '', '', '', '', '', ''),
(5, 1010, 0, '2019-02-02', 'kiuiy', 'uiyuti', 'baleno', 1, '7675', '100', '1000', '900', '2019-02-02', '2019-02-02', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', '1.7', 'Local', '100', '100', '0', '0', '0.00', '', '', '', '0', '0', '0.00', '100', '100', '900', '100', '', '', '1000.00', '0', '1000', '', '', '', 11, 'sukanta', '1010', '2.5', '2.5', '1000', '1045', '45', 2019, 2, '2019-02-02 16:06:30', 1, '900', '1000', '100', '0', '', '', '', '', '', '', ''),
(6, 1010, 0, '2019-02-02', 'kiuiy', 'uiyuti', 'baleno', 1, '7675', '100', '1000', '900', '2019-02-02', '2019-02-02', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', '1.7', 'Local', '100', '100', '0', '0', '0.00', '', '', '', '0', '0', '0.00', '100', '100', '900', '100', '', '', '1000.00', '688.00', '312', '', '', '', 11, 'sukanta', '1010', '2.5', '2.5', '312', '322.6', '10.6', 2019, 2, '2019-02-02 16:25:54', 1, '212', '1000', '100', '0', '', '', '', '', '', '', ''),
(7, 1100, 0, '2019-02-02', 'ytuy', 'tuytuyrt', 'baleno', 1, '7675', '100', '200', '100', '2019-02-02', '2019-02-02', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', '1.7', 'Local', '0', '0', '0', '0', '0.00', '', '', '', '0', '0', '0.00', '100', '100', '100', '100', '', '', '200.00', '412.00', '-212', '', '', '', 11, 'sukanta', '1100', '2.5', '2.5', '-212', '-222.6', '-10.6', 2019, 2, '2019-02-02 16:28:26', 1, '-212', '200', '100', '0', '', '', '', '', '', '', ''),
(8, 9439, 0, '2019-02-05', 'place start', 'place end', 'kiwi', 4, 'OdFAFA', '100', '200', '100', '2019-02-05', '2019-02-05', '08:56', '19:36', '0 days : 10 hours : 40 minutes : 0 seconds', '10.7', 'Fixed', '1000', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1500', '-1000', '2500', '', '', '', 18, 'corname', '9439', '2.5', '2.5', '2500', '2575', '75', 2019, 2, '2019-02-05 22:04:01', 1, '1500', '1500', '', '0', '100', '2', '100', '200', '10', '10', '100'),
(9, 9439, 0, '2019-02-05', 'place start', 'place end', 'kiwi', 4, 'OdFAFA', '100', '200', '100', '2019-02-05', '2019-02-05', '08:56', '19:36', '0 days : 10 hours : 40 minutes : 0 seconds', '10.7', 'Fixed', '1000', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1200', '-1000', '2200', '', '', '', 18, 'corname', '9439', '2.5', '2.5', '2200', '2260', '60', 2019, 2, '2019-02-05 23:22:42', 1, '1200', '1200', '', '0', '0', '0', '0', '0', '10', '10', '100');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_bill_client`
--

CREATE TABLE `corporate_bill_client` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `duty_slip_no` int(11) NOT NULL,
  `ownerslipno` int(11) NOT NULL,
  `duty_date` date NOT NULL,
  `journey_from` varchar(55) NOT NULL,
  `journey_to` varchar(55) NOT NULL,
  `vehicle_name` varchar(555) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `vehicle_no` varchar(55) NOT NULL,
  `starting_km` varchar(55) NOT NULL,
  `closing_km` varchar(55) NOT NULL,
  `total_km` varchar(55) NOT NULL,
  `starting_date` date NOT NULL,
  `closing_date` date NOT NULL,
  `starting_time` varchar(55) NOT NULL,
  `closing_time` varchar(55) NOT NULL,
  `total_time` varchar(555) NOT NULL,
  `totalhour` varchar(55) NOT NULL,
  `charging_type` varchar(55) NOT NULL,
  `tool_gate` varchar(55) NOT NULL,
  `parking` varchar(55) NOT NULL,
  `driver_f_charge` varchar(50) NOT NULL,
  `other_charge` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `extra_hour` varchar(55) NOT NULL,
  `extrahour_price` varchar(55) NOT NULL,
  `extra_hour_totalprice` varchar(55) NOT NULL,
  `totaldetaintion` varchar(55) NOT NULL,
  `detaintioncharge` varchar(55) NOT NULL,
  `totaldetaintioncharge` varchar(55) NOT NULL,
  `night_halt` varchar(55) NOT NULL,
  `night_halt_charge` varchar(55) NOT NULL,
  `total_night_halt_charge` varchar(55) NOT NULL,
  `kmforlitre` varchar(55) NOT NULL,
  `fuel_rate` varchar(55) NOT NULL,
  `totalfulerate` varchar(55) NOT NULL,
  `perdaycharge` varchar(55) NOT NULL,
  `priceper_km` varchar(55) NOT NULL,
  `totalpriceperkm` varchar(55) NOT NULL,
  `amount` varchar(55) NOT NULL,
  `total_adv` varchar(55) NOT NULL,
  `total_amount` varchar(55) NOT NULL,
  `py_amount` varchar(50) NOT NULL,
  `du_amount` varchar(50) NOT NULL,
  `remark` varchar(555) NOT NULL,
  `corporate_id` int(11) NOT NULL,
  `corporate_name` varchar(55) NOT NULL,
  `bill` varchar(55) NOT NULL,
  `cgst` varchar(55) NOT NULL,
  `sgat` varchar(55) NOT NULL,
  `withoutgst` varchar(55) NOT NULL,
  `withgst` varchar(55) NOT NULL,
  `taxamount` varchar(55) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `withouttooltax` varchar(55) NOT NULL,
  `withoutadvance` varchar(55) NOT NULL,
  `total_per_day_charge` varchar(55) NOT NULL,
  `days` varchar(55) NOT NULL,
  `fixedprice` varchar(55) NOT NULL,
  `fixedextrahour` varchar(55) NOT NULL,
  `fixedextrahourprice` varchar(55) NOT NULL,
  `fixedtotal_extra_hour_price` varchar(55) NOT NULL,
  `fixedextrakm` varchar(55) NOT NULL,
  `fixed_extrakm_price` varchar(55) NOT NULL,
  `fixedextrakmtotalprice` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate_bill_client`
--

INSERT INTO `corporate_bill_client` (`id`, `duty_slip_no`, `ownerslipno`, `duty_date`, `journey_from`, `journey_to`, `vehicle_name`, `vehicle_id`, `vehicle_no`, `starting_km`, `closing_km`, `total_km`, `starting_date`, `closing_date`, `starting_time`, `closing_time`, `total_time`, `totalhour`, `charging_type`, `tool_gate`, `parking`, `driver_f_charge`, `other_charge`, `description`, `extra_hour`, `extrahour_price`, `extra_hour_totalprice`, `totaldetaintion`, `detaintioncharge`, `totaldetaintioncharge`, `night_halt`, `night_halt_charge`, `total_night_halt_charge`, `kmforlitre`, `fuel_rate`, `totalfulerate`, `perdaycharge`, `priceper_km`, `totalpriceperkm`, `amount`, `total_adv`, `total_amount`, `py_amount`, `du_amount`, `remark`, `corporate_id`, `corporate_name`, `bill`, `cgst`, `sgat`, `withoutgst`, `withgst`, `taxamount`, `year`, `month`, `creation_date`, `status`, `withouttooltax`, `withoutadvance`, `total_per_day_charge`, `days`, `fixedprice`, `fixedextrahour`, `fixedextrahourprice`, `fixedtotal_extra_hour_price`, `fixedextrakm`, `fixed_extrakm_price`, `fixedextrakmtotalprice`) VALUES
(225, 100, 0, '2019-01-30', '.mbbh', 'khh', 'baleno', 1, '7675', '100', '1000', '900', '2019-01-30', '2019-01-30', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', '1.7', 'Local', '100', '100', '', '', '', '0', '0', '0.00', '', '', '', '10', '10', '100.00', '10', '10', '900', '10', '', '', '1300.00', '100.00', '1200', '', '', '', 11, 'sukanta', '100', '2.5', '2.5', '1200', '1260', '60', 2019, 1, '2019-01-30 22:51:33', 1, '1100', '1300', '100', '10', '', '', '', '', '', '', ''),
(226, 199, 0, '2019-01-31', 'jkghjg', 'ggjg', 'baleno', 1, '7675', '100', '200', '100', '2019-01-31', '2019-01-31', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', '1.7', 'Local', '0', '0', '', '', '', '0', '0', '0.00', '', '', '', '0', '0', '0.00', '10', '10', '100', '100', '', '', '200.00', '100.00', '100', '', '', '', 12, 'pushpak', '199', '2.5', '2.5', '100', '105', '5', 2019, 1, '2019-01-31 13:32:22', 1, '100', '200', '100', '0', '', '', '', '', '', '', ''),
(227, 200, 0, '2019-01-31', 'kghjhg', 'jfhgf', 'baleno', 1, '7675', '100', '200', '100', '2019-01-31', '2019-01-31', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', '1.7', 'Local', '100', '100', '', '', '', '0', '0', '0.00', '', '', '', '0', '0', '0.00', '10', '10', '100', '10', '', '', '310.00', '100.00', '210', '', '', '', 12, 'pushpak', '200', '2.5', '2.5', '210', '220.5', '10.5', 2019, 1, '2019-01-31 13:34:38', 1, '110', '310', '10', '0', '', '', '', '', '', '', ''),
(228, 201, 0, '2019-01-31', 'hyyugt', 'ytyujtut', 'baleno', 1, '7675', '100', '150', '50', '2019-01-31', '2019-01-31', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', '1.7', 'Local', '100', '100', '', '', '', '0', '0', '0.00', '', '', '', '0', '0', '0.00', '10', '10', '50', '10', '', '', '260.00', '100.00', '160', '', '', 'sdfsd', 12, 'pushpak', '201', '2.5', '2.5', '160', '168', '8', 2019, 1, '2019-01-31 13:39:20', 1, '60', '260', '10', '0', '', '', '', '', '', '', ''),
(229, 201, 0, '2019-01-31', 'hyyugt', 'ytyujtut', 'baleno', 1, '7675', '100', '150', '50', '2019-01-31', '2019-01-31', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', '1.7', 'Local', '100', '100', '', '', '', '0', '0', '0.00', '', '', '', '0', '0', '0.00', '10', '10', '50', '10', '', '', '260.00', '100.00', '160', '', '', 'sdfsd', 12, 'pushpak', '201', '2.5', '2.5', '160', '168', '8', 2019, 1, '2019-01-31 13:40:27', 1, '60', '260', '10', '0', '', '', '', '', '', '', ''),
(230, 201, 0, '2019-01-31', 'hyyugt', 'ytyujtut', 'baleno', 1, '7675', '100', '150', '50', '2019-01-31', '2019-01-31', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', '1.7', 'Local', '100', '100', '', '', '', '0', '0', '0.00', '', '', '', '0', '0', '0.00', '10', '10', '50', '10', '', '', '260.00', '100.00', '160', '', '', 'sdfsd', 12, 'pushpak', '201', '2.5', '2.5', '160', '168', '8', 2019, 1, '2019-01-31 13:42:19', 1, '60', '260', '10', '0', '', '', '', '', '', '', ''),
(231, 201, 0, '2019-01-31', 'hyyugt', 'ytyujtut', 'baleno', 0, '7675', '100', '150', '50', '2019-01-31', '2019-01-31', '08:56', '10:36', '', '1.7', 'Local', '100', '100', '', '', '', '0', '0', '0.00', '', '', '', '0', '0', '0.00', '10', '10', '50', '10', '1000', '50000.00', '20300', '100', '20200', '', '', 'sdfsd', 12, 'pushpak', '201', '2.5', '2.5', '20200', '21210', '1010', 2019, 1, '2019-01-31 13:53:07', 1, '20100', '20300', '', '', '100', '100', '100', '10000', '100', '100', '10000'),
(232, 201, 0, '2019-01-31', 'hyyugt', 'ytyujtut', 'baleno', 0, '7675', '100', '150', '50', '2019-01-31', '2019-01-31', '08:56', '10:36', '', '1.7', 'Local', '100', '100', '', '', '', '0', '0', '0.00', '', '', '', '0', '0', '0.00', '10', '10', '50', '10', '1000', '50000.00', '20300', '100', '20200', '', '', 'sdfsd', 12, 'pushpak', '201', '2.5', '2.5', '20200', '21210', '1010', 2019, 1, '2019-01-31 13:54:34', 1, '20100', '20300', '', '', '100', '100', '100', '10000', '100', '100', '10000'),
(233, 202, 0, '2019-01-31', 'jgjhfgjy', 'jgf', 'baleno', 1, '7675', '100', '200', '100', '2019-01-31', '2019-01-31', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', '1.7', 'Local', '100', '100', '', '', '', '0', '0', '0.00', '', '', '', '1', '0', '0.00', '10', '10', '100', '10', '', '', '310.00', '100.00', '210', '', '', '', 12, 'pushpak', '202', '2.5', '2.5', '210', '220.5', '10.5', 2019, 1, '2019-01-31 13:59:28', 1, '110', '310', '10', '1', '', '', '', '', '', '', ''),
(234, 167, 0, '2019-02-02', 'jhkjgjg', 'jfghf', 'baleno', 1, '7675', '100', '200', '100', '2019-02-02', '2019-02-02', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', '1.7', 'Local', '100', '100', '', '', '', '0', '0', '0.00', '', '', '', '0', '0', '0.00', '100', '10', '10', '100', '', '', '310.00', '100.00', '210', '', '', '', 11, 'sukanta', '167', '2.5', '2.5', '210', '220.5', '10.5', 2019, 2, '2019-02-02 14:38:29', 1, '110', '310', '100', '0', '', '', '', '', '', '', ''),
(235, 9439, 0, '2019-02-05', 'place start', 'place end', 'kiwi', 4, 'OdFAFA', '100', '200', '100', '2019-02-05', '2019-02-05', '08:56', '19:36', '0 days : 10 hours : 40 minutes : 0 seconds', '10.7', 'Fixed', '1000', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1900', '100', '1800', '', '', '', 18, 'corname', '9439', '2.5', '2.5', '1800', '1890', '90', 2019, 2, '2019-02-05 21:52:02', 1, '800', '1900', '', '0', '100', '2', '100', '200', '5', '100', '500'),
(236, 6666, 0, '2019-02-06', 'hghjg', 'hghjg', 'kiwi', 4, 'OdFAFA', '100', '500', '400', '2019-02-06', '2019-02-06', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', '1.7', 'Long', '100', '100', '877', '877', 'jay', '', '', '', '-6.3', '10', '-63.00', '0', '10', '0.00', '', '', '', '', '10', '4000.00', '5891.00', '0.00', '5891', '', '', '', 18, 'corname', '6666', '2.5', '2.5', '5891', '6185.55', '294.55', 2019, 2, '2019-02-06 10:40:50', 1, '5791', '5891', '', '0', '', '', '', '', '', '', ''),
(237, 344, 0, '2019-02-06', 'place from new', 'place end new', 'kiwi', 4, 'OdFAFA', '100', '300', '200', '2019-02-06', '2019-02-06', '08:56', '13:36', '0 days : 4 hours : 40 minutes : 0 seconds', '4.7', 'Long', '500', '500', '100', '100', 'new jay', '', '', '', '0.7', '50', '35.00', '1', '100', '100.00', '', '', '', '', '100', '20000.00', '21335.00', '0.00', '21335', '', '', '', 18, 'corname', '344', '2.5', '2.5', '21335', '22401.75', '1066.75', 2019, 2, '2019-02-06 11:06:32', 1, '20835', '21335', '', '0', '', '', '', '', '', '', ''),
(238, 350, 0, '2019-02-06', 'dggdgf', 'fdfgdg', 'kiwi', 4, 'OdFAFA', '100', '200', '100', '2019-02-06', '2019-02-06', '08:56', '11:36', '0 days : 2 hours : 40 minutes : 0 seconds', '2.7', 'Long', '100', '100', '100', '100', 'mst', '', '', '', '0.7', '100', '70.00', '0', '100', '0.00', '', '', '', '', '100', '10000.00', '10470.00', '0.00', '10470', '', '', '', 18, 'corname', '350', '2.5', '2.5', '10470', '10993.5', '523.5', 2019, 2, '2019-02-06 11:14:03', 1, '10370', '10470', '', '0', '', '', '', '', '', '', ''),
(239, 9439, 0, '2019-02-05', 'place start', 'place end', 'kiwi', 4, 'OdFAFA', '100', '200', '100', '2019-02-05', '2019-02-05', '08:56', '19:36', '0 days : 10 hours : 40 minutes : 0 seconds', '10.7', 'Fixed', '1000', '100', '100', '100', 'mst', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '21400', '100', '21300', '', '', '', 18, 'corname', '9439', '2.5', '2.5', '21300', '22365', '1065', 2019, 2, '2019-02-06 11:18:53', 1, '20300', '21400', '', '0', '100', '100', '100', '10000', '100', '100', '10000'),
(240, 7001, 0, '2019-02-07', 'jktguyt', 'uytuytu', 'kiwi', 4, 'OdFAFA', '100', '200', '100', '2019-02-07', '2019-02-07', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', '1.7', 'Local', '100', '100', '100', '100', '100', '0', '10', '0.00', '', '', '', '0', '10', '0.00', '10', '10', '100', '10', '', '', '510.00', '100.00', '410', '', '', '', 18, 'corname', '7001', '2.5', '2.5', '410', '430.5', '20.5', 2019, 2, '2019-02-07 11:27:54', 1, '310', '510', '10', '1', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_coustomer_payment_slip`
--

CREATE TABLE `corporate_coustomer_payment_slip` (
  `id` bigint(30) NOT NULL,
  `duty_slip_no` varchar(20) NOT NULL,
  `duty_date` varchar(50) NOT NULL,
  `place_from` varchar(256) NOT NULL,
  `journey_to` varchar(50) NOT NULL,
  `booked_by` varchar(256) NOT NULL,
  `customer_gst` varchar(255) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `vehicle_no` varchar(20) NOT NULL,
  `starting_km` varchar(20) NOT NULL,
  `closing_km` varchar(20) NOT NULL,
  `total_km` varchar(20) NOT NULL,
  `starting_time` varchar(50) NOT NULL,
  `closing_time` varchar(50) NOT NULL,
  `total_time` varchar(50) NOT NULL,
  `charging_type` varchar(30) NOT NULL,
  `fixed_price_f` varchar(50) NOT NULL,
  `extra_hour_new_f` varchar(50) NOT NULL,
  `extra_hour_price_f` varchar(50) NOT NULL,
  `t_e_h_p_f` varchar(50) NOT NULL,
  `extra_km_f` varchar(50) NOT NULL,
  `extra_km_price_f` varchar(50) NOT NULL,
  `t_extra_km_price_f` varchar(50) NOT NULL,
  `extra_hour` varchar(50) NOT NULL,
  `extrahour_price` varchar(100) NOT NULL,
  `night_halt` varchar(50) NOT NULL,
  `tool_gate` varchar(50) NOT NULL,
  `parking` varchar(50) NOT NULL,
  `driver_f_charge` varchar(50) NOT NULL,
  `other_charge` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `kmforlitre` varchar(30) NOT NULL,
  `day_basic` varchar(50) NOT NULL,
  `fuel_rate` varchar(50) NOT NULL,
  `priceper_km` varchar(30) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `day_charge` varchar(50) NOT NULL,
  `detaintion` varchar(100) NOT NULL,
  `advance_office` varchar(50) NOT NULL,
  `advance_guest` varchar(50) NOT NULL,
  `total_adv` varchar(30) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `py_amount` varchar(50) NOT NULL,
  `du_amount` varchar(50) DEFAULT NULL,
  `detaintion_hour` varchar(100) NOT NULL,
  `detaintion_charges` varchar(100) NOT NULL,
  `remark` varchar(30) NOT NULL,
  `noofnight_halt` int(11) NOT NULL,
  `status` int(4) NOT NULL DEFAULT '1',
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ref_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate_coustomer_payment_slip`
--

INSERT INTO `corporate_coustomer_payment_slip` (`id`, `duty_slip_no`, `duty_date`, `place_from`, `journey_to`, `booked_by`, `customer_gst`, `vehicle_name`, `vehicle_no`, `starting_km`, `closing_km`, `total_km`, `starting_time`, `closing_time`, `total_time`, `charging_type`, `fixed_price_f`, `extra_hour_new_f`, `extra_hour_price_f`, `t_e_h_p_f`, `extra_km_f`, `extra_km_price_f`, `t_extra_km_price_f`, `extra_hour`, `extrahour_price`, `night_halt`, `tool_gate`, `parking`, `driver_f_charge`, `other_charge`, `description`, `kmforlitre`, `day_basic`, `fuel_rate`, `priceper_km`, `amount`, `day_charge`, `detaintion`, `advance_office`, `advance_guest`, `total_adv`, `total_amount`, `py_amount`, `du_amount`, `detaintion_hour`, `detaintion_charges`, `remark`, `noofnight_halt`, `status`, `creationDate`, `ref_no`) VALUES
(57, '7656', '2019-02-26', 'hghjg', 'ghgfhf', 'fgfhf', 'jghg', 'big', 'bhghg', '69', '6766', '6697', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', 'long', '', '', '', '', '', '', '', '', '0', '1000', '100', '100', '100', '100', 'mggff', '', '', '100', '100', '669700', '', '', '0.00', '0.00', '0.00', '684400', '684400', '0', '133', '13300', 'hgj', 10, 1, '2019-02-26 07:15:06', '');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_info`
--

CREATE TABLE `corporate_info` (
  `id` int(11) NOT NULL,
  `corporate_id` int(11) NOT NULL,
  `corporate_name` varchar(50) NOT NULL,
  `total_km` varchar(50) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `paid_amount` varchar(50) NOT NULL,
  `payble_amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate_info`
--

INSERT INTO `corporate_info` (`id`, `corporate_id`, `corporate_name`, `total_km`, `total_amount`, `paid_amount`, `payble_amount`) VALUES
(10, 11, 'sukanta', '1000', '1610', '200', '1410'),
(11, 12, 'pushpak', '300', '41110', '300', '40710'),
(12, 18, 'corname', '1000', '61506', '300', '61206');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_owner_payment_slip`
--

CREATE TABLE `corporate_owner_payment_slip` (
  `id` bigint(30) NOT NULL,
  `duty_slip_no` varchar(20) NOT NULL,
  `duty_date` varchar(50) NOT NULL,
  `place_from` varchar(256) NOT NULL,
  `journey_to` varchar(50) NOT NULL,
  `booked_by` varchar(256) NOT NULL,
  `customer_gst` varchar(255) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `vehicle_no` varchar(20) NOT NULL,
  `starting_km` varchar(20) NOT NULL,
  `closing_km` varchar(20) NOT NULL,
  `total_km` varchar(20) NOT NULL,
  `starting_time` varchar(50) NOT NULL,
  `closing_time` varchar(50) NOT NULL,
  `total_time` varchar(50) NOT NULL,
  `charging_type` varchar(30) NOT NULL,
  `fixed_price_f` varchar(50) NOT NULL,
  `extra_hour_new_f` varchar(50) NOT NULL,
  `extra_hour_price_f` varchar(50) NOT NULL,
  `t_e_h_p_f` varchar(50) NOT NULL,
  `extra_km_f` varchar(50) NOT NULL,
  `extra_km_price_f` varchar(50) NOT NULL,
  `t_extra_km_price_f` varchar(50) NOT NULL,
  `extra_hour` varchar(50) NOT NULL,
  `extrahour_price` varchar(100) NOT NULL,
  `night_halt` varchar(50) NOT NULL,
  `tool_gate` varchar(50) NOT NULL,
  `parking` varchar(50) NOT NULL,
  `driver_f_charge` varchar(50) NOT NULL,
  `other_charge` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `kmforlitre` varchar(30) NOT NULL,
  `day_basic` varchar(50) NOT NULL,
  `fuel_rate` varchar(50) NOT NULL,
  `priceper_km` varchar(30) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `day_charge` varchar(50) NOT NULL,
  `detaintion` varchar(100) NOT NULL,
  `advance_office` varchar(50) NOT NULL,
  `advance_guest` varchar(50) NOT NULL,
  `total_adv` varchar(30) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `py_amount` varchar(50) NOT NULL,
  `du_amount` varchar(50) DEFAULT NULL,
  `detaintion_hour` varchar(100) NOT NULL,
  `detaintion_charges` varchar(100) NOT NULL,
  `remark` varchar(30) NOT NULL,
  `noofnight_halt` int(11) NOT NULL,
  `status` int(4) NOT NULL DEFAULT '1',
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ref_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate_owner_payment_slip`
--

INSERT INTO `corporate_owner_payment_slip` (`id`, `duty_slip_no`, `duty_date`, `place_from`, `journey_to`, `booked_by`, `customer_gst`, `vehicle_name`, `vehicle_no`, `starting_km`, `closing_km`, `total_km`, `starting_time`, `closing_time`, `total_time`, `charging_type`, `fixed_price_f`, `extra_hour_new_f`, `extra_hour_price_f`, `t_e_h_p_f`, `extra_km_f`, `extra_km_price_f`, `t_extra_km_price_f`, `extra_hour`, `extrahour_price`, `night_halt`, `tool_gate`, `parking`, `driver_f_charge`, `other_charge`, `description`, `kmforlitre`, `day_basic`, `fuel_rate`, `priceper_km`, `amount`, `day_charge`, `detaintion`, `advance_office`, `advance_guest`, `total_adv`, `total_amount`, `py_amount`, `du_amount`, `detaintion_hour`, `detaintion_charges`, `remark`, `noofnight_halt`, `status`, `creationDate`, `ref_no`) VALUES
(7, '345', '2019-02-26', 'hghjg', 'gfhfh', 'cvxc', '675gfhgf', 'big', 'ffhhh', '200', '800', '600', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', 'long', '', '', '', '', '', '', '', '', '0', '1000', '100', '100', '100', '100', 'jhhkjh', '', '', '100', '100', '60000', '', '', '0.00', '0.00', '0.00', '61400', '61400', '0', '', '', '7676778', 10, 1, '2019-02-26 07:53:06', '');

-- --------------------------------------------------------

--
-- Table structure for table `cor_carcharges_owner`
--

CREATE TABLE `cor_carcharges_owner` (
  `id` int(50) NOT NULL,
  `vehicle_id` varchar(100) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `charging_type` varchar(100) NOT NULL,
  `day_charge` varchar(100) NOT NULL,
  `night_holt_charge` varchar(100) NOT NULL,
  `km_cover_in_one_litre` varchar(100) NOT NULL,
  `extra_hour_charges` varchar(100) NOT NULL,
  `price_per_km` varchar(100) NOT NULL,
  `detaintion_charges` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cor_carcharges_owner`
--

INSERT INTO `cor_carcharges_owner` (`id`, `vehicle_id`, `vehicle_name`, `charging_type`, `day_charge`, `night_holt_charge`, `km_cover_in_one_litre`, `extra_hour_charges`, `price_per_km`, `detaintion_charges`, `status`) VALUES
(33, '23', 'sdf', 'long', '', '100', '', '', '100', '', ''),
(34, '24', 'kuku', 'local', '100', '100', '100', '100', '', '', ''),
(35, '22', 'jljjhj', 'fixed', '', '', '10', '10', '10', '', ''),
(36, '26', 'santi', 'long', '', '100', '', '', '100', '', ''),
(37, '26', 'santi', 'long', '', '100', '', '', '100', '', ''),
(38, '27', 'kmm', 'long', '', '100', '', '', '100', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cor_coustomer_carcharges`
--

CREATE TABLE `cor_coustomer_carcharges` (
  `id` int(50) NOT NULL,
  `vehicle_id` varchar(100) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `charging_type` varchar(100) NOT NULL,
  `day_charge` varchar(100) NOT NULL,
  `night_holt_charge` varchar(100) NOT NULL,
  `km_cover_in_one_litre` varchar(100) NOT NULL,
  `extra_hour_charges` varchar(100) NOT NULL,
  `price_per_km` varchar(100) NOT NULL,
  `detaintion_charges` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cor_coustomer_carcharges`
--

INSERT INTO `cor_coustomer_carcharges` (`id`, `vehicle_id`, `vehicle_name`, `charging_type`, `day_charge`, `night_holt_charge`, `km_cover_in_one_litre`, `extra_hour_charges`, `price_per_km`, `detaintion_charges`, `status`) VALUES
(24, '23', 'sdf', 'local', '100', '100', '100', '1000', '', '', ''),
(25, '23', 'sdf', 'long', '', '100', '', '', '100', '100', ''),
(26, '28', 'uuuu', 'long', '', '100', '', '', '1100', '100', ''),
(27, '26', 'santi', 'long', '', '100', '', '', '100', '100', '');

-- --------------------------------------------------------

--
-- Table structure for table `coustomer`
--

CREATE TABLE `coustomer` (
  `id` int(11) NOT NULL,
  `cos_name` varchar(50) NOT NULL,
  `cos_adress` varchar(50) NOT NULL,
  `cos_number` varchar(50) NOT NULL,
  `cos_gst` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coustomer`
--

INSERT INTO `coustomer` (`id`, `cos_name`, `cos_adress`, `cos_number`, `cos_gst`) VALUES
(10, 'Tarni Travels', 'sahidnagar', '9437276713', 'GSTIN NUMBER'),
(11, 'kuku', 'bhubaneswar', '9658909100', 'fazps877'),
(12, 'Syrya sir', 'bbsr', '9437276713', 'FAXSPS3214'),
(13, 'zczd', 'asd', 'asd', 'asd'),
(14, 'sailendu sir', 'gdp colony', '88888989', 'gst8866hg'),
(15, 'shyam', 'bbsr', '76765765675', 'gstgg8786'),
(16, 'sarfaraj', 'baleswar', '5678568', 'fghfg5675'),
(18, 'surendra kumar sahoo', 'satyanagar', '9437464677', 'qwertyuiop'),
(19, 'Amit Kumar  Sahoo', 'bhubaneswar', '767', '6764');

-- --------------------------------------------------------

--
-- Table structure for table `coustomer_prusrty`
--

CREATE TABLE `coustomer_prusrty` (
  `id` int(11) NOT NULL,
  `coustomer_name` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `coustomer_date` varchar(50) NOT NULL,
  `coustomer_address` varchar(50) NOT NULL,
  `coustomer_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customercarcharges`
--

CREATE TABLE `customercarcharges` (
  `id` int(50) NOT NULL,
  `vehicle_id` varchar(100) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `charging_type` varchar(100) NOT NULL,
  `day_charge` varchar(100) NOT NULL,
  `night_holt_charge` varchar(100) NOT NULL,
  `km_cover_in_one_litre` varchar(100) NOT NULL,
  `fixed_price` varchar(50) NOT NULL,
  `extra_hour_charges` varchar(100) NOT NULL,
  `extra_km_charges` varchar(50) NOT NULL,
  `price_per_km` varchar(100) NOT NULL,
  `detaintion_charges` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customercarcharges`
--

INSERT INTO `customercarcharges` (`id`, `vehicle_id`, `vehicle_name`, `charging_type`, `day_charge`, `night_holt_charge`, `km_cover_in_one_litre`, `fixed_price`, `extra_hour_charges`, `extra_km_charges`, `price_per_km`, `detaintion_charges`, `status`) VALUES
(18, '50', 'BOLERO', 'long', '', '2000', '', '', '', '', '2000', '2000', ''),
(19, '50', 'BOLERO', 'daybasic', '2000', '2000', '20000', '', '20000', '10000', '', '', ''),
(20, '50', 'BOLERO', 'fixed', '', '', '', '20000', '', '', '', '', ''),
(21, '48', 'sapharie', 'daybasic', '1000', '1000', '1000', '', '1000', '1000', '', '', ''),
(22, '49', 'asdasd', 'daybasic', '100', '100', '8', '', '10', '100', '', '', ''),
(25, '51', 'HondaCity', 'fixed', '', '', '', '1900', '', '', '', '', ''),
(26, '52', 'maruti', 'long', '', '100', '', '', '', '', '10', '20', ''),
(27, '52', 'maruti', 'fixed', '', '', '', '2000', '', '', '', '', ''),
(28, '52', 'maruti', 'daybasic', '1000', '400', '10', '', '100', '10', '', '', ''),
(66, '48', 'sapharie', '', '', '11', '', '', '', '', '', '', ''),
(67, '48', 'sapharie', 'long', '', '12', '', '', '', '', '', '', ''),
(68, '48', 'sapharie', 'daybasic', 'asad', 'asd', 'asd', '', 'asd', 'asd', '', '', ''),
(78, '48', 'sapharie', 'long', '', '10000', '', '', '', '', '10000', '1000', ''),
(79, '48', 'sapharie', 'daybasic', '', '', '', '', '', '', '', '', ''),
(80, '48', 'sapharie', 'daybasic', '10000', '100000', '10000', '', '100000', '1000000', '', '', ''),
(81, '48', 'sapharie', 'fixed', '', '', '', '1000', '', '', '', '', ''),
(82, '53', 'volkswagen', 'long', '', '2', '', '', '', '', '2', '2', ''),
(83, '53', 'volkswagen', 'daybasic', '2', '2', '2', '', '2', '2', '', '', ''),
(84, '53', 'volkswagen', 'fixed', '', '', '', '2', '', '', '', '', ''),
(85, '54', 'ABCDEFGH', 'long', '', '100', '', '', '', '', '10', '20', ''),
(86, '54', 'ABCDEFGH', 'daybasic', '1000', '100', '8', '', '100', '10', '', '', ''),
(87, '54', 'ABCDEFGH', 'fixed', '', '', '', '1000', '', '', '', '', ''),
(88, '49', 'asdasd', 'long', '', 'VRGVR', '', '', '', '', 'BGTHT', 'BHTHT', ''),
(89, '49', 'asdasd', 'long', '', 'VRGVR', '', '', '', '', 'BGTHT', 'BHTHT', ''),
(91, '48', 'sapharie', 'long', '', '100', '', '', '', '', '100', '100', ''),
(92, '48', 'sapharie', 'daybasic', 'fhfg', 'hghgh', 'dfh', '', 'fgh', 'ghfgh', '', '', ''),
(93, '48', 'sapharie', 'daybasic', 'fhfg', 'hghgh', 'dfh', '', 'fgh', 'ghfgh', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_payment`
--

CREATE TABLE `customer_payment` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(555) NOT NULL,
  `name` varchar(555) NOT NULL,
  `amount` varchar(555) NOT NULL,
  `address` varchar(555) NOT NULL,
  `date` date NOT NULL,
  `vehicle_no` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_payment`
--

INSERT INTO `customer_payment` (`id`, `bill_no`, `name`, `amount`, `address`, `date`, `vehicle_no`) VALUES
(1, '9', '', '9500', '', '2019-01-11', 'OD-01-S1234'),
(2, '456', '', '10333', '', '2019-01-11', 'OD-01T-1235'),
(3, '101', '', '18867', '', '2019-01-18', 'OD 02 AA 1111'),
(4, '9012', '', '202', '', '2019-01-18', '2501'),
(5, '1205', '', '522', '', '2019-01-18', 'OD-01T-1235'),
(6, '5699', '', '202', '', '2019-01-18', 'OD-01T-1235'),
(7, '5699', '', '202', '', '2019-01-18', 'OD-01T-1235'),
(8, '4', '', '204', '', '2019-01-18', 'OD-01-T1234'),
(9, '5555', '', '10840', '', '2019-01-23', 'OD 02 5555'),
(10, '2000', '', '9100', '', '2019-01-26', '7675'),
(11, '1080', '', '120', '', '2019-01-28', '7675'),
(12, '399', '', '400', '', '2019-01-29', '7675'),
(13, '912', '', '220', '', '2019-01-30', '7675'),
(14, '106', '', '10', '', '2019-01-30', '7675'),
(15, '9658', '', '1110', '', '2019-01-30', '7675'),
(16, '7008', '', '1200', '', '2019-01-30', '7675'),
(17, '106', '', '200', '', '2019-01-30', '7675'),
(18, '106', '', '200', '', '2019-01-30', '7675'),
(19, '106', '', '300', '', '2019-01-30', '7675'),
(20, '106', '', '1010', '', '2019-01-30', '7675'),
(21, '109', '', '1910', '', '2019-01-30', '7675'),
(22, '109', '', '1910', '', '2019-01-30', '7675'),
(23, '109', '', '1910', '', '2019-01-30', '7675'),
(24, '109', '', '1910', '', '2019-01-30', '7675'),
(25, '110', '', '200', '', '2019-01-30', '7675'),
(26, '109', '', '1910', '', '2019-01-30', '7675'),
(27, '109', '', '1910', '', '2019-01-30', '7675'),
(28, '109', '', '1910', '', '2019-01-30', '7675'),
(29, '109', '', '1910', '', '2019-01-30', '7675'),
(30, '109', '', '1910', '', '2019-01-30', '7675'),
(31, '110', '', '200', '', '2019-01-30', '7675'),
(32, '110', '', '200', '', '2019-01-30', '7675'),
(33, '110', '', '200', '', '2019-01-30', '7675'),
(34, '110', '', '200', '', '2019-01-30', '7675'),
(35, '27', '', '300', '', '2019-01-30', '7675'),
(36, '27', '', '300', '', '2019-01-30', '7675'),
(37, '27', '', '300', '', '2019-01-30', '7675'),
(38, '27', '', '300', '', '2019-01-30', '7675'),
(39, '27', '', '300', '', '2019-01-30', '7675'),
(40, '27', '', '300', '', '2019-01-30', '7675'),
(41, '27', '', '300', '', '2019-01-30', '7675'),
(42, '27', '', '300', '', '2019-01-30', '7675'),
(43, '27', '', '300', '', '2019-01-30', '7675'),
(44, '27', '', '300', '', '2019-01-30', '7675'),
(45, '27', '', '300', '', '2019-01-30', '7675'),
(46, '27', '', '300', '', '2019-01-30', '7675'),
(47, '27', '', '300', '', '2019-01-30', '7675'),
(48, '27', '', '300', '', '2019-01-30', '7675'),
(49, '27', '', '300', '', '2019-01-30', '7675'),
(50, '27', '', '300', '', '2019-01-30', '7675'),
(51, '113', '', '1200', '', '2019-01-30', '7675'),
(52, '100', '', '1200', '', '2019-01-30', '7675'),
(53, '199', '', '100', '', '2019-01-31', '7675'),
(54, '200', '', '210', '', '2019-01-31', '7675'),
(55, '201', '', '160', '', '2019-01-31', '7675'),
(56, '201', '', '160', '', '2019-01-31', '7675'),
(57, '201', '', '160', '', '2019-01-31', '7675'),
(58, '201', '', '20200', '', '2019-01-31', '7675'),
(59, '201', '', '20200', '', '2019-01-31', '7675'),
(60, '202', '', '210', '', '2019-01-31', '7675'),
(61, '167', '', '210', '', '2019-02-02', '7675'),
(62, '9439', '', '1800', '', '2019-02-05', 'OdFAFA'),
(63, '6666', '', '5891', '', '2019-02-06', 'OdFAFA'),
(64, '344', '', '21335', '', '2019-02-06', 'OdFAFA'),
(65, '350', '', '10470', '', '2019-02-06', 'OdFAFA'),
(66, '9439', '', '21300', '', '2019-02-06', 'OdFAFA'),
(67, '7001', '', '410', '', '2019-02-07', 'OdFAFA');

-- --------------------------------------------------------

--
-- Table structure for table `customer_payment_slip`
--

CREATE TABLE `customer_payment_slip` (
  `id` bigint(30) NOT NULL,
  `duty_slip_no` varchar(20) NOT NULL,
  `duty_date` varchar(50) NOT NULL,
  `place_from` varchar(256) NOT NULL,
  `journey_to` varchar(50) NOT NULL,
  `booked_by` varchar(256) NOT NULL,
  `customer_gst` varchar(255) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `vehicle_no` varchar(20) NOT NULL,
  `starting_km` varchar(20) NOT NULL,
  `closing_km` varchar(20) NOT NULL,
  `total_km` varchar(20) NOT NULL,
  `starting_time` varchar(50) NOT NULL,
  `closing_time` varchar(50) NOT NULL,
  `total_time` varchar(50) NOT NULL,
  `charging_type` varchar(30) NOT NULL,
  `fixed_price_f` varchar(50) NOT NULL,
  `extra_hour_new_f` varchar(50) NOT NULL,
  `extra_hour_price_f` varchar(50) NOT NULL,
  `t_e_h_p_f` varchar(50) NOT NULL,
  `extra_km_f` varchar(50) NOT NULL,
  `extra_km_price_f` varchar(50) NOT NULL,
  `t_extra_km_price_f` varchar(50) NOT NULL,
  `extra_hour` varchar(50) NOT NULL,
  `extrahour_price` varchar(100) NOT NULL,
  `night_halt` varchar(50) NOT NULL,
  `tool_gate` varchar(50) NOT NULL,
  `parking` varchar(50) NOT NULL,
  `driver_f_charge` varchar(50) NOT NULL,
  `other_charge` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `kmforlitre` varchar(30) NOT NULL,
  `day_basic` varchar(50) NOT NULL,
  `fuel_rate` varchar(50) NOT NULL,
  `priceper_km` varchar(30) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `day_charge` varchar(50) NOT NULL,
  `detaintion` varchar(100) NOT NULL,
  `advance_office` varchar(50) NOT NULL,
  `advance_guest` varchar(50) NOT NULL,
  `total_adv` varchar(30) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `py_amount` varchar(50) NOT NULL,
  `du_amount` varchar(50) DEFAULT NULL,
  `detaintion_hour` varchar(100) NOT NULL,
  `detaintion_charges` varchar(100) NOT NULL,
  `remark` varchar(30) NOT NULL,
  `noofnight_halt` int(11) NOT NULL,
  `status` int(4) NOT NULL DEFAULT '1',
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ref_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_payment_slip`
--

INSERT INTO `customer_payment_slip` (`id`, `duty_slip_no`, `duty_date`, `place_from`, `journey_to`, `booked_by`, `customer_gst`, `vehicle_name`, `vehicle_no`, `starting_km`, `closing_km`, `total_km`, `starting_time`, `closing_time`, `total_time`, `charging_type`, `fixed_price_f`, `extra_hour_new_f`, `extra_hour_price_f`, `t_e_h_p_f`, `extra_km_f`, `extra_km_price_f`, `t_extra_km_price_f`, `extra_hour`, `extrahour_price`, `night_halt`, `tool_gate`, `parking`, `driver_f_charge`, `other_charge`, `description`, `kmforlitre`, `day_basic`, `fuel_rate`, `priceper_km`, `amount`, `day_charge`, `detaintion`, `advance_office`, `advance_guest`, `total_adv`, `total_amount`, `py_amount`, `du_amount`, `detaintion_hour`, `detaintion_charges`, `remark`, `noofnight_halt`, `status`, `creationDate`, `ref_no`) VALUES
(48, '7777', '2019-02-21', 'gjftufg', 'gugg', 'fhgfgh', '67868jhgj', 'big', 'bhghg', '100', '500', '400', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', 'fixed', '100', '100', '100', '10000', '100', '100', '10000', '', '0', '', '100', '100', '100', '100', 'jhjg', '', '', '100', '', '20100', '', '', '0.00', '0.00', '0.00', '20500', '100', '100', '', '', 'ugjik', 0, 1, '2019-02-21 09:57:06', ''),
(49, '88888', '2019-02-20', 'bhghg', 'ghg', 'fhgfhgf', '76686jgj', 'big', 'bhghg', '100', '500', '400', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', 'long', '', '', '', '', '', '', '', '', '0', '1000', '100', '100', '100', '100', '100', '', '', '100', '9', '3600', '', '', '100.00', '100.00', '100.00', '4970', '4970', '0', '7', '70', 'hau', 10, 1, '2019-02-21 10:12:15', ''),
(50, '6666', '2019-02-21', 'bjhjhhj', 'hghjgjh', 'hghjgjh', 'bvngv', 'big', 'bhghg', '100', '200', '100', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', 'local', '', '', '', '', '', '', '', '10', '0', '1000', '100', '100', '100', '100', 'nbbhgh', '100', '100', '100', '', '200', '100', '', '0.00', '0.00', '0', '1600', '1600', '0', '', '', '', 10, 1, '2019-02-21 13:29:34', ''),
(51, '7777', '2019-02-21', 'gjftufg', 'gugg', 'fhgfgh', '', 'big', 'bhghg', '100', '500', '400', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', 'fixed', '100', '100', '100', '10000', '100', '100', '10000', '', '0', '', '100', '100', '100', '100', 'jhjg', '', '', '100', '', '20100', '', '', '0.00', '0.00', '0.00', '20500', '20500', '0', '', '', 'hgj', 0, 1, '2019-02-21 13:31:51', ''),
(52, '7777', '2019-02-21', 'gjftufg', 'gugg', 'fhgfgh', '', 'big', 'bhghg', '100', '500', '400', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', 'fixed', '100', '100', '100', '10000', '100', '100', '10000', '', '0', '', '100', '100', '100', '100', 'jhjg', '', '', '100', '', '20100', '', '', '0.00', '0.00', '0.00', '20500', '20500', '0', '', '', 'hgj', 0, 1, '2019-02-21 13:32:59', ''),
(53, '7777', '2019-02-21', 'gjftufg', 'gugg', 'fhgfgh', '', 'big', 'bhghg', '100', '500', '400', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', 'fixed', '100', '100', '100', '10000', '100', '100', '10000', '', '0', '', '100', '100', '100', '100', 'jhjg', '', '', '100', '', '20100', '', '', '0.00', '0.00', '0.00', '20500', '20500', '0', '', '', 'hgj', 0, 1, '2019-02-21 13:34:34', ''),
(54, '7777', '2019-02-21', 'gjftufg', 'gugg', 'fhgfgh', '', 'big', 'bhghg', '100', '500', '400', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', 'fixed', '100', '100', '100', '10000', '100', '100', '10000', '', '0', '', '100', '100', '100', '100', 'jhjg', '', '', '100', '', '20100', '', '', '0.00', '0.00', '0.00', '20500', '20500', '0', '', '', 'hgj', 0, 1, '2019-02-21 13:34:58', ''),
(55, '88888', '2019-02-20', 'bhghg', 'ghg', 'fhgfhgf', '', 'big', 'bhghg', '100', '500', '400', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', 'long', '100', '100', '100', '10000', '100', '100', '10000', '', '0', '200', '100', '100', '100', '100', '100', '', '', '100', '20', '8000', '', '', '100.00', '100.00', '100.00', '8500', '8500', '0', '', '', 'hgj', 10, 1, '2019-02-21 13:35:19', ''),
(56, '88888', '2019-02-20', 'bhghg', 'ghg', 'fhgfhgf', '', 'big', 'bhghg', '100', '500', '400', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', 'long', '100', '100', '100', '10000', '100', '100', '10000', '', '0', '200', '100', '100', '100', '100', '100', '', '', '100', '20', '8000', '', '', '100.00', '100.00', '100.00', '8500', '8500', '0', '', '', 'hgj', 10, 1, '2019-02-21 13:35:45', '');

-- --------------------------------------------------------

--
-- Table structure for table `duitysliprecord`
--

CREATE TABLE `duitysliprecord` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `dityslipno` int(11) NOT NULL,
  `bookedby` varchar(555) NOT NULL,
  `driver_name` varchar(555) NOT NULL,
  `totalkm` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '0 = clint 1 = owener',
  `insertdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `guest_name` varchar(555) NOT NULL,
  `vehicle_no` varchar(555) NOT NULL,
  `total_time` varchar(555) NOT NULL,
  `vehicle_name` varchar(555) NOT NULL,
  `drop_location` varchar(555) NOT NULL,
  `owner_slip_no` int(11) NOT NULL,
  `o_p` varchar(555) NOT NULL,
  `travel_advance` int(11) NOT NULL,
  `guest_advance` int(11) NOT NULL,
  `toll` int(11) NOT NULL,
  `netadvance` int(11) NOT NULL,
  `cash_return` int(11) NOT NULL,
  `bookingstatus` enum('0','1') NOT NULL DEFAULT '1',
  `totalhour` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duitysliprecord`
--

INSERT INTO `duitysliprecord` (`id`, `date`, `dityslipno`, `bookedby`, `driver_name`, `totalkm`, `status`, `insertdate`, `guest_name`, `vehicle_no`, `total_time`, `vehicle_name`, `drop_location`, `owner_slip_no`, `o_p`, `travel_advance`, `guest_advance`, `toll`, `netadvance`, `cash_return`, `bookingstatus`, `totalhour`) VALUES
(15, '2019-01-30', 100, 'vvv', 'vv', 900, '1', '2019-01-30 17:20:44', 'sukanta', '7675', '0 days : 1 hours : 40 minutes : 0 seconds', '1', 'khh', 0, '', 100, 100, 100, 200, 100, '1', '1.7'),
(16, '2019-01-31', 199, 'gfghf', 'gfghf', 100, '1', '2019-01-31 08:00:54', 'pushpak', '7675', '0 days : 1 hours : 40 minutes : 0 seconds', '1', 'ggjg', 0, '', 100, 100, 0, 200, 100, '1', '1.7'),
(17, '2019-01-31', 200, 'hgfghf', 'fghf', 100, '1', '2019-01-31 08:03:43', 'pushpak', '7675', '0 days : 1 hours : 40 minutes : 0 seconds', '1', 'jfhgf', 0, '', 100, 100, 100, 200, 100, '1', '1.7'),
(18, '2019-01-31', 201, 'hfhgf', 'ghfhgf', 50, '1', '2019-01-31 08:08:50', 'pushpak', '7675', '0 days : 1 hours : 40 minutes : 0 seconds', '1', 'ytyujtut', 0, '', 100, 100, 100, 200, 100, '1', '1.7'),
(19, '2019-01-31', 202, 'hghfhd', 'kjhjkh', 100, '1', '2019-01-31 08:27:47', 'pushpak', '7675', '0 days : 1 hours : 40 minutes : 0 seconds', '1', 'jgf', 0, '', 100, 100, 100, 200, 100, '1', '1.7'),
(20, '2019-02-02', 144, 'jfgjf', 'gguy', 900, '1', '2019-02-02 08:52:55', 'sukanta', '7675', '0 days : 1 hours : 40 minutes : 0 seconds', '1', 'tyt', 0, '', 500, 0, 100, 500, 0, '1', '1.7'),
(21, '2019-02-02', 166, 'ghg', 'ghg', 100, '1', '2019-02-02 08:58:40', 'sukanta', '7675', '0 days : 1 hours : 40 minutes : 0 seconds', '1', 'ghgjh', 0, '', 100, 0, 100, 100, 0, '1', '1.7'),
(22, '2019-02-02', 167, 'jfghf', 'jgjgf', 100, '1', '2019-02-02 09:07:09', 'sukanta', '7675', '0 days : 1 hours : 40 minutes : 0 seconds', '1', 'jfghf', 0, '', 100, 0, 100, 100, 0, '1', '1.7'),
(23, '2019-02-02', 1010, 'tuyt', 'uytuyt', 900, '1', '2019-02-02 10:23:43', 'sukanta', '7675', '0 days : 1 hours : 40 minutes : 0 seconds', '1', 'uiyuti', 0, '', 688, 0, 100, 688, 0, '1', '1.7'),
(24, '2019-02-02', 1100, 'rty', 'rtyry', 100, '1', '2019-02-02 10:57:46', 'sukanta', '7675', '0 days : 1 hours : 40 minutes : 0 seconds', '1', 'tuytuyrt', 0, '', 412, 0, 0, 412, 0, '1', '1.7'),
(25, '2019-02-05', 9437, 'gf', 'gf', 900, '1', '2019-02-05 16:07:32', 'corname', 'OdFAFA', '0 days : 1 hours : 40 minutes : 0 seconds', '4', 'gyuy', 0, '', 10, 0, 200, 10, 0, '1', '1.7'),
(26, '2019-02-05', 9439, 'booked by bhai', 'driver name', 100, '1', '2019-02-05 16:18:19', 'corname', 'OdFAFA', '0 days : 10 hours : 40 minutes : 0 seconds', '4', 'place end', 0, '', 100, 0, 1000, 100, 0, '1', '10.7'),
(27, '2019-02-06', 6666, 'vgg', 'new', 400, '1', '2019-02-06 03:34:02', 'corname', 'OdFAFA', '0 days : 1 hours : 40 minutes : 0 seconds', '4', 'hghjg', 0, '', 0, 0, 100, 0, 0, '1', '1.7'),
(28, '2019-02-06', 344, 'new booked by', 'new', 200, '1', '2019-02-06 05:28:35', 'corname', 'OdFAFA', '0 days : 4 hours : 40 minutes : 0 seconds', '4', 'place end new', 0, '', 0, 0, 500, 0, 0, '1', '4.7'),
(29, '2019-02-06', 350, 'mst booked by', 'new', 100, '1', '2019-02-06 05:42:08', 'corname', 'OdFAFA', '0 days : 2 hours : 40 minutes : 0 seconds', '4', 'fdfgdg', 0, '', 0, 0, 100, 0, 0, '1', '2.7'),
(30, '2019-02-07', 7001, 'ghuty', 'new', 100, '1', '2019-02-07 05:44:06', 'corname', 'OdFAFA', '0 days : 1 hours : 40 minutes : 0 seconds', '4', 'uytuytu', 401, '', 100, 100, 100, 200, 100, '1', '1.7');

-- --------------------------------------------------------

--
-- Table structure for table `duty_slip`
--

CREATE TABLE `duty_slip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dutyslip_slno` varchar(100) NOT NULL,
  `duty_of` varchar(50) NOT NULL,
  `report_at` varchar(50) NOT NULL,
  `booked_by` varchar(50) NOT NULL,
  `vehicle_no` varchar(20) NOT NULL,
  `vehicle_id` varchar(50) NOT NULL,
  `vehicle_name` varchar(50) NOT NULL,
  `vehicle_size` varchar(100) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `place_from` varchar(50) NOT NULL,
  `place_to` varchar(60) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `starting_km` varchar(15) NOT NULL,
  `start_time` varchar(15) NOT NULL,
  `closing_km` varchar(15) NOT NULL,
  `closing_time` varchar(15) NOT NULL,
  `closing_date` varchar(15) NOT NULL,
  `total_km` varchar(15) NOT NULL,
  `total_time` varchar(200) NOT NULL,
  `charging_type` varchar(15) NOT NULL,
  `ac_nonac` varchar(15) NOT NULL,
  `fuel_rate` varchar(50) NOT NULL,
  `toll_gate` varchar(15) NOT NULL,
  `parking_charge` varchar(15) NOT NULL,
  `driver_f_charge` varchar(50) NOT NULL,
  `other_charge` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `advance_paid_client` decimal(10,2) NOT NULL,
  `advance_paid_travel` decimal(10,2) NOT NULL,
  `vehicle_returns` varchar(256) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `duty_slip_corporate`
--

CREATE TABLE `duty_slip_corporate` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dutyslip_slno` varchar(100) NOT NULL,
  `corporate_id` varchar(50) NOT NULL,
  `corporate_name` varchar(50) NOT NULL,
  `duty_of` varchar(50) NOT NULL,
  `report_at` varchar(50) NOT NULL,
  `booked_by` varchar(50) NOT NULL,
  `vehicle_no` varchar(20) NOT NULL,
  `vehicle_id` varchar(50) NOT NULL,
  `vehicle_name` varchar(50) NOT NULL,
  `vehicle_size` varchar(100) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `place_from` varchar(50) NOT NULL,
  `place_to` varchar(60) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `starting_km` varchar(15) NOT NULL,
  `start_time` varchar(15) NOT NULL,
  `closing_km` varchar(15) NOT NULL,
  `closing_time` varchar(15) NOT NULL,
  `closing_date` varchar(15) NOT NULL,
  `total_km` varchar(15) NOT NULL,
  `total_time` varchar(200) NOT NULL,
  `charging_type` varchar(15) NOT NULL,
  `ac_nonac` varchar(15) NOT NULL,
  `fuel_rate` varchar(50) NOT NULL,
  `toll_gate` varchar(15) NOT NULL,
  `parking_charge` varchar(15) NOT NULL,
  `driver_f_charge` varchar(50) NOT NULL,
  `other_charge` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `advance_paid_client` decimal(10,2) NOT NULL,
  `advance_paid_travel` decimal(10,2) NOT NULL,
  `vehicle_returns` varchar(256) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duty_slip_corporate`
--

INSERT INTO `duty_slip_corporate` (`id`, `dutyslip_slno`, `corporate_id`, `corporate_name`, `duty_of`, `report_at`, `booked_by`, `vehicle_no`, `vehicle_id`, `vehicle_name`, `vehicle_size`, `driver_name`, `place_from`, `place_to`, `start_date`, `starting_km`, `start_time`, `closing_km`, `closing_time`, `closing_date`, `total_km`, `total_time`, `charging_type`, `ac_nonac`, `fuel_rate`, `toll_gate`, `parking_charge`, `driver_f_charge`, `other_charge`, `description`, `advance_paid_client`, `advance_paid_travel`, `vehicle_returns`, `created_date`) VALUES
(69, '666', '13', 'ghfgh', 'gfhfh', 'hgfhgf', 'gfhf', 'va343dfg', '23', 'big', 'sdf', 'gdfhdh', 'jgjgj', 'gjgf', '2019-02-26', '100', '08:56', '30000', '10:36', '2019-02-26', '29900', '0 days : 1 hours : 40 minutes : 0 seconds', 'long', 'ac', '100', '100', '100', '100', '100', 'jgjhfg', '0.00', '0.00', '0', '2019-02-26 06:39:31'),
(70, '5645', '12', 'pushpak', 'sdfsd', 'sdf', 'sdfs', 'sdfsdf', '22', 'small', 'jljjhj', 'gdfhdh', 'gdf', 'gdfgdfdfd', '2019-02-26', '400', '08:56', '5000', '10:36', '2019-02-26', '4600', '0 days : 1 hours : 40 minutes : 0 seconds', 'long', 'ac', '100', '100', '100', '100', '100', 'svxv', '0.00', '0.00', '0', '2019-02-26 07:11:23'),
(71, '7656', '14', 'siku', 'gfghff', 'ghfg', 'fgfhf', 'bhghg', '26', 'big', 'santi', 'gdfhdh', 'hghjg', 'ghgfhf', '2019-02-26', '69', '08:56', '6766', '10:36', '2019-02-26', '6697', '0 days : 1 hours : 40 minutes : 0 seconds', 'long', 'ac', '100', '100', '100', '100', '100', 'mggff', '0.00', '0.00', '0', '2019-02-26 07:13:39'),
(72, '345', '20', 'nhgj', 'dssdvd', 'dvdf', 'cvxc', 'ffhhh', '27', 'big', 'kmm', 'Amit kumar Sahoo', 'hghjg', 'gfhfh', '2019-02-26', '200', '08:56', '800', '10:36', '2019-02-26', '600', '0 days : 1 hours : 40 minutes : 0 seconds', 'long', 'ac', '100', '100', '100', '100', '100', 'jhhkjh', '0.00', '0.00', '0', '2019-02-26 07:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `duty_slip_hotel`
--

CREATE TABLE `duty_slip_hotel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dutyslip_slno` varchar(100) NOT NULL,
  `duty_of` varchar(50) NOT NULL,
  `report_at` varchar(50) NOT NULL,
  `booked_by` varchar(50) NOT NULL,
  `vehicle_no` varchar(20) NOT NULL,
  `vehicle_id` varchar(50) NOT NULL,
  `vehicle_name` varchar(50) NOT NULL,
  `vehicle_size` varchar(100) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `place_from` varchar(50) NOT NULL,
  `place_to` varchar(60) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `starting_km` varchar(15) NOT NULL,
  `start_time` varchar(15) NOT NULL,
  `closing_km` varchar(15) NOT NULL,
  `closing_time` varchar(15) NOT NULL,
  `closing_date` varchar(15) NOT NULL,
  `total_km` varchar(15) NOT NULL,
  `total_time` varchar(200) NOT NULL,
  `charging_type` varchar(15) NOT NULL,
  `ac_nonac` varchar(15) NOT NULL,
  `fuel_rate` varchar(50) NOT NULL,
  `toll_gate` varchar(15) NOT NULL,
  `parking_charge` varchar(15) NOT NULL,
  `driver_f_charge` varchar(50) NOT NULL,
  `other_charge` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `advance_paid_client` decimal(10,2) NOT NULL,
  `advance_paid_travel` decimal(10,2) NOT NULL,
  `vehicle_returns` varchar(256) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duty_slip_hotel`
--

INSERT INTO `duty_slip_hotel` (`id`, `dutyslip_slno`, `duty_of`, `report_at`, `booked_by`, `vehicle_no`, `vehicle_id`, `vehicle_name`, `vehicle_size`, `driver_name`, `hotel_name`, `place_from`, `place_to`, `start_date`, `starting_km`, `start_time`, `closing_km`, `closing_time`, `closing_date`, `total_km`, `total_time`, `charging_type`, `ac_nonac`, `fuel_rate`, `toll_gate`, `parking_charge`, `driver_f_charge`, `other_charge`, `description`, `advance_paid_client`, `advance_paid_travel`, `vehicle_returns`, `created_date`) VALUES
(69, '234', 'mhmhgh', 'hgfh', 'ggfh', 'fghth', '28', 'small', 'uuuu', 'sdfs', '', 'hghh', 'ggjg', '2019-02-25', '100', '08:56', '1000', '10:36', '2019-02-25', '900', '0 days : 1 hours : 40 minutes : 0 seconds', 'long', '', '100', '100', '100', '100', '100', '100', '100.00', '100.00', '100', '2019-02-25 07:04:42'),
(70, '456546', 'hgfdfgff', 'gfdgfd', 'dfdgfd', 'ffhhh', '27', 'big', 'kmm', 'sdfs', 'mayfair', 'bhjghjg', 'hfhfh', '2019-02-25', '200', '08:56', '5000', '10:36', '2019-02-25', '4800', '0 days : 1 hours : 40 minutes : 0 seconds', 'long', 'ac', '100', '100', '100', '100', '100', '100', '100.00', '100.00', '100', '2019-02-25 07:15:20'),
(71, '6565', 'hghf', 'ngfg', 'fgfhgf', 'ffhhh', '28', 'small', 'uuuu', 'amitOhhhh', 'lagoon', 'hggj', 'gjgh', '2019-02-25', '100', '08:56', '4000', '10:36', '2019-02-25', '3900', '0 days : 1 hours : 40 minutes : 0 seconds', 'long', 'ac', '100', '100', '100', '100', '100', 'mnbmh', '0.00', '0.00', '0', '2019-02-25 11:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `id` int(10) NOT NULL,
  `emp_catagory` varchar(100) NOT NULL,
  `emp_name` varchar(40) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `birth_date` varchar(255) NOT NULL,
  `joining_date` varchar(255) NOT NULL,
  `aadhar_cardno` varchar(15) NOT NULL,
  `dl_no` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `basic` decimal(10,2) NOT NULL,
  `epf` decimal(10,2) NOT NULL,
  `esic` decimal(10,2) NOT NULL,
  `hra` decimal(10,2) NOT NULL,
  `da` decimal(10,2) NOT NULL,
  `other` decimal(10,2) NOT NULL,
  `gross` decimal(10,2) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` int(4) NOT NULL DEFAULT '1' COMMENT '1 -> True 0 -> False',
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`id`, `emp_catagory`, `emp_name`, `father_name`, `contact_no`, `emailid`, `birth_date`, `joining_date`, `aadhar_cardno`, `dl_no`, `address`, `basic`, `epf`, `esic`, `hra`, `da`, `other`, `gross`, `amount`, `status`, `creationDate`) VALUES
(7, 'driver', 'gdfhdh', 'kuugy', 'tjytyt', 'shf@j.com', '2019-02-11', '2019-02-11', 'hgjfhf', 'hggjhg', 'hjgjhghg', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '2019-02-11 07:10:25'),
(8, 'driver', 'Amit kumar Sahoo', 'Niranjan Sahoo', '98765456', 'sahoo@g.com', '2019-02-11', '2019-02-11', 'hjgj656', 'hjghjg6655', 'hghjghjg', '100.00', '100.00', '100.00', '100.00', '100.00', '100.00', '400.00', '200.00', 1, '2019-02-11 07:11:21'),
(9, 'driver', 'sdfs', 'nhghhjg', 'gjgf', 'nghjvh', '2019-02-11', '2019-02-11', '76768gh', '678jjbhb', 'hgjhgj', '100.00', '100.00', '100.00', '100.00', '100.00', '100.00', '400.00', '200.00', 1, '2019-02-11 07:17:30'),
(10, 'driver', 'sdfs', 'nhghhjg', 'gjgf', 'nghjvh', '2019-02-11', '2019-02-11', '76768gh', '678jjbhb', 'hgjhgj', '100.00', '100.00', '100.00', '100.00', '100.00', '100.00', '400.00', '200.00', 1, '2019-02-11 07:17:31'),
(11, 'driver', 'sdfs', 'nhghhjg', 'gjgf', 'nghjvh', '2019-02-11', '2019-02-11', '76768gh', '678jjbhb', 'hgjhgj', '100.00', '100.00', '100.00', '100.00', '100.00', '100.00', '400.00', '200.00', 1, '2019-02-11 07:17:31'),
(12, 'designation', 'amitOhhhh', 'father_name', 'contact_no', 's@g.com', '2019-02-11', '2019-02-11', 'aadhar_cardno', 'dl_no', 'addressOnetwosdd', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '2019-02-11 07:17:51'),
(13, 'driver', 'khkhk', 'khghg', 'hghg', 'hghhh', '2019-02-11', '2019-02-11', 'hjgg', 'hghgg', 'hghg', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '2019-02-11 07:17:52'),
(14, 'employee', 'sdf', 'sdf', 'sdf', 'sdf', '2019-02-21', '2019-02-21', 'sdf', 'sdf', 'sdfsdf', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '2019-02-21 10:20:36'),
(15, 'driver', 'dfsf', 'sdf', 'sdsdf', 'sdfsd', '2019-02-21', '2019-02-21', 'sdf', 'sdfs', 'sdfsd', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '2019-02-21 10:22:50'),
(16, 'driver', 'dfsfsdf', 'sdf', 'sdsdf', 'sdfsd', '2019-02-21', '2019-02-21', 'sdfsdf', 'sdfs', 'sdfsd', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '2019-02-21 10:23:15'),
(17, 'driver', 'dfsf', 'sdf', 'sdsdf', 'sdfsd', '2019-02-21', '2019-02-21', 'sdf', 'sdfs', 'sdfsd', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '2019-02-21 10:24:14'),
(18, 'employee', 'dfg', 'sdffsd', 'sdf', 'sdfsd', '2019-02-21', '2019-02-21', 'sdfsd', 'sdf', 'sdf', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '2019-02-21 10:24:48'),
(19, 'driver', 'fdgfd', 'gdfg', 'dfgdf', 'dfgdfg', '2019-02-21', '2019-02-21', 'dfgfd', 'dfgdf', 'dfgdf', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '2019-02-21 10:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `ename` varchar(20) NOT NULL,
  `details` varchar(255) NOT NULL,
  `mode` varchar(40) NOT NULL,
  `amount` int(5) NOT NULL,
  `payType` tinyint(1) NOT NULL COMMENT '0-> Debit 1->Credit',
  `balance` int(10) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `ename`, `details`, `mode`, `amount`, `payType`, `balance`, `creationDate`) VALUES
(1, '1111', 'paid to owner', '1', 1, 0, 0, '2019-01-27 12:07:12'),
(2, '1111', 'paid to owner', '1', 2, 0, 0, '2019-01-27 13:14:10'),
(3, '1111', 'Payment receive from client', '1', 5, 1, 0, '2019-01-27 13:15:08'),
(4, '156', 'Payment receive from client', '1', 1000, 1, 0, '2019-01-28 05:55:16'),
(5, '124', 'Doe', 'suk', 0, 0, 0, '2019-01-28 06:33:25'),
(6, '768', 'payment receive from the client', 'cash', 2000, 1, 0, '2019-01-28 06:47:55'),
(7, '768', 'paid to owner', 'cash', 200, 0, 0, '2019-01-28 06:58:53'),
(8, '1080', 'payment receive from the client', 'cash', 20, 1, 0, '2019-01-28 07:05:10'),
(9, '1080', 'paid to owner', 'cash', 10, 0, 0, '2019-01-28 07:05:54'),
(10, 'amit', 'Salary Paid to Mr.amit holding the Employee ID :ARGC01', '1', 0, 0, 0, '2019-01-28 10:17:39'),
(11, 'amit', 'Advance Returned by Mr.amit holding the Employee ID :ARGC01', '1', 0, 1, 0, '2019-01-28 10:17:39'),
(12, 'amit', 'Salary Paid to Mr.amit holding the Employee ID :ARGC01', '1', 0, 0, 0, '2019-01-28 10:18:08'),
(13, 'amit', 'Advance Returned by Mr.amit holding the Employee ID :ARGC01', '1', 0, 1, 0, '2019-01-28 10:18:08'),
(14, 'amit', 'Salary Paid to Mr.amit holding the Employee ID :ARGC01', '1', 0, 0, 0, '2019-01-28 10:19:00'),
(15, 'amit', 'Advance Returned by Mr.amit holding the Employee ID :ARGC01', '1', 0, 1, 0, '2019-01-28 10:19:00'),
(16, 'asdas', 'Salary Paid to Mr.asdas holding the Employee ID :ARGC02', '1', 2000, 0, -2000, '2019-01-28 10:21:45'),
(17, 'asdas', 'Advance Returned by Mr.asdas holding the Employee ID :ARGC02', '1', 0, 1, -2000, '2019-01-28 10:21:45'),
(18, 'amit', 'qwqwe', '1', 100, 1, 0, '2019-01-28 12:55:39'),
(19, '1111', 'Payment receive from client', '1', 1, 1, 0, '2019-01-28 13:52:20'),
(20, '1111', 'Payment receive from client', '1', 1, 1, 0, '2019-01-28 13:52:29'),
(21, '399', 'payment receive from the client', 'cash', 100, 1, 0, '2019-01-29 07:47:22'),
(22, '912', 'payment receive from the client', 'cash', 20, 1, 0, '2019-01-30 08:01:35'),
(23, '106', 'payment receive from the client', 'cash', 1, 1, 0, '2019-01-30 08:26:34'),
(24, '9658', 'payment receive from the client', 'cash', 10, 1, 0, '2019-01-30 08:50:10'),
(25, '7008', 'payment receive from the client', 'cash', 500, 1, 0, '2019-01-30 08:53:04'),
(26, '27', 'payment receive from the client', 'cash', 0, 1, 0, '2019-01-30 17:06:48'),
(27, '6500', 'payment receive from the client', 'cash', 100, 1, 0, '2019-02-01 13:03:52'),
(28, '202', 'paid to owner', 'cash', 0, 0, 0, '2019-02-02 08:37:57'),
(29, '167', 'paid to owner', 'cash', 0, 0, 0, '2019-02-02 09:23:37'),
(30, '166', 'paid to owner', 'cash', 0, 0, 0, '2019-02-02 09:56:49'),
(31, '166', 'paid to owner', 'cash', 0, 0, 0, '2019-02-02 10:22:24'),
(32, '1010', 'paid to owner', 'cash', 0, 0, 0, '2019-02-02 10:36:30'),
(33, '1010', 'paid to owner', 'cash', 0, 0, 0, '2019-02-02 10:55:54'),
(34, '1100', 'paid to owner', 'cash', 0, 0, 0, '2019-02-02 10:58:26'),
(35, '7010', 'payment receive from the client', 'cash', 100, 1, 0, '2019-02-03 11:21:45'),
(36, '161', 'payment receive from the client', 'cash', 21100, 1, 0, '2019-02-04 12:55:42'),
(37, '109', 'payment receive from the client', 'cash', 100, 1, 0, '2019-02-04 16:05:44'),
(38, '577', 'payment receive from the client', 'cash', 100, 1, 0, '2019-02-04 16:39:55'),
(39, '778', 'payment receive from the client', 'cash', 25975, 1, 0, '2019-02-04 17:18:46'),
(40, '779', 'payment receive from the client', 'cash', 2645, 1, 0, '2019-02-04 17:28:02'),
(41, '557', 'payment receive from the client', 'cash', 84600, 1, 0, '2019-02-05 05:17:40'),
(42, '9439', 'paid to owner', 'cash', 0, 0, 0, '2019-02-05 16:34:01'),
(43, '5555', 'payment receive from the client', 'cash', 1565, 1, 0, '2019-02-05 16:40:56'),
(44, '6500', 'payment receive from the client', 'cash', 1140, 1, 0, '2019-02-05 16:42:55'),
(45, '9439', 'paid to owner', 'cash', 0, 0, 0, '2019-02-05 17:52:42'),
(46, '595', 'payment receive from the client', 'cash', 500700, 1, 0, '2019-02-06 08:43:09'),
(47, '595', 'payment receive from the client', 'cash', 500700, 1, 0, '2019-02-06 08:58:50'),
(48, '595', 'payment receive from the client', 'cash', 500700, 1, 0, '2019-02-06 09:00:32'),
(49, '', 'payment receive from the client', 'cash', 0, 1, 0, '2019-02-06 09:00:57'),
(50, '595', 'payment receive from the client', 'cash', 20300, 1, 0, '2019-02-06 09:54:18'),
(51, '595', 'payment receive from the client', 'cash', 20300, 1, 0, '2019-02-06 09:55:41'),
(52, '595', 'payment receive from the client', 'cash', 20300, 1, 0, '2019-02-06 09:56:50'),
(53, '', 'payment receive from the client', 'cash', 0, 1, 0, '2019-02-06 09:57:02'),
(54, '595', 'payment receive from the client', 'cash', 500700, 1, 0, '2019-02-06 09:59:51'),
(55, '595', 'payment receive from the client', 'cash', 20700, 1, 0, '2019-02-06 10:00:39'),
(56, '', 'payment receive from the client', 'cash', 0, 1, 0, '2019-02-06 10:00:54'),
(57, '', 'payment receive from the client', 'cash', 0, 1, 0, '2019-02-06 10:01:56'),
(58, '', 'payment receive from the client', 'cash', 0, 1, 0, '2019-02-06 10:01:56'),
(59, '595', 'payment receive from the client', 'cash', 20700, 1, 0, '2019-02-06 10:03:20'),
(60, '', 'payment receive from the client', 'cash', 0, 1, 0, '2019-02-06 10:03:32'),
(61, '985', 'payment receive from the client', 'cash', 500600, 1, 0, '2019-02-06 10:08:54'),
(62, '595', 'payment receive from the client', 'cash', 20700, 1, 0, '2019-02-06 10:14:41'),
(63, '1700', 'payment receive from the client', 'cash', 21000, 1, 0, '2019-02-06 12:38:42');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `hotel_address` varchar(50) NOT NULL,
  `h_con_no` varchar(50) NOT NULL,
  `hotel_own_name` varchar(50) NOT NULL,
  `hotel_mail_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotel_name`, `hotel_address`, `h_con_no`, `hotel_own_name`, `hotel_mail_id`) VALUES
(16, 'sdsd', 'ghfghf', 'hghhjg', 'mhvgf', 'nvghgf'),
(17, 'mayfair', 'fhgfghfh', 'gfhfh', 'ghfhgf', 'gfg'),
(18, 'lagoon', 'gfghf', 'fhf', 'hfhf', 'htftf');

-- --------------------------------------------------------

--
-- Table structure for table `hotelcarcharges`
--

CREATE TABLE `hotelcarcharges` (
  `id` int(50) NOT NULL,
  `vehicle_id` varchar(100) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `charging_type` varchar(100) NOT NULL,
  `day_charge` varchar(100) NOT NULL,
  `night_holt_charge` varchar(100) NOT NULL,
  `km_cover_in_one_litre` varchar(100) NOT NULL,
  `extra_hour_charges` varchar(100) NOT NULL,
  `price_per_km` varchar(100) NOT NULL,
  `detaintion_charges` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelcarcharges`
--

INSERT INTO `hotelcarcharges` (`id`, `vehicle_id`, `vehicle_name`, `charging_type`, `day_charge`, `night_holt_charge`, `km_cover_in_one_litre`, `extra_hour_charges`, `price_per_km`, `detaintion_charges`, `status`) VALUES
(19, '', 'kuku', 'local', '100', '100', '100', '010', '', '', ''),
(20, '', 'kuku', 'local', '100', '100', '100', '010', '', '', ''),
(21, '', 'sdf', 'local', '100', '10', '0100', '100', '', '', ''),
(22, '', 'jljjhj', 'long', '', '100', '', '', '100', '100', ''),
(23, '', 'jljjhj', 'long', '', '100', '', '', '100', '100', ''),
(24, '', 'kuku', 'local', '100', '100', '100', '100', '', '', ''),
(25, '', 'sdf', 'long', '', '100', '', '', '100', '100', ''),
(26, '', 'sdf', 'local', '', '400', '100', '100', '', '', ''),
(27, '', 'sdf', 'long', '', '100', '', '', '100', '100', ''),
(28, '28', 'uuuu', 'long', '', '100', '', '', '100', '100', '');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_payment_slip`
--

CREATE TABLE `hotel_payment_slip` (
  `id` bigint(30) NOT NULL,
  `duty_slip_no` varchar(20) NOT NULL,
  `duty_date` varchar(50) NOT NULL,
  `place_from` varchar(256) NOT NULL,
  `journey_to` varchar(50) NOT NULL,
  `booked_by` varchar(256) NOT NULL,
  `customer_gst` varchar(255) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `vehicle_no` varchar(20) NOT NULL,
  `starting_km` varchar(20) NOT NULL,
  `closing_km` varchar(20) NOT NULL,
  `total_km` varchar(20) NOT NULL,
  `starting_time` varchar(50) NOT NULL,
  `closing_time` varchar(50) NOT NULL,
  `total_time` varchar(50) NOT NULL,
  `charging_type` varchar(30) NOT NULL,
  `fixed_price_f` varchar(50) NOT NULL,
  `extra_hour_new_f` varchar(50) NOT NULL,
  `extra_hour_price_f` varchar(50) NOT NULL,
  `t_e_h_p_f` varchar(50) NOT NULL,
  `extra_km_f` varchar(50) NOT NULL,
  `extra_km_price_f` varchar(50) NOT NULL,
  `t_extra_km_price_f` varchar(50) NOT NULL,
  `extra_hour` varchar(50) NOT NULL,
  `extrahour_price` varchar(100) NOT NULL,
  `night_halt` varchar(50) NOT NULL,
  `tool_gate` varchar(50) NOT NULL,
  `parking` varchar(50) NOT NULL,
  `driver_f_charge` varchar(50) NOT NULL,
  `other_charge` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `kmforlitre` varchar(30) NOT NULL,
  `day_basic` varchar(50) NOT NULL,
  `fuel_rate` varchar(50) NOT NULL,
  `priceper_km` varchar(30) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `day_charge` varchar(50) NOT NULL,
  `detaintion` varchar(100) NOT NULL,
  `advance_office` varchar(50) NOT NULL,
  `advance_guest` varchar(50) NOT NULL,
  `total_adv` varchar(30) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `py_amount` varchar(50) NOT NULL,
  `du_amount` varchar(50) DEFAULT NULL,
  `detaintion_hour` varchar(100) NOT NULL,
  `detaintion_charges` varchar(100) NOT NULL,
  `remark` varchar(30) NOT NULL,
  `noofnight_halt` int(11) NOT NULL,
  `status` int(4) NOT NULL DEFAULT '1',
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ref_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_payment_slip`
--

INSERT INTO `hotel_payment_slip` (`id`, `duty_slip_no`, `duty_date`, `place_from`, `journey_to`, `booked_by`, `customer_gst`, `hotel_name`, `vehicle_name`, `vehicle_no`, `starting_km`, `closing_km`, `total_km`, `starting_time`, `closing_time`, `total_time`, `charging_type`, `fixed_price_f`, `extra_hour_new_f`, `extra_hour_price_f`, `t_e_h_p_f`, `extra_km_f`, `extra_km_price_f`, `t_extra_km_price_f`, `extra_hour`, `extrahour_price`, `night_halt`, `tool_gate`, `parking`, `driver_f_charge`, `other_charge`, `description`, `kmforlitre`, `day_basic`, `fuel_rate`, `priceper_km`, `amount`, `day_charge`, `detaintion`, `advance_office`, `advance_guest`, `total_adv`, `total_amount`, `py_amount`, `du_amount`, `detaintion_hour`, `detaintion_charges`, `remark`, `noofnight_halt`, `status`, `creationDate`, `ref_no`) VALUES
(58, '6565', '2019-02-25', 'hggj', 'gjgh', 'fgfhgf', 'gjgfjgj', 'lagoon', 'small', 'ffhhh', '100', '4000', '3900', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', 'long', '', '', '', '', '', '', '', '', '0', '1000', '100', '100', '100', '100', 'mnbmh', '', '', '100', '100', '390000', '', '', '0.00', '0.00', '0.00', '399100', '399100', '0', '77', '7700', '', 10, 1, '2019-02-25 11:39:31', '');

-- --------------------------------------------------------

--
-- Table structure for table `insertproduct`
--

CREATE TABLE `insertproduct` (
  `id` int(10) NOT NULL,
  `customer_details` varchar(100) NOT NULL,
  `order_no` varchar(100) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `so_no` varchar(100) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `place_of_supply` varchar(200) NOT NULL,
  `sl_no` int(10) NOT NULL,
  `mat_code` varchar(100) NOT NULL,
  `mat_des` varchar(100) NOT NULL,
  `hsn_code` varchar(10) NOT NULL,
  `freight` int(10) NOT NULL,
  `cgst` varchar(40) NOT NULL,
  `sgst` varchar(100) NOT NULL,
  `igst` varchar(10) NOT NULL,
  `customer_drg_no` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `rate` varchar(10) NOT NULL,
  `discount` int(10) NOT NULL,
  `amount` float NOT NULL,
  `tax_cost` decimal(10,2) NOT NULL,
  `pay_cost` decimal(10,2) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bill` int(10) NOT NULL,
  `quantity_avail` int(10) NOT NULL,
  `volume` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issue_dutyslip`
--

CREATE TABLE `issue_dutyslip` (
  `id` int(11) NOT NULL,
  `dutyslip_slno` varchar(50) NOT NULL,
  `party_name` varchar(50) NOT NULL,
  `vehicle_id` varchar(50) NOT NULL,
  `vehicle_name` varchar(50) NOT NULL,
  `vehicle_no` varchar(50) NOT NULL,
  `starting_date` varchar(50) NOT NULL,
  `starting_km` varchar(50) NOT NULL,
  `starting_time` varchar(50) NOT NULL,
  `place_from` varchar(50) NOT NULL,
  `report_at` varchar(50) NOT NULL,
  `advance_paid_client` varchar(50) NOT NULL,
  `advance_paid_travel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_dutyslip`
--

INSERT INTO `issue_dutyslip` (`id`, `dutyslip_slno`, `party_name`, `vehicle_id`, `vehicle_name`, `vehicle_no`, `starting_date`, `starting_km`, `starting_time`, `place_from`, `report_at`, `advance_paid_client`, `advance_paid_travel`) VALUES
(130, '111', 'Tarni Travels', '48', 'sapharie', 'OD 02 5555', '2000-01-01', '100', '08:30', '100', 'Tarni Travels', '', ''),
(131, '112', 'kuku', '49', 'asdasd', '34534', '2000-01-01', '1001', '08:30', '100', '100', '', ''),
(132, '113', 'Syrya sir', '50', 'BOLERO', 'OD0658', '2030-01-01', '10023', '08:30', '293', '387373', '', ''),
(133, '1213', 'Tarni Travels', '48', 'sapharie', 'OD 02 5555', '2000-01-01', '0100', '11:56', '100', 'Tarni Travels', '', ''),
(134, '4544', 'Tarni Travels', '48', 'sapharie', 'OD 02 5555', '2000-01-01', '100', '10:56', 'hgjhg', 'Tarni Travels', '', ''),
(135, '312', 'Tarni Travels', '50', 'BOLERO', 'OD0658', '2000-01-01', '10000', '06:53', 'bhghjg', 'Tarni Travels', '', ''),
(136, '1045', 'sailendu sir', '51', 'HondaCity', '8778OD09', '2019-01-01', '100', '08:56', 'puri', 'sailendu sir', '', ''),
(137, '1046', 'Tarni Travels', '48', 'sapharie', 'OD 02 5555', '2019-01-01', '200', '10:56', 'cuttack', 'Tarni Travels', '', ''),
(138, '1234567', 'shyam', '52', 'maruti', 'OD0400', '2019-03-26', '200', '08:00', 'puri', 'surya', '', ''),
(139, '8080', 'Tarni Travels', '51', 'HondaCity', '8778OD09', '2019-03-26', '400', '10:00', 'bbsr', 'Tarni Travels', '', ''),
(140, '1000', 'shyam', '52', 'maruti', 'OD0400', '2019-03-26', '0', '08:00', 'puri', 'shyam', '', ''),
(141, '655', 'Tarni Travels', '48', 'sapharie', 'w4343', '2000-01-01', '1000', '08:15', '0100', 'Tarni Travels', '', ''),
(142, '', 'Tarni Travels', '', '', '', '', '', '', '', 'Tarni Travels', '', ''),
(143, '', '', '', '', '', '', '', '', '', '', '', ''),
(144, '', '', '', '', '', '', '', '', '', '', '', ''),
(145, '', '', '', '', '', '', '', '', '', '', '', ''),
(146, '', '', '', '', '', '', '', '', '', '', '', ''),
(147, '107', 'sarfaraj', '53', 'volkswagen', 'GFFFSDS2', '2000-01-01', '1000', '08:56', 'khurda', 'sarfaraj', '', ''),
(148, '108', 'sarfaraj', '53', 'volkswagen', 'GFFFSDS2', '2000-01-01', '2000', '09:00', 'puri', 'sarfaraj', '', ''),
(149, '109', 'sarfaraj', '53', 'volkswagen', 'GFFFSDS2', '2000-01-01', '3000', '10:00', 'jajpur', 'sarfaraj', '', ''),
(150, '200', 'Tarni Travels', '48', 'sapharie', 'OD 02 5555', '2000-01-01', '100', '09:39', 'jhgg', 'Tarni Travels', '', ''),
(151, '400', 'Syrya sir', '48', 'sapharie', 'OD 02 5555', '2000-01-01', '200', '01:03', 'jhghg', 'Syrya sir', '', ''),
(152, '400', 'kuku', '48', 'sapharie', 'OD 02 5555', '2000-01-01', '100', '07:59', 'ghjf', 'kuku', '', ''),
(153, '401', 'kuku', '48', 'sapharie', 'OD 02 5555', '2000-01-01', '200', '08:59', 'mggff', 'kuku', '', ''),
(154, '', 'Choose Party Name', 'Choose Vehicle', '', '', '', '', '', '', '', '', ''),
(155, '8901', 'surendra kumar sahoo', '54', 'ABCDEFGH', 'OD 02AB 7656', '2019-04-03', '0', '08:15', 'LOCAL', 'MUSA', '', ''),
(156, '8902', 'surendra kumar sahoo', '54', 'ABCDEFGH', 'OD 02AB 7656', '2019-04-03', '100', '09:00', 'PURI', 'DAS BABU', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` int(11) NOT NULL,
  `month` varchar(10) NOT NULL,
  `days` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `month`, `days`) VALUES
(1, 'January', 31),
(2, 'February', 28),
(3, 'March', 31),
(4, 'April', 30),
(5, 'May', 31),
(6, 'June', 30),
(7, 'July', 31),
(8, 'August', 31),
(9, 'September', 30),
(10, 'October', 31),
(11, 'November', 30),
(12, 'December', 31);

-- --------------------------------------------------------

--
-- Table structure for table `officebill`
--

CREATE TABLE `officebill` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `invoice_no` varchar(30) NOT NULL,
  `start_date` date NOT NULL,
  `gst_no` varchar(25) NOT NULL,
  `sac_code` varchar(25) NOT NULL,
  `bill_no` varchar(25) NOT NULL,
  `month` varchar(20) NOT NULL,
  `total_km_cover` varchar(10) NOT NULL,
  `km_cover_liter` varchar(10) NOT NULL,
  `fuel_consume` varchar(10) NOT NULL,
  `fuel_rate` varchar(10) NOT NULL,
  `sub_total` varchar(10) NOT NULL,
  `km_covers_engine_oil` varchar(10) NOT NULL,
  `engine_oil_consumed` varchar(10) NOT NULL,
  `engine_oil_rate` varchar(10) NOT NULL,
  `engine_oil_charge` varchar(10) NOT NULL,
  `sub_total1` varchar(10) NOT NULL,
  `no_of_working_days` varchar(20) NOT NULL,
  `per_day_charge` varchar(20) NOT NULL,
  `sub_total2` varchar(20) NOT NULL,
  `sgst` varchar(10) NOT NULL,
  `cgst` varchar(10) NOT NULL,
  `grand_total` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officebill`
--

INSERT INTO `officebill` (`id`, `client_name`, `invoice_no`, `start_date`, `gst_no`, `sac_code`, `bill_no`, `month`, `total_km_cover`, `km_cover_liter`, `fuel_consume`, `fuel_rate`, `sub_total`, `km_covers_engine_oil`, `engine_oil_consumed`, `engine_oil_rate`, `engine_oil_charge`, `sub_total1`, `no_of_working_days`, `per_day_charge`, `sub_total2`, `sgst`, `cgst`, `grand_total`, `status`) VALUES
(1, 'kkkkk', '88', '2019-01-27', 'hh', 'hhh', '127', 'jan', '1000', '10', '100', '10', '1000', '10', '100', '10', '1000', '2000', '10', '10', '100', '2.5 %', '2.5 %', '2205', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ownercarcharges`
--

CREATE TABLE `ownercarcharges` (
  `id` int(50) NOT NULL,
  `vehicle_id` varchar(100) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `charging_type` varchar(100) NOT NULL,
  `day_charge` varchar(100) NOT NULL,
  `night_holt_charge` varchar(100) NOT NULL,
  `km_cover_in_one_litre` varchar(100) NOT NULL,
  `fixed_price` varchar(50) NOT NULL,
  `extra_hour_charges` varchar(100) NOT NULL,
  `extra_km_charges` varchar(50) NOT NULL,
  `price_per_km` varchar(100) NOT NULL,
  `detaintion_charges` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ownercarcharges`
--

INSERT INTO `ownercarcharges` (`id`, `vehicle_id`, `vehicle_name`, `charging_type`, `day_charge`, `night_holt_charge`, `km_cover_in_one_litre`, `fixed_price`, `extra_hour_charges`, `extra_km_charges`, `price_per_km`, `detaintion_charges`, `status`) VALUES
(12, '48', 'sapharie', 'long', '', '100', '', '', '', '', '100', '100', ''),
(14, '52', 'maruti', 'daybasic', '1000', '1000', '1000', '', '1000', '1000', '', '', ''),
(15, '52', 'maruti', '', '', '1000', '', '', '', '', '1000', '1000', ''),
(16, '52', 'maruti', 'fixed', '', '', '', '1000', '', '', '', '', ''),
(17, '48', 'sapharie', '', '', '1000', '', '', '', '', '1000', '1000', ''),
(18, '48', 'sapharie', '', '', '', '', '', '', '', '', '', ''),
(19, '48', 'sapharie', '', '', '1000', '', '', '', '', '100', '1000', ''),
(21, '48', 'sapharie', 'long', '', '12', '', '', '', '', '12', '12', ''),
(22, '48', 'sapharie', 'daybasic', '13', '13', '13', '', '13', '13', '', '', ''),
(23, '48', 'sapharie', 'fixed', '', '', '', '12', '', '', '', '', ''),
(28, '48', 'sapharie', 'long', '', '10001000', '', '', '', '', '1000', '1000', ''),
(29, '53', 'volkswagen', 'fixed', '', '', '', '2', '', '', '', '', ''),
(32, '54', 'ABCDEFGH', 'long', '', '50', '', '', '', '', '5', '10', ''),
(33, '54', 'ABCDEFGH', 'daybasic', '50', '50', '5', '', '5', '5', '', '', ''),
(34, '54', 'ABCDEFGH', 'fixed', '', '', '', '500', '', '', '', '', ''),
(35, '48', 'sapharie', 'long', '', 'sfsd', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ownercarcharges_new`
--

CREATE TABLE `ownercarcharges_new` (
  `id` int(50) NOT NULL,
  `vehicle_id` varchar(100) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `charging_type` varchar(100) NOT NULL,
  `day_charge` varchar(100) NOT NULL,
  `night_holt_charge` varchar(100) NOT NULL,
  `km_cover_in_one_litre` varchar(100) NOT NULL,
  `extra_hour_charges` varchar(100) NOT NULL,
  `price_per_km` varchar(100) NOT NULL,
  `detaintion_charges` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ownercarcharges_new`
--

INSERT INTO `ownercarcharges_new` (`id`, `vehicle_id`, `vehicle_name`, `charging_type`, `day_charge`, `night_holt_charge`, `km_cover_in_one_litre`, `extra_hour_charges`, `price_per_km`, `detaintion_charges`, `status`) VALUES
(24, '26', 'santi', 'long', '', '100', '', '', '100', '100', ''),
(25, '21', 'sads', 'local', '100', '100', '100', '100', '', '', ''),
(26, '26', 'santi', 'fixed', '', '', '100', '100', '100', '100', ''),
(27, '27', 'kmm', 'long', '', '100', '', '', '100', '100', ''),
(28, '27', 'kmm', 'local', '100', '100', '100', '100', '', '', ''),
(29, '27', 'kmm', 'fixed', '', '', '100', '100', '100', '100', ''),
(30, '28', 'uuuu', 'long', '', '100', '', '', '100', '100', ''),
(31, '28', 'uuuu', 'local', '100', '100', '100', '100', '', '', ''),
(32, '28', 'uuuu', 'fixed', '', '', '100', '100', '100', '100', '');

-- --------------------------------------------------------

--
-- Table structure for table `owner_payment`
--

CREATE TABLE `owner_payment` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(555) NOT NULL,
  `name` varchar(555) NOT NULL,
  `amount` varchar(555) NOT NULL,
  `address` varchar(555) NOT NULL,
  `date` date NOT NULL,
  `vehicle_no` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_payment`
--

INSERT INTO `owner_payment` (`id`, `bill_no`, `name`, `amount`, `address`, `date`, `vehicle_no`) VALUES
(1, '9', '', '2900', '', '2018-11-29', 'OD-01-S1234'),
(2, '9012', '', '10300', '', '2019-01-17', '2501'),
(3, '101', '', '11671', '', '2019-01-18', 'OD 02 AA 1111'),
(4, '1205', '', '522', '', '2019-01-18', 'OD-01T-1235'),
(5, '102', '', '796', '', '2019-01-21', 'OD-01T-1235'),
(6, '5555', '', '9105', '', '2019-01-23', 'OD 02 5555'),
(7, '5600', '', '8000', '', '2019-01-23', 'OD-01T-1235'),
(8, '5700', '', '9838', '', '2019-01-23', 'OD-01T-1235'),
(9, '119', '', '88570', '', '2019-01-26', '5837'),
(10, '1500', '', '9087', '', '2019-01-26', '7675'),
(11, '1080', '', '210', '', '2019-01-28', '7675'),
(12, '202', '', '210', '', '2019-02-02', '7675'),
(13, '167', '', '100', '', '2019-02-02', '7675'),
(14, '166', '', '1100', '', '2019-02-02', '7675'),
(15, '166', '', '10100', '', '2019-02-02', '7675'),
(16, '1010', '', '1000', '', '2019-02-02', '7675'),
(17, '1010', '', '312', '', '2019-02-02', '7675'),
(18, '1100', '', '-212', '', '2019-02-02', '7675'),
(19, '9439', '', '2500', '', '2019-02-05', 'OdFAFA'),
(20, '9439', '', '2200', '', '2019-02-05', 'OdFAFA');

-- --------------------------------------------------------

--
-- Table structure for table `owner_payment_slip`
--

CREATE TABLE `owner_payment_slip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `duty_slip_no` varchar(20) NOT NULL,
  `duty_date` varchar(50) NOT NULL,
  `journey_to` varchar(50) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `vehicle_no` varchar(20) NOT NULL,
  `starting_km` varchar(20) NOT NULL,
  `closing_km` varchar(20) NOT NULL,
  `total_km` varchar(20) NOT NULL,
  `starting_time` varchar(50) NOT NULL,
  `closing_time` varchar(50) NOT NULL,
  `total_time` varchar(50) NOT NULL,
  `charging_type` varchar(30) NOT NULL,
  `extra_hour` varchar(50) NOT NULL,
  `extrahour_price` varchar(100) NOT NULL,
  `night_halt` varchar(50) NOT NULL,
  `tool_gate` varchar(50) NOT NULL,
  `parking` varchar(50) NOT NULL,
  `driver_f_charge` varchar(50) NOT NULL,
  `other_charge` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `kmforlitre` varchar(30) NOT NULL,
  `day_basic` varchar(50) NOT NULL,
  `fuel_rate` varchar(50) NOT NULL,
  `priceper_km` varchar(30) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `day_charge` varchar(50) NOT NULL,
  `advance_office` varchar(50) NOT NULL,
  `advance_guest` varchar(50) NOT NULL,
  `total_adv` varchar(30) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `py_amount` varchar(50) NOT NULL,
  `du_amount` varchar(50) NOT NULL,
  `remark` varchar(30) NOT NULL,
  `noofnight_halt` int(11) NOT NULL,
  `status` int(4) NOT NULL DEFAULT '1',
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owner_payment_slip_new`
--

CREATE TABLE `owner_payment_slip_new` (
  `id` bigint(30) NOT NULL,
  `duty_slip_no` varchar(20) NOT NULL,
  `duty_date` varchar(50) NOT NULL,
  `place_from` varchar(256) NOT NULL,
  `journey_to` varchar(50) NOT NULL,
  `booked_by` varchar(256) NOT NULL,
  `customer_gst` varchar(255) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `vehicle_no` varchar(20) NOT NULL,
  `starting_km` varchar(20) NOT NULL,
  `closing_km` varchar(20) NOT NULL,
  `total_km` varchar(20) NOT NULL,
  `starting_time` varchar(50) NOT NULL,
  `closing_time` varchar(50) NOT NULL,
  `total_time` varchar(50) NOT NULL,
  `charging_type` varchar(30) NOT NULL,
  `fixed_price_f` varchar(50) NOT NULL,
  `extra_hour_new_f` varchar(50) NOT NULL,
  `extra_hour_price_f` varchar(50) NOT NULL,
  `t_e_h_p_f` varchar(50) NOT NULL,
  `extra_km_f` varchar(50) NOT NULL,
  `extra_km_price_f` varchar(50) NOT NULL,
  `t_extra_km_price_f` varchar(50) NOT NULL,
  `extra_hour` varchar(50) NOT NULL,
  `extrahour_price` varchar(100) NOT NULL,
  `night_halt` varchar(50) NOT NULL,
  `tool_gate` varchar(50) NOT NULL,
  `parking` varchar(50) NOT NULL,
  `driver_f_charge` varchar(50) NOT NULL,
  `other_charge` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `kmforlitre` varchar(30) NOT NULL,
  `day_basic` varchar(50) NOT NULL,
  `fuel_rate` varchar(50) NOT NULL,
  `priceper_km` varchar(30) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `day_charge` varchar(50) NOT NULL,
  `detaintion` varchar(100) NOT NULL,
  `advance_office` varchar(50) NOT NULL,
  `advance_guest` varchar(50) NOT NULL,
  `total_adv` varchar(30) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `py_amount` varchar(50) NOT NULL,
  `du_amount` varchar(50) DEFAULT NULL,
  `detaintion_hour` varchar(100) NOT NULL,
  `detaintion_charges` varchar(100) NOT NULL,
  `remark` varchar(30) NOT NULL,
  `noofnight_halt` int(11) NOT NULL,
  `status` int(4) NOT NULL DEFAULT '1',
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ref_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_payment_slip_new`
--

INSERT INTO `owner_payment_slip_new` (`id`, `duty_slip_no`, `duty_date`, `place_from`, `journey_to`, `booked_by`, `customer_gst`, `vehicle_name`, `vehicle_no`, `starting_km`, `closing_km`, `total_km`, `starting_time`, `closing_time`, `total_time`, `charging_type`, `fixed_price_f`, `extra_hour_new_f`, `extra_hour_price_f`, `t_e_h_p_f`, `extra_km_f`, `extra_km_price_f`, `t_extra_km_price_f`, `extra_hour`, `extrahour_price`, `night_halt`, `tool_gate`, `parking`, `driver_f_charge`, `other_charge`, `description`, `kmforlitre`, `day_basic`, `fuel_rate`, `priceper_km`, `amount`, `day_charge`, `detaintion`, `advance_office`, `advance_guest`, `total_adv`, `total_amount`, `py_amount`, `du_amount`, `detaintion_hour`, `detaintion_charges`, `remark`, `noofnight_halt`, `status`, `creationDate`, `ref_no`) VALUES
(6, '1212', '2019-02-21', ',j,jhghjg', 'jgggfgf', 'jgjg', '6876f', 'big', 'ffhhh', '100', '1000', '900', '08:56', '10:36', '0 days : 1 hours : 40 minutes : 0 seconds', 'long', '', '', '', '', '', '', '', '', '0', '1000', '100', '1000', '100', '100', 'n,jhg', '', '', '100', '100', '90000', '', '', '0.00', '0.00', '0.00', '92300', '92300', '0', '', '', '', 10, 1, '2019-02-25 06:05:13', '');

-- --------------------------------------------------------

--
-- Table structure for table `pratical`
--

CREATE TABLE `pratical` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `ghara` int(11) NOT NULL,
  `jilla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_history`
--

CREATE TABLE `reservation_history` (
  `rh_id` int(11) NOT NULL,
  `total_paid_amount` varchar(50) DEFAULT NULL,
  `rid` varchar(50) DEFAULT NULL,
  `updated_due` varchar(50) DEFAULT NULL,
  `pay` varchar(50) DEFAULT NULL,
  `dt_tm` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `employee` int(10) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `eid` varchar(20) NOT NULL,
  `pan` varchar(20) NOT NULL,
  `month` int(10) NOT NULL,
  `leaves` int(10) NOT NULL,
  `salary` int(10) NOT NULL,
  `advance` int(5) NOT NULL,
  `status` int(30) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `employee`, `designation`, `eid`, `pan`, `month`, `leaves`, `salary`, `advance`, `status`, `creationDate`) VALUES
(1, 1, 'driver', 'ARGC01', '', 1, 6785, 0, 0, 0, '2019-01-28 10:17:39'),
(2, 1, 'driver', 'ARGC01', '', 9, 4535, 0, 0, 0, '2019-01-28 10:18:07'),
(3, 1, 'driver', 'ARGC01', '', 1, 10, 0, 0, 0, '2019-01-28 10:19:00'),
(4, 2, 'driver', 'ARGC02', '', 9, 10, 2000, 0, 0, '2019-01-28 10:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `sellitems`
--

CREATE TABLE `sellitems` (
  `id` int(10) NOT NULL,
  `customer_details` varchar(100) NOT NULL,
  `po_no` varchar(100) NOT NULL,
  `new_customer` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `offer_no` varchar(100) NOT NULL,
  `gstin` varchar(100) NOT NULL,
  `dispatched` varchar(100) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `invoice_date` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `challan_no` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `challan_date` varchar(40) NOT NULL,
  `serial_no` int(10) NOT NULL,
  `mat_des` int(40) NOT NULL,
  `pl_serial_no` varchar(10) NOT NULL,
  `hsn_code` int(10) NOT NULL,
  `unit` int(10) NOT NULL,
  `purchase_rate` int(10) NOT NULL,
  `tax_amount` int(10) NOT NULL,
  `total_cost` int(10) NOT NULL,
  `rate` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `item_value` int(10) NOT NULL,
  `discount` int(10) NOT NULL,
  `sgst` int(10) NOT NULL,
  `cgst` int(10) NOT NULL,
  `igst` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `pay_cost` int(10) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bill` int(10) NOT NULL,
  `income` int(10) NOT NULL,
  `mrp` varchar(100) NOT NULL,
  `retail` int(10) NOT NULL DEFAULT '0',
  `volume` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_advance`
--

CREATE TABLE `trans_advance` (
  `id` int(11) NOT NULL,
  `employee` tinyint(1) NOT NULL,
  `eid` varchar(10) NOT NULL,
  `advance` int(10) NOT NULL,
  `date` varchar(50) NOT NULL,
  `month` tinyint(2) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1->Advance Taken 2->Advance Paid',
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_advance`
--

INSERT INTO `trans_advance` (`id`, `employee`, `eid`, `advance`, `date`, `month`, `type`, `creationDate`) VALUES
(1, 4, 'ARGC04', 1000, '2019-01-10', 1, 1, '2019-01-10 17:24:40'),
(2, 4, 'ARGC04', 100, '2019-01-28', 1, 1, '2019-01-28 11:18:43'),
(3, 1, 'ARGC01', 100, '2019-01-28', 1, 1, '2019-01-28 12:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `update_dutyslip_costomer_mst`
--

CREATE TABLE `update_dutyslip_costomer_mst` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(50) NOT NULL,
  `dutyslip_slno` varchar(50) NOT NULL,
  `party_name` varchar(50) NOT NULL,
  `place_from` varchar(50) NOT NULL,
  `report_at` varchar(50) NOT NULL,
  `vehicle_name` varchar(50) NOT NULL,
  `vehicle_id` varchar(50) NOT NULL,
  `vehicle_no` varchar(50) NOT NULL,
  `starting_date` varchar(50) NOT NULL,
  `starting_km` varchar(50) NOT NULL,
  `starting_time` varchar(50) NOT NULL,
  `closing_date` varchar(50) NOT NULL,
  `closing_km` varchar(50) NOT NULL,
  `closing_time` varchar(50) NOT NULL,
  `charging_type` varchar(50) NOT NULL,
  `total_km` varchar(50) NOT NULL,
  `total_time` varchar(50) NOT NULL,
  `nh_charges` varchar(50) NOT NULL,
  `no_of_nh` varchar(50) NOT NULL,
  `total_price_of_nh` varchar(50) NOT NULL,
  `detaintion_charges` varchar(50) NOT NULL,
  `detaintion_hour` varchar(50) NOT NULL,
  `total_price_of_detaintion` varchar(50) NOT NULL,
  `price_per_km` varchar(50) NOT NULL,
  `total_ppk` varchar(50) NOT NULL,
  `day_charge_td` varchar(50) NOT NULL,
  `km_cover_in_one_litre_td` varchar(50) NOT NULL,
  `fuel_rate_td` varchar(50) NOT NULL,
  `total_price_of_km_cover_in_one_lit_td` varchar(50) NOT NULL,
  `extra_parking_toll` varchar(50) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `advance` varchar(50) NOT NULL,
  `grand_total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_dutyslip_costomer_mst`
--

INSERT INTO `update_dutyslip_costomer_mst` (`id`, `bill_no`, `dutyslip_slno`, `party_name`, `place_from`, `report_at`, `vehicle_name`, `vehicle_id`, `vehicle_no`, `starting_date`, `starting_km`, `starting_time`, `closing_date`, `closing_km`, `closing_time`, `charging_type`, `total_km`, `total_time`, `nh_charges`, `no_of_nh`, `total_price_of_nh`, `detaintion_charges`, `detaintion_hour`, `total_price_of_detaintion`, `price_per_km`, `total_ppk`, `day_charge_td`, `km_cover_in_one_litre_td`, `fuel_rate_td`, `total_price_of_km_cover_in_one_lit_td`, `extra_parking_toll`, `total_amount`, `advance`, `grand_total`) VALUES
(26, '', '111', 'Tarni Travels', 'konark', 'Tarni Travels', 'sapharie', '48', 'OD 02 5555', '2000-01-01', '100', '08:30', '2000-01-01', '1000', '10:56', 'long', '900', '0 days : 2 hours : 26 minutes : 0 seconds', '100', '2', '200', '100', '16', '1600', '100', '90000', '', '', '', '', '100', '91900', '1000', '90900'),
(30, '', '1045', 'sailendu sir', 'puri', 'sailendu sir', 'HondaCity', '51', '8778OD09', '2019-01-01', '100', '08:56', '2019-01-01', '500', '10:56', 'long', '400', '0 days : 2 hours : 0 minutes : 0 seconds', '100', '2', '200', '100', '6', '600', '15', '6000', '', '', '', '', '0', '6800', '800', '6000'),
(31, '', '1046', 'Tarni Travels', 'cuttack', 'Tarni Travels', 'sapharie', '48', 'OD 02 5555', '2019-01-01', '200', '10:56', '2019-01-01', '800', '10:56', 'fixed', '600', '0 days : 0 hours : 0 minutes : 0 seconds', '', '', '', '', '', '', '', '', '', '', '', '', '', '10000', '500', '9500'),
(32, '', '1234567', 'shyam', 'puri', 'surya', 'maruti', '52', 'OD0400', '2019-03-26', '200', '08:00', '2019-03-26', '400', '22:00', 'daybasic', '200', '0 days : 14 hours : 0 minutes : 0 seconds', '400', '0', '0', '', '', '', '', '', '1000', '10', '70', '1400', '100', '2500', '500', '2000'),
(33, '', '1000', 'shyam', 'puri', 'shyam', 'maruti', '52', 'OD0400', '2019-03-26', '100', '08:00', '2019-03-26', '500', '22:00', 'long', '400', '0 days : 14 hours : 0 minutes : 0 seconds', '100', '1', '100', '20', '6', '120', '10', '4000', '', '', '', '', '200', '4420', '20', '4400'),
(34, '', '107', 'sarfaraj', 'khurda', 'sarfaraj', 'volkswagen', '53', 'GFFFSDS2', '2000-01-01', '1000', '08:56', '2000-01-01', '2000', '10:56', 'long', '1000', '0 days : 2 hours : 0 minutes : 0 seconds', '2', '100', '200', '2', '18', '36', '2', '2000', '', '', '', '', '100', '2336', '36', '2300'),
(35, '', '108', 'sarfaraj', 'puri', 'sarfaraj', 'volkswagen', '53', 'GFFFSDS2', '2000-01-01', '2000', '09:00', '2000-01-01', '4000', '10:56', 'daybasic', '2000', '0 days : 1 hours : 56 minutes : 0 seconds', '2', '1', '2', '', '', '', '', '', '2', '2', '10', '10000', '100', '10104', '104', '10000'),
(36, '', '109', 'sarfaraj', 'jajpur', 'sarfaraj', 'volkswagen', '53', 'GFFFSDS2', '2000-01-01', '3000', '10:00', '2000-01-01', '5000', '10:56', 'fixed', '2000', '0 days : 0 hours : 56 minutes : 0 seconds', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', '0', '2'),
(41, '100', '8901', 'surendra kumar sahoo', 'LOCAL', 'MUSA', 'ABCDEFGH', '54', 'OD 02AB 7656', '2019-04-03', '0', '08:15', '2020-01-01', '10000', '10:56', 'long', '10000', '273 days : 2 hours : 41 minutes : 0 seconds', '100', '0', '0', '20', '6354', '127080', '10', '100000', '', '', '', '', '0', '227080', '100', '226980'),
(42, '200', '8902', 'surendra kumar sahoo', 'PURI', 'DAS BABU', 'ABCDEFGH', '54', 'OD 02AB 7656', '2019-04-03', '100', '09:00', '2020-01-01', '10000', '10:56', 'long', '9900', '273 days : 1 hours : 56 minutes : 0 seconds', '100', '0', '0', '20', '6355', '127100', '10', '99000', '', '', '', '', '0', '226100', '2000', '224100');

-- --------------------------------------------------------

--
-- Table structure for table `update_dutyslip_coustomer`
--

CREATE TABLE `update_dutyslip_coustomer` (
  `id` int(11) NOT NULL,
  `dutyslip_slno` varchar(50) NOT NULL,
  `party_name` varchar(50) NOT NULL,
  `vehicle_id` varchar(11) NOT NULL,
  `vehicle_name` varchar(50) NOT NULL,
  `vehicle_no` varchar(50) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `closing_date` varchar(50) NOT NULL,
  `fixed_type` varchar(50) NOT NULL,
  `starting_km` varchar(50) NOT NULL,
  `closing_km` varchar(50) NOT NULL,
  `total_km` varchar(50) NOT NULL,
  `charging_type` varchar(50) NOT NULL,
  `starting_time` varchar(50) NOT NULL,
  `closing_time` varchar(50) NOT NULL,
  `total_time` varchar(50) NOT NULL,
  `place_from` varchar(50) NOT NULL,
  `place_to` varchar(50) NOT NULL,
  `toll_gate_charge` varchar(50) NOT NULL,
  `parking_charge` varchar(50) NOT NULL,
  `report_at` varchar(50) NOT NULL,
  `fixed_price` varchar(50) NOT NULL,
  `price_per_km` varchar(50) NOT NULL,
  `detaination_hour` varchar(50) NOT NULL,
  `tdp` varchar(50) NOT NULL,
  `day_charge` varchar(50) NOT NULL,
  `extra_hour` varchar(50) NOT NULL,
  `total_price_ofextrahour` varchar(50) NOT NULL,
  `no_of_nighthalt` varchar(50) NOT NULL,
  `nighthalt_price` varchar(50) NOT NULL,
  `km_cover_in_one_lit` varchar(50) NOT NULL,
  `fuel_rate` varchar(50) NOT NULL,
  `total_rate_d_cover_in_one_lit` varchar(50) NOT NULL,
  `other_charge` varchar(50) NOT NULL,
  `detaintion_upper_tbl` varchar(50) NOT NULL,
  `night_halt_upper_tbl` varchar(50) NOT NULL,
  `advance_paid_client` varchar(50) NOT NULL,
  `advance_paid_travel` varchar(50) NOT NULL,
  `payble_amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_dutyslip_coustomer`
--

INSERT INTO `update_dutyslip_coustomer` (`id`, `dutyslip_slno`, `party_name`, `vehicle_id`, `vehicle_name`, `vehicle_no`, `start_date`, `closing_date`, `fixed_type`, `starting_km`, `closing_km`, `total_km`, `charging_type`, `starting_time`, `closing_time`, `total_time`, `place_from`, `place_to`, `toll_gate_charge`, `parking_charge`, `report_at`, `fixed_price`, `price_per_km`, `detaination_hour`, `tdp`, `day_charge`, `extra_hour`, `total_price_ofextrahour`, `no_of_nighthalt`, `nighthalt_price`, `km_cover_in_one_lit`, `fuel_rate`, `total_rate_d_cover_in_one_lit`, `other_charge`, `detaintion_upper_tbl`, `night_halt_upper_tbl`, `advance_paid_client`, `advance_paid_travel`, `payble_amount`) VALUES
(23, '111', 'Tarni Travels', '48', 'sapharie', 'OD 02 5555', '2000-01-01', '2020-01-01', '', '100', '1000', '900', 'long', '08:56', '10:56', '7305 days : 2 hours : 0 minutes : 0 seconds', '100', '', '1000', '100', 'Tarni Travels', '', '100', '175304', '17530400', '', '', '', '', '', '', '', '', '', '100', '100', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `update_dutyslip_owner`
--

CREATE TABLE `update_dutyslip_owner` (
  `id` int(11) NOT NULL,
  `dutyslip_slno` varchar(50) NOT NULL,
  `party_name` varchar(50) NOT NULL,
  `vehicle_id` varchar(50) NOT NULL,
  `vehicle_name` varchar(50) NOT NULL,
  `vehicle_no` varchar(50) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `closing_date` varchar(50) NOT NULL,
  `fixed_type` varchar(50) NOT NULL,
  `starting_km` varchar(50) NOT NULL,
  `closing_km` varchar(50) NOT NULL,
  `total_km` varchar(50) NOT NULL,
  `charging_type` varchar(50) NOT NULL,
  `starting_time` varchar(50) NOT NULL,
  `closing_time` varchar(50) NOT NULL,
  `total_time` varchar(50) NOT NULL,
  `place_from` varchar(50) NOT NULL,
  `place_to` varchar(50) NOT NULL,
  `toll_gate_charge` varchar(50) NOT NULL,
  `parking_charge` varchar(50) NOT NULL,
  `report_at` varchar(50) NOT NULL,
  `fixed_price` varchar(50) NOT NULL,
  `price_per_km` varchar(50) NOT NULL,
  `detaination_hour` varchar(50) NOT NULL,
  `tdp` varchar(50) NOT NULL,
  `day_charge` varchar(50) NOT NULL,
  `extra_hour` varchar(50) NOT NULL,
  `total_price_ofextrahour` varchar(50) NOT NULL,
  `no_of_nighthalt` varchar(50) NOT NULL,
  `nighthalt_price` varchar(50) NOT NULL,
  `km_cover_in_one_lit` varchar(50) NOT NULL,
  `fuel_rate` varchar(50) NOT NULL,
  `total_rate_d_cover_in_one_lit` varchar(50) NOT NULL,
  `other_charge` varchar(50) NOT NULL,
  `detaintion_upper_tbl` varchar(50) NOT NULL,
  `night_halt_upper_tbl` varchar(50) NOT NULL,
  `advance_paid_client` varchar(50) NOT NULL,
  `advance_paid_travel` varchar(50) NOT NULL,
  `payble_amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_dutyslip_owner`
--

INSERT INTO `update_dutyslip_owner` (`id`, `dutyslip_slno`, `party_name`, `vehicle_id`, `vehicle_name`, `vehicle_no`, `start_date`, `closing_date`, `fixed_type`, `starting_km`, `closing_km`, `total_km`, `charging_type`, `starting_time`, `closing_time`, `total_time`, `place_from`, `place_to`, `toll_gate_charge`, `parking_charge`, `report_at`, `fixed_price`, `price_per_km`, `detaination_hour`, `tdp`, `day_charge`, `extra_hour`, `total_price_ofextrahour`, `no_of_nighthalt`, `nighthalt_price`, `km_cover_in_one_lit`, `fuel_rate`, `total_rate_d_cover_in_one_lit`, `other_charge`, `detaintion_upper_tbl`, `night_halt_upper_tbl`, `advance_paid_client`, `advance_paid_travel`, `payble_amount`) VALUES
(6, '2', 'kuku', '38', 'gggg', 'gggg', '2019-01-01', '2019-01-01', '', '888', '10000', '9112', 'long', '08:56', '10:56', '0 days : 2 hours : 0 minutes : 0 seconds', 'vgvgghvhg', 'hgj', '100', '100', 'sdff', '', '25', '180', '4500', '', '', '', '10', '250', '', '', '', '100', '25', '25', '100', '100', '232850'),
(7, '3', 'kuku', '38', 'gggg', 'gggg', '2019-01-01', '2019-01-01', '', '190', '2000', '1810', 'long', '08:56', '10:56', '0 days : 2 hours : 0 minutes : 0 seconds', 'jjghhjg', 'jhfghf', '100', '100', 'sdf', '', '25', '34', '850', '', '', '', '10', '250', '', '', '', '1000', '25', '25', '100', '100', '47550'),
(8, '6', 'kuku', '38', 'gggg', 'gggg', '2019-01-01', '2019-01-01', '', '100', '10000', '9900', 'long', '08:56', '10:56', '0 days : 2 hours : 0 minutes : 0 seconds', 'fddfg', 'jghjfgh', '100', '100', 'sdff', '', '12', '196', '2352', '', '', '', '10', '120', '', '', '', '100', '12', '12', '100', '100', '121572');

-- --------------------------------------------------------

--
-- Table structure for table `update_dutyslip_owner_mst`
--

CREATE TABLE `update_dutyslip_owner_mst` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(50) NOT NULL,
  `dutyslip_slno` varchar(50) NOT NULL,
  `party_name` varchar(50) NOT NULL,
  `place_from` varchar(50) NOT NULL,
  `report_at` varchar(50) NOT NULL,
  `vehicle_name` varchar(50) NOT NULL,
  `vehicle_id` varchar(50) NOT NULL,
  `vehicle_no` varchar(50) NOT NULL,
  `starting_date` varchar(50) NOT NULL,
  `starting_km` varchar(50) NOT NULL,
  `starting_time` varchar(50) NOT NULL,
  `closing_date` varchar(50) NOT NULL,
  `closing_km` varchar(50) NOT NULL,
  `closing_time` varchar(50) NOT NULL,
  `charging_type` varchar(50) NOT NULL,
  `total_km` varchar(50) NOT NULL,
  `total_time` varchar(50) NOT NULL,
  `nh_charges` varchar(50) NOT NULL,
  `no_of_nh` varchar(50) NOT NULL,
  `total_price_of_nh` varchar(50) NOT NULL,
  `detaintion_charges` varchar(50) NOT NULL,
  `detaintion_hour` varchar(50) NOT NULL,
  `total_price_of_detaintion` varchar(50) NOT NULL,
  `price_per_km` varchar(50) NOT NULL,
  `total_ppk` varchar(50) NOT NULL,
  `day_charge_td` varchar(50) NOT NULL,
  `km_cover_in_one_litre_td` varchar(50) NOT NULL,
  `fuel_rate_td` varchar(50) NOT NULL,
  `total_price_of_km_cover_in_one_lit_td` varchar(50) NOT NULL,
  `extra_parking_toll` varchar(50) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `advance` varchar(50) NOT NULL,
  `grand_total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_dutyslip_owner_mst`
--

INSERT INTO `update_dutyslip_owner_mst` (`id`, `bill_no`, `dutyslip_slno`, `party_name`, `place_from`, `report_at`, `vehicle_name`, `vehicle_id`, `vehicle_no`, `starting_date`, `starting_km`, `starting_time`, `closing_date`, `closing_km`, `closing_time`, `charging_type`, `total_km`, `total_time`, `nh_charges`, `no_of_nh`, `total_price_of_nh`, `detaintion_charges`, `detaintion_hour`, `total_price_of_detaintion`, `price_per_km`, `total_ppk`, `day_charge_td`, `km_cover_in_one_litre_td`, `fuel_rate_td`, `total_price_of_km_cover_in_one_lit_td`, `extra_parking_toll`, `total_amount`, `advance`, `grand_total`) VALUES
(26, '', '111', 'Tarni Travels', 'konark', 'Tarni Travels', 'sapharie', '48', 'OD 02 5555', '2000-01-01', '100', '08:30', '2000-01-01', '1000', '10:56', 'long', '900', '0 days : 2 hours : 26 minutes : 0 seconds', '100', '2', '200', '100', '16', '1600', '100', '90000', '', '', '', '', '100', '91900', '1000', '90900'),
(27, '', '1213', 'Tarni Travels', 'puri', 'Tarni Travels', 'sapharie', '48', 'OD 02 5555', '2000-01-01', '0100', '11:56', '2000-01-01', '1000', '17:56', 'fixed', '900', '0 days : 6 hours : 0 minutes : 0 seconds', '', '', '', '', '', '', '', '', '', '', '', '', '', '10000', '100', '9900'),
(28, '', '4544', 'siku', 'hgjhg', 'Tarni Travels', 'sapharie', '48', 'OD 02 5555', '2000-01-01', '100', '10:56', '2000-10-01', '10000', '10:56', 'long', '9900', '274 days : 0 hours : 0 minutes : 0 seconds', '100', '2', '200', '100', '6378', '637800', '100', '990000', '', '', '', '', '100', '1628100', '10000', '1618100'),
(30, '', '1045', 'sailendu sir', 'puri', 'sailendu sir', 'HondaCity', '51', '8778OD09', '2019-01-01', '100', '08:56', '2019-01-01', '500', '10:56', 'long', '400', '0 days : 2 hours : 0 minutes : 0 seconds', '100', '2', '200', '100', '6', '600', '15', '6000', '', '', '', '', '0', '6800', '800', '6000'),
(31, '', '1046', 'Tarni Travels', 'cuttack', 'Tarni Travels', 'sapharie', '48', 'OD 02 5555', '2019-01-01', '200', '10:56', '2019-01-01', '800', '10:56', 'fixed', '600', '0 days : 0 hours : 0 minutes : 0 seconds', '', '', '', '', '', '', '', '', '', '', '', '', '', '10000', '500', '9500'),
(32, '', '1234567', 'shyam', 'puri', 'surya', 'maruti', '52', 'OD0400', '2019-03-26', '200', '08:00', '2019-03-26', '400', '22:00', 'daybasic', '200', '0 days : 14 hours : 0 minutes : 0 seconds', '400', '0', '0', '', '', '', '', '', '1000', '10', '70', '1400', '100', '2500', '500', '2000'),
(33, '', '1000', 'shyam', 'puri', 'shyam', 'maruti', '52', 'OD0400', '2019-03-26', '100', '08:00', '2019-03-26', '500', '22:00', 'long', '400', '0 days : 14 hours : 0 minutes : 0 seconds', '100', '1', '100', '20', '6', '120', '10', '4000', '', '', '', '', '200', '4420', '20', '4400'),
(34, '800', '8901', 'surendra kumar sahoo', 'LOCAL', 'MUSA', 'ABCDEFGH', '54', 'OD 02AB 7656', '2019-04-03', '0', '08:15', '2025-01-01', '2000', '10:56', 'long', '2000', '2100 days : 2 hours : 41 minutes : 0 seconds', '50', '0', '0', '10', '50362', '503620', '5', '10000', '', '', '', '', '0', '513620', '1000', '512620'),
(35, '900', '8902', 'surendra kumar sahoo', 'PURI', 'DAS BABU', 'ABCDEFGH', '54', 'OD 02AB 7656', '2019-04-03', '100', '09:00', '2025-01-01', '200', '10:56', 'long', '100', '2100 days : 1 hours : 56 minutes : 0 seconds', '50', '0', '0', '10', '50399', '503990', '5', '500', '', '', '', '', '0', '504490', '200', '504290');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_name`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details`
--

CREATE TABLE `vehicle_details` (
  `id` int(11) NOT NULL,
  `vehicle_id` varchar(50) NOT NULL,
  `vehicle_name` varchar(50) NOT NULL,
  `vehicle_no` varchar(50) NOT NULL,
  `doj` varchar(50) NOT NULL,
  `condition_type` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_details`
--

INSERT INTO `vehicle_details` (`id`, `vehicle_id`, `vehicle_name`, `vehicle_no`, `doj`, `condition_type`, `color`, `fuel`, `owner_name`, `address`) VALUES
(13, '48', 'sapharie', 'OD 02 5555', '', 'AC', '9437276713', 'Disel', 'sambit kumar sahoo', 'sankhachila'),
(14, '48', 'sapharie', 'w4343', '', 'AC', 'werwr', 'Petrol', 'wefrr', 'werw'),
(15, '49', 'asdasd', '34534', '', 'AC', '435', 'Disel', '43534', '345'),
(16, '50', 'BOLERO', 'OD0658', '', 'AC', '657655896', 'Disel', 'KIRAN', 'CUTTACK'),
(17, '51', 'HondaCity', '8778OD09', '', 'AC', '889550926', 'Disel', 'Amit', 'CUTTACK'),
(18, '52', 'maruti', 'OD0400', '', 'AC', '67686696', 'Disel', 'surya', 'bbsr'),
(19, '53', 'volkswagen', 'GFFFSDS2', '', 'AC', 'xcvsdfasdf', 'Disel', 'sujit', 'JAJPUR'),
(20, '54', 'ABCDEFGH', 'OD 02AB 7656', '', 'AC', '9437464677', 'Disel', 'SURENDRA KUMAR SAHOO', 'SATYANAGAR BHUBANESWAR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aacorporate`
--
ALTER TABLE `aacorporate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_dutyslip_tarini`
--
ALTER TABLE `add_dutyslip_tarini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advance`
--
ALTER TABLE `advance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_bill`
--
ALTER TABLE `corporate_bill`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `corporate_bill_client`
--
ALTER TABLE `corporate_bill_client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `corporate_coustomer_payment_slip`
--
ALTER TABLE `corporate_coustomer_payment_slip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_info`
--
ALTER TABLE `corporate_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_owner_payment_slip`
--
ALTER TABLE `corporate_owner_payment_slip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cor_carcharges_owner`
--
ALTER TABLE `cor_carcharges_owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cor_coustomer_carcharges`
--
ALTER TABLE `cor_coustomer_carcharges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coustomer`
--
ALTER TABLE `coustomer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coustomer_prusrty`
--
ALTER TABLE `coustomer_prusrty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customercarcharges`
--
ALTER TABLE `customercarcharges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_payment`
--
ALTER TABLE `customer_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_payment_slip`
--
ALTER TABLE `customer_payment_slip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duitysliprecord`
--
ALTER TABLE `duitysliprecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duty_slip`
--
ALTER TABLE `duty_slip`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `duty_slip_corporate`
--
ALTER TABLE `duty_slip_corporate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `duty_slip_hotel`
--
ALTER TABLE `duty_slip_hotel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelcarcharges`
--
ALTER TABLE `hotelcarcharges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_payment_slip`
--
ALTER TABLE `hotel_payment_slip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insertproduct`
--
ALTER TABLE `insertproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_dutyslip`
--
ALTER TABLE `issue_dutyslip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officebill`
--
ALTER TABLE `officebill`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ownercarcharges`
--
ALTER TABLE `ownercarcharges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ownercarcharges_new`
--
ALTER TABLE `ownercarcharges_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner_payment`
--
ALTER TABLE `owner_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner_payment_slip`
--
ALTER TABLE `owner_payment_slip`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `owner_payment_slip_new`
--
ALTER TABLE `owner_payment_slip_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pratical`
--
ALTER TABLE `pratical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_history`
--
ALTER TABLE `reservation_history`
  ADD PRIMARY KEY (`rh_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellitems`
--
ALTER TABLE `sellitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trans_advance`
--
ALTER TABLE `trans_advance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_dutyslip_costomer_mst`
--
ALTER TABLE `update_dutyslip_costomer_mst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_dutyslip_coustomer`
--
ALTER TABLE `update_dutyslip_coustomer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_dutyslip_owner`
--
ALTER TABLE `update_dutyslip_owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_dutyslip_owner_mst`
--
ALTER TABLE `update_dutyslip_owner_mst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aacorporate`
--
ALTER TABLE `aacorporate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `add_dutyslip_tarini`
--
ALTER TABLE `add_dutyslip_tarini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `advance`
--
ALTER TABLE `advance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `corporate_bill`
--
ALTER TABLE `corporate_bill`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `corporate_bill_client`
--
ALTER TABLE `corporate_bill_client`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `corporate_coustomer_payment_slip`
--
ALTER TABLE `corporate_coustomer_payment_slip`
  MODIFY `id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `corporate_info`
--
ALTER TABLE `corporate_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `corporate_owner_payment_slip`
--
ALTER TABLE `corporate_owner_payment_slip`
  MODIFY `id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coustomer`
--
ALTER TABLE `coustomer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `coustomer_prusrty`
--
ALTER TABLE `coustomer_prusrty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customercarcharges`
--
ALTER TABLE `customercarcharges`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `issue_dutyslip`
--
ALTER TABLE `issue_dutyslip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `ownercarcharges`
--
ALTER TABLE `ownercarcharges`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pratical`
--
ALTER TABLE `pratical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `update_dutyslip_costomer_mst`
--
ALTER TABLE `update_dutyslip_costomer_mst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `update_dutyslip_coustomer`
--
ALTER TABLE `update_dutyslip_coustomer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `update_dutyslip_owner`
--
ALTER TABLE `update_dutyslip_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `update_dutyslip_owner_mst`
--
ALTER TABLE `update_dutyslip_owner_mst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
