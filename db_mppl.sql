-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 28 Mar 2015 pada 08.29
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_mppl`
--
CREATE DATABASE IF NOT EXISTS `db_mppl` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_mppl`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`idberita`, `judulberita`, `isiberita`, `kategoriberita`, `gambarberita`, `waktuberita`) VALUES
(2, 'berita bergambar', 'gambarrr', 1, 'photoshop-paint-color-pallete-logo-icon223.jpg', '2015-03-16 15:03:25'),
(3, 'Semangat baru HIMASA Jember dengan pengurus baru', 'HIMASA Jember akhirnya mempunyai pemimpin baru. Setelah Anam Arofi yang telah memimpin HIMASA seama 1 tahun lebih, akhirnya digantikan oleh Hairul Wasik. Pemilihan sendri dilakukan dengan sistem pemilu HIKARU. 2 orang yang mengajukan diri sebagai ketua umum HIMASA adalah Hairul Wasik dengan nomer urut 1, dan Panji Rimawan dengan nomer urut 2 &nbsp;Akhirnya Wasik lah yang menjadi pemenang dengan prosentase 52%.', 5, 'himasa.jpg', '2015-03-26 13:25:31'),
(4, 'Hasil Try Out Metallio 2015', 'HIMASA kembali beraksi dengan membantu calon-calon mahasiswa terbaik asal Jember. Pada tanggal 25 Januari 2015 kemarin, HIMASA berhasil melaksanakan&nbsp;event terbesar mereka, yaitu METALLIO 2015. METALLIO 2015 sendiri diikuti oleh sekitar 600 siswa SMA/SMK-sederajat se-Kabupaten Jember. Try Out dan bedah kampus yang diadakan di SMAN 4 Jember ini bertujuan untuk membiasakan siswa dalam atmosfer SBMPTN nantinya. Try Out METALLIO sendiri diadakan dalam 2 kategori, yaitu IPA dan IPS. Hasil Try Out dapat dilihat di&nbsp;<a href=\\"https://drive.google.com/file/d/0B3qclqd5KpcfLXdJMmtNeWxaSk0/view\\" target=\\"\\" rel=\\"\\">https://drive.google.com/file/d/0B3qclqd5KpcfLXdJMmtNeWxaSk0/view</a>&nbsp;untuk kategori IPA dan&nbsp;<a href=\\"https://drive.google.com/file/d/0B3qclqd5KpcfLUY1cElJVlJNVmM/view\\" target=\\"\\" rel=\\"\\">https://drive.google.com/file/d/0B3qclqd5KpcfLUY1cElJVlJNVmM/view</a>&nbsp;untuk kategori IPS', 3, 'B8KVG2-CIAAtLtT.jpg', '2015-03-27 11:15:41'),
(5, 'Jember Fashion Carnival, Pameran e Wong Jember', 'Siapa yang tidak kenal Jember Fashion Carnival?&nbsp;sebuah even karnaval busana yang setiap tahun digelar di&nbsp;<a href="http://id.wikipedia.org/wiki/Kabupaten_Jember" target="" rel="">Kabupaten Jember</a>,&nbsp;<a href="http://id.wikipedia.org/wiki/Jawa_Timur" target="" rel="">Jawa Timur</a>. Karnaval ini digagas oleh Dynand Fariz yang juga pendiri JFC Center.<a href="http://id.wikipedia.org/wiki/Jember_Fashion_Carnaval#cite_note-1" target="" rel="">[1]</a><span>Sebanyak 400 an peserta berkarnaval, ber<i>fashion run way</i>&nbsp;dan&nbsp;<i>dance</i>, di jalan utama kota Jember disaksikan oleh ratusan ribu penonton di kanan dan kiri jalan. Mereka terbagi dalam 8&nbsp;<i>defile</i>&nbsp;yang masing-masing defile mencerminkan tren busana pada tahun yang bersangkutan. Defile pertama adalah defile Archipelago yang mengangkat tema busana nasional dari daerah tertentu secara berkala seperti Jawa, Bali, madura, dayak, papua,Sumatera, dan seterusnya. Defile lainnya mengangkat tema fashion yang sedang trend apakah dari suatu negara, kelompok tertentu, film, kejadian atau peristiwa global lainnya. Semua busana dibuat dalam bentuk kostum yang kesemuanya dikompetisikan untuk meraih penghargaan-penghargaan.</span>Arena yang digunakan untuk menggelar JFC adalah jalan utama Kota Jember sepanjang 3,6 kilometer. So, tunggu apa lagi. Yuk datang di Jember Fashion Carnival, dari Jember, Oleh Jember, Untuk Indonesia :)', 4, 'jfc.jpg', '2015-03-28 10:01:05');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`idgallery`, `jenis`, `judul`, `link`, `foto`, `waktu`) VALUES
(3, 'foto', 'Baksos 2013', '', '3.jpg', '2015-03-23'),
(4, 'foto', 'Kumpul HIMASA', '', '1.jpg', '2015-03-23'),
(5, 'foto', 'Metallio 2013', '', '7.jpg', '2015-03-23'),
(6, 'foto', 'Metallio 2014', '', 'DSC_0130.jpg', '2015-03-23'),
(7, 'foto', 'Jaket HIMASA', '', 'jaket-himasa2.jpg', '2015-03-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idkategori` int(11) NOT NULL AUTO_INCREMENT,
  `namakategori` varchar(40) NOT NULL,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namakategori`) VALUES
(3, 'Event'),
(4, 'Khas Jember'),
(5, 'News');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `komenthread`
--

INSERT INTO `komenthread` (`idkomen`, `iduser`, `idthread`, `isikomen`, `waktuthread`) VALUES
(1, 13, 10, 'Salam kenal, saya Agus dari angkatan HIMASA 1996', '2015-03-28 03:01:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personalisasi`
--

CREATE TABLE IF NOT EXISTS `personalisasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `katadepan` varchar(300) NOT NULL,
  `rata` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `sambutan` text NOT NULL,
  `sejarah` text NOT NULL,
  `organigram` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `wallpaper` varchar(255) NOT NULL,
  `kontak` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `personalisasi`
--

INSERT INTO `personalisasi` (`id`, `katadepan`, `rata`, `deskripsi`, `visi`, `misi`, `sambutan`, `sejarah`, `organigram`, `logo`, `wallpaper`, `kontak`) VALUES
(1, 'HIMASA Jember', 'right', 'SELAMAT DATANG DI WEBSITE HIMASA JEMBER', 'Visi', 'Misi', 'Sambutan', 'Sejarah', 'megaman_x6_collage_by_gintoki333sakata-d5xn82i.jpg', '1403066146331.jpg', 'wallpaper.jpg', 'CP : Fadrian (0852323232)\r\nemail : himasa@gmail.com ');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `pesanmasuk`
--

INSERT INTO `pesanmasuk` (`id`, `nama`, `email`, `website`, `pesan`, `waktu`) VALUES
(1, 'pablo', 'pentol@gmail.com', 'pentol.com', 'halo semua', '2015-03-20');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `thread`
--

INSERT INTO `thread` (`idthread`, `iduser`, `judulthread`, `isithread`, `gambarthread`, `waktuthread`, `Pinned`) VALUES
(10, 12, 'Perkenalan', 'Forum ini buat perkenalan buat anggota baru maupun alumni, yaa :)\r\nMari menjaga HIMASA tetap jaya!!', '', '2015-03-27 07:08:06', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `nama`, `email`, `angkatan`, `username`, `password`, `gambar`, `enabled`) VALUES
(12, 'Fadrian Merdianto', 'fadrimerdianto@gmail.com', 2012, 'fadrimerdianto', 'hehe', '', 1),
(13, 'Agus Subiantoro', 'aguss@gmail.com', 1996, 'aguss', 'hehe', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
