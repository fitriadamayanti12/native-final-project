-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 06:28 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(5) NOT NULL,
  `nip_admin` varchar(20) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `pendidikan_terakhir` varchar(10) NOT NULL,
  `status_kepegawaian` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nip_admin`, `nama_admin`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `pendidikan_terakhir`, `status_kepegawaian`, `jabatan`, `golongan`, `alamat`, `no_hp`) VALUES
(1, '1985080220009011006', 'Deky Firdaus', 'Merangin', '1989-08-17', 'Laki-laki', 'S1', 'PNS', 'Staf', 'III/c', 'Pasar Atas, Bangko', '');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(5) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `isi` longtext NOT NULL,
  `penulis` varchar(40) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `penulis`, `photo`, `tanggal`) VALUES
(1, 'Pretest PPG Guru PAI Menjangkau lebih 11.000 Guru', 'Pelaksanaan sertifikasi bagi guru Pendidikan Agama Islam (PAI) pada Sekolah melalui jalur pendidikan profesi dipastikan akan dilaksanakan pada awal tahun 2019. Sebab pada tahun 2018 ini, anggaran PPG hanya teralokasikan untuk membiayai pelaksanaan seleksi akademik calon peserta Pendidikan Profesi Guru (PPG) yang disebut dengan pretest. Pretest adalah amanat Pasal 5 Peraturan Menteri Ristek - Dikti Nomor 55 Tahun 2017 tentang Standar Pendidikan Guru bahwa sebelum para guru mengikuti pendidikan profesi harus mengikuti seleksi akademik (pretest).\r\n<br>\r\n<br>\r\nJangkauan pelaksanaan pretest bagi guru PAI tahun ini adalah seluruh guru yang ditetapkan terhitung sebelum tahun 2006 yang belum tersertifikasi. Jika merujuk pada short list terakhir, jumlah guru yang ditetapkan sebelum tahun 2005 mencapai lebih dari 11.000 guru. Dari sejumlah tersebut, kisaran 2000 guru akan dilibatkan dalam pelaksanaan sertifikasi tahun 2019.\r\n<br>\r\n<br>\r\nRencana yang disepakati bahwa pelaksanaan pretest adalah pada tanggal 19-20 Desember 2018. Para guru yang terhitung telah masuk short list sebagai calon peserta sertifikasi melalui jalur pendidikan pada tahun 2019 agar mempersiapkan lebih serius ujian pretest sehingga masuk dalam group yang dapat mengikuti sertifikasi pada tahun 2019.\r\n<br>\r\n<br>\r\nSumber: http://pendis.kemenag.go.id', 'Admin', '1.jpg', '2019-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE IF NOT EXISTS `berkas` (
  `id_berkas` int(5) NOT NULL,
  `nuptk` varchar(30) NOT NULL,
  `nuptk_file` varchar(300) NOT NULL,
  `sk` varchar(300) NOT NULL,
  `ijazah` varchar(300) NOT NULL,
  `transkrip_nilai` varchar(300) NOT NULL,
  `surat_mengajar` varchar(300) NOT NULL,
  `tanggal_upload` date DEFAULT NULL,
  `status_berkas` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `nuptk`, `nuptk_file`, `sk`, `ijazah`, `transkrip_nilai`, `surat_mengajar`, `tanggal_upload`, `status_berkas`) VALUES
(1, '3436764665300012', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', '2019-03-17', 'Lengkap'),
(2, '0233759660210093', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', '2019-03-18', 'Lengkap'),
(3, '5850761662300062', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', '2019-03-18', 'Lengkap'),
(4, '3957750653200002', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', '2019-03-18', 'Lengkap'),
(5, '1249760661120003', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', '2019-03-18', 'Lengkap'),
(6, '6442758660300043', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', '2019-03-18', 'Lengkap'),
(7, '1647760662300012', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', 'ceklis.jpg', '2019-03-18', 'Lengkap');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_admin`
--

