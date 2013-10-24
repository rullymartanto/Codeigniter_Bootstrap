-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2013 at 11:43 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_ldiikalsel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE IF NOT EXISTS `tbl_agenda` (
  `id_agenda` int(5) NOT NULL AUTO_INCREMENT,
  `tema_agenda` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `tgl_posting` date NOT NULL,
  `tempat` varchar(150) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `keterangan` tinytext NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`id_agenda`, `tema_agenda`, `isi`, `tgl_mulai`, `tgl_selesai`, `tgl_posting`, `tempat`, `jam`, `keterangan`) VALUES
(1, 'Penerimaan Raport Semester Ganjil Tahun Ajaran 2010-2011', 'Berakhirnya semester ganjil tahun pelajaran 2010-2011, ditandai dengan pembagian laporan hasil belajar.', '2010-12-23', '2010-12-23', '2010-12-22', 'SMA Negeri 1 Wongsorejo', '07.30 WIB - 12.00 WIB', 'Untuk kelas XI dan XII, pembagian raport dimulai pukul 07.30 WIB. Sedangkan untuk kelas X pada pukul 09.00 WIB. Raport diambil oleh orang tua/wali murid masing-masing.'),
(2, 'Peluncuran Website Resmi SMA Negeri 1 Wongsorejo', 'Peluncuran website resmi dari SMA Negeri 1 Wongsorejo, sebagai media informasi dan akademik online untuk pelayanan pendidikan yang lebih baik kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat.', '2010-12-23', '2010-12-24', '2010-12-22', 'SMA Negeri 1 Wongsorejo', '07.30 WIB - 12.00 WIB', '-'),
(3, 'Penyembelihan Hewan Kurban Idul Adha 2010', 'Idul Adha yang biasa disebut lebaran haji atapun lebaran kurban sangat identik dengan penyembelihan hewan kurban. SMA Negeri 1 Wongsorejo tahun ini juga melakukan penyembelihan hewan kurban. Yang rencananya akan dihadiri oleh guru-guru, siswa dan pengurus OSIS.', '2010-11-17', '2010-11-17', '2010-11-15', 'SMA Negeri 1 Wongsorejo', '07.30 WIB - 14.00 WIB', 'Dihadiri oleh guru-guru, siswa dan pengurus OSIS.s');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album_galeri`
--

CREATE TABLE IF NOT EXISTS `tbl_album_galeri` (
  `id_album` int(10) NOT NULL AUTO_INCREMENT,
  `nama_album` varchar(100) NOT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_album_galeri`
--

INSERT INTO `tbl_album_galeri` (`id_album`, `nama_album`) VALUES
(1, 'Kegiatan Belajar Siswa-Siswi'),
(2, 'Hari Raya Kurban - Idul Adha 2010'),
(3, 'Kedatangan Tamu Asing'),
(5, 'Pemilu OSIS 2010-2011');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE IF NOT EXISTS `tbl_berita` (
  `id_berita` int(3) NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `waktu` time NOT NULL,
  `author` varchar(20) NOT NULL,
  `counter` int(3) NOT NULL,
  `status` varchar(30) NOT NULL,
  `images` varchar(200) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `isi`, `tanggal`, `waktu`, `author`, `counter`, `status`, `images`) VALUES
