--
-- Table structure for table `mobiles`
--

CREATE TABLE IF NOT EXISTS `mobiles` (
  `mobileid` varchar(20) PRIMARY KEY,
  `brand` varchar(25) NOT NULL,
  `model` varchar(20) NOT NULL,
  `imei1` bigint(18) DEFAULT NULL,
  `imei2` bigint(18) DEFAULT NULL,
  `indate` date NOT NULL,
  `dprate` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`mobileid`, `brand`, `model`, `imei1`, `imei2`, `indate`, `dprate`) VALUES
('LNK6_1', 'LENOVO', 'K6POWER', 2147483647, 2147483647, '2017-10-11', 9400),
('LNK6_2', 'LENOVO', 'K6POWER', 123456780009876, 99099888873456, '2017-10-11', 9400);