CREATE TABLE IF NOT EXISTS `daftar_admin` (
  `id_admin` int(5) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_admin`
--

INSERT INTO `daftar_admin` (`id_admin`, `nama_lengkap`, `username`, `email`, `password`, `tanggal`) VALUES
(1, 'Deky Firdaus', '1985080220009011006', 'dekyfirdaus@gmail.com', '12345678mnbvc', '2019-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pimpinan`
--

CREATE TABLE IF NOT EXISTS `daftar_pimpinan` (
  `id_pimpinan` int(5) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_pimpinan`
--

INSERT INTO `daftar_pimpinan` (`id_pimpinan`, `nama_lengkap`, `username`, `email`, `password`, `tanggal`) VALUES
(1, 'Drs. H. Marwan', '1985080220009011006', 'drs_h_marwan@gmail.com', '987654lkjhg', '2019-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_user`
--

CREATE TABLE IF NOT EXISTS `daftar_user` (
  `id_user` int(5) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_user`
--

INSERT INTO `daftar_user` (`id_user`, `nama_lengkap`, `username`, `email`, `password`, `tanggal`) VALUES
(1, 'Susi Arzalina', '3436764665300012', 'susiarzalina@gmail.com', '1234asdfg', '2019-03-17'),
(2, 'Yarmaneli, S. Pd.I', '0233759660210093', 'yarmaneli@gmail.com', '56789qwert', '2019-03-17'),
(3, 'Desmarianti', '5850761662300062', 'desmarianti@gmail.com', '123zxcvbnm', '2019-03-18'),
(4, 'Mardus, S.Ag.', '3957750653200002', 'mardus@gmail.com', '4567yuio', '2019-03-18'),
(6, 'A. Malik, S.Pd.I.', '198209172007101003', 'a.malik@gmail.com', '345sdfgh', '2019-03-18'),
(7, 'Fitri Yanti', '198011102007012017', 'fitriyanti@gmail.com', 'yanti678xy', '2019-03-18'),
(8, 'Husnul Bayan', '198203152006042021', 'husnulbayan@gmail.com', 'bayan80031', '2019-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `guru_pai`
--

CREATE TABLE IF NOT EXISTS `guru_pai` (
  `id_guru` int(5) NOT NULL,
  `nip_guru` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `pendidikan_terakhir` varchar(10) NOT NULL,
  `program_studi` varchar(60) NOT NULL,
  `status_kepegawaian` varchar(20) NOT NULL,
  `status_penugasan` varchar(20) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru_pai`
--

INSERT INTO `guru_pai` (`id_guru`, `nip_guru`, `nama_guru`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `pendidikan_terakhir`, `program_studi`, `status_kepegawaian`, `status_penugasan`, `golongan`, `alamat`, `no_hp`) VALUES
(1, '', 'Susi Arzalina ', 'Desa Pulau Tengah ', '1986-01-04', 'Perempuan', 'S1', 'PAI', 'Non-PNS', 'Diperbantukan', '', 'Desa Pulau Tengah ', '082374842667'),
(2, '', 'Yarmaneli, S. Pd.I.', 'Kerinci ', '1981-09-01', 'Perempuan', 'S1', 'PAI', 'Non-PNS', 'Tidak Tetap', '', 'Pamenang', ''),
(3, '', 'Desmarianti', 'Ds. Bukit', '1983-05-18', 'Perempuan', 'S1', 'PAI', 'Non-PNS', 'Tetap', '', 'Desa Bukit Perentak', '082176433305'),
(4, '', 'Mardus, S.Ag.', 'Pulau Rengas', '1972-06-26', 'Laki-laki', 'S1', 'PAI', 'Non-PNS', 'Tetap', '', 'Biuku Tanjung', '082375771138'),
(5, '198209172007101003', 'A. Malik, S.Pd.I.', 'Pulau Raman', '1982-09-17', 'Laki-laki', 'S1', 'PAI', 'PNS', 'Tetap', 'II/b', 'Desa Pulau Raman', '081366045582'),
(6, '198011102007012017', 'Fitri Yanti', 'Bungo Tanjung', '1980-11-10', 'Perempuan', 'S1', 'PAI', 'PNS', 'Diperbantukan', 'III/a', 'Jln. Bangko-Kerinci', '081274332423'),
(7, '198203152006042021', 'Husnul Bayan', 'Muara Panco', '1982-03-15', 'Laki-laki', 'S1', 'PAI', 'PNS', 'Tetap', 'III/a', 'Desa Muara Panco Barat', '082184111103');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id_kontak` int(5) NOT NULL,
  `nama_pengunjung` varchar(70) NOT NULL,
  `email_pengunjung` varchar(80) NOT NULL,
  `subjek_pesan` varchar(100) NOT NULL,
  `isi_pesan` text NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama_pengunjung`, `email_pengunjung`, `subjek_pesan`, `isi_pesan`, `tanggal`) VALUES
(1, 'Fitria Damayanti', 'fitria.damayanti.996@gmail.com', 'Saran', 'Harap untuk dapat meningkatkan tampilan website ke depannya. Terima kasih.', '2019-03-17'),
(2, 'Lisa Aulia', 'lisaiskandar@gmail.com', 'Keluhan', 'Belum optimalnya penggunaan website sehingga guru PAI masih kesulitan dalam mengurus sertifikasi. Harap untuk dapat dioptimalkan.', '2019-03-17');

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporan_belum`
--
CREATE TABLE IF NOT EXISTS `laporan_belum` (
`nip_guru` varchar(30)
,`nuptk_guru` varchar(30)
,`tempat_mengajar` varchar(50)
,`pendidikan_terakhir` varchar(10)
,`status_penugasan` varchar(20)
,`status_kepegawaian` varchar(20)
,`golongan` varchar(10)
,`total_jam` int(5)
,`status_berkas` varchar(100)
,`status_sertifikasi` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporan_guru`
--
CREATE TABLE IF NOT EXISTS `laporan_guru` (
`nip_guru` varchar(20)
,`nama_guru` varchar(50)
,`tempat_lahir` varchar(30)
,`tanggal_lahir` date
,`jenis_kelamin` varchar(12)
,`pendidikan_terakhir` varchar(10)
,`program_studi` varchar(60)
,`status_kepegawaian` varchar(20)
,`status_penugasan` varchar(20)
,`golongan` varchar(10)
,`tempat_mengajar` varchar(50)
,`jumlah_siswa_diajar` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporan_honorer`
--
CREATE TABLE IF NOT EXISTS `laporan_honorer` (
`nip_guru` varchar(20)
,`nuptk_guru` varchar(30)
,`nama_guru` varchar(50)
,`tempat_mengajar` varchar(50)
,`status_berkas` varchar(100)
,`status_sertifikasi` varchar(100)
,`status_kepegawaian` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporan_jumlah`
--
CREATE TABLE IF NOT EXISTS `laporan_jumlah` (
`npsn_sekolah` varchar(30)
,`nama_sekolah` varchar(40)
,`kecamatan` varchar(50)
,`jumlah_seluruh_siswa` int(10)
,`jumlah_siswa_muslim` int(10)
,`jumlah_guru_sertifikasi` decimal(23,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporan_lulus`
--
CREATE TABLE IF NOT EXISTS `laporan_lulus` (
`nuptk_guru` varchar(30)
,`nip_guru` varchar(30)
,`nama_guru` varchar(50)
,`tempat_mengajar` varchar(50)
,`total_jam` int(5)
,`status_berkas` varchar(100)
,`status_sertifikasi` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporan_pns`
--
CREATE TABLE IF NOT EXISTS `laporan_pns` (
`nip_guru` varchar(20)
,`nuptk_guru` varchar(30)
,`nama_guru` varchar(50)
,`tempat_mengajar` varchar(50)
,`status_berkas` varchar(100)
,`status_sertifikasi` varchar(100)
,`status_kepegawaian` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporan_sertifikasi`
--
CREATE TABLE IF NOT EXISTS `laporan_sertifikasi` (
`nuptk_guru` varchar(30)
,`nip_guru` varchar(30)
,`nama_guru` varchar(50)
,`npsn_sekolah` varchar(30)
,`jam_mengajar` int(5)
,`jam_tambahan` int(5)
,`jam_sekolah_lain` int(5)
,`total_jam` int(5)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporan_user`
--
CREATE TABLE IF NOT EXISTS `laporan_user` (
`id_guru` int(5)
,`nip_guru` varchar(20)
,`nuptk_guru` varchar(30)
,`nama_guru` varchar(50)
,`email` varchar(40)
,`password` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `pemberitahuan`
--

CREATE TABLE IF NOT EXISTS `pemberitahuan` (
  `id_pemberitahuan` int(5) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `isi_pemberitahuan` longtext NOT NULL,
  `photo` varchar(250) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemberitahuan`
--

INSERT INTO `pemberitahuan` (`id_pemberitahuan`, `subjek`, `isi_pemberitahuan`, `photo`, `tanggal`) VALUES
(1, 'Pemberitahuan ', 'Diharapkan kepada guru PAI yang belum melengkapi berkas untuk segera dapat melengkapi berkas dengan mengupload berkas yang telah ditentukan. Data sertifikasi akan segera diproses bila berkas telah lengkap. ', '2345.jpg', '2019-03-17'),
(2, 'Pengumuman', 'Kepada seluruh guru PAI yang telah mendaftar pada website Sistem Informasi Sertifikasi untuk dapat mengisi data dengan cermat dan teliti sehingga tidak terjadi kesalahan dalam penginputan data yang akan berdampak terhadap proses data sertifikasi. Diharapkan pengumuman ini dapat diperhatikan dengan baik.', 'sertifikasi.jpg', '2019-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan`
--

CREATE TABLE IF NOT EXISTS `pimpinan` (
  `id_pimpinan` int(5) NOT NULL,
  `nip_pimpinan` varchar(20) NOT NULL,
  `nama_pimpinan` varchar(40) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `pendidikan_terakhir` varchar(10) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pimpinan`
--

INSERT INTO `pimpinan` (`id_pimpinan`, `nip_pimpinan`, `nama_pimpinan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `pendidikan_terakhir`, `golongan`, `alamat`, `no_hp`) VALUES
(1, '196411011991031001', 'Drs. H. Marwan', 'Merangin', '1964-11-01', 'Laki-laki', 'S1', 'IV/a', 'Merangin', '');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `id_sekolah` int(5) NOT NULL,
  `npsn_sekolah` varchar(30) NOT NULL,
  `nama_sekolah` varchar(40) NOT NULL,
  `alamat_sekolah` varchar(60) NOT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `kode_pos` int(7) NOT NULL,
  `kelurahan` varchar(80) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `jumlah_seluruh_siswa` int(10) NOT NULL,
  `jumlah_siswa_muslim` int(10) NOT NULL,
  `kurikulum` varchar(30) NOT NULL,
  `kepala_sekolah` varchar(35) NOT NULL,
  `status_sekolah` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `npsn_sekolah`, `nama_sekolah`, `alamat_sekolah`, `no_telp`, `kode_pos`, `kelurahan`, `kecamatan`, `jumlah_seluruh_siswa`, `jumlah_siswa_muslim`, `kurikulum`, `kepala_sekolah`, `status_sekolah`) VALUES
(1, '10501056', 'SDN 22/VI Pulau Tengah I', 'Desa Pulau Tengah ', '', 37372, 'Pulau Tengah ', 'Jangkat', 61, 61, 'KTSP 2006', 'Nurmigawati', 'Negeri'),
(2, '10501172', 'SDN 100/VI Pamenang ', 'Jl. Rasau ', '', 37357, 'Rasau', 'Pamenang', 398, 349, 'KTSP 2006', 'Sumiati', 'Negeri'),
(3, '10501175', 'SDN 103/VI Bukit Perentak', 'Desa Bukit Perentak', '', 37361, 'Bukit Perentak', 'Pangkalan Jambu', 76, 76, 'KTSP 2006', 'Leli Marlina', 'Negeri'),
(4, '10501361', 'SMAN I Merangin', 'Jl. Gunung Masurai No. 105 Pasar Atas', '', 37312, 'Pasar Atas', 'Bangko', 895, 868, 'Kurikulum 2013', 'Gaga Yuly Hesti', 'Negeri'),
(5, '10501057', 'SDN 135/VI Pulau Raman', 'Desa Pulau Raman', '', 37371, 'Pulau Raman', 'Muara Siau', 92, 92, 'KTSP 2006', 'A. Malik, S.Pd.I.', 'Negeri'),
(6, '10501060', 'SDN 132/VI Sungai Jering', 'Jln. Bangko-Kerinci', '', 37361, 'Bungo Tanjung', 'Pangkalan Jambu', 93, 93, 'KTSP 2006', 'Nira Liarni', 'Negeri'),
(7, '10501061', 'SDN 131/VI Muara Panco II', 'Muara Panco Timur ', '', 37361, 'Muara Panco Timur ', 'Renah Pembarap', 140, 140, 'KTSP 2006', 'Ismail', 'Negeri');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasi`
--

CREATE TABLE IF NOT EXISTS `sertifikasi` (
  `id_sertifikasi` int(5) NOT NULL,
  `nip_guru` varchar(30) NOT NULL,
  `nuptk_guru` varchar(30) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `tempat_mengajar` varchar(50) NOT NULL,
  `jumlah_siswa_diajar` int(10) NOT NULL,
  `jam_mengajar` int(5) DEFAULT NULL,
  `tugas_tambahan` varchar(40) NOT NULL,
  `jam_tambahan` int(5) DEFAULT NULL,
  `sekolah_lain` varchar(50) NOT NULL,
  `jam_sekolah_lain` int(5) DEFAULT NULL,
  `total_jam` int(5) DEFAULT NULL,
  `status_sertifikasi` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikasi`
--

INSERT INTO `sertifikasi` (`id_sertifikasi`, `nip_guru`, `nuptk_guru`, `nama_guru`, `tempat_mengajar`, `jumlah_siswa_diajar`, `jam_mengajar`, `tugas_tambahan`, `jam_tambahan`, `sekolah_lain`, `jam_sekolah_lain`, `total_jam`, `status_sertifikasi`) VALUES
(1, '', '3436764665300012', 'Susi Arzalina ', 'SDN 22/VI Pulau Tengah I', 61, 24, 'Tidak Ada', 0, '-', 0, 24, 'Lulus'),
(2, '', '0233759660210093', 'Yarmaneli, S. Pd.I.', 'SDN 100/VI Pamenang ', 185, 24, 'Tidak Ada', 0, '-', 0, 24, 'Lulus'),
(3, '', '5850761662300062', 'Desmarianti', 'SDN 103/VI Bukit Perentak', 76, 24, 'Tidak Ada', 0, 'SDN 103/VI Bukit Perentak lain', 0, 24, 'Lulus'),
(4, '', '3957750653200002', 'Mardus, S.Ag.', 'SMAN I Merangin', 270, 16, 'Pembimbing Rohani Islam', 12, 'SMAN I Merangin lain', 0, 28, 'Lulus'),
(5, '198209172007101003', '1249760661120003', 'A. Malik, S.Pd.I.', 'SDN 135/VI Pulau Raman', 92, 24, 'Tidak Ada', 0, '-', 0, 24, 'Lulus'),
(6, '198011102007012017', '6442758660300043', 'Fitri Yanti', 'SDN 132/VI Sungai Jering', 93, 24, 'Tidak Ada', 0, '-', 0, 24, 'Lulus'),
(7, '198203152006042021', '1647760662300012', 'Husnul Bayan', 'SDN 131/VI Muara Panco II', 111, 18, 'Pembimbing Rohani Islam', 12, '-', 0, 30, 'Lulus');

-- --------------------------------------------------------

--
-- Structure for view `laporan_belum`
--
DROP TABLE IF EXISTS `laporan_belum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan_belum` AS select `sertifikasi`.`nip_guru` AS `nip_guru`,`sertifikasi`.`nuptk_guru` AS `nuptk_guru`,`sertifikasi`.`tempat_mengajar` AS `tempat_mengajar`,`guru_pai`.`pendidikan_terakhir` AS `pendidikan_terakhir`,`guru_pai`.`status_penugasan` AS `status_penugasan`,`guru_pai`.`status_kepegawaian` AS `status_kepegawaian`,`guru_pai`.`golongan` AS `golongan`,`sertifikasi`.`total_jam` AS `total_jam`,`berkas`.`status_berkas` AS `status_berkas`,`sertifikasi`.`status_sertifikasi` AS `status_sertifikasi` from ((`sertifikasi` join `guru_pai` on((`sertifikasi`.`id_sertifikasi` = `guru_pai`.`id_guru`))) join `berkas` on(((`sertifikasi`.`id_sertifikasi` = `berkas`.`id_berkas`) and (`sertifikasi`.`nuptk_guru` = `berkas`.`nuptk`)))) where (`sertifikasi`.`status_sertifikasi` = 'Belum Lulus');

-- --------------------------------------------------------

--
-- Structure for view `laporan_guru`
--
DROP TABLE IF EXISTS `laporan_guru`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan_guru` AS select `guru_pai`.`nip_guru` AS `nip_guru`,`guru_pai`.`nama_guru` AS `nama_guru`,`guru_pai`.`tempat_lahir` AS `tempat_lahir`,`guru_pai`.`tanggal_lahir` AS `tanggal_lahir`,`guru_pai`.`jenis_kelamin` AS `jenis_kelamin`,`guru_pai`.`pendidikan_terakhir` AS `pendidikan_terakhir`,`guru_pai`.`program_studi` AS `program_studi`,`guru_pai`.`status_kepegawaian` AS `status_kepegawaian`,`guru_pai`.`status_penugasan` AS `status_penugasan`,`guru_pai`.`golongan` AS `golongan`,`sertifikasi`.`tempat_mengajar` AS `tempat_mengajar`,`sertifikasi`.`jumlah_siswa_diajar` AS `jumlah_siswa_diajar` from (`guru_pai` join `sertifikasi` on(((`guru_pai`.`id_guru` = `sertifikasi`.`id_sertifikasi`) and (`guru_pai`.`nip_guru` = `sertifikasi`.`nip_guru`))));

-- --------------------------------------------------------

--
-- Structure for view `laporan_honorer`
--
DROP TABLE IF EXISTS `laporan_honorer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan_honorer` AS select `guru_pai`.`nip_guru` AS `nip_guru`,`sertifikasi`.`nuptk_guru` AS `nuptk_guru`,`sertifikasi`.`nama_guru` AS `nama_guru`,`sertifikasi`.`tempat_mengajar` AS `tempat_mengajar`,`berkas`.`status_berkas` AS `status_berkas`,`sertifikasi`.`status_sertifikasi` AS `status_sertifikasi`,`guru_pai`.`status_kepegawaian` AS `status_kepegawaian` from ((`guru_pai` join `sertifikasi` on(((`guru_pai`.`id_guru` = `sertifikasi`.`id_sertifikasi`) and (`guru_pai`.`nip_guru` = `sertifikasi`.`nip_guru`)))) join `berkas` on(((`sertifikasi`.`id_sertifikasi` = `berkas`.`id_berkas`) and (`sertifikasi`.`nuptk_guru` = `berkas`.`nuptk`)))) where (`guru_pai`.`status_kepegawaian` = 'Non-PNS');

-- --------------------------------------------------------

--
-- Structure for view `laporan_jumlah`
--
DROP TABLE IF EXISTS `laporan_jumlah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan_jumlah` AS select `sekolah`.`npsn_sekolah` AS `npsn_sekolah`,`sekolah`.`nama_sekolah` AS `nama_sekolah`,`sekolah`.`kecamatan` AS `kecamatan`,`sekolah`.`jumlah_seluruh_siswa` AS `jumlah_seluruh_siswa`,`sekolah`.`jumlah_siswa_muslim` AS `jumlah_siswa_muslim`,sum((`sertifikasi`.`status_sertifikasi` = 'Lulus')) AS `jumlah_guru_sertifikasi` from (`sekolah` join `sertifikasi` on((`sertifikasi`.`id_sertifikasi` = `sekolah`.`id_sekolah`))) group by `sekolah`.`nama_sekolah`;

-- --------------------------------------------------------

--
-- Structure for view `laporan_lulus`
--
DROP TABLE IF EXISTS `laporan_lulus`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan_lulus` AS select `sertifikasi`.`nuptk_guru` AS `nuptk_guru`,`sertifikasi`.`nip_guru` AS `nip_guru`,`sertifikasi`.`nama_guru` AS `nama_guru`,`sertifikasi`.`tempat_mengajar` AS `tempat_mengajar`,`sertifikasi`.`total_jam` AS `total_jam`,`berkas`.`status_berkas` AS `status_berkas`,`sertifikasi`.`status_sertifikasi` AS `status_sertifikasi` from (`sertifikasi` join `berkas` on(((`sertifikasi`.`id_sertifikasi` = `berkas`.`id_berkas`) and (`sertifikasi`.`nuptk_guru` = `berkas`.`nuptk`)))) where (`sertifikasi`.`status_sertifikasi` = 'Lulus');

-- --------------------------------------------------------

--
-- Structure for view `laporan_pns`
--
DROP TABLE IF EXISTS `laporan_pns`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan_pns` AS select `guru_pai`.`nip_guru` AS `nip_guru`,`sertifikasi`.`nuptk_guru` AS `nuptk_guru`,`sertifikasi`.`nama_guru` AS `nama_guru`,`sertifikasi`.`tempat_mengajar` AS `tempat_mengajar`,`berkas`.`status_berkas` AS `status_berkas`,`sertifikasi`.`status_sertifikasi` AS `status_sertifikasi`,`guru_pai`.`status_kepegawaian` AS `status_kepegawaian` from ((`guru_pai` join `sertifikasi` on(((`guru_pai`.`id_guru` = `sertifikasi`.`id_sertifikasi`) and (`guru_pai`.`nip_guru` = `sertifikasi`.`nip_guru`)))) join `berkas` on(((`sertifikasi`.`id_sertifikasi` = `berkas`.`id_berkas`) and (`sertifikasi`.`nuptk_guru` = `berkas`.`nuptk`)))) where (`guru_pai`.`status_kepegawaian` = 'PNS');

-- --------------------------------------------------------

--
-- Structure for view `laporan_sertifikasi`
--
DROP TABLE IF EXISTS `laporan_sertifikasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan_sertifikasi` AS select `sertifikasi`.`nuptk_guru` AS `nuptk_guru`,`sertifikasi`.`nip_guru` AS `nip_guru`,`sertifikasi`.`nama_guru` AS `nama_guru`,`sekolah`.`npsn_sekolah` AS `npsn_sekolah`,`sertifikasi`.`jam_mengajar` AS `jam_mengajar`,`sertifikasi`.`jam_tambahan` AS `jam_tambahan`,`sertifikasi`.`jam_sekolah_lain` AS `jam_sekolah_lain`,`sertifikasi`.`total_jam` AS `total_jam` from (`sertifikasi` join `sekolah` on((`sertifikasi`.`id_sertifikasi` = `sekolah`.`id_sekolah`)));

-- --------------------------------------------------------

--
-- Structure for view `laporan_user`
--
DROP TABLE IF EXISTS `laporan_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan_user` AS select `guru_pai`.`id_guru` AS `id_guru`,`guru_pai`.`nip_guru` AS `nip_guru`,`sertifikasi`.`nuptk_guru` AS `nuptk_guru`,`guru_pai`.`nama_guru` AS `nama_guru`,`daftar_user`.`email` AS `email`,`daftar_user`.`password` AS `password` from ((`guru_pai` join `sertifikasi` on(((`guru_pai`.`id_guru` = `sertifikasi`.`id_sertifikasi`) and (`guru_pai`.`nip_guru` = `sertifikasi`.`nip_guru`)))) join `daftar_user` on((`sertifikasi`.`id_sertifikasi` = `daftar_user`.`id_user`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `daftar_admin`
--
ALTER TABLE `daftar_admin`
  ADD PRIMARY KEY (`id_admin`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `daftar_pimpinan`
--
ALTER TABLE `daftar_pimpinan`
  ADD PRIMARY KEY (`id_pimpinan`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `daftar_user`
--
ALTER TABLE `daftar_user`
  ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `guru_pai`
--
ALTER TABLE `guru_pai`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `pemberitahuan`
--
ALTER TABLE `pemberitahuan`
  ADD PRIMARY KEY (`id_pemberitahuan`);

--
-- Indexes for table `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`id_pimpinan`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  ADD PRIMARY KEY (`id_sertifikasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `daftar_admin`
--
ALTER TABLE `daftar_admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `daftar_pimpinan`
--
ALTER TABLE `daftar_pimpinan`
  MODIFY `id_pimpinan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `daftar_user`
--
ALTER TABLE `daftar_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `guru_pai`
--
ALTER TABLE `guru_pai`
  MODIFY `id_guru` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pemberitahuan`
--
ALTER TABLE `pemberitahuan`
  MODIFY `id_pemberitahuan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pimpinan`
--
ALTER TABLE `pimpinan`
  MODIFY `id_pimpinan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  MODIFY `id_sertifikasi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
