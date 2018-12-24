-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 01:35 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_distro`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `id_bobot` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `id_kriteria`, `bobot`) VALUES
(15, 4, 30),
(14, 2, 20),
(13, 5, 10),
(12, 3, 40);

-- --------------------------------------------------------

--
-- Stand-in structure for view `bobot_kriteria`
-- (See below for the actual view)
--
CREATE TABLE `bobot_kriteria` (
`id_bobot` int(11)
,`bobot` int(11)
,`id_kriteria` int(11)
,`nama_kriteria` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `cobauji`
-- (See below for the actual view)
--
CREATE TABLE `cobauji` (
`id_nilai` int(11)
,`id_alt` int(11)
,`id_bobot` int(11)
,`nilai` int(11)
,`id_kriteria` int(11)
,`nilaiinput` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `cobauji2`
-- (See below for the actual view)
--
CREATE TABLE `cobauji2` (
`id_nilai` int(11)
,`id_alt` int(11)
,`id_bobot` int(11)
,`id_kriteria` int(11)
,`hasil` decimal(33,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `hasilakhir`
-- (See below for the actual view)
--
CREATE TABLE `hasilakhir` (
`id_alt` int(11)
,`hasilsumvektor` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `md`
-- (See below for the actual view)
--
CREATE TABLE `md` (
`id_nilai` int(11)
,`id_alt` int(11)
,`id_bobot` int(11)
,`nilai` int(11)
,`nilaiinput` int(11)
,`selisih` decimal(33,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `md2`
-- (See below for the actual view)
--
CREATE TABLE `md2` (
`id_bobot` int(11)
,`hasil` decimal(33,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_alt` int(11) NOT NULL,
  `id_bobot` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_alt`, `id_bobot`, `nilai`) VALUES
(84, 11, 13, 65),
(83, 11, 15, 60),
(82, 11, 12, 70),
(91, 12, 15, 80),
(81, 11, 14, 50),
(80, 10, 13, 60),
(79, 10, 15, 65),
(90, 12, 12, 70),
(78, 10, 12, 70),
(77, 10, 14, 60),
(76, 9, 13, 80),
(75, 9, 15, 80),
(74, 9, 12, 80),
(73, 9, 14, 85),
(72, 8, 13, 75),
(71, 8, 15, 70),
(92, 12, 13, 80),
(68, 8, 12, 80),
(89, 12, 14, 90),
(67, 8, 14, 80);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pangkatbobot`
-- (See below for the actual view)
--
CREATE TABLE `pangkatbobot` (
`id_bobot` int(11)
,`id_kriteria` int(11)
,`pangkat` decimal(36,4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `perbobot`
-- (See below for the actual view)
--
CREATE TABLE `perbobot` (
`jmlbobot` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `rangkingsaw`
-- (See below for the actual view)
--
CREATE TABLE `rangkingsaw` (
`hasil` decimal(65,8)
,`id_alt` int(11)
,`nama_alt` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `saw1`
-- (See below for the actual view)
--
CREATE TABLE `saw1` (
`nilaimax` int(11)
,`id_kriteria` int(11)
,`id_nilai` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `saw2`
-- (See below for the actual view)
--
CREATE TABLE `saw2` (
`hasil` decimal(36,4)
,`id_nilai` int(11)
,`id_alt` int(11)
,`nama_alt` varchar(100)
,`nama_kriteria` varchar(100)
,`id_kriteria` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `saw3`
-- (See below for the actual view)
--
CREATE TABLE `saw3` (
`hasilkali` decimal(65,8)
,`hasil` decimal(36,4)
,`id_nilai` int(11)
,`id_alt` int(11)
,`nama_alt` varchar(100)
,`nama_kriteria` varchar(100)
,`id_kriteria` int(11)
,`id_bobot` int(11)
,`pangkat` decimal(36,4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sinkron`
-- (See below for the actual view)
--
CREATE TABLE `sinkron` (
`id_nilai` int(11)
,`id_alt` int(11)
,`id_bobot` int(11)
,`nilai` int(11)
,`nilaiinput` int(11)
,`selisih` decimal(33,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sumvektor`
-- (See below for the actual view)
--
CREATE TABLE `sumvektor` (
`sumvektorv` double
);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_alternatif`
--

CREATE TABLE `tabel_alternatif` (
  `id_alt` int(11) NOT NULL,
  `nama_alt` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_alternatif`
--

INSERT INTO `tabel_alternatif` (`id_alt`, `nama_alt`, `keterangan`) VALUES
(8, '3 Second', 'Kaos'),
(9, 'MACBETH', 'Kaos'),
(10, 'Polo', 'Kaos'),
(11, 'PSD', 'Kaos'),
(12, 'Adidas', 'Kaos');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kriteria`
--

CREATE TABLE `tabel_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kriteria`
--

INSERT INTO `tabel_kriteria` (`id_kriteria`, `nama_kriteria`, `keterangan`) VALUES
(2, 'jumlah konsumen', 'lebih banyak peminatnya'),
(3, 'kualitas', 'kualitas bagus dan terjamin'),
(4, 'material', 'Bahan yang digunakan awet dan kuat'),
(5, 'desain', 'model bagus dan menarik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uji`
--

CREATE TABLE `tbl_uji` (
  `id_uji` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uji`
--

INSERT INTO `tbl_uji` (`id_uji`, `id_kriteria`, `nilai`) VALUES
(58, 5, 60),
(57, 4, 70),
(56, 3, 80),
(55, 2, 90);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ujiuas`
-- (See below for the actual view)
--
CREATE TABLE `ujiuas` (
`id_nilai` int(11)
,`id_alt` int(11)
,`id_bobot` int(11)
,`nilai` int(11)
,`nilaiinput` int(11)
,`selisih` decimal(33,0)
,`hasilsaw` decimal(65,8)
,`hasilsumvektor` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ujiuas2`
-- (See below for the actual view)
--
CREATE TABLE `ujiuas2` (
`id_nilai` int(11)
,`id_alt` int(11)
,`id_bobot` int(11)
,`nilai` int(11)
,`nilaiinput` int(11)
,`selisih` decimal(33,0)
,`hasilsaw` decimal(65,8)
,`hasilsumvektor` double
,`maxsaw` decimal(65,8)
,`maxwp` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ujiuas_1`
-- (See below for the actual view)
--
CREATE TABLE `ujiuas_1` (
`id_nilai` int(11)
,`id_alt` int(11)
,`id_bobot` int(11)
,`nilai` int(11)
,`nilaiinput` int(11)
,`selisih` decimal(33,0)
,`hasilsaw` decimal(65,8)
,`hasilsumvektor` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vektors`
-- (See below for the actual view)
--
CREATE TABLE `vektors` (
`id_nilai` int(11)
,`id_alt` int(11)
,`id_bobot` int(11)
,`hasilvektors` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vektorsnew`
-- (See below for the actual view)
--
CREATE TABLE `vektorsnew` (
`hasil` double
,`id_alt` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vektorsnewcoba`
-- (See below for the actual view)
--
CREATE TABLE `vektorsnewcoba` (
`hasil` double
,`id_alt` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vektorv`
-- (See below for the actual view)
--
CREATE TABLE `vektorv` (
`id_alt` int(11)
,`vektorv` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `wp2`
-- (See below for the actual view)
--
CREATE TABLE `wp2` (
`id_nilai` int(11)
,`id_alt` int(11)
,`id_bobot` int(11)
,`nilai` int(11)
,`nilaiinput` int(11)
,`selisih` decimal(33,0)
,`hasilsumvektor` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `wplast`
-- (See below for the actual view)
--
CREATE TABLE `wplast` (
`id_nilai` int(11)
,`id_alt` int(11)
,`id_bobot` int(11)
,`nilai` int(11)
,`nilaiinput` int(11)
,`selisih` decimal(33,0)
,`hasilsumvektor` double
,`maxwp` double
);

-- --------------------------------------------------------

--
-- Structure for view `bobot_kriteria`
--
DROP TABLE IF EXISTS `bobot_kriteria`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bobot_kriteria`  AS  select `bobot`.`id_bobot` AS `id_bobot`,`bobot`.`bobot` AS `bobot`,`tabel_kriteria`.`id_kriteria` AS `id_kriteria`,`tabel_kriteria`.`nama_kriteria` AS `nama_kriteria` from (`bobot` join `tabel_kriteria`) where (`bobot`.`id_kriteria` = `tabel_kriteria`.`id_kriteria`) ;

-- --------------------------------------------------------

--
-- Structure for view `cobauji`
--
DROP TABLE IF EXISTS `cobauji`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cobauji`  AS  select `nilai`.`id_nilai` AS `id_nilai`,`nilai`.`id_alt` AS `id_alt`,`nilai`.`id_bobot` AS `id_bobot`,`nilai`.`nilai` AS `nilai`,`tbl_uji`.`id_kriteria` AS `id_kriteria`,`tbl_uji`.`nilai` AS `nilaiinput` from ((`nilai` join `bobot_kriteria`) join `tbl_uji`) where ((`nilai`.`id_bobot` = `bobot_kriteria`.`id_bobot`) and (`bobot_kriteria`.`id_kriteria` = `tbl_uji`.`id_kriteria`)) group by `nilai`.`id_nilai` ;

-- --------------------------------------------------------

--
-- Structure for view `cobauji2`
--
DROP TABLE IF EXISTS `cobauji2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cobauji2`  AS  select `cobauji`.`id_nilai` AS `id_nilai`,`cobauji`.`id_alt` AS `id_alt`,`cobauji`.`id_bobot` AS `id_bobot`,`cobauji`.`id_kriteria` AS `id_kriteria`,abs(sum((`cobauji`.`nilai` - `cobauji`.`nilaiinput`))) AS `hasil` from `cobauji` group by `cobauji`.`id_nilai` ;

-- --------------------------------------------------------

--
-- Structure for view `hasilakhir`
--
DROP TABLE IF EXISTS `hasilakhir`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hasilakhir`  AS  select `vektorv`.`id_alt` AS `id_alt`,sum((`vektorv`.`vektorv` / `sumvektor`.`sumvektorv`)) AS `hasilsumvektor` from (`vektorv` join `sumvektor`) group by `vektorv`.`id_alt` ;

-- --------------------------------------------------------

--
-- Structure for view `md`
--
DROP TABLE IF EXISTS `md`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `md`  AS  select `nilai`.`id_nilai` AS `id_nilai`,`nilai`.`id_alt` AS `id_alt`,`nilai`.`id_bobot` AS `id_bobot`,`nilai`.`nilai` AS `nilai`,`tbl_uji`.`nilai` AS `nilaiinput`,abs(sum((`tbl_uji`.`nilai` - `nilai`.`nilai`))) AS `selisih` from ((`tbl_uji` join `nilai`) join `bobot_kriteria`) where ((`tbl_uji`.`id_kriteria` = `bobot_kriteria`.`id_kriteria`) and (`bobot_kriteria`.`id_bobot` = `nilai`.`id_bobot`)) group by `nilai`.`id_nilai` ;

-- --------------------------------------------------------

--
-- Structure for view `md2`
--
DROP TABLE IF EXISTS `md2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `md2`  AS  select `md`.`id_bobot` AS `id_bobot`,min(`md`.`selisih`) AS `hasil` from `md` group by `md`.`id_bobot` ;

-- --------------------------------------------------------

--
-- Structure for view `pangkatbobot`
--
DROP TABLE IF EXISTS `pangkatbobot`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pangkatbobot`  AS  select `bobot`.`id_bobot` AS `id_bobot`,`bobot`.`id_kriteria` AS `id_kriteria`,sum((`bobot`.`bobot` / `perbobot`.`jmlbobot`)) AS `pangkat` from (`bobot` join `perbobot`) group by `bobot`.`id_bobot` ;

-- --------------------------------------------------------

--
-- Structure for view `perbobot`
--
DROP TABLE IF EXISTS `perbobot`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `perbobot`  AS  select sum(`bobot`.`bobot`) AS `jmlbobot` from `bobot` ;

-- --------------------------------------------------------

--
-- Structure for view `rangkingsaw`
--
DROP TABLE IF EXISTS `rangkingsaw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rangkingsaw`  AS  select sum(`saw3`.`hasilkali`) AS `hasil`,`saw3`.`id_alt` AS `id_alt`,`saw3`.`nama_alt` AS `nama_alt` from `saw3` group by `saw3`.`id_alt` ;

-- --------------------------------------------------------

--
-- Structure for view `saw1`
--
DROP TABLE IF EXISTS `saw1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `saw1`  AS  select max(`nilai`.`nilai`) AS `nilaimax`,`bobot`.`id_kriteria` AS `id_kriteria`,`nilai`.`id_nilai` AS `id_nilai` from (`bobot` join `nilai`) where (`bobot`.`id_bobot` = `nilai`.`id_bobot`) group by `bobot`.`id_kriteria` ;

-- --------------------------------------------------------

--
-- Structure for view `saw2`
--
DROP TABLE IF EXISTS `saw2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `saw2`  AS  select sum((`nilai`.`nilai` / `saw1`.`nilaimax`)) AS `hasil`,`nilai`.`id_nilai` AS `id_nilai`,`tabel_alternatif`.`id_alt` AS `id_alt`,`tabel_alternatif`.`nama_alt` AS `nama_alt`,`tabel_kriteria`.`nama_kriteria` AS `nama_kriteria`,`tabel_kriteria`.`id_kriteria` AS `id_kriteria` from ((((`nilai` join `bobot`) join `saw1`) join `tabel_alternatif`) join `tabel_kriteria`) where ((`nilai`.`id_bobot` = `bobot`.`id_bobot`) and (`bobot`.`id_kriteria` = `saw1`.`id_kriteria`) and (`nilai`.`id_alt` = `tabel_alternatif`.`id_alt`) and (`bobot`.`id_kriteria` = `tabel_kriteria`.`id_kriteria`)) group by `nilai`.`id_nilai` order by `tabel_alternatif`.`id_alt` ;

-- --------------------------------------------------------

--
-- Structure for view `saw3`
--
DROP TABLE IF EXISTS `saw3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `saw3`  AS  select (`saw2`.`hasil` * `pangkatbobot`.`pangkat`) AS `hasilkali`,`saw2`.`hasil` AS `hasil`,`saw2`.`id_nilai` AS `id_nilai`,`saw2`.`id_alt` AS `id_alt`,`saw2`.`nama_alt` AS `nama_alt`,`saw2`.`nama_kriteria` AS `nama_kriteria`,`saw2`.`id_kriteria` AS `id_kriteria`,`pangkatbobot`.`id_bobot` AS `id_bobot`,`pangkatbobot`.`pangkat` AS `pangkat` from (`saw2` join `pangkatbobot`) where (`saw2`.`id_kriteria` = `pangkatbobot`.`id_kriteria`) ;

-- --------------------------------------------------------

--
-- Structure for view `sinkron`
--
DROP TABLE IF EXISTS `sinkron`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sinkron`  AS  select `md`.`id_nilai` AS `id_nilai`,`md`.`id_alt` AS `id_alt`,`md`.`id_bobot` AS `id_bobot`,`md`.`nilai` AS `nilai`,`md`.`nilaiinput` AS `nilaiinput`,`md`.`selisih` AS `selisih` from (`md` join `md2`) where ((`md`.`id_bobot` = `md2`.`id_bobot`) and (`md`.`selisih` = `md2`.`hasil`)) ;

-- --------------------------------------------------------

--
-- Structure for view `sumvektor`
--
DROP TABLE IF EXISTS `sumvektor`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sumvektor`  AS  select sum(`vektorv`.`vektorv`) AS `sumvektorv` from `vektorv` ;

-- --------------------------------------------------------

--
-- Structure for view `ujiuas`
--
DROP TABLE IF EXISTS `ujiuas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ujiuas`  AS  select `sinkron`.`id_nilai` AS `id_nilai`,`sinkron`.`id_alt` AS `id_alt`,`sinkron`.`id_bobot` AS `id_bobot`,`sinkron`.`nilai` AS `nilai`,`sinkron`.`nilaiinput` AS `nilaiinput`,`sinkron`.`selisih` AS `selisih`,`rangkingsaw`.`hasil` AS `hasilsaw`,`hasilakhir`.`hasilsumvektor` AS `hasilsumvektor` from ((`sinkron` join `rangkingsaw`) join `hasilakhir`) where ((`sinkron`.`id_alt` = `rangkingsaw`.`id_alt`) and (`sinkron`.`id_alt` = `hasilakhir`.`id_alt`)) group by `sinkron`.`id_nilai` ;

-- --------------------------------------------------------

--
-- Structure for view `ujiuas2`
--
DROP TABLE IF EXISTS `ujiuas2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ujiuas2`  AS  select `ujiuas`.`id_nilai` AS `id_nilai`,`ujiuas`.`id_alt` AS `id_alt`,`ujiuas`.`id_bobot` AS `id_bobot`,`ujiuas`.`nilai` AS `nilai`,`ujiuas`.`nilaiinput` AS `nilaiinput`,`ujiuas`.`selisih` AS `selisih`,`ujiuas`.`hasilsaw` AS `hasilsaw`,`ujiuas`.`hasilsumvektor` AS `hasilsumvektor`,max(`ujiuas`.`hasilsaw`) AS `maxsaw`,max(`ujiuas`.`hasilsumvektor`) AS `maxwp` from `ujiuas` ;

-- --------------------------------------------------------

--
-- Structure for view `ujiuas_1`
--
DROP TABLE IF EXISTS `ujiuas_1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ujiuas_1`  AS  select `ujiuas`.`id_nilai` AS `id_nilai`,`ujiuas`.`id_alt` AS `id_alt`,`ujiuas`.`id_bobot` AS `id_bobot`,`ujiuas`.`nilai` AS `nilai`,`ujiuas`.`nilaiinput` AS `nilaiinput`,`ujiuas`.`selisih` AS `selisih`,`ujiuas`.`hasilsaw` AS `hasilsaw`,`ujiuas`.`hasilsumvektor` AS `hasilsumvektor` from `ujiuas` order by `ujiuas`.`hasilsaw` desc ;

-- --------------------------------------------------------

--
-- Structure for view `vektors`
--
DROP TABLE IF EXISTS `vektors`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vektors`  AS  select `nilai`.`id_nilai` AS `id_nilai`,`nilai`.`id_alt` AS `id_alt`,`nilai`.`id_bobot` AS `id_bobot`,pow(`nilai`.`nilai`,`pangkatbobot`.`pangkat`) AS `hasilvektors` from (`nilai` join `pangkatbobot`) group by `nilai`.`id_nilai` ;

-- --------------------------------------------------------

--
-- Structure for view `vektorsnew`
--
DROP TABLE IF EXISTS `vektorsnew`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vektorsnew`  AS  select exp(log(`vektors`.`hasilvektors`)) AS `hasil`,`vektors`.`id_alt` AS `id_alt` from `vektors` group by `vektors`.`id_alt` ;

-- --------------------------------------------------------

--
-- Structure for view `vektorsnewcoba`
--
DROP TABLE IF EXISTS `vektorsnewcoba`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vektorsnewcoba`  AS  select log(`vektors`.`hasilvektors`) AS `hasil`,`vektors`.`id_alt` AS `id_alt` from `vektors` group by `vektors`.`id_alt` ;

-- --------------------------------------------------------

--
-- Structure for view `vektorv`
--
DROP TABLE IF EXISTS `vektorv`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vektorv`  AS  select `vektors`.`id_alt` AS `id_alt`,exp(sum(log(`vektors`.`hasilvektors`))) AS `vektorv` from `vektors` group by `vektors`.`id_alt` ;

-- --------------------------------------------------------

--
-- Structure for view `wp2`
--
DROP TABLE IF EXISTS `wp2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `wp2`  AS  select `sinkron`.`id_nilai` AS `id_nilai`,`sinkron`.`id_alt` AS `id_alt`,`sinkron`.`id_bobot` AS `id_bobot`,`sinkron`.`nilai` AS `nilai`,`sinkron`.`nilaiinput` AS `nilaiinput`,`sinkron`.`selisih` AS `selisih`,`hasilakhir`.`hasilsumvektor` AS `hasilsumvektor` from (`sinkron` join `hasilakhir`) where (`sinkron`.`id_alt` = `hasilakhir`.`id_alt`) group by `sinkron`.`id_nilai` ;

-- --------------------------------------------------------

--
-- Structure for view `wplast`
--
DROP TABLE IF EXISTS `wplast`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `wplast`  AS  select `wp2`.`id_nilai` AS `id_nilai`,`wp2`.`id_alt` AS `id_alt`,`wp2`.`id_bobot` AS `id_bobot`,`wp2`.`nilai` AS `nilai`,`wp2`.`nilaiinput` AS `nilaiinput`,`wp2`.`selisih` AS `selisih`,`wp2`.`hasilsumvektor` AS `hasilsumvektor`,max(`wp2`.`hasilsumvektor`) AS `maxwp` from `wp2` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tabel_alternatif`
--
ALTER TABLE `tabel_alternatif`
  ADD PRIMARY KEY (`id_alt`);

--
-- Indexes for table `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tbl_uji`
--
ALTER TABLE `tbl_uji`
  ADD PRIMARY KEY (`id_uji`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `tabel_alternatif`
--
ALTER TABLE `tabel_alternatif`
  MODIFY `id_alt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_uji`
--
ALTER TABLE `tbl_uji`
  MODIFY `id_uji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
