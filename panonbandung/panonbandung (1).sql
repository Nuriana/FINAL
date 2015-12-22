-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2015 at 04:51 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `panonbandung`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  `pasword` varchar(75) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `pasword`) VALUES
(1, 'bankareta2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `data_item`
--

CREATE TABLE IF NOT EXISTS `data_item` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_lokasi` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `data_item`
--

INSERT INTO `data_item` (`id_item`, `id_user`, `id_kategori`, `judul`, `deskripsi`, `tgl_input`, `id_lokasi`, `status`) VALUES
(1, 1, 1, 'wisata curug cimahi', 'abshvdddkjffvajfvbajfavifjva fvbja fvja vkjafv ajfv afhva fvhababshvdddkjffvajfvbajfavifjva fvbja fvja vkjafv ajfv afhva fvhababshvdddkjffvajfvbajfavifjva fvbja fvja vkjafv ajfv afhva fvhababshvdddkjffvajfvbajfavifjva fvbja fvja vkjafv ajfv afhva fvh', '2015-10-31 17:00:00', 3, 1),
(2, 1, 1, 'Wisata kebunraya IR.H.Juanda', 'qwewwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdvwvcccdvsdv', '2015-11-01 16:00:31', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_item_foto`
--

CREATE TABLE IF NOT EXISTS `data_item_foto` (
  `id_item_foto` int(11) NOT NULL AUTO_INCREMENT,
  `id_item` int(11) NOT NULL,
  `nama_foto` text NOT NULL,
  `path` varchar(45) NOT NULL,
  PRIMARY KEY (`id_item_foto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `data_item_foto`
--

INSERT INTO `data_item_foto` (`id_item_foto`, `id_item`, `nama_foto`, `path`) VALUES
(1, 1, '1.jpg', 'foto/'),
(2, 2, '2.jpg', 'foto/');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE IF NOT EXISTS `data_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(80) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pasword` varchar(75) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id_user`, `nama`, `email`, `pasword`, `status`) VALUES
(1, 'nuriana', 'bankareta2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'kuliner'),
(2, 'tempat wisata');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `id_lokasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(20) NOT NULL,
  PRIMARY KEY (`id_lokasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`) VALUES
(1, 'kota bandung'),
(2, 'kab Bandung Timur'),
(3, 'kab Bandung barat'),
(4, 'kab Bandung Selatan'),
(5, 'kab Bandung Utara');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
