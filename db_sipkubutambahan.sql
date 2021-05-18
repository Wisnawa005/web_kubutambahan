-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 09:42 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipkubutambahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_balas_komentar`
--

CREATE TABLE `tb_balas_komentar` (
  `id_balas_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_komentar` int(11) NOT NULL,
  `deskripsi_balas_komentar` varchar(500) NOT NULL,
  `date_balas_komentar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `id_pengelola` int(11) NOT NULL,
  `judul_berita` varchar(300) CHARACTER SET latin1 NOT NULL,
  `deskripsi_berita` longtext NOT NULL,
  `foto` text CHARACTER SET latin1 NOT NULL,
  `date_berita` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `id_pengelola`, `judul_berita`, `deskripsi_berita`, `foto`, `date_berita`) VALUES
(1, 2, 'Penyaluran BLT DD Tahap Kedelapan (VIII) Bulan Nopember 2020', 'Senin, (30/11) Pemdes Bukti melaksanakan Penyaluran BLT-Dana Desa tahap kedelapan (VIII) dengan Nilai Empat puluh delapan juta tiga ratus ribu rupiah (Rp. 48.300.000) untuk 161 Keluarga Penerima Manfaat (KPM) yang di berikan secara langsung (cash) yang dihadiri oleh Gede Wardana Perbekel Bukti, Ketua BPD beserta Anggota, TA Kab/Pendamping Desa, Bhabinsa dan Bhabinkamtibmas Desa Bukti, dan Perangat Desa. Dengan tetap mengikuti Protokol Kesehatan Covid-19 dan dengan Memperhatikan Peraturan-Peraturan  yang dikuluarkan oleh Menteri diantaranya\r\n\r\nMemperhatikan Peraturan Menteri Desa ,Pembangunan Daerah Tertinggal dan Transmigrasi RI Nomor 14 tahun 2020 tentang Perubahan ketiga atas Peraturan Menteri Desa ,Pembangunan Daerah Tertinggal dan Transmigrasi RI Nomor 11 tahun 2019 tentang prioritas penggunaan Dana Desa tahun 2020 tertanggal 28 September 2020\r\n2. Peraturan Menteri Keuangan RI Nomor 156/PMK.07/2020tentang Perubahan ketiga Atas Peraturan Menteri Keuangan Nomor 205/PMK.07/2019 tentang Pengelolaan Dana Desa tertanggal 13 Oktober 2020 dan Penegasan Pelaksanaan BLT Dana Desa bulan , Oktober, Nopember dan Desember 2020.\r\n\r\n\r\nSumber : http://bukti-buleleng.desa.id/index.php/first/artikel/192-Penyaluran-BLT-DD-Tahap-Kedelapan--VIII--Bulan-Nopember-2020', 'penyaluran-blt-dd-tahap-kedelapan-viii-bulan-nopember-2020-97.jpg', '2020-12-02 14:42:46'),
(2, 2, 'Serah Terima Pengelolaan SPAMS dari KKM ke KPSPAM', 'Sehubungan dengan telah terlaksananya proses serah terima pekerjaan program HID (Pamsimas III) Desa Pasca TA. 2020 oleh Satlak ke KKM, kemudian dari KKM ke Satker Provinsi dan dari Satker Provinsi menyerahkan kembali ke KKM, selanjutnya KKM \"Amerta Bhuana Desa Bengkala\" melaksanakan Serah Terima Pengelolaan SPAMS dari KKM ke KPSPAM bertempat di Ruang Rapat Kantor Perbekel Bengkala hari ini Selasa (1/12).\r\n\r\nKegiatan dihadiri oleh Tim Pamsimas III Kabupaten Buleleng, Fasilitator/Pendamping Desa, Perbekel Bengkala, Kelian Desa Adat Bengkala, Ketua BPD, Perangkat Desa Bengkala, Bidan Desa, serta anggota Satlak dan KKM Amerta Bhuana.\r\n\r\nAcara serah terima diawali dengan sambutan Perbekel Bengkala, Ketua BPD, Kelian Desa Adat Bengkala, kemudian sambutan dari Tim Pamsimas III Kabupaten Buleleng lalu dilanjutkan ke acara inti yaitu Serah Terima secara simbolis Pengelolaan SPAMS dari KKM ke Perbekel Bengkala selanjutnya terakhir dari Perbekel Bengkala diserahkan ke KPSPAMS, itu artinya untuk kedepan pengelolaan SPAMS sepenuhnya akan dihendel langsung oleh KPSPAMS.\r\n\r\n \r\n\r\nSumber : http://bengkala-buleleng.desa.id/index.php/first/artikel/253--Serah-Terima-Pengelolaan-SPAMS-dari-KKM-ke-KPSPAM', 'camat-suyasa-harapkan-pj-perbekel-tajun-maksimal-dalam-peran-tugasnya-36.jpg', '2020-12-02 14:45:52'),
(3, 2, 'Ketut Suarsa Kembali Ditunjuk Pj Perbekel Tajun Sampai Dilantiknya Perbekel Antar Waktu', 'Camat Kubutambahan Drs. Made Suyasa, M.Si., mengambil langkah-langkah cepat dan tepat agar roda pemerintahan Desa Tajun tetap berjalan sebagaimana mestinya setelah meninggalnya alm. Made Arya, S.H. Per tanggal 30 November Camat Suyasa telah mengusulkan Penjabat (Pj.) Perbekel Tajun kepada Bupati Buleleng. Pj. Perbekel yang diusulkan adalah Ketut Suarsa, S.E., yang kini menjabat sebagai Kasi Pelayanan Umum Kantor Camat Kubutambahan.\r\n\r\nMenunjuk surat dari Dinas Pemberdayaan Masyarakat dan Desa Kabupaten Buleleng tanggal 1 Desember 2020, nomor 140/735/Bid.1 /DPMD, perihal perubahan/pergantian specimen RKD pada Bank BPD Bali, Ketut Suasa, S.E., telah ditunjuk sebagai Pj. Perbekel Tajun per tanggal 1 Desember dengan nomor SK: 140/643/HK/2020. Ketut Suarsa bertugas sebagai Pj. Perbekel sampai Perbekel Antar Waktu (PAW) dilantik.\r\n\r\nDikonfirmasi Rabu (2/12) Camat Suyasa menyampaikan bahwa ditunjuknya Ketut Suarsa sebagai Pj. Perbekel karena telah memenuhi syarat yaitu ASN, pernah sebagai Pj. Perbekel dan putra daerah Desa Tajun.\r\n\r\n“Petunjuk DPMD agar kecamatan segera usulkan staf Kecamatan sebagai Pj. Maka dari itu kami mengambil langkah-langkah cepat mengusulkan Ketut Suarsa yang pernah sebagai Pj. Perbekel Tajun. Pengusulan Ketut Suarsa juga sudah disetujui oleh BPD dan Sekdes. Ketut Suarsa juga putra daerah Desa Tajun,” jelasnya.\r\n\r\nCamat Suyasa meminta kepada Pj. Perbekel Tajun bersama Pemerintah Desa Tajun agar melaksanakan tugas sesuai dengan peraturan yang ada sehingga roda pemerintahan desa terkait urusan administrasi tidak terhambat dan tetap selalu berkoordinasi sehingga desa aman dan damai.', 'ketut-suarsa-kembali-ditunjuk-pj-perbekel-tajun-sampai-dilantiknya-perbekel-antar-waktu-51.jpg', '2020-12-02 14:45:52'),
(4, 2, 'Camat Suyasa Harapkan Pj. Perbekel Tajun Maksimal Dalam Peran Tugasnya', 'Pembinaan Perbekel, Perangkat Desa dan BPD sekaligus sosialisasi Pemilihan Perbekel PAW ( Pejabat Antar Waktu ) bertempat di Ruang Pertemuan Kantor Desa Tajun, Senin ( 7/12 ).\r\n\r\nCamat Kubutambahan, Drs Made Suyasa,M.Si, dalam sambutan mengatakan, ditunjuk Pj. Kepala Desa Tajun I Ketut Suarsa,SE,.untuk melanjutkan jalannya roda pemerintahan di Desa Tajun Kecamatan Kubutambahan, karena seperti yang diketahui, Perbekel Desa Tajun Made Arya meninggal pada Sabtu (28/11/2020) lalu.\r\n\r\nDisamping itu juga, Camat Suyasa mengharapkan Pj Perbekel Tajun selalu menjalankan tugasnya sesuai dengan peraturan yang sudah ditentukan dengan selalu bersinergi , berkoordinasi dengan Perangkat Desa, BPD, LPM dan Desa Adat .\r\n\r\n\"Meskipun sementara, tetapi peranannya dalam menjalankan tugas diharapkan maksimal, terlebih untuk pelayanan untuk masyarakat di Desa Tajun agar tidak terhambat,\" katanya.\r\n\r\nDitekankan juga, Pj. Perbekel Tajun Ketut Suarsa selalu siap siaga didalam situasi penghujan yang mana Desa Tajun, Desa Mengening dan Desa Pakisan Kecamatan Kubutambahan merupakan Zona Merah rawan bencana.\r\n\r\nIkut hadir, Plt. Kasi Pemerintahan I Ketut Juni Ardana,SE beserta Staf, Pj. Perbekel Tajun Ketut Suarsa,SE beserta Perangkat Desa, Ketua BPD beserta Anggota, Kelian Desa Adat Bayad dan Desa Adat Tajun, LPM dan Tokoh Masyarakat.', 'camat-suyasa-harapkan-pj-perbekel-tajun-maksimal-dalam-peran-tugasnya-36.jpg', '2020-12-07 14:48:14'),
(5, 2, 'Sosialisasi Indeks Daya Saing Daerah dan Hak Kekayaan Intelektual (HAKI)', 'Kecamatan Kubutambahan dalam kesempatan  Sekcam Kubutambahan, Gde Agus Ngurah Suryawan,s.Sos,. menghadiri Sosialisasi Indeks Daya Saing Daerah dan Hak Kekayaan Intelektual (HAKI) oleh Balitbang Kabupaten Buleleng bertempat Gedung Unit IV Setda Kab. Buleleng, Rabu ( 2/12 ).', 'sosialisasi-indeks-daya-saing-daerah-dan-hak-kekayaan-intelektual-haki-68.jpg', '2020-12-02 14:52:20'),
(6, 2, 'Bimtek Tupoksi Perbekel, Perangkat Desa dan BPD di Desa Bengkala', 'Seijin Camat Kubutambahan, Plt. Kasi Pemerintahan I Ketut Juni Ardana,SE beserta Staf kembali melaksanakan Bimtek Dalam rangka pelaksanaan peningkatan tugas-tugas sesuai tupoksi Perbekel yang meliputi penyelenggaraan di bidang Pemerintahan Desa, Pembangunan Desa, Pembinaan Kemasyarakatan Dan Pemberdayaan Masyarakat Desa serta peningkatan kapasitas Tata Kelola Administrasi BPD  di ruang Rapat Kantor Perbekel Desa Bengkala, Rabu(2/12).\r\n\r\n \r\nPembinaan ini dibuka lansung oleh Perbekel Desa Bengkala I Made Astika dan selanjutnya pengarahan langsung diberikan oleh Kasi Kecamatan Ketut Juni Ardana,SE, diikuti oleh Pendamping Lokal Desa beserta seluruh Perangkat Desa Bengkala dan BPD.', 'bimtek-tupoksi-perbekel-pertangkat-desa-dan-bpd-di-desa-bengkala-72-0.jpg', '2020-12-02 14:54:39'),
(7, 2, 'Camat Suyasa Dampingi Bupati Buleleng Melayat Ke Rumah Duka Perbekel Desa Tajun', 'Camat Kubutambahan Drs Made Suyasa,M.Si,. dampingi Bupati Buleleng Putu Agus Suradnyana.,ST bersama Wakil Bupati Buleleng dr. I Nyoman Sutjidra.,Sp.OG melayat ke rumah duka Perbekel Tajun Alm. Made Arya,SH bertempat di Desa Tajun, Kecamatan Kubutambahan, Selasa (1/12).\r\n\r\nTurut hadir pula Ketua DPRD Buleleng Gede Supriatna.,SH, dan Perbekel Se Kecamatan Kubutambahan.', 'camat-suyasa-dampingi-bupati-buleleng-melayat-ke-rumah-duka-perbekel-desa-tajun-18.jpg', '2020-12-01 15:16:43'),
(8, 2, 'Posyandu dan BKB “Manik Parwa” Banjar Dinas Dauh Margi\r\n', 'Pada hari ini Selasa, 01 Desember 2020 dilaksanakan kegiatan rutin Posyandu dan Bina Keluarga Balita (BKB) “Manik Parwa” Banjar Dinas Dauh Margi, Desa Tunjung yang mengambil tempat di Aula Kantor Perbekel Desa Tunjung. Selain dihadiri seluruh kader Posyandu dan BKB Manik Parwa, pada hari ini juga dihadiri oleh Kader Desa Siaga (Ni Kadek Juliasih) dan Putu Elly Srijayanti selaku kader KPM Desa Tunjung.\r\n\r\nPemantauan, pengecekan dan pencatatan tumbuh kembang balita merupakan kegiatan wajib yang harus dilaksanakan di setiap kegiatan Posyandu. Hal ini merupakan pedoman semua kader agar dapat mengetahui bagaimana keadaan atau taraf kesehatan balita di Desa Tunjung. diharapkan bagi para ibu yang memiliki balita agar lebih aktif dan antusias membawa balitanya di setiap posyandu di Banjar Dinas Masing-masing.', 'posyandu-dan-bkb-manik-parwa-banjar-dinas-dauh-margi-35.jpg', '2020-12-01 15:24:28'),
(9, 2, 'Kegiatan Yustisi Penerapan Disiplin dan Penegakan Hukum Pergub 46 dan Perbup 41 Tahun 2020 Satgas Pencegahan di Desa Bontihing', 'Tim Gabungan Disiplin Protokol Kesehatan Kecamatan Kubutambahan Kembali Gelar Sidak Masker di Desa Bontihing , Rabu (2/12).\r\n\r\n \r\nTim yang dikoordinir langsung oleh Kasi Trantib dan Satpol PP I Made Bagia, Wakapolsek Kubutambahan dan Danramil Kubutambahan atau yang mewakili beserta Tim Yustisi Kecamatan Kubutambahan ( Anggota Satpol PP Kecamatan Kubutambahan, Anggota Polsek Kubutambahan, Anggota Koramil 1609-02/Kubutambahan ) kembali menjalankan amanat Pergub Bali No 46 Tahun 2020 dan Perbup Buleleng Nomor 41 Tahun 2020 tentang Penerapan Disiplin dan Penegakan Hukum Protokol Kesehatan sebagai upaya pencegahan dan pengendalian Corona Virus Disease 2019 dalam Tatanan Kehidupan Era Baru.\r\n \r\nDalam kegiatan sidak masker di Desa Bontihinh tepatnya Simpang Tiga - Balai Timbang Banjar Dinas Kawanan Desa Bontihing terjaring 11 orang warga yang tidak mematuhi protokol kesehatan, seperti 10 Orang tidak membawa masker dan 1 Orang membawa masker tapi tidak pergunakan.\r\n \r\nDalam Sidak ini, Warga yang terjaring Razia diberikan teguran serta peringatan dengan menandatanggani surat pernyataan dan Hukuman tindakan fisik seperti push up agar warga tetap ingat serta mematuhi Prokes sesuai imbauan Pemerintah yang sudah ditentukan.\r\n \r\nAdapun nama - nama warga yang terjaring Razia Masker, Yakni :\r\n \r\na.) Wayan Saria, 38Th, Buruh, Banjar Dinas Kanginan Desa Bontihing ( Tidak Membawa Masker ).\r\nb ) Kadek Putra Jaya, 23 Th, Wiraswasta, Banjar Dinas Pakisan, Desa Pakisan ( Membawa Masker Tidak Dipakai ).\r\nc ) I Ketut Gariasa, 37 Th, Wiraswasta, Br Selasih, Desa Payangan ( Tidak Membawa Masker ).\r\nd ) Wayan Suarsa, Petani , Banjar Dinas Tegeha Desa Pakisan ( Tidak Membawa Masker ).\r\ne ) Made Badrayasa, 30 Th, Wiraswasta, Br Dinas Kawanan Desa Bontihing ( Tidak Membawa Masker ).\r\nf ) Made Darsana, 39Th, Swasta, Br Kawanan, Desa Bontihing ( Tidak Membawa Masker ).\r\ng ) Gede Ragem, 29Th, Buruh, Br Kelod Kauh, Desa Tamblang ( Tidak Membawa Masker ).\r\nh ) Komang Budiarmawan, 24 Th, Wiraswasta, Br Kawanan Desa Bontihing ( Tidak Membawa Masker ).\r\ni ) Komang Sudiarsa, 20 Th, Petani, Br Dinas Kelandis, Desa Pakisan ( Tidak Membawa Masker ).\r\nj ) Nyoman Sudiarta, 50 Th, Petani, Br Dinas Mengandang Desa Pakisan ( Tidak Membawa Masker ).\r\nk ) Wayan Supayasa, 37 Th, Buruh, Banjar Dinas Tegeha Desa Pakisan ( Tidak Membawa Masker ).', 'kegiatan-yustisi-penerapan-disiplin-dan-penegakan.jpg', '2020-12-02 15:19:22'),
(10, 2, 'Bimtek Tupoksi Perbekel, Perangkat Desa dan BPD di Desa Tambakan', 'Seijin Camat Kubutambahan, Plt. Kasi Pemerintahan I Ketut Juni Ardana,SE beserta Staf kembali melaksanakan Bimtek Dalam rangka pelaksanaan peningkatan tugas-tugas sesuai tupoksi Perbekel yang meliputi penyelenggaraan di bidang Pemerintahan Desa, Pembangunan Desa, Pembinaan Kemasyarakatan Dan Pemberdayaan Masyarakat Desa serta peningkatan kapasitas Tata Kelola Administrasi BPD  di ruang Rapat Kantor Perbekel Desa Tambakan, Selasa (1/12).', 'bimtek-tupoksi-perbekel-perangkat-desa-dan-bpd-di-desa-tambakan-46.jpg', '2020-12-01 15:21:48'),
(13, 1, 'aaasdasdsa', 'w2wwwwwwwwwwwwwwwwwwwwwwwwwwwwww', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id_blog` int(11) NOT NULL,
  `judul_blog` varchar(300) NOT NULL,
  `author` varchar(100) NOT NULL,
  `isi_blog` longtext NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`id_blog`, `judul_blog`, `author`, `isi_blog`, `foto`, `tanggal`) VALUES
(1, 'SELAMAT HARI PEREMPUAN (Internasional)', 'Agus Wisnawa', 'Hari Perempuan Internasional atau International Women\'s Day (IWD) diperingati setiap tanggal 8 Maret, setiap tahunnya IWD memiliki tema yang berbeda, ditahun 2020 ini mengusung tema: \"Eachfor Equal\" (kesetaraan).\r\n\r\nKesetaraan atau equal yang ingin disampaikan bukan hanya masalah perempuan namun lebih luas lagi. Kesetaraan gender sangat penting untuk ekonomi dan masyarakat yang berkembang.\r\n\r\nNamun untuk mencapai hal tersebut, caranya dimulai dari diri sendiri atau individual. Sebab setiap kita bertanggungjawab atas pikiran dan tindakan selama hidup. Termasuk keputusan untuk menantang stereotip, melawan bias, memperbaiki situasi, dan merayakan pencapaian perempuan.\r\n\r\nDan secara kolektif menanamkan pikiran tersebut, kita masing-masing dapat membantu menciptakan dunia dengan kesetaraan gender. Kembali kepada kesetaraan dalam masalah ekonomi dan bisnis.\r\n\r\nDunia yang menyepakati kesetaraan gender adalah jaminan menjadi lebih sehat, lebih kaya, dan lebih harmonis. Mulai dari tempat kerja, pemerintahan, media massa, dunia olahraga, sampai yang utama ekonomi dan usaha.\r\n\r\nJika kesetaraan gender tercipta akan lebih menghasilkan kesehatan dan kekayaan. Perubahan tersebut bisa diwujudkan secara kolektif, dimana masing-masing dari kita memiliki pengaruh untuk menciptakan gender yang setara.', 'selamat-hari-perempuan-internasional-49.jpg', '2020-03-11 23:01:40'),
(2, 'asdsad', 'sadas', 'wqerwerwer', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_boking`
--

CREATE TABLE `tb_boking` (
  `id_boking` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `alamat_pesanan` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `tgl_boking` datetime NOT NULL,
  `bts_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_desa`
--

INSERT INTO `tb_desa` (`id_desa`, `nama_desa`) VALUES
(1, 'Desa Bengkala'),
(2, 'Desa Bila'),
(3, 'Desa Bontihing'),
(4, 'Desa Bukti'),
(5, 'Desa Bulian'),
(6, 'Desa Depeha'),
(7, 'Desa Kubutambahan'),
(8, 'Desa Mengening'),
(9, 'Desa Pakisan'),
(10, 'Desa Tajun'),
(11, 'Desa Tambakan'),
(12, 'Desa Tamblang'),
(13, 'Desa Tunjung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_image`
--

CREATE TABLE `tb_image` (
  `id_image` int(11) NOT NULL,
  `foto1` varchar(50) CHARACTER SET latin1 NOT NULL,
  `foto2` varchar(50) CHARACTER SET latin1 NOT NULL,
  `foto3` varchar(50) NOT NULL,
  `foto4` varchar(50) NOT NULL,
  `foto5` varchar(50) NOT NULL,
  `foto6` varchar(50) NOT NULL,
  `foto7` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_image`
--

INSERT INTO `tb_image` (`id_image`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`, `foto7`, `video`) VALUES
(1, 'Air-Sanih.jpg', 'Air-Sanih2.jpg', 'Air-Sanih3.jpg', 'Air-Sanih4.jpg', 'Air-Sanih5.jpg', 'Air-Sanih6.jpg', 'Air-Sanih7.jpg', 'asdasd.mp4'),
(2, 'air-terjun-carat.jpg', 'air-terjun-carat2.jpg', 'air-terjun-carat3.jpg', 'air-terjun-carat4.jpg', 'air-terjun-carat5.jpg', 'air-terjun-carat6.jpg', 'air-terjun-carat7.jpg', ''),
(3, 'Wisata-Kubu-Abian-Bagus.jpg', 'Wisata-Kubu-Abian-Bagus2.jpg', 'Wisata-Kubu-Abian-Bagus3.jpg', 'Wisata-Kubu-Abian-Bagus4.jpg', 'Wisata-Kubu-Abian-Bagus5.jpg', 'Wisata-Kubu-Abian-Bagus6.jpg', 'Wisata-Kubu-Abian-Bagus7.jpg', ''),
(4, 'Bukit-Teletubies.jpg', 'Bukit-Teletubies2.jpg', 'Bukit-Teletubies3.jpg', 'Bukit-Teletubies4.jpg', 'Bukit-Teletubies5.jpg', 'Bukit-Teletubies6.jpg', 'Bukit-Teletubies7.jpg', ''),
(5, 'Air-Terjun-Mabun.jpg', 'Air-Terjun-Mabun2.jpg', 'Air-Terjun-Mabun3.jpg', 'default.png', 'default.png', 'default.png', 'default.png', ''),
(6, 'Goa-Maria.jpg', 'Goa-Maria2.jpg', 'Goa-Maria3.jpg', 'Goa-Maria4.jpg', 'Goa-Maria5.jpg', 'Goa-Maria6.jpg', 'default.png', ''),
(7, 'Pura-Meduwe-Karang.jpg', 'Pura-Meduwe-Karang2.jpg', 'Pura-Meduwe-Karang3.jpg', 'Pura-Meduwe-Karang4.jpg', 'Pura-Meduwe-Karang5.jpg', 'Pura-Meduwe-Karang6.jpg', 'Pura-Meduwe-Karang7.jpg', ''),
(8, 'Villa-Sisi-Pantai.jpg', 'Villa-Sisi-Pantai2.jpg', 'Villa-Sisi-Pantai3.jpg', 'Villa-Sisi-Pantai4.jpg', 'Villa-Sisi-Pantai5.jpg', 'Villa-Sisi-Pantai6.jpg', 'Villa-Sisi-Pantai7.jpg', ''),
(9, 'Bukit-Sinunggal.jpg', 'Bukit-Sinunggal2.jpg', 'Bukit-Sinunggal3.jpg', 'Bukit-Sinunggal4.jpg', 'Bukit-Sinunggal5.jpg', 'Bukit-Sinunggal6.jpg', 'Bukit-Sinunggal7.jpg', ''),
(10, 'Desa-Tua-Bulian.jpg', 'default.jpg', 'default.jpg', 'default.jpg', 'default.jpg', 'default.jpg', 'default.jpg', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `deskripsi_komentar` varchar(500) NOT NULL,
  `date_komentar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ktwisata`
--

CREATE TABLE `tb_ktwisata` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ktwisata`
--

INSERT INTO `tb_ktwisata` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Zona Air'),
(2, 'Zona Bukit'),
(3, 'Zona Pertanian'),
(4, 'Zona Kebudayaan'),
(5, 'Zona Suci'),
(6, 'Zona Piknik'),
(7, 'Zona Kubu'),
(9, 'Study Tour');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengelola`
--

CREATE TABLE `tb_pengelola` (
  `id_pengelola` int(11) NOT NULL,
  `nama_pengelola` varchar(100) NOT NULL,
  `kontak_pengelola` bigint(20) NOT NULL,
  `jabatan_pengelola` varchar(200) NOT NULL,
  `motto` varchar(300) NOT NULL,
  `foto_pengelola` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengelola`
--

INSERT INTO `tb_pengelola` (`id_pengelola`, `nama_pengelola`, `kontak_pengelola`, `jabatan_pengelola`, `motto`, `foto_pengelola`) VALUES
(1, 'Gede Winda', 8165161615, 'Kepala Desa Tajun', 'Wisata desa tajun dengan potensi yang religius', 'default.png'),
(2, 'Admin Kubutambahan', 36221745, 'Admin', 'Mengemban tugas dalam pembuatan dan mengelola website pariwisata', 'default.png'),
(3, 'Made Sudama Diana, S.Sos.MM', 0, 'Kepala Dinas Pariwisata Kabupaten Buleleng', 'Selalu bekerja sungguh - sungguh serta tulus iklas dalam mengemban tugas dalam kondisi saat seperti ini', 'made-sudama-diana-ssosmm-39.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pktwisata`
--

CREATE TABLE `tb_pktwisata` (
  `id_paket` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `durasi` varchar(100) NOT NULL,
  `deskripsi_paket` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pramuwisata`
--

CREATE TABLE `tb_pramuwisata` (
  `id_pramuwisata` int(11) NOT NULL,
  `id_pengelola` int(11) NOT NULL,
  `nama_pramuwisata` varchar(100) NOT NULL,
  `kontak_pramuwisata` bigint(20) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `foto_pramuwisata` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='tb_pramuwisata';

--
-- Dumping data for table `tb_pramuwisata`
--

INSERT INTO `tb_pramuwisata` (`id_pramuwisata`, `id_pengelola`, `nama_pramuwisata`, `kontak_pramuwisata`, `alamat`, `foto_pramuwisata`) VALUES
(1, 1, 'Ketut Warsa', 821651654654, 'Desa Kubutambahan', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `j_kelamin` tinyint(1) NOT NULL,
  `alamat` varchar(200) CHARACTER SET latin1 NOT NULL,
  `no_hp` int(12) NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 NOT NULL,
  `date_created` int(11) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name`, `email`, `password`, `j_kelamin`, `alamat`, `no_hp`, `image`, `date_created`, `role_id`, `is_active`) VALUES
(1, 'Agus Wisnawa', 'wisnawa@gmail.com', '$2y$10$dCpGIAnxImJSXTCSgPCJguGl7g/Z8bDbTHTaEs4vBCPqgWsP6ddiC', 0, 'asdasda', 0, 'member1.PNG', 1605414006, 1, 1),
(11, 'qwerty', 'qwerty@gmail.com', '$2y$10$wECcRAAo97oXEqJNYeNcI.nkMcprBRf6gvUz8PUGumwkDEBOYW0LW', 0, 'asdasdasdsadsad', 816564, 'default.PNG', 1609317919, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `id_image` int(11) NOT NULL,
  `id_pramuwisata` int(11) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `durasi` varchar(100) NOT NULL,
  `deskripsi_wisata` mediumtext NOT NULL,
  `alamat_wisata` varchar(100) NOT NULL,
  `fasilitas_wisata` varchar(100) NOT NULL,
  `latitude_wisata` double NOT NULL,
  `longitude_wisata` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `id_kategori`, `id_desa`, `id_image`, `id_pramuwisata`, `nama_wisata`, `harga`, `durasi`, `deskripsi_wisata`, `alamat_wisata`, `fasilitas_wisata`, `latitude_wisata`, `longitude_wisata`) VALUES
(1, 6, 7, 8, 1, 'Villa Sisi Pantai', '225000', '1 Days', 'Villa Sisi Pantai offers refinement and authenticity, but also privacy and space. Located in a heavenly setting, just a few metres from the beach, it has a garden and a private swimming pool for a relaxing stay. In my eyes, the ideal place to rest and chill after a stay in the South or Ubud. As soon as you enter, you will be taken care of by our staff. Ngurah will be able to help you prepare and book your excursions.', 'Jl. Raya Air Sanih, Kubutambahan, Kabupaten Buleleng, Bali 81172', 'Kebersihan Intensif.Dapur.Area kerja khusus.Parkir gratis di areal properti.Mesin pengering. Wifi.AC', -8.072112083435059, 115.20360373863424),
(2, 1, 3, 2, 1, 'Air Terjun Carat ', '200000', '3 Days', 'Namanya diambil dari nama desa tempat lokasi air terjun tersebut berada yaitu dusun Carat, dan kata carat adalah berasal dari caratan yang merupakan sebuah kendi memiliki leher untuk tempat air minum, namanya sangat sesuai untuk air terjun tersebut. Menurut kabar, masyarakat percaya tempat ini sedikit angker, sehingga pengunjung diharapkan tetap menjaga sikap dan sopan santun, tidak berbicara kasar dan tidak merusak lingkungan.\r\n\r\nSuasana alam air terjun Carat di Buleleng ini memang masih alami dan perawan, belum tersentuh tidak ada bangunan penduduk apalagi akomodasi hotel di sekitanya, suasana tempat rekreasi alam ini memang tenang, nyaman, asri dan indah berpadu serasi menyuguhkan pemandangan alam spektakuler, sehingga anda yang menikmatinya bisa betah dan dapat menenggelamkan segala kejenuhan pikiran.', 'Kubutambahan, Kabupaten Buleleng, Bali 81172', 'View Objek Wisata alam yang indah.', -8.136367, 115.225651),
(3, 6, 2, 3, 1, 'Wisata Kubu Abian Bagus', '150000', '1 Days', 'Sekarang ini banyak tempat-tempat wisata baru bermunculan, dan beberapa diantaranya populer karena tidak sengaja, tentu dikarenakan tempat tersebut unik, cantik, kekinian bahkan instagramable yang dicari oleh mereka yang gemar hunting tempat-tempat baru dan menjadi tujuan wisata foto selfie yang sekarang trend dan hits agar selalu bisa eksis di media sosial. Salah satunya adalah Kubu Abian Bagus yang terletak di desa Bila Tua, Kecamatan Kubu Tambahan, Kabupaten Buleleng. Kubu Abian Bagus menjadi sebuah objek wisata terbaru di kawasan Bali Utara yang populer secara tidak sengaja. Awalnya tempat dibuat hanya untuk kepentingan keluarga, pemandangan yang cantik yang disuguhkan membuat sejumlah warga datang untuk menikmati keindahan tersebut, tentunya mereka tidak lupa untuk upload pengalaman pribadi mereka ke sosial media, nah dari sinilah kunjungan ke tempat ini mulai ramai, melihat hal ini dan trend sekarang yang gemar foto selfie, maka munculah niat pemilik untuk mengelola kebun ini sebagai tujuan wisata, sehingga berdirilah tempat wisata bari bernama Kubu Abian Bagus. Tempat yang dulunya adalah areal kebun, sekarang menawarkan sejumlah spot untuk foto selfie.', 'Kubutambahan, Kabupaten Buleleng, Bali 81171', 'Sport Foto Pemandangan yang Indah', -8.133709329667521, 115.18820142557887),
(4, 2, 7, 4, 1, 'Bukit Teletubbies Kubutambahan', '100000', '1 Days', 'Bukit yang berada di Kubutambahan ini menyandang sebuah nama baru, karena memang pemandangan yang ditawarkan dalam bentuk bukit dengan gundukan-gundukan setengah lingkaran serta lembah hijau, menyuguhkan pemandangan alam yang asri, indah dan masih alami. Sebuah tempat wisata instagramable di Bali.\r\n\r\nBukit Teletubbies (Teletabis) di Kubutambahan Singaraja ini, walaupun bukan merupakan tempat baru, tetapi tempat tersebut memang tergolong baru dikenal dalam daftar objek wisata di Bali Utara. Apalagi jika anda ingin mencari alternatif lain, selain wisata pantai maka suguhan alam pegunungan ini sanggup menawarkan keindahan dan sensasi lain dalam liburan anda.\r\n\r\nObjek wisata Bukit Teletubbies (Teletabis) di Bali Utara ini, ideal untuk tujuan tour dan tempat rekreasi baik itu untuk keluarga ataupun pasangan terkasih. Memang tempat wisata ini belum begitu populer bagi wisatawan, masih didominasi warga lokal yang ingin menemukan nuansa alam baru dan tempat-tempat cantik untuk foto selfie.', 'Jl. Cemp., Jinengdalem, Kubutambahan, Kabupaten Buleleng, Bali 81119', 'Pemandangan Bukit yang luas yang dimamfaatkan untuk menunjang sport motor trill', -8.133783707358338, 115.18817993818843),
(5, 1, 9, 5, 1, 'Air Terjun Mabun', '50000', '1 Days', 'Alami dan Sejuk', 'Pakisan, Kubutambahan, Kabupaten Buleleng, Bali 81172', 'Air', -8.15238680760312, 115.22978434123692),
(6, 5, 4, 6, 1, 'Goa Maria Air Sanih', '100000', '2 Days', 'GOA MARIA merupakan tempat wisata Ziarah Katolik di Buleleng ini digagas oleh Romo Willy M. Batuah CDD, niat terpendam untuk mewujudkan impiannya membangun tempat ziarah akhirnya perlahan mulai terwujud ketika bisa membeli lahan seluas 3 Hektar pada tahun 1991. Semuanya butuh proses mulai dari mengenal lingkungan, masyarakat dan termasuk budaya setempat, apalagi di kawasan ini dan Bali pada umumnya adalah di Dominasi warga Hindu. Setelah warga tahu maksud dan tujuan Romo Willy M. Batuah CDD dengan benar, barulah perlahan Goa Maria tersebut dibangun , karena tempat ziarah tersebut berada di Dusun Yeh Sanih ( Yeh= Air) maka dinamailah dengan Goa Maria Air Sanih dan disingkat GOMAS. Patung Bunda Maria yang diletakkan di dalam Gua tersebut adalah hasil karya dari Almarhum Stefanus Bambang Triadji, beliau adalah Pematung Bunda Maria yang sudah terkenal di kalangan masyarakat luas. Goa Maria Air Sanih diberkati oleh Mgr DR Benyamin Yosef Bria Pr pada tanggal 23 Oktober 2005 , yang nama sebelumnya telah diberkati juga sumber air di Gua Maria ini oleh Romo Yandhi B Gunawan CDD. Di Goa Maria Air Sanih , para perziarah bisa menapaki jalan salib suci, mengenang kembali kisah sengsara perjalanan Yesus Kristus memulai jalan setapak di kebun buah terasa sejuk, teduh dan tenang , taman-taman tertata indah dan rapi.\r\n\r\nSelain itu di Goa Maria Air Sanih juga dibangun sarana kemping , memberikan perziarah pengalaman unik lebih dekat dengan alam. Selain sebagai tujuan wisata ziarah , tempat ini juga dikunjungi oleh warga yang bukan Katolik hanya sekedar ingin rekreasi dan mengenal isi lain dari pulau yang didominasi warga Hindu dan terkenal dengan sebutan pulau seribu Pura tersebut, tidak dikenakan biaya tiket masuk cukup berlaku sopan , tahu etika dan menjaga kebersihan.', 'Jalan Airsanih - Tejakula, Bukti, Buleleng, Kabupaten Buleleng, Bali 81172', 'Fasilitas Berdoa', -8.08643928523163, 115.22445908324895),
(7, 5, 7, 7, 1, 'Pura Meduwe Karang', '100000', '1 Days', 'Pura Meduwe Karang (diterjemahkan dari bahasa Bali menjadi \"pura pemilik tanah\") dibangun pada tahun 1890 oleh sekelompok orang yang datang ke Kubutambahan dari desa Bulian. Pura ini didedikasikan untuk Batara Meduwe Karang (\"tuan pemilik tanah\"), dewa yang memberikan perlindungan untuk kesuburan lahan pertanian. Pura Meduwe Karang juga memiliki tempat pemujaan yang didedikasikan untuk dewa matahari Surya dan Ibu Pertiwi, semuanya terkait dengan konsep perlindungan kesuburan lahan. Kompleks candi dikelilingi oleh tembok, yang diperkuat dengan pilar-pilar di atasnya dengan hiasan ukiran berbentuk bunga. Di pintu masuk pura, terdapat deretan 36 patung batu yang mewakili karakter dari epos Ramayana. Patung disusun dalam tiga tingkat, 13 buah di baris terendah, sepuluh di baris tengah, dan 13 di baris tertinggi. yang diapit oleh dua tangga masuk. Patung di bagian tengah menggambarkan Kumbakarna, sementara patung di sekitarnya menggambarkan pasukan kera Sugriwa.\r\n\r\nTangga kembar mengarah ke teras masuk (jaba pura). Sebuah gapura candi bentar menandai batas pintu menuju jaba pisan, bagian terluar pura. Bagian terluar merupakan halaman yang digunakan untuk tempat berkumpul selama berlangsungnya upacara keagamaan. Terdapat paviliun di halaman ini yang digunakan untuk pertunjukan gamelan selama acara-acara tertentu. Bagian tengah (jaba tengah) dicapai dari bagian terluar melalui sebuah gapura candi bentar empat tingkat. Terdapat sepasang paviliun yang tersusun secara simetris di pura bagian tengah. ', 'Kubutambahan, Kabupaten Buleleng, Bali 81172', 'Pemotretan pura bersejarah dan pencetakannya', -8.07746595788284, 115.17600620951943),
(8, 1, 7, 1, 1, 'Kolam Alami Air Sanih', '20000', 'Sekali Masuk', 'Air Sanih atau Yeh Sanih adalah tempat wisata yang terletak sekitar 17 km dari Singaraja, Bali. Tempat ini merupakan tempat permandian dengan sumber air. Menurut legenda tempat ini merupakan tempat permandian bagi pasangan muda. Menurut kepercayaan masyarakat setempat, sumber air ini mempunyai asal usul dari Danau Batur yang letaknya ratusan kilometer dari tempat ini. Air dari sumber ini sering digunakan dalam upacara agama Hindu. Di tempat ini juga dapat ditemui pura yang diujukkan kepada dewa Wisnu. Berdasarkan babad \"Besi Mejajar\", \"Air Sanih\" yang juga disebut \"Yeh Sanih\"', 'Jl. Raya Air Sanih, Bukti, Kubutambahan, Kabupaten Buleleng, Bali 81172', 'Kolam Berenang, Makanan dan Minuman yang sudah disediakan', -8.077492786963017, 115.21719756193792),
(9, 5, 10, 9, 1, 'Pura Bukit Sinunggal', '100000', '2 Days', 'Pucak Bukit Sinunggal merupakan salah satu Pura Dang Kahyangan yang ada di Bali Utara. Pura ini terletak di Desa Tajun, Kubutambahan.\r\n\r\nMenurut sejarahnya yang dalam buku “Pura Bukit Tunggal Dalam Prasasti” disusun Ketut Ginarsa, Balai Penelitian Bahasa, Singaraja, 1979, sebelum tahun 914 Masehi pura ini menjadi milik raja yang dipuja masyarakat Bali Utara pada zaman itu.\r\n\r\nSelain itu, Pura Bukit Sinunggal juga sering disebut “Besakih”-nya Buleleng lantaran semua pelinggih yang ada di Besakih terdapat pula di pura ini. Menurut Jro Mangku, hal tersebut dikarenakan alasan teknis. Pada zaman dulu karena kesulitan kendaraan, masyarakat Bali Utara menemui hambatan bila hendak menuju Pura Besakih. Padahal mereka harus melaksanakan upacara meajar-ajar usai upacara ngaben ke Pura Besakih, Karangasem. Untuk mengatasi kesulitan perjalanan itu, dibuatkanlah pelinggih seperti di Besakih agar warga Bali Utara bisa menuntaskan upacaranya di Tajun saja.', 'Tajun, Kubutambahan, Kabupaten Buleleng, Bali 81172', 'Kesucian diri', -8.13252939163455, 115.25625906758597),
(10, 5, 5, 10, 1, 'Desa Tua Bulian', '50000', '3 Days', 'Bulian adalah salah satu desa tua di Bali, berada di Kecamatan Kubutambahan, Kabupaten Buleleng. Desa Bulian memang tidak terlalu dikenal namun menyimpan banyak peninggalan bersejarah dan juga memililki keunikan yang tidak dimiliki oleh desa-desa lainnya di Bali.\r\n\r\nDesa Bulian memiliki 33 pura yang tersebar di setiap penjuru mata angin. Suatu hal yang unik untuk ukuran sebuah desa bukan? Pura-pura di Desa Bulian juga memiliki nilai sejarah masa lampau, hal ini dikarenakan pura-pura tersebut diketahui sudah ada sejak dulu dan tidak pernah mengalami perubahan, baik struktur maupun tata letaknya. ”Pura-pura ini tetap seperti semula, bagian-bagian yang rusaknya saja yang diperbaiki”, terang Kepala Desa Bulian, I Made Pawitra.', 'Kubutambahan, Kabupaten Buleleng, Bali', 'Penginapan', -8.103499606552411, 115.20149776849972);

-- --------------------------------------------------------

--
-- Table structure for table `user_active`
--

CREATE TABLE `user_active` (
  `is_active` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_active`
--

INSERT INTO `user_active` (`is_active`, `status`) VALUES
(1, 'Active'),
(2, 'Non Active'),
(3, 'Not Found');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(128) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Member'),
(3, 'Pengelola');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_balas_komentar`
--
ALTER TABLE `tb_balas_komentar`
  ADD PRIMARY KEY (`id_balas_komentar`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_komentar` (`id_komentar`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_pengelola` (`id_pengelola`);

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `tb_boking`
--
ALTER TABLE `tb_boking`
  ADD PRIMARY KEY (`id_boking`);

--
-- Indexes for table `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `tb_image`
--
ALTER TABLE `tb_image`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_ktwisata`
--
ALTER TABLE `tb_ktwisata`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_pengelola`
--
ALTER TABLE `tb_pengelola`
  ADD PRIMARY KEY (`id_pengelola`);

--
-- Indexes for table `tb_pktwisata`
--
ALTER TABLE `tb_pktwisata`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_wisata` (`id_wisata`);

--
-- Indexes for table `tb_pramuwisata`
--
ALTER TABLE `tb_pramuwisata`
  ADD PRIMARY KEY (`id_pramuwisata`),
  ADD KEY `id_pengelola` (`id_pengelola`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `id_active` (`is_active`),
  ADD KEY `id_active_2` (`is_active`);

--
-- Indexes for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `desa` (`id_desa`),
  ADD KEY `kategori` (`id_kategori`),
  ADD KEY `id_image` (`id_image`),
  ADD KEY `id_pramuwisata` (`id_pramuwisata`);

--
-- Indexes for table `user_active`
--
ALTER TABLE `user_active`
  ADD PRIMARY KEY (`is_active`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_balas_komentar`
--
ALTER TABLE `tb_balas_komentar`
  MODIFY `id_balas_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_boking`
--
ALTER TABLE `tb_boking`
  MODIFY `id_boking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_image`
--
ALTER TABLE `tb_image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ktwisata`
--
ALTER TABLE `tb_ktwisata`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_pengelola`
--
ALTER TABLE `tb_pengelola`
  MODIFY `id_pengelola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pktwisata`
--
ALTER TABLE `tb_pktwisata`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pramuwisata`
--
ALTER TABLE `tb_pramuwisata`
  MODIFY `id_pramuwisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_active`
--
ALTER TABLE `user_active`
  MODIFY `is_active` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_balas_komentar`
--
ALTER TABLE `tb_balas_komentar`
  ADD CONSTRAINT `tb_balas_komentar_ibfk_1` FOREIGN KEY (`id_komentar`) REFERENCES `tb_komentar` (`id_komentar`),
  ADD CONSTRAINT `tb_balas_komentar_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `tb_berita_ibfk_1` FOREIGN KEY (`id_pengelola`) REFERENCES `tb_pengelola` (`id_pengelola`);

--
-- Constraints for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `tb_komentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_pktwisata`
--
ALTER TABLE `tb_pktwisata`
  ADD CONSTRAINT `tb_pktwisata_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `tb_wisata` (`id_wisata`);

--
-- Constraints for table `tb_pramuwisata`
--
ALTER TABLE `tb_pramuwisata`
  ADD CONSTRAINT `tb_pramuwisata_ibfk_1` FOREIGN KEY (`id_pengelola`) REFERENCES `tb_pengelola` (`id_pengelola`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id_role`);

--
-- Constraints for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD CONSTRAINT `desa` FOREIGN KEY (`id_desa`) REFERENCES `tb_desa` (`id_desa`),
  ADD CONSTRAINT `image` FOREIGN KEY (`id_image`) REFERENCES `tb_image` (`id_image`),
  ADD CONSTRAINT `kategori` FOREIGN KEY (`id_kategori`) REFERENCES `tb_ktwisata` (`id_kategori`),
  ADD CONSTRAINT `pramuwisata` FOREIGN KEY (`id_pramuwisata`) REFERENCES `tb_pramuwisata` (`id_pramuwisata`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