(1, 'Corei3, Corei5, dan Corei7 Keluarga Baru Dari Intel', 'Intel Core i7 is an Intel brand name for several families of desktop and laptop 64-bit x86-64 processors using the Nehalem microarchitecture that are. Intel Core i7 is an Intel brand name for several families of desktop and laptop 64-bit x86-64 processors using the Nehalem microarchitecture that are. Intel Core i7 is an Intel brand name for several families of desktop and laptop 64-bit x86-64 processors using the Nehalem microarchitecture that are. Intel Core i7 is an Intel brand name for several families of desktop and laptop 64-bit x86-64 processors using the Nehalem microarchitecture that are', '2010-07-24 00:00:00', '00:00:00', 'admin', 9, '0', ''),
(2, 'iPhone Banyak Menuai Kecaman', 'iPhone 4 is a GSM cell phone with a high-resolution display, FaceTime video calling, HD video recording, a 5-megapixel camera, and more.iPhone 4 is a GSM cell phone with a high-resolution display, FaceTime video calling, HD video recording, a 5-megapixel camera, and more.iPhone 4 is a GSM cell phone with a high-resolution display, FaceTime video calling, HD video recording, a 5-megapixel camera, and more.iPhone 4 is a GSM cell phone with a high-resolution display, FaceTime video calling, HD video recording, a 5-megapixel camera, and more.', '2010-07-24 00:00:00', '00:00:00', 'admin', 8, '0', ''),
(3, 'Google Chrome Susupi Microsoft', 'Browser Microsoft, Internet Explorer (IE), bisa mendominasi karena tersedia secara default pada banyak komputer di pasaran. Google Chrome akan menggoyang dengan menyusup di lahan yang sama. Google rupanya sudah bersiap-siap menawarkan Google Chrome secara default pada komputer-komputer baru. Pichai juga menjanjikan Chrome akan keluar dari versi Beta (uji coba) pada awal 2009.\r\n\r\nJika Google berhasil menyusupkan Chrome dalam lahan yang selama ini jadi ''mainan'' Microsoft, lanskap perang browser akan mengalami perubahan. Saat ini Microsoft masih mendominasi pada kisaran 70 persen lewat Internet Explorer-nya, sedangkan Firefox menguasai sekitar 20 persen. ', '2010-07-25 00:00:00', '00:00:00', '', 5, '0', ''),
(4, 'Google "Panas", Microsoft Beli Yahoo???', 'Google menolak keras atas tindakan Microsoft yang mau membeli Yahoo. "Ini bukan hanya sekedar transaksi jual beli yang sederhana, suatu perusahaan mengambil perusahaan lainnya. Ini mengenai esensi dari internet yaitu keterbukaan dan inovasi". Komentar David Drummond (Google''s senior vice president for corporate development and chief legal officer).\r\n\r\nYahoo adalah salah satu perusahaan terbesar di internet, belakangan ini Yahoo mulai kehabisan akal untuk mengalahkan pendapatan Google. Google memulai karir di Internet melalui search-engine nya, kesukseskan teknologi tersebut membuat Google terus melakukan inovasi dan mengajak para developer untuk memajukan teknologi Internet, sampai akhirnya Yahoo pun membuat halaman khusus untuk para developer. David Drummond juga menuding kalau Microsoft ingin mengambil keuntungan yang tidak pantas dan melakukan tindakan ilegal melalui Internet. Microsoft mengumumkan pada hari jum''at kemarin (1 februari 2008) penawarannya kepada Yahoo sebesar USD 44.6 Milyar.\r\n\r\nKomite kongres akan melakukan sesi ''hearing'' pada minggu ini untuk menimbang apakah penawaran Microsoft terhadap Yahoo termasuk implikasi Antitrust.', '2010-07-25 00:00:00', '00:00:00', '', 3, '0', ''),
(5, 'Browser Safari Diklaim Paling Handal di Windows', 'Dibandingkan browser Internet lainnya, Apple mengklaim browser web Safari buatannya adalah yang paling handal digunakan jika digunkan di atas sistem operasi Windows. Hal tersebut disampaikan CEO Apple Steve Jobs saat mengumumkan versi terbaru Safari yang dapat berjalan di Windows.\r\n\r\n"Kami kira para pengguna Windows akan benar-benar terkejut saat melihat begitu cepat dan menariknya berselancar di Internet menggunakan Safari," ujar Steve Jobs di acara Worldwide Developer Conference Apple di San Fransisco, AS, Senin (11/6). Ia mengklaim browser Safari dapat membuka sebuah halaman web dua kali lebih cepat dibandingkan Internet Explorer 7 di Windows dan masih lebih cepat dibandingkan Opera maupun Firefox.\r\n\r\nKehadiran Safari untuk para pengguna Windows akan semakin menyemarakkan persaingan browser web. Steve Jobs berharap peluncuran ini akan meningkatkan popularitas Safari yang baru mencapai 4,9 persen pangsa pasar browser web. Persaingan browser web saat ini masih didominasi IE dengan pangsa pasar 78 persen menyusul Firefox. Versi tes Safari 3 untuk Windows XP, ', '2010-07-25 00:00:00', '00:00:00', '', 2, '0', ''),
(6, 'Digerus Firefox, IE Makin Melempem', 'Browser Mozilla Firefox sepertinya makin berkibar. Berdasarkan data terbaru dari biro penelitian Net Applications, Firefox menapak naik dengan menguasai 20,78 persen pangsa pasar browser pada bulan November, naik dari angka 19,97 persen di bulan Oktober.\r\n\r\nDikutip detikINET dari Afterdawn, Selasa (2/1/2/2008), Firefox kemungkinan sukses menggaet user yang sebelumnya mengandalkan browser Internet Explorer (IE) besutan Microsoft. Pasalnya, masih menurut data Net Applications, pangsa pasar IE kini menurun di bawah 70 persen untuk kali pertama sejak tahun 1998. IE sekarang menguasai 69,8 persen pangsa pasar dari sebelumnya 71,3 persen di bulan Oktober.\r\n\r\nPadahal di masa jayanya di tahun 2003, IE pernah begitu dominan dengan menguasai 95 persen pasaran browser. Penurunan pangsa pasar IE ini disinyalir juga terkait musim liburan di AS di mana banyak perusahaan libur. Padahal browser IE banyak dipakai oleh kalangan perusahaan.\r\n\r\nAdapun produk browser lainnya menunjukkan tren peningkatan. Apple Safari kini punya pangsa 7,13 persen dan Google Chrome sebesar 0,83 persen dari yang sebelumnya 0,74 persen. Sementara pangsa pasar Opera mengalami penurunan dari yang sebelumnya 0,75 persen menjadi 0,71 persen saja. ', '2010-07-25 00:00:00', '00:00:00', '', 2, '0', ''),
(7, 'Foxconn Kembangkan Motherboard AMD', 'JAKARTA  - Produsen motherboard Foxconn Technology meluncurkan motherboard terbarunya, seri A88GM. Seri terbaru ini memiliki chipset terkini AMD 880G+SB850, mendukung platform DDR3 dan AM3, serta Phenom II X6 CPU yang hemat daya dan tangguh.\r\n\r\nMotherboard Foxconn seri A88GM dilengkapi dengan 100 persen kapasitor-kapasitor tunggal yang dirancang oleh perusahaan jepang terkemuka, yaitu Fujitsu. Dengan umur pakai rata-rata 50.000 jam, kapasitor tunggal ini memberikan kestabilan, daya tahan dan umur yang panjang yang sangat penting untuk memenuhi kebutuhan daya prosesor high-end dan komponen lain yang ada saat ini sangat diperuntukkan untuk penggunaan banyak aplikasi dan games.\r\n\r\nSelain itu, dalam keterangan resminya, Rabu (28/7/2010), dibandingkan dengan pembengkakan dan kebocoran kapasitor yang dapat merusak motherboard secara lengkap, adanya 100 persen kapasitor tunggal membuat tidak adanya komponen cair, sehingga tidak bocor atau dapat meledak. Sebagai tambahan, kemampuan mereka untuk mentolerir kondisi ekstrim dan ketahanan secara keseluruhan membuat mereka lebih cocok untuk lingkungan operasional yang ekstrim.\r\n\r\nDalam rangka memenuhi kebutuhan konsumen dalam hal kenyamanan dan fitur lengkap multimedia, motherboard A88GM dilengkapi dengan berbagai macam pilihan konektivitas termasuk D-sub, juga digital video interface (DVI) untuk tampilan video digital dan High definition multimedia interface (HDMI) untuk video digital dan output audio guna membantu konsumen dalam memudahkan koneksi kabel. Berkat desain ini, konsumen dapat menikmati video berdefinisi tinggi dan audio pada saat yang sama untuk sepenuhnya memenuhi permintaan HD multimedia generasi berikutnya.\r\n\r\nFitur lain yang ditemukan pada motherboard Foxconn A88GM adalah 4+1 Power Phases, desain ini menggabungkan kekuatan menjamin pengiriman lebih stabil dan dukungan cepat kepada CPU selama bekerja dalam beban berat atau overclocking. Selain itu, 1 phase untuk Northbridge dan 1 phase untuk memori memungkinkan pengguna untuk melakukan banyak tugas secara mendadak dengan performa yang lebih baik dan mengurangi konsumsi daya. Juga, desain thermalnya memungkinkan pengguna untuk menikmati masa pakai suatu komponen lebih lama melalui suhu yang lebih rendah dan tanpa bising dikombinasikan dengan kinerja thermal tertinggi pada chipset, komponen daya CPU dan PCB. (srn)', '2010-07-28 00:00:00', '16:13:00', '', 9, '0', ''),
(18, 'Agresif, AMD Mulai Kejar Nvidia', 'Jakarta - Dominasi kubu hijau Nvidia dalam menggelontorkan produk-produk grafisnya, kini mendapat reaksi agresif dari AMD. Si kubu merah dilaporkan telah melampaui pengkapalan produk grafis Nvidia, selama kuartal dua 2010.\r\n\r\nLaporan yang dikutip detikINET dari Cnet, Jumat (30/7/2010) lalu mengatakan bahwa AMD lebih unggul 51 persen dalam pengkapalan produknya, dibanding Nvidia yang hanya 49 persen. Jika dibanding tahun lalu, jumlah ini begitu signifikan.\r\n\r\nDi tahun 2009 pada kuartal yang sama, posisi pun terbalik dengan kubu AMD yang hanya menguasai 41 persen pengkapalan produk-produknya, jika dibanding Nvidia. Keagresifan AMD membuat pertumbuhan grafis mereka meningkat 10 persen di tahun ini pada kuartal yang sama.\r\n\r\nNvidia sendiri sedikit ''kelabakan'' dengan melesetnya prediksi mereka, bahwa sang kompetitor kini terasa lebih agresif.\r\n\r\nSebagai informasi, AMD telah mengkapalkan setidaknya 16 juta kartu grafis DirectX 11 mereka sejak 9 bulan lalu. Perusahaan tersebut dipandang cukup sukses dengan menghadirkan grafis seri 5800. ', '2010-07-31 00:00:00', '01:21:18', '', 68, '0', ''),
(19, 'Ponsel Android Bisa Nyalakan Mobil  ', 'Jakarta - Bertambah satu lagi daya tarik dari smartphone berbasis Android. Dengan sebuah aplikasi khusus, smartphone Android seperti Motorola Droid atau HTC Evo 4G bisa digunakan untuk menyalakan mesin mobil.\r\n\r\nSeperti diketahui, smartphone Android saat ini memang tengah naik daun dan menarik perhatian khalayak. Sebuah lelucon bahkan mengatakan, menggenggam smartphone Android dipercaya bisa membuat siapapun terlihat lebih menarik. Dengan kemampuan bisa menyalakan mobil, tentunya membuat smartphone Android dan penggunanya nampak lebih keren.\r\n\r\nLalu bagaimana caranya agar smartphone bisa berfungsi untuk menyalakan mobil? Sangat mudah, pengguna hanya perlu mengunduh aplikasi Android gratis bernama Viper SmartStart dan menginstal beberapa hardware tambahan untuk melengkapi mobil.\r\n\r\nDikutip detikINET dari TG Daily, Jumat (30/7/2010), jika sudah terpasang, aplikasi ini bisa digunakan untuk menyalakan atau mengontrol mobil secara virtual dari mana saja.\r\n\r\nTak hanya itu, Viper SmartStart juga memungkinkan pengguna mengunci mobil, membuka bagasi dan mendapat peringatan bahaya jika terjadi sesuatu pada mobil, melalui ponsel mereka. Pengguna bahkan bisa mengontrol beberapa mobil dari satu smartphone.', '2010-07-31 00:00:00', '01:24:40', '', 8, '0', ''),
(20, 'Google Masih Mungkin Merilis Nexus Two', 'Jakarta - Beredar rumor, Google masih mungkin merilis ponsel mereka Nexus Two. Padahal, sebelumnya Eric Schmidt sang CEO Google jelas-jelas mengatakan takkan ada lagi lanjutan Nexus One.\r\n\r\nRumor sedikit miring tersebut didapat detikINET dari Neowin, Jumat (30/7/2010). Berdasar sumber internal Google, Neowin mengatakan sebenarnya Google tengah membuat suksesor Nexus One yang disebut Nexus Two.\r\n\r\nWalau tak ada informasi detail mengenai hal ini, sang sumber mengatakan bulan depan ponsel tersebut bakal dirilis, dengan Android 3.0.\r\n\r\nSementara beberapa saat lalu, Nexus One dipastikan tak akan punya penerus. CEO Google Eric Schmidt mengisyaratkan perusahaannya tak akan memproduksi Nexus Two. Bahkan Nexus One mungkin akan jadi satu-satunya ponsel yang dibuat Google.\r\n\r\nSchmidt berkilah bahwa produknya tersebut sudah sukses di pasaran dan perusahaannya tak perlu untuk membuat penerusnya.', '2010-07-31 00:00:00', '01:26:20', '', 17, '0', ''),
(21, 'Pemilik iPad Kaya dan Egois?  ', 'Jakarta - Sebuah studi yang dilakukan sebuah perusahaan di New Jersey, Amerika Serikat (AS) bernama MyType, menyimpulkan bahwa pemilik iPad merupakan sekelompok kalangan elit yang egois dan kurang ramah. \r\n\r\nStudi ini memang terdengar lucu dan mengada-mengada. Percaya atau tidak, yang jelas hasil survei MyType tersebut menyatakan pemilik iPad rata-rata enam kali lebih kaya ketimbang mereka yang tidak memiliki komputer tablet tersebut.\r\n\r\nPernyataan tersebut nampaknya cukup masuk akal mengingat iPad memang tergolong produk premium. Maka tak heran jika ada yang beranggapan, iPad bisa meningkatkan gengsi pemiliknya.\r\n\r\nSurvei ini juga menemukan bahwa pemilik iPad rata-rata kurang menyukai hal berbau seni dan musik melainkan lebih tertarik dengan video games, elektronik, sains, internet, finansial dan bisnis.\r\n\r\n"Ciri-ciri tersebut cocok dengan karakter orang-orang egois yang pernah kami teliti sebelumnya. Orang-orang dengan ciri-ciri seperti itu enam kali lebih mungkin membeli iPad daripada orang rata-rata," kata CEO MyType Tim Koelkebeck seperti dikutip detikINET dari IT Pro Portal, Jumat (30/7/2010).\r\n \r\nMyType merupakan perusahaan software yang menciptakan aplikasi tes kepribadian  di platform jejaring sosial seperti Facebook. Dalam survei ini, MyType menggunakan tes online berisi 50 pertanyaan yang berdasarkan fakta psikologis, serta teori dan riset modern. ', '2010-07-31 00:00:00', '01:29:30', '', 14, '0', ''),
(22, 'Siapa Jawara Open Source Indonesia?  ', '<p style="text-align: justify;">\r\n	Jakarta - Pemerintah, lewat Kementerian Pendayagunaan Aparatur Negara, telah meminta agar instansi pemerintah memanfaatkan piranti lunak Open Source pada 2011. Siapa yang paling jago? Akan terbukti dalam ajang bernama Indonesia Open Source Award (IOSA) 2010. IOSA 2010 akan digelar di Hotel Bidakara, Jakarta, pada Rabu, 28 Juli 2010. Seperti dikutip detikINET dari keterangan yang diterima, Selasa (27/7/2010), ajang tersebut juga akan digunakan untuk memantau kesiapan institusi pemerintahan untuk beralih ke Open Source. Acara tersebut diselenggarakan bersama-sama oleh Kementerian Komunikasi dan Informatika , Kementerian Riset dan Teknologi, Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi, Asosiasi Open Source Indonesia (AOSI), serta Komunitas Open Source. Selain penganugerahan, acara itu juga akan menampilkan workshop dan seminar. Termasuk di dalamnya, workshop yang terkait industri kreatif seperti pemanfaatan GIMP dan Blender, maupun sistem operasi Android yang sedang naik daun. Sedangkan Seminarnya akan membahas topik kreativitas dengan memanfaatkan Open Source. Pembicara seperti Nukman Luthfie, Kak Seto hingga Indra Utoyo akan hadir di seminar tersebut.</p>\r\n', '2013-10-11 02:28:15', '01:35:18', 'admin', 10, '0', ''),
(23, '2011, Lembaga Pemerintah Sudah Harus Cicipi Open Source', '<p style="text-align: justify;">\r\n	<img alt="" height="132" src="http://localhost/ldii-kalsel/asset/upload/images/linux-tux.jpg" style="border-width: 4px; border-style: solid; margin: 4px; float: left;" width="182" />Jakarta - Pemerintah kian memantapkan langkah untuk bermigrasi ke penggunaan software Open Source. Tahun 2011 dijadikan target titik baliknya. Pada saat itu, seluruh institusi pemerintah diharapkan sudah harus be legal, terutama berbasis Open Source. Demikian dikatakan Kemal Prihatman, Asisten Deputi Urusan Pengembangan dan Pemanfaatan TI Ristek dalam jumpa pers yang berlangsung di gedung BPPT, Jakarta, Kamis (5/6/2009). Menurutnya, target ini merupakan bagian dari isi surat edaran dari Menteri Pemberdayaan Aparatur Negara pada 5 April lalu yang isinya mewajibkan seluruh lembaga pemerintah untuk menggunakan software legal di seluruh jajarannya. &quot;Namun kami dari Ristek dengan alasan efisiensi anggaran jelas menyarankan be legal dengan Open Source. Tak hanya sistem operasinya, tapi juga aplikasi pendukung lainnya,&quot; tegasnya. Kemal memprediksi, jumlah komputer yang digunakan seluruh institusi pemerintah di seluruh Indonesia mencapai 800 ribu unit. Nah dari jumlah tersebut, ia tak berani memastikan bahwa seluruhnya sudah legal menggunakan software proprietary. &quot;Mungkin sistem operasinya sudah legal tapi aplikasi yang lainnya belum,&quot; imbuhnya. Ristek sendiri bersama dengan Asosiasi Open Source Indonesia (AOSI) pada tahun 2009 ini menargetkan akan membantu setidaknya 10 lembaga pemerintah untuk melakukan migrasi ke Open Source. &quot;Kami lakukan secara bertahap, saat ini kita sedang membantu Depdiknas dan Kementerian PAN,&quot; tandasnya.</p>\r\n', '2013-10-11 02:28:09', '01:37:28', 'admin', 44, '0', ''),
(24, 'Unggah Video di YouTube Kini 15 Menit  ', '<p style="text-align: justify;">\r\n	<img alt="" height="104" src="http://localhost/ldii-kalsel/asset/upload/images/youtube.jpg" style="float: left;" width="164" />Jakarta - Mengunggah video di YouTube akan semakin mengasyikkan. YouTube kini memperpanjang surasi video yang diunggah dari sepuluh menit menjadi 15 menit. Dalam postingan blognya, Joshua Siegel selaku product manager unggah dan pengaturan video YouTube menyebutkan, perpanjangan durasi video sudah lama menjadi permintaan sebagian besar pengguna YouTube. Langkah ini pun diambil YouTube karena yakin teknologi &#39;Content ID&#39; pada situsnya dapat bekerja baik. Content ID merupakan teknologi yang secara otomatis menghapus pelanggaran hak cipta oleh penyaringan secara digital melalui arsip di situs tersebut. &quot;Karena keberhasilan upaya teknologi yang sedang berlangsung, kami bisa meningkatkan batas durasi unggah video,&quot; tulis Siegel seperti dilansir eWeek, dan dikutip detikINET, Jumat (30/7/2010). YouTube, menurut Siegel, terutama mengalamatkan penambahan durasi ini pada kemampuan situsnya untuk melindungi hak cipta dari setiap video yang diunggah.</p>\r\n', '2013-10-11 02:28:02', '01:40:18', 'admin', 14, '0', ''),
(25, 'Hadir di Indonesia, Xbox 360 Slim Dibanderol Rp 3,4 Juta  ', '<p style="text-align: justify;">\r\n	<img alt="" src="http://localhost/ldii-kalsel/asset/upload/images/xbox-slim-non-bajak.jpg" style="width: 85px; height: 64px; float: left; margin: 5px;" />Jakarta - Jika di negara asalnya paket Xbox 360 slim beserta Kinect dibanderol pada kisaran harga USD 299 (sekitar Rp 2,7 juta), maka gamer di Indonesia harus merogoh kocek lebih dalam. Pasalnya, harga konsol berserta kendali berbasis kamera tersebut bakal melambung ketika sampainya di Tanah Air. Berdasarkan pengamatan detikINET, Jumat (30/7/2010), di pusat perbelanjaan konsol game di kawasan Mangga 2 Mall, beberapa toko sudah ada yang mulai menjajakan Xbox 360 slim berwarna hitam dengan kapasitas hardisk 250GB. &quot;Di sini kami menjual Xbox 360 Slim seharga Rp 3,4. Itu hanya konsolnya saja belum termasuk Kinect dan game,&quot; ujar Merry, salah satu pemilik toko game yang telah menjual konsol tersebut. Meski dibanderol pada kisaran harga yang lebih mahal dari rilis resmi, namun Mery mengakui konsol teranyar besutan Microsoft tersebut tetap laris dan banyak diminati. &quot;Kami baru mendatangkan 10 unit Xbox 360 slim langsung dari Amerika, dan semuanya sudah habis terjual,&quot; tambah Merry. Xbox 360 slim memang merupakan salah satu konsol game yang paling dinanti saat ini. Kabarnya, konsol tersebut memiliki beberapa perbaikan dari seri terdahulu seperti dengan hadirnya Wi-Fi, kapasitas hardisk yang lebih besar, atau pun daya tahan terhadap panas yang diklaim lebih baik.</p>\r\n', '2013-10-11 02:27:55', '01:44:10', 'admin', 5, '0', ''),
(26, 'Xbox 360 Slim Belum Bisa Mainkan Game Bajakan  ', '<p style="text-align: justify;">\r\n	<img alt="" src="http://localhost/ldii-kalsel/asset/upload/images/18safari.jpg" style="width: 200px; height: 150px; margin: 4px; float: left;" />Jakarta - Selain membenahi beberapa kekurangan pada seri terdahulu, Microsoft juga mengubah Xbox 360 Slim menjadi lebih &#39;aman&#39;. Kabarnya, konsol yang dibanderol Rp 3,4 Juta ini belum bisa memainkan game bajakan. Hal tersebut diutarakan salah satu penjual konsol game yang menjajakan Xbox 360 Slim, &quot;Kalau dibandingkan sama Xbox 360, selain spesifikanya yang beda Xbox 360 Slim juga belum bisa memainkan game bajakan,&quot; ujarnya. Pun demikian, konsol tersebut masih tetap diminati oleh para gamer Tanah Air. Bahkan yang lebih mengherankan, kebanyakan para pembeli Xbox 360 Slim merupakan para gamer yang justru sudah memiliki Xbox 360. &quot;Biasanya yang beli Xbox 360 Slim itu, justru orang yang sudah punya Xbox 360,&quot; ujar Merry, salah satu penjual konsol game di kawasan Mangga 2 Mall, kepada detikINET, Jumat (30/7/2010). Meryy juga memperkirakan hal tersebut dikarenakan para gamer Xbox 360 ingin memainkan game mereka secara online. &quot;Mereka beli biasanya hanya untuk memainkan game secara online, kan kalau online pakai konsol yang sudah di-patch bisa langsung di-banned oleh Microsoft,&quot; tambah penjual yang akrab disapa Ci&#39; Meryy ini. Bisa dibilang, besarnya pengguna Xbox 360 di Indonesia bisa jadi karena konsol tersebut bisa memainkan game bajakan. Tidak seperti PlayStation 3 yang hingga kini masih kebal dari tangan jahil para pembajak. Lalu apakah hal ini bakal menyurutkan penjualan Xbox 360 Slim? &quot;Kalau dibilang bakal sepi pembeli sepertinya tidak, gamer di Indonesia juga banyak loh yang mau membeli game original. Dan kalau masalah memainkan game bajakan di Xbox 360 Slim, sepertinya hanya masalah waktu,&quot; pungkas Merry.</p>\r\n', '2013-10-11 02:27:48', '01:49:18', 'admin', 20, '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE IF NOT EXISTS `tbl_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sub` int(10) NOT NULL,
  `intro` mediumtext NOT NULL,
  `isi` mediumtext NOT NULL,
  `judul` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_content`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE IF NOT EXISTS `tbl_data` (
  `id_data` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `data_id` varchar(10) NOT NULL,
  PRIMARY KEY (`id_data`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`id_data`, `content`, `data_id`) VALUES
(1, '<p style="text-align: justify;">\r\n	<span style="font-size: small;"><strong>Visi Sekolah</strong></span><br />\r\n	<br />\r\n	Dalam merumuskan visi, pihak-pihak yang terkait (stakeholders) melakukan musyawarah sehingga visi tersebut benar-benar mewakili aspirasi semua pihak yang terkait. Harapannya, semua pihak yang terkait dalam kegiatan pembelajaran (guru, karyawan, peserta didik dan wali murid) benar-benar menyadari visi tersebut untuk selanjutnya memegang komitmen terhadap visi yang telah disampaikan bersama. Adapun visi SMA Negeri 1 Wongsorejo adalah &quot;disenangi, mandiri, berprestasi dan mantap dalam IMTAQ&quot;<br />\r\n	<br />\r\n	<span style="font-size: small;"><strong>Misi Sekolah</strong></span><br />\r\n	<br />\r\n	Untuk mencapai visi sebagai sekolah yang disenangi, mandiri dan berprestasi serta mantap dalam IMTAQ, maka perlu dilakukan suatu misi berupa kegiatan jangka panjang dengan arah yang jelas dan sistematis. Berikut misi SMA Negeri</p>\r\n<ol>\r\n	<li>\r\n		Menyiapkan generasi yang unggul dalam bidang imtek dan iptek</li>\r\n	<li>\r\n		Menumbuhkan penghayatan terhadap ajaran agama sehingga terbangun insane yang cerdas, cendekia, berbudi pekerti yang luhur dan berakhlak mulia.</li>\r\n	<li>\r\n		Membentuk sumber daya manusia yang aktif, kreatif, inovatif dan berprestasi sesuai dengan perkembangan zaman</li>\r\n	<li>\r\n		Membangun citra sekolah sebagai mitra terpercaya</li>\r\n	<li>\r\n		Melaksanakan pembelajaran yang efektif</li>\r\n	<li>\r\n		Menyediakan sarana dan prasarana yang diperlukan dalam kegiatan belajar siswa untuk mendukung pengembangan potensi pesrta didik agar berkembang secara optimal</li>\r\n	<li style="text-align: justify;">\r\n		Memberikan jaminan pelayanan yang prima dalam berbagai hal untuk mendukung proses belajar dan bekerja yang harmonis dan selaras</li>\r\n</ol>\r\n', '1.2'),
(2, '<p>\r\n	<b>Tujuan</b><br />\r\n	<br />\r\n	Tujuan SMA Negeri 1 Wongsorejo dijabarkan berdasarkan tujuan umum pendidikan, visi dan misi sekolah. Berdasarkan tiga hal tersebut, dapat dijabarkan tujuan dari SMA Negeri 1 Wongsorejo adalah</p>\r\n<ol>\r\n	<li>\r\n		Terdepan, Terbaik, dan Terpercaya dalam hal ketakwaan terhadap Tuhan Yang Maha Esa</li>\r\n	<li>\r\n		Terdepan, Terbaik dan Terpercaya dalam pengembangan potensi, kecerdasan dan minat</li>\r\n	<li>\r\n		Terdepan, Terbaik dan Terpercaya dalam perolehan Nilai UAN</li>\r\n	<li>\r\n		Terdepan, Terbaik dan Terpercaya dalam persaingan masuk jenjang Perguruan Tinggi dan Dunia Kerja</li>\r\n	<li>\r\n		Terdepan, Terbaik dan Terpercaya dalam membekali peserta didik agar memiliki keterampilan teknologi informasi dan komunikasi serta mampu mengembangkan diri secara mandiri.</li>\r\n	<li>\r\n		Terdepan, Terbaik dan Terpercaya dalam persaingan secara global</li>\r\n	<li>\r\n		Terdepan, Terbaik dan Terpercaya dalam pelayanan</li>\r\n</ol>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n', '1.4'),
(3, '197', 'counter'),
(4, '<table width="460" border="0" cellpadding="0" cellspacing="0">\r\n  <!--DWLayoutTable-->\r\n  <tr>\r\n    <td width="80" height="25" align="left" valign="middle">Ketua </td>\r\n    <td width="15" align="center" valign="middle">:</td>\r\n    <td colspan="3" align="left" valign="middle">Drs. Istu Handono</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" align="left" valign="middle">Wakil Ketua </td>\r\n    <td align="center" valign="middle">:</td>\r\n    <td width="181" align="left" valign="middle">Sukardi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>\r\n  <td colspan="2" valign="middle">(Wakasek Kesiswaan)</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="left" valign="middle">Dra. Ni Wayan  Sedariasih </td>\r\n    <td colspan="2" valign="middle">(Wakasek Kurikulum)</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="left" valign="middle">Drs. Kuntohadi </td>\r\n    <td colspan="2" valign="middle">(Wakasek Humas)</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="left" valign="middle">Drs. Priyo Suyitno</td>\r\n    <td colspan="2" valign="middle">(Wakasek Sapra)</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="left" valign="middle">Drs. Katiman&nbsp;&nbsp; </td>\r\n    <td colspan="2" valign="middle">(Pembina OSIS)</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="left" valign="middle">Sri Purwanti</td>\r\n    <td colspan="2" valign="middle">(Ass. Kurikulum</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="left" valign="middle">Drs. Ahmad&nbsp;&nbsp;&nbsp; </td>\r\n    <td colspan="2" valign="middle">(Ass. Sarpra)</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="left" valign="middle">Drs. Edy Purdiyanto</td>\r\n    <td colspan="2" valign="middle">(Ass. Humas)</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="left" valign="middle">Drs. Edy Suparnadi</td>\r\n    <td colspan="2" valign="middle">(Litbang)</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="left" valign="middle">Nandi Suhaili&nbsp; </td>\r\n    <td colspan="2" valign="middle">(Bendahara OSIS)</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td align="left" valign="middle">Widi Nugrahani</td>\r\n    <td colspan="2" valign="middle">(Bendahara UKS)</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" align="left" valign="middle">Anggota</td>\r\n    <td align="center" valign="middle">:</td>\r\n    <td align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n    <td colspan="2" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" colspan="4" align="left" valign="middle">Ketaqwaan Terhadap  Tuhan Yang Maha Esa</td>\r\n    <td width="130" valign="middle">Drs. Kuntohadi</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" colspan="4" align="left" valign="middle">Kehidupan Berbangsa  dan Bernegara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>\r\n    <td valign="middle">Drs. Priyo Suyitno</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" colspan="4" align="left" valign="middle">Kepribadian dan Budi  Pekerti Luhur </td>\r\n    <td valign="middle">Supriyadi</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" colspan="4" align="left" valign="middle">Berorganisasi  Pendidikan Politik dan Kepemimpinan</td>\r\n    <td valign="middle">Drs. Edy Purdiyanto</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" colspan="4" align="left" valign="middle">Keterampilan dan  Kewiraswastaan</td>\r\n    <td valign="middle">Mujiati, S.Pd</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" colspan="4" align="left" valign="middle">Persepsi, Apresiasi  dan Kreasi Seni</td>\r\n    <td valign="middle">Sri Purwanti, S.Kar</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" colspan="4" align="left" valign="middle">Kesegaran Jasmani dan  Daya Kreasi&nbsp; </td>\r\n    <td valign="middle">Asnawi, S.Pd</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="25" colspan="4" align="left" valign="middle">Pendidikan  Pendahuluan Bela Negara</td>\r\n    <td valign="middle">Drs. Abdus Syakur</td>\r\n  </tr>\r\n  <tr>\r\n    <td height="1"></td>\r\n    <td></td>\r\n    <td></td>\r\n    <td width="54"></td>\r\n    <td></td>\r\n  </tr>\r\n</table>', '3.1'),
(5, '<p style="text-align: justify;">\r\n	Puji syukur kami panjatkan ke hadirat Tuhan Yang Maha Esa atas karunia dan hidayah-Nya, sehingga kita semua dapat membaktikan segala hal yang kita miliki untuk kemajuan dunia pendidikan. Apapun bentuk dan sumbangsih yang kita berikan, jika dilandasi niat yang tulus tanpa memandang imbalan apapun akan menghasilkan mahakarya yang agung untuk bekal kita dan generasi setelah kita.<br />\r\n	Pendidikan adalah harga mati untuk menjadi pondasi bangsa dan negara dalam menghadapi perkembangan zaman. Hal ini seiring dengan penguasaan teknologi untuk dimanfaatkan sebaik mungkin, sehingga menciptakan iklim kondusif dalam ranah keilmuan. Dengan konsep yang kontekstual dan efektif, kami mengejewantahkan nilai-nilai pendidikan yang tertuang dalam visi misi SMA Negeri 1 Wongsorejo, sebagai panduan hukum dalam menjabarkan tujuan hakiki pendidikan.<br />\r\n	<br />\r\n	Dalam sebuah sistem ketata kelolaan Sekolah Berbasis Manajemen, kami berusaha terus meningkatkan kinerja dan profesionalisme demi terwujudnya pelayanan prima dalam cakupan Lembaga Pendidikan terutama di SMA Negeri 1 Wongsorejo ini. Kami sudah mulai menerapkan sistem Teknologi Komputerisasi agar transparansi pengelolaan pendidikan terjaga optimalisasinya.<br />\r\n	Sebuah sistem akan bermanfaat dan berdaya guna tinggi jika didukung dan direalisasikan oleh semua komponen yang berkompeten di SMA Negeri 1 Wongsorejo baik sistem manajerial, akademik, pelayanan publik, prestasi,moralitas dan semua hal yang berinteraksi di dalamnya. Alhamdulilah peningkatan tersebut dapat dilihat dari data-data kepegawaian dan karya-karya nyata yang telah dihasilkan walaupun masih ada kelemahan yang terus kami treatment dengan menyeimbangkan hasil kinerja dan prize yang diberikan. Mudah-mudahan semua yang kita berikan untuk kemajuan dan keajegan nilai-nilai pendidikan dapat terus meningkat.<br />\r\n	<br />\r\n	Secara pribadi saya mohon maaf, jika pemenuhan tuntutan dan kinerja yang saya lakukan masih ada kelemahan. Oleh karena itu, bantuan dan kerjasama dari berbagai pihak untuk optimalisasi mutu dan kualitas pendidikan sangat saya harapkan. Mudah-mudahan dalam tiap langkah dan nafas kita menciptakan nilai jual yang tinggi bagi keilmuan dan nilai hakiki di hadapan Tuhan Yang Maha Esa.<br />\r\n	Demikian sambutan ini saya sampaikan, ditutup dengan pesan moral dan keilmuan bagi kita semua.</p>\r\n<p>\r\n	<br />\r\n	<br />\r\n	Kepala SMA Negeri 1 Wongsorejoo<br />\r\n	<br />\r\n	<br />\r\n	<br />\r\n	<span style="text-decoration: underline;"><strong>Drs. Istu Handono</strong></span></p>\r\n', '1.1'),
(6, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '1.3'),
(7, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '1.5'),
(8, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '2.1'),
(9, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '2.2'),
(10, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '3.2'),
(11, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '3.3'),
(12, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '4.2'),
(13, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '6.1'),
(14, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '6.2'),
(15, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '6.3'),
(16, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '6.4'),
(17, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '6.5'),
(18, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '6.6'),
(19, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '6.7'),
(20, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '6.8'),
(21, '<p>Belum ada konten..!!!<br /> Silakan anda kunjungi halaman ini beberapa saat lagi</p>\n<p><img title="Bunga Di Tepi Jalan" src="../../../media/image/imgthumb/hydrangeas.jpg" alt="Bunga Di Tepi Jalan" width="230" height="160" /></p>', '6.9'),
(22, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '6.10'),
(23, 'Belum ada konten..!!!<br>\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '6.11'),
(24, 'Halaman akan diarahkan ke Sistem Rekap <br>Absensi Harian Siswa...\r\nPlease Wait..!!!', '5.1'),
(27, '<p>Akan diadakan Tes Potensi Akademik (TPA)</p>', '5.2'),
(29, 'Belum ada konten..!!!\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '3.4'),
(28, 'Belum ada konten..!!!\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '4.1'),
(30, 'Belum ada konten..!!!\r\nSilakan anda kunjungi halaman ini beberapa saat lagi', '3.5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_download`
--

CREATE TABLE IF NOT EXISTS `tbl_download` (
  `id_download` int(5) NOT NULL AUTO_INCREMENT,
  `judul_file` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `nama_file` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `author` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_download`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_download`
--

INSERT INTO `tbl_download` (`id_download`, `judul_file`, `nama_file`, `tgl_posting`, `author`) VALUES
(1, 'Absensi Siswa 2010-2011', '787226257Absen_2010_-_2011_edit.xls', '2010-12-29', 'wayansedariasih'),
(11, 'Absensi Siswa Tahun Ajaran 2010-2011', '918529572Distribusi_2010_-_2011_B._Yayik.xls', '2010-12-29', 'istu'),
(12, 'Absensi Siswa 2010-2011', '675735311hasil_survei.xls', '2010-12-29', 'istu'),
(13, 'E-Book 11 Langkah Memahami C#', '858906959demo.zip', '2011-02-24', 'de_lumbung');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE IF NOT EXISTS `tbl_galeri` (
  `id_foto` int(10) NOT NULL AUTO_INCREMENT,
  `id_album` int(10) NOT NULL,
  `foto_kecil` varchar(100) NOT NULL,
  `foto_besar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_foto`, `id_album`, `foto_kecil`, `foto_besar`) VALUES
(1, 3, 'small-foto-1.jpg', 'big-foto-1.jpg'),
(2, 3, 'small-foto-2.jpg', 'big-foto-2.jpg'),
(3, 3, 'small-foto-3.jpg', 'big-foto-3.jpg'),
(4, 3, 'small-foto-4.jpg', 'big-foto-4.jpg'),
(5, 3, 'small-foto-5.jpg', 'big-foto-5.jpg'),
(6, 2, 'small-foto-6.jpg', 'big-foto-6.jpg'),
(7, 2, 'small-foto-7.jpg', 'big-foto-7.jpg'),
(8, 2, 'small-foto-8.jpg', 'big-foto-8.jpg'),
(9, 2, 'small-foto-9.jpg', 'big-foto-9.jpg'),
(10, 2, 'small-foto-10.jpg', 'big-foto-10.jpg'),
(11, 2, 'small-foto-11.jpg', 'big-foto-11.jpg'),
(12, 2, 'small-foto-12.jpg', 'big-foto-12.jpg'),
(13, 1, 'small-foto-13.jpg', 'big-foto-13.jpg'),
(14, 1, 'small-foto-14.jpg', 'big-foto-14.jpg'),
(15, 1, 'small-foto-15.jpg', 'big-foto-15.jpg'),
(16, 1, 'small-foto-16.jpg', 'big-foto-16.jpg'),
(17, 1, 'small-foto-17.jpg', 'big-foto-17.jpg'),
(18, 1, 'small-foto-18.jpg', 'big-foto-18.jpg'),
(19, 1, 'small-foto-19.jpg', 'big-foto-19.jpg'),
(20, 5, 'small-foto-20.jpg', 'big-foto-20.jpg'),
(21, 5, 'small-foto-21.jpg', 'big-foto-21.jpg'),
(22, 5, 'small-foto-22.jpg', 'big-foto-22.jpg'),
(26, 1, 'kecil-612439618-me.jpg', '612439618-me.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gambar`
--

CREATE TABLE IF NOT EXISTS `tbl_gambar` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image_description` varchar(100) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `file_type` varchar(10) NOT NULL,
  `image_size` varchar(20) NOT NULL,
  `uploaded_date` date NOT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_gambar`
--

INSERT INTO `tbl_gambar` (`id_file`, `title`, `image_description`, `image_url`, `file_type`, `image_size`, `uploaded_date`) VALUES
(12, 'Penyerahan Buku ajar untuk peserta, Oleh Kepala Dinas Pendidikan Pemuda dan Olahraga & Ketua STIKOM', 'Workshop Linux', 'media/pdf/delpi.pdf', 'pdf', '0', '2011-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `id` char(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `id_parent` char(10) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `title`, `id_parent`, `level`) VALUES
('1', 'Profil Sekolah', '0', 0),
('1.1', 'Sambutan Kepala Sekolah', '1', 1),
('1.2', 'Visi dan Misi', '1', 1),
('1.3', 'Sasaran Mutu', '1', 1),
('1.4', 'Tujuan', '1', 1),
('1.5', 'Motto', '1', 1),
('2', 'Fasilitas Sekolah', '0', 0),
('2.1', 'Sarana dan Prasarana', '2', 1),
('2.2', 'Peta Lokasi Sekolah', '2', 1),
('3', 'Pendidik', '0', 0),
('3.1', 'Struktur Organisasi Sekolah', '3', 1),
('3.2', 'Kepala Sekolah', '3', 1),
('3.3', 'Komite Sekolah', '3', 1),
('3.4', 'Data Guru', '3', 1),
('3.5', 'Data Pegawai', '3', 1),
('4', 'Kesiswaan', '0', 0),
('4.1', 'Data Siswa', '4', 1),
('4.2', 'Data Prestasi Siswa', '4', 1),
('5', 'Akademik Sekolah', '0', 0),
('5.1', 'Absensi Harian Siswa', '5', 1),
('5.2', 'Info Penerimaan Siswa Baru', '5', 1),
('6', 'Ekstra Kurikuler', '0', 0),
('6.1', 'Sepak Bola', '6', 1),
('6.2', 'Bola Volly', '6', 1),
('6.3', 'Musik', '6', 1),
('6.4', 'Pencinta Alam (PA)', '6', 1),
('6.5', 'PMR', '6', 1),
('6.6', 'Bola Basket', '6', 1),
('6.7', 'Pramuka', '6', 1),
('6.8', 'English Club', '6', 1),
('6.9', 'Pencak Silat', '6', 1),
('6.10', 'Teater', '6', 1),
('6.11', 'Tekwondo', '6', 1),
('7', 'Indexs Berita', '10', 10),
('8', 'Galeri Kegiatan', '10', 10),
('9', 'Pengumuman', '10', 10),
('10', 'Agenda Sekolah', '10', 10),
('11', 'List Download', '10', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_u`
--

CREATE TABLE IF NOT EXISTS `tbl_menu_u` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `parent_id` int(10) NOT NULL,
  `posisi` text NOT NULL,
  `show` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_menu_u`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE IF NOT EXISTS `tbl_pengumuman` (
  `id_pengumuman` int(5) NOT NULL AUTO_INCREMENT,
  `judul_pengumuman` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `isi` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `penulis` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi`, `tanggal`, `penulis`) VALUES
(1, 'Pembagian Raport Semester Ganjil Tahun Ajaran 2010-2011', 'Menjelang berakhirnya proses belajar-mengajar di semester ganjil tahun ajaran 2010-2011, maka akan diadakan pembagian hasil belajar/raport pada tanggal 23 Desember 2011 pukul 07.30 WIB.<br>\r\nYang bertempat di SMA Negeri 1 Wongsorejo. Raport diambil oleh orang tua/wali kelas murid masing-masing', '2010-12-22', 'wayansedariasih'),
(2, 'Libur Semester Ganjil Tahun Ajaran 2010-2011', 'Libur semester ganjil tahun ajaran 2010-2011 dimulai dari tanggal 24 Desember 2010 sampai dengan tanggal 2 Januari 2011.', '2010-12-22', 'admin'),
(3, 'Proses Belajar Mengajar di Semester Genap Tahun Ajaran 2010-2011', 'Setelah libur semester ganjil tahun ajaran 2010-2011, proses belajar mengajar di semester genap tahun ajaran 2010-2011 mulai aktif kembali tanggal 3 Januari 2011.', '2010-12-22', 'admin'),
(4, 'Peresmian dan Launching Website Perdana SMA Negeri 1 Wongsorejo', 'Peresmian dan launching website resmi SMA Negeri 1 Wongsorejo akan diadakan pada hari 23 Desember 2010 pukul 10.00, bertepatan dengan pembagian raport semester ganjil tahun ajaran 2010-2011', '2010-12-22', 'admin'),
(10, 'Mencoba Input Data untuk Pengumuman', '<p>Ditampilkan menu seperti ms word, dilengkapi dengan tombol penyimpanan</p>', '2013-05-08', 'samsul');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE IF NOT EXISTS `tbl_pesan` (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pesan` text NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'N',
  `tgl_posting` datetime NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_pesan`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_sub_menu` (
  `id` int(11) DEFAULT NULL,
  `parent_id` int(10) NOT NULL,
  `id_sub` int(10) NOT NULL,
  `judul` text NOT NULL,
  `show` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_menu`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
  `username` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '-',
  `usergroup` varchar(10) NOT NULL DEFAULT '',
  `lastlogin` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`username`, `password`, `name`, `email`, `usergroup`, `lastlogin`, `locked`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '', 'Admin', '2013-09-01 12:15:23', 'N');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
