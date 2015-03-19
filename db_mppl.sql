-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 19 Mar 2015 pada 05.36
-- Versi Server: 5.5.34
-- Versi PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_mppl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `level`) VALUES
('root', 'a152e841783914146e4bcd4f39100686', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `idberita` int(11) NOT NULL AUTO_INCREMENT,
  `judulberita` varchar(255) NOT NULL,
  `isiberita` text NOT NULL,
  `kategoriberita` int(11) NOT NULL,
  `gambarberita` varchar(255) NOT NULL,
  `waktuberita` datetime NOT NULL,
  PRIMARY KEY (`idberita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`idberita`, `judulberita`, `isiberita`, `kategoriberita`, `gambarberita`, `waktuberita`) VALUES
(1, 'tes', 'cuman ngetes', 1, '11067768_968904349809395_5919183639235047022_n1.jpg', '2015-03-16 09:24:51'),
(2, 'berita bergambar', 'gambarrr', 1, 'photoshop-paint-color-pallete-logo-icon223.jpg', '2015-03-16 15:03:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `idgallery` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(6) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `waktu` date NOT NULL,
  PRIMARY KEY (`idgallery`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`idgallery`, `jenis`, `judul`, `link`, `foto`, `waktu`) VALUES
(1, 'foto', 'gundam', '', '10988436_739776269473766_7484294162248070271_n.jpg', '2015-03-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idkategori` int(11) NOT NULL AUTO_INCREMENT,
  `namakategori` varchar(40) NOT NULL,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namakategori`) VALUES
(1, 'tes saja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komenthread`
--

CREATE TABLE IF NOT EXISTS `komenthread` (
  `idkomen` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idthread` int(11) NOT NULL,
  `isikomen` text NOT NULL,
  `waktuthread` datetime NOT NULL,
  PRIMARY KEY (`idkomen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `komenthread`
--

INSERT INTO `komenthread` (`idkomen`, `iduser`, `idthread`, `isikomen`, `waktuthread`) VALUES
(1, 1, 9, 'Ketika kawan mahasiswa dengan biaya UKT mahal tampak lusuh serba pas-pasan dan kawan mahasiswa bidik misi tampak glamour rajin ngehedon. ', '2015-03-19 00:00:00'),
(2, 2, 9, 'Hati ini teriris-iris. Apa lagi melihat kawan mahasiswa yang masuk kuliah jalur undangan (mengandalkan nilai rapot, integritas sekolah, dan track record alumni) dibekali beasiswa bidik misi, justru kuliah bolos-bolosan tidak karuan. Semacam menutup mata terhadap perjuangan kawannya yang kena biaya UKT mahal karena masuk jalur mandiri (babak belur latihan dan belajar tes sana-sini), sebagai jalur akhir, yang bisa jadi untuk menempuh jalur itupun harus mengorbankan segala yang dimiliki. Kawan, rasanya tindakan seperti itu bak mendzalimi kawan mahasiswa yang lain, juga masyarakat Indonesia yang rajin bayar pajak. ', '2015-03-19 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personalisasi`
--

CREATE TABLE IF NOT EXISTS `personalisasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `katadepan` varchar(300) NOT NULL,
  `rata` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `personalisasi`
--

INSERT INTO `personalisasi` (`id`, `katadepan`, `rata`, `deskripsi`) VALUES
(1, 'Tes', 'right', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanmasuk`
--

CREATE TABLE IF NOT EXISTS `pesanmasuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `thread`
--

CREATE TABLE IF NOT EXISTS `thread` (
  `idthread` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `judulthread` varchar(255) NOT NULL,
  `isithread` text NOT NULL,
  `gambarthread` varchar(255) NOT NULL,
  `waktuthread` datetime NOT NULL,
  `Pinned` tinyint(1) NOT NULL,
  PRIMARY KEY (`idthread`),
  UNIQUE KEY `idthread` (`idthread`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `thread`
--

INSERT INTO `thread` (`idthread`, `iduser`, `judulthread`, `isithread`, `gambarthread`, `waktuthread`, `Pinned`) VALUES
(1, -1, 'judul', 'isi thread', '11067768_968904349809395_5919183639235047022_n1.jpg', '2015-03-16 09:47:11', 1),
(2, -1, 'tes2', 'cuman tes2', '', '2015-03-16 14:01:16', 1),
(3, -1, 'asd', 'qwe', 'photoshop-paint-color-pallete-logo-icon223.jpg', '2015-03-16 15:00:34', 1),
(4, -1, 'tes iduser di thread', 'id user di thread<br>admin = -1<br>user biasa = sesuai id usernya', 'index.jpg', '2015-03-19 08:54:48', 1),
(5, -1, 'coba lagi', 'asdasddsad', '11073253_10206083300747378_967993247235580601_n.jpg', '2015-03-19 08:58:56', 1),
(6, -1, 'coba gambar', '', '019575bf141743833560178078_700w_0.jpg', '2015-03-19 09:02:07', 1),
(7, -1, 'asdasdasd', 'asdasdasd<img alt="" src="http://image.jeuxvideo.com/medias/142547/1425468318-9108-card.jpg"><br>asdasdasd', 'index.jpg', '2015-03-19 09:11:11', 1),
(8, -1, 'adasdasdasd', 'asdasdasd<br><img alt="" src="http://image.jeuxvideo.com/medias/142547/1425468318-9108-card.jpg"><br>asdasdasdads<br><img alt="" src="http://image.jeuxvideo.com/medias/142547/1425468318-9108-card.jpg"><br>asdasdasd<br>asd\n', 'index.jpg', '2015-03-19 09:11:37', 1),
(9, -1, 'duh', '\n<img alt="" src="http://assets22.pokemon.com/assets/cms2/img/pokedex/full/007.png"><br>\ncuk<br>\n<img alt="" src="http://assets.vg247.com/current//2013/10/Pokemon-Charizard_Official_Art_300dpi.jpg"><br>', 'MegaManX6_1.jpg', '2015-03-19 09:14:49', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `nama`, `angkatan`, `username`, `password`, `gambar`, `enabled`) VALUES
(1, 'Fadrian', 2012, 'fadrianto', 'fadri12', 'gundam.jpg', 1),
(2, 'Iqbal', 2012, 'iqbal', 'iqbalt', 'dummy.jpg', 1),
(3, 'Dinar', 2012, 'dinar', 'dinar12', 'Koala.jpg', 1),
(4, 'asd', 1212, 'asdasdasd', 'asdasdasd', 'index.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
