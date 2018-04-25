-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2018 at 07:20 PM
-- Server version: 10.1.31-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mama5612_new_mamuju`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `source` varchar(500) NOT NULL,
  `source_type` varchar(20) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `visitor` int(5) DEFAULT NULL,
  `display` varchar(10) DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `source`, `source_type`, `judul`, `konten`, `id_kategori`, `url`, `visitor`, `display`, `time`, `created_at`, `updated_at`) VALUES
(10, 'http://mamujutoday.com/wp-content/uploads/2018/04/119d30fb-dc75-4455-bdbf-f31689f78cd2.jpg', 'gambar', 'Tampil Perdana, Asri Anas Bakar Semangat Kader PAN', '<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Reporter : Mursyid Syathir</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">MAMUJU</strong>-Ketua DPW Partai Amanat Nasional (PAN) Provinsi Sulawesi Barat, Muhammad Asri Anas, membakar semangat kader PAN se-Sulbar, dalam kegiatan Rapat Konsolidasi PAN Sulbar Sukses Pemilu 2019, di hotel d&rsquo;Maleo Mamuju, Sabtu [14/4].</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Penampilan perdana Asri Anas dihadapan ratusan kader partai berlambang matahari terbit ini, turut disaksikan mantan Ketua DPW PAN Sulbar, Jawas Gani, yang kini menjabat sebagai Majelis Pertimbangan Wilayah PAN Sulawesi Barat.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Saya ingin berkontribusi baik bagi daerah ini melalui DPR RI. Olehnya saya memilih PAN. Mudah-mudahan amanah ini bisa saya emban, mari kita uji di 2019, karena tidak bisa kita bertarung kalau tidak diuji. Tujuan kita berparpol adalah ruang pengabdian, kepada masyarakat, bangsa dan negara. Kalau hanya mencari duit, ada tempat lain,&rdquo; pungkas Asri disambut riuh tepuk tangan kader PAN.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Senator Dapil Sulbar dua periode ini pun sadar, pekerjaan berat bakal menanti PAN Sulbar untuk memenangkan Pemilu 2019. Meski demikian, sikap optimismenya tetap disampaikan dihadapan kader partai yang diketuai Zulkifli Hasan itu.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Kita perlu mengkonsolidasi tujuan, kalau kita mau menang tahun 2019. Ada upaya perbaikan yang akan kita lakukan kedepan untuk menghidupkan partai dan kader. Harus ada ruang yang selalu kita ciptakan. Hampir seluruh partai di Indonesia lemah dalam aspek kaderisasi, dan di PAN, ini yang akan kita perbaiki,&rdquo; tegas Asri.<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">[*]</strong></p>', 8, 'tampil-perdana-asri-anas-bakar-semangat-kader-pan', NULL, 'Yes', '2018-04-21 00:16:28', '2018-04-21 00:16:28', '2018-04-21 00:16:28'),
(11, 'http://mamujutoday.com/wp-content/uploads/2018/04/IMG_6820-1.jpg', 'gambar', 'Pansus I Rampungkan Pembahasan Ranperda Ketertiban dan Keamanan Masyarakat', '<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Reporter : Mursyid Syathir</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">MAMUJU</strong>-Pansus I DPRD Kabupaten Mamuju, membahas Rancangan Peraturan Daerah (Ranperda) tentang Ketertiban dan Keamanan Masyarakat, di Ruang Rapat DPRD Mamuju, Rabu [11/4].</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Rapat tersebut dipimpin langsung Ketua Pansus I, Syamsuddin, dengan menghadirkan pihak Satpol PP, Kabag Hukum dan kepala badan Kesbangpol Kabupaten Mamuju.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Iya, Ranperdanya sudah kami bahas. Pembahasan sudah selesai, tinggal finalisasi, mungkin minggu depan, Insya Allah,&rdquo; tulis Syamsuddin, melalui pesan whatsapp messanger kepada redaksi Mamujutoday.com, Rabu [11/4] sore.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Syamsuddin menambahkan, Setelah finalisasi, Ranperda ini selanjutnya bakal ditetapkan bersamaan dengan Ranperda Rencana Tata Ruang Wilayah (RTRW), Ranperda Rencana Pembangunan Jangka Panjang Daerah (RPJPD) dan Ranperda Kawasan Tanpa Rokok (KTR).</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Mungkin bulan Mei atau paling lambat Juni. Kita Berharap setelah ranperda ini ditetapkan, bisa menjadi acuan Satpol PP dalam menegakkan ketertiban dan rasa nyaman di masyarakat, karena perda ini mengatur banyak hal,&rdquo; urai legislator Partai Keadilan Sejahtera ini.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Seperti diketahui, Pansus I seluruhnya menangani 5 buah Ranperda, yakni Ranperda Rencana Tata Ruang Wilayah (RTRW), Ranperda Rencana Pembangunan Jangka Panjang Daerah (RPJPD) serta Ranperda Kawasan Tanpa Rokok, Ranperda Ketertiban dan Keamanan Masyarakat, serta Ranperda terhadap Perubahan Perda UU No 7 tentang Capil dan Kependudukan.<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">[*]</strong></p>', 10, 'pansus-i-rampungkan-pembahasan-ranperda-ketertiban-dan-keamanan-masyarakat', NULL, 'Yes', '2018-04-21 00:17:44', '2018-04-21 00:17:44', '2018-04-21 00:17:44'),
(12, 'http://mamujutoday.com/wp-content/uploads/2018/04/IMG_7090.jpg', 'gambar', 'MAMUJU Didampingi Istri, Afzal Salurkan Bantuan untuk Korban Banjir Mamuju', '<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Reporter : Mursyid Syathir</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">MAMUJU</strong>-Anggota DPR RI Fraksi Partai Demokrat Dapil Sulawesi Barat, Muhammad Afzal Mahfuz, menyerahkan langsung bantuan kepada korban banjir bandang di Mamuju, Sabtu [14/4].</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Afzal tidak sendiri dalam menyalurkan bantuan kepada warga Simboro yang tertimpa musibah banjir bandang. Ia bahkan mengajak langsung sang istri, Robiatul Adawiyah, yang juga merupakan anggota DPD RI dari dapil Nusa Tenggara Barat (NTB).</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Dilokasi penyaluran bantuan yang sebelumnya telah dipersiapkan oleh Muhammad Afzal Mahfuz (MAM Foundation), nampak juga, Ketua DPRD Mamuju, Siti Suraidah Suhardi, yang duduk semeja dengan Afzal, mendengar aspirasi dari sejumlah warga yang tertimpa musibah banjir.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Dari awal setelah satu hari terjadinya banjir, saya juga sudah berdiskusi dengan ibu ketua DPRD Mamuju untuk memberikan bantuan. Ini hanya sekedar untuk meringankan beban warga yang menjadi korban banjir. Kita juga salurkan bantuan berupa seragam dan perlengkapan sekolah. Keluhan terkait bantuan MCK, Insya Allah dari fraksi partai Demokrat siap membantu, untuk sementara kami minta agar warga bersabar sedikit,&rdquo; pungkas Afzal.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Sementara itu, istri Afzal, Robiatul Adawiyah, mengaku senang dapat berinteraksi langsung dengan warga Sulawesi Barat, khususnya di Mamuju. Senator perempuan yang akrab disapa Dewi ini pun mengajak korban banjir untuk tabah atas musibah banjir bandang tersebut.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Senang rasanya bisa bersilaturahim dengan warga Mamuju, utamanya saya disambut dengan kekeluargaan. Saya baru sekali ini ke Sulbar, ini bukan pertemuan akhir, semoga kita bertatap muka kembali dilain waktu. Adanya musibah banjir ini, kita harus bersabar, Insya Allah rezeki kita tergantikan oleh Allah, dan bantuan ini mudah-mudahan bermanfaat,&rdquo; ucapnya.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Pun demikian dengan Ketua DPRD Mamuju, ST Suraidah Suhardi, yang mengajak korban banjir untuk mengambil hikmah dari musibah ini.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Setiap musibah pasti ada hilmahnya, jangka pendeknya kita akan bantu. Saya apresiasi atas apa yang dilakukan oleh Kak Dewi dan Afzal, itu juga artinya partai Demokrat selalu ada ditengah tengah masyarakat,&rdquo; kunci Ketua DPC Partai Demokrat Kabupaten Mamuju ini.<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">[*]</strong></p>', 8, 'mamuju-didampingi-istri-afzal-salurkan-bantuan-untuk-korban-banjir-mamuju', NULL, 'Yes', '2018-04-21 00:19:22', '2018-04-21 00:19:22', '2018-04-21 00:19:22'),
(13, 'http://mamujutoday.com/wp-content/uploads/2018/04/7a9330ba-09b7-436d-8213-7bb2ec911c18.jpg', 'gambar', 'HUKUM Soal Dugaan Setdakab Mamasa Gabung Parpol, LSM Akindo Sulbar Punya Bukti Kuat', '<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Reporter : Mursyid Syathir</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">JAKARTA</strong>-LSM Anti Korupsi Indonesia (AKINDO) Provinsi Sulawesi Barat, terus mengawal laporan kasus dugaan keterlibatan Sekretaris Daerah Kabupaten Mamasa, Benyamin YD, sebagai anggota partai politik PDI Perjuangan.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Tak main-main, LSM Akrindo telah melayangkan surat laporan hingga ke Komisi Aparatur Sipil Negara (KASN) di Jakarta, 9 Maret 2018 lalu, dengan nomor surat 13/LSM Akindo/III/2018. Bahkan sebelumnya, LSM Akindo juga melaporkan Benyamin YD ke Bawaslu Sulbar, Kemendagri dan KemenPAN.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Saya bersama Sekretaris LSM Akindo Sulbar, pak Rudi Lombongan, menyampaikan dugaan pelanggaran Sekda Mamasa Benyamin YD, yang kami duga kuat terdaftar sebagai anggota partai politik. Pak I Made, Komisioner KASN, yang menerima langsung laporan kami,&rdquo; terang Ketua LSM Akindo Sulbar, Darman Ardi, saat dikonfirmasi Mamujutoday.com, Minggu [15/4].</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Darman menambahkan, KASN yang kini menangani laporan tersebut, bahkan telah memanggil Benyamin YD melalui BKDD Kabupaten Mamasa, per tanggal 9 April 2018. Sayangnya, yang bersangkutan mangkir dari panggilan KASN itu.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Sudah diproses sekarang. Buktinya KASN sudah memanggil sekda lewat BKDD Mamasa 9 April lalu, tapi mangkir. Intinya, LSM Akindo tetap konsisten mengawal kasus ini hingga tuntas,&rdquo; tegas Darman.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Upaya yang dilakukan LSM Akindo Sulbar untuk melaporkan Benyamin YD yang diduga terdaftar sebagai anggota partai PDI-Perjuangan, tentu bukan tanpa bukti yang kuat.</p>\r\n<div id=\"attachment_4380\" class=\"wp-caption alignnone\" style=\"margin: 5px 0px 30px; padding: 0px; border: 0px; font-size: 0.8rem; vertical-align: baseline; color: #777777; max-width: 100%; font-family: Roboto, sans-serif; width: 790px;\"><img class=\"size-full wp-image-4380\" style=\"margin: 0px; padding: 0px; border: 0px; font-size: 12.8px; vertical-align: baseline; max-width: 100%; height: auto; backface-visibility: hidden;\" src=\"http://mamujutoday.com/wp-content/uploads/2018/04/909f1d98-df41-4981-baff-32dffa2ef17b.jpg\" sizes=\"(max-width: 780px) 100vw, 780px\" srcset=\"http://mamujutoday.com/wp-content/uploads/2018/04/909f1d98-df41-4981-baff-32dffa2ef17b.jpg 780w, http://mamujutoday.com/wp-content/uploads/2018/04/909f1d98-df41-4981-baff-32dffa2ef17b-225x300.jpg 225w, http://mamujutoday.com/wp-content/uploads/2018/04/909f1d98-df41-4981-baff-32dffa2ef17b-768x1024.jpg 768w\" alt=\"\" width=\"780\" height=\"1040\" />\r\n<p class=\"wp-caption-text\" style=\"margin: 5px 0px 30px; padding: 0px; border: 0px; font-size: 0.8rem; vertical-align: baseline; line-height: 19.84px; max-width: 100%;\">Surat permohonan pencabutan KTA Benyamin YD ke DPP Partai PDI Perjuangan</p>\r\n</div>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">LSM Akindo mengantongi sejumlah bukti yang dimaksud,mulai dari foto kepemilikan Kartu Tanda Anggota (KTA), foto Benyamin YD sat mengikuti pendidikan partai politik PDI Perjuangan di Kinasi, Jawa Barat, hingga surat tertulis yang dilayangkan Benyamin YD ke DPP PDI-Perjuangan per tanggal 23 Maret 2018, perihal pengembalian dan permohonan pencabutan KTA PDI Perjuangan miliknya.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Itu suratnya pak Benyamin ke DPP PDI perjuangan untuk meminta pencabutan KTA. Itu pertanda Benyamin betul masuk partai, nah sementara dia kan ASN. Jelas melanggar dong, tidak dibolehkan itu dalam undang-undang,&rdquo; pungkasnya.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Benyamin YD memang diketahui sebelumnya telah mendaftarkan diri menjadi bakal calon wakil bupati Mamasa mendampingi Obed. Namun, keduanya dianggap KPU Mamasa tidak memenuhi syarat untuk menjadi pasangan bakal calon di Pilkada Mamasa.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Keterlibatan Benyamin YD dalam bursa Pilkada Mamasa 2018 inilah, yang akhirnya mencuat di publik, lantaran status Benyamin YD sebagai ASN, diduga telah melanggar UU UU Nomor 5 tahun 2014 yang melarang keras ASN terlibat politik praktis.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Terlepas dari itu ya memang kita tidak tahu kalau waktu mendaftar, apakah sudah mengundurkan diri sebagai ASN. Barulah kita investigasi, ternyata terdaftar sebagai anggota parpol. Kita tidak berbicara apapun upaya yang dilakukan pak Benyamin untuk menarik diri dari anggota parpol, jelas ini kan sudah melanggar dan tetap akan kita kawal kasus ini hingga tuntas,&rdquo; kunci Darman.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Hingga berita ini diturunkan, belum ada konfirmasi resmi dari Benyamin YD terkait persoalan ini.<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">[*]</strong></p>', 9, 'hukum-soal-dugaan-setdakab-mamasa-gabung-parpol-lsm-akindo-sulbar-punya-bukti-kuat', NULL, 'Yes', '2018-04-21 00:21:26', '2018-04-21 00:21:26', '2018-04-21 00:21:26'),
(14, 'http://mamujutoday.com/wp-content/uploads/2018/04/07b3e6c1-5658-410a-acd7-8c1676b17722.jpg', 'gambar', 'Penuhi Panggilan Ombudsman, Ini Klarifikasi Disdag Mamuju', '<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">JAKARTA-</strong>Anggota DPR RI asal Sulawesi Barat, Ibnu Munzir, secara resmi ditetapkan sebagai Wakil ketua Komisi V DPR RI, menggantikan Muhidin M Said. Penetapan tersebut dipimpin langsung oleh Wakil ketua DPR RI Korinbag, Agus Hermanto, di ruang rapat Komisi V, Senayan, Jakarta, Senin [2/4].</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif; text-align: justify;\">Penetapan ini ditandai dengan penyerahan palu sidang dari Agus Hermanto kepada Ibnu Munzir, sebagai simbolisasi Wakil Ketua Komisi V DPR yang baru. Sebelumnya, pergantian di internal fraksi Golkar ini, ditandatangani langsung Melchias Marcus Mekeng dan Agus Gumiwang, masing-masing sebagai Ketua dan Sekretaris Fraksi Golkar DPR RI.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif; text-align: justify;\">Ibnu Munzir dalam sambutan perdananya mengatakan, hal ini merupakan amanah yang diberikan fraksi yang harus ia jalankan sebaik mungkin. Ibnu berharap, Komisi V tetap bisa menjaga kekompakan, dalam menjaga tugas dan fungsi kedepannya.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif; text-align: justify;\">&ldquo;Saya kembali ke komisi V, semua Anggota Komisi V adalah teman lama saya. Sebagai penugasan baru saya dari Fraksi, Insya Allah saya dapat bekerja sama dan diterima baik di komisi ini. Apa yang sudah dibangun teman-teman, semoga terus berlanjut,&rdquo;kuncinya.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif; text-align: justify;\">Seperti diketahui, Kementrian dan Lembaga yang menjadi mitra Komisi V DPR RI, yakni Kementrian PUPR, Kementrian Perhubungan, Kementerian Desa dan Daerah Tertinggal, Basarnas dan BMKG.<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">[*/Mursyid]</strong></p>', 10, 'penuhi-panggilan-ombudsman-ini-klarifikasi-disdag-mamuju', NULL, 'Yes', '2018-04-21 00:26:33', '2018-04-21 00:26:33', '2018-04-21 00:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `source` varchar(500) NOT NULL,
  `source_type` varchar(20) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `visitor` int(5) DEFAULT NULL,
  `display` varchar(10) DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `source`, `source_type`, `judul`, `konten`, `id_kategori`, `url`, `visitor`, `display`, `time`, `created_at`, `updated_at`) VALUES
(16, 'http://mamujutoday.com/wp-content/uploads/2017/08/polisi-imbau-masyarakat-sulbar-tidak-gunakan-bom-ikan.bmp', 'gambar', 'Polisi Imbau Masyarakat Sulbar Tidak Gunakan Bom Ikan', '<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">MAMUJU &ndash;&nbsp;</strong>Satuan Polisi Perairan (Satpolair) Polres Mamuju, Sulawesi Barat (Sulbar), mensosialisasikan larangan menangkap ikan dengan menggunakan bahan peledak. Hal ini diungkapkan, Kepala Satuan Polair Polres Mamuju, Iptu Burhanudin.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Menurut Burhanuddin, sosialisasi itu dilakukan agar masyarakat khususnya nelayan di daerah itu, menghindari penggunaan bahan peledak dalam menangkap ikan karena dapat merusak biota laut yang menjadi sumber pencaharian mereka.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Kami melaksanakan sosialisasi sekaligus menempelkan pengumuman tentang larangan menangkap ikan dengan menggunakan bahan peledak,&rdquo; ujar Burhanudin.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Sosialisasi dan pemasangan pengumuman larangan menangkap ikan dengan menggunakan bahan peledak itu, kata Burhanudin, dilakukan di sejumlah kawasan, di antaranya pelabuhan TPI, Pelabuhan feri Simboro serta Pelabuhan Mamuju.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Kami memasang pengumuman tersebut pada tempat umum khususnya pelabuhan agar dapat dibaca dan mudah diketahui oleh nelayan dan masyarakat pesisir,&rdquo; jelas Burhanudin.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Sebelumnya, Direktur Polair Polda Sulbar, Kombespol Toni Ariadi menyatakan, pihaknya secara rutin mendatangi kawasan pesisir untuk menyampaikan himbauan tentang larangan penggunaan alat tangkap ikan yang dapat merusak ekosistem laut.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Secara rutin, kami mengimbau masyarakat khususnya yang berada di kawasan pesisir agar menjaga ekosistem laut dengan tidak menggunakan alat tangkap yang dapat merusak terumbu karang maupun biota laut lainnya, termasuk tetap menjaga kawasan hutan bakau,&rdquo; kata Toni Ariadi.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Selain itu, pihaknya juga terus memantau aktivitas penjualan ikan di kawasan TPI Pelabuhan Mamuju untuk mengantisipasi penjualan ikan menggunakan bahan berbahaya seperti formalin.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Kami juga terus memantau hasil produksi perikanan khususnya yang dijual di TPI untuk menghindari adanya ikan yang dijual menggunakan bahan pengawet berbahaya,&rdquo; tutupnya. (*/)</p>', 0, 'polisi-imbau-masyarakat-sulbar-tidak-gunakan-bom-ikan', NULL, 'Yes', '2018-04-21 00:31:06', '2018-04-21 00:31:06', '2018-04-21 00:31:06'),
(17, 'http://mamujutoday.com/wp-content/uploads/2017/08/Pelantikan-Fariduddin-Wahid-Ketua-DPRD-Polman.jpeg', 'gambar', 'Foto Pelantikan Ketua DPRD Polman, Fariduddin Wahid', '<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">POLMAN &ndash;</strong>&nbsp;Fariduddin Wahid, resmi menjadi Ketua DPRD Polewali-Mandar (Polman) masa jabatan 2014-2019, Senin (14/8) melalui sidang Paripurna Istimewa yang bertempat di Gedung DPRD Polman.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Fariruddin menjadi Ketua DPRD setelah melalui mekanisme Pergantian Antar Waktu (PAW) atas Ketua DPRD sebelumnya, alm H Hamzah Haya, yang meninggal beberap waktu lalu. Berikut foto-foto pelantikannya.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&nbsp;</p>\r\n<div id=\"attachment_2104\" class=\"wp-caption alignnone\" style=\"margin: 5px 0px 30px; padding: 0px; border: 0px; font-size: 0.8rem; vertical-align: baseline; color: #777777; max-width: 100%; font-family: Roboto, sans-serif; width: 660px;\"><img class=\"wp-image-2104 size-full\" style=\"margin: 0px; padding: 0px; border: 0px; font-size: 12.8px; vertical-align: baseline; max-width: 100%; height: auto; backface-visibility: hidden;\" src=\"http://mamujutoday.com/wp-content/uploads/2017/08/Pelantikan-Fariduddin-Wahid-Ketua-DPRD-Polman.jpeg\" sizes=\"(max-width: 650px) 100vw, 650px\" srcset=\"http://mamujutoday.com/wp-content/uploads/2017/08/Pelantikan-Fariduddin-Wahid-Ketua-DPRD-Polman.jpeg 650w, http://mamujutoday.com/wp-content/uploads/2017/08/Pelantikan-Fariduddin-Wahid-Ketua-DPRD-Polman-300x162.jpeg 300w\" alt=\"\" width=\"650\" height=\"350\" />\r\n<p class=\"wp-caption-text\" style=\"margin: 5px 0px 30px; padding: 0px; border: 0px; font-size: 0.8rem; vertical-align: baseline; line-height: 19.84px; max-width: 100%;\">Fariduddin Wahid dilantik menjadi Ketua DPRD Polman, menggantikan alm H Hamzah Haya, yang meninggal beberapa waktu lalu.</p>\r\n</div>\r\n<div id=\"attachment_2103\" class=\"wp-caption alignnone\" style=\"margin: 5px 0px 30px; padding: 0px; border: 0px; font-size: 0.8rem; vertical-align: baseline; color: #777777; max-width: 100%; font-family: Roboto, sans-serif; width: 660px;\"><img class=\"wp-image-2103 size-full\" style=\"margin: 0px; padding: 0px; border: 0px; font-size: 12.8px; vertical-align: baseline; max-width: 100%; height: auto; backface-visibility: hidden;\" src=\"http://mamujutoday.com/wp-content/uploads/2017/08/Pelantikan-Fariduddin-Ketua-DPRD-Polman.jpeg\" sizes=\"(max-width: 650px) 100vw, 650px\" srcset=\"http://mamujutoday.com/wp-content/uploads/2017/08/Pelantikan-Fariduddin-Ketua-DPRD-Polman.jpeg 650w, http://mamujutoday.com/wp-content/uploads/2017/08/Pelantikan-Fariduddin-Ketua-DPRD-Polman-300x162.jpeg 300w\" alt=\"\" width=\"650\" height=\"350\" />\r\n<p class=\"wp-caption-text\" style=\"margin: 5px 0px 30px; padding: 0px; border: 0px; font-size: 0.8rem; vertical-align: baseline; line-height: 19.84px; max-width: 100%;\">Fariduddin Wahid saat diambil sumpahnya sebagai Ketua DPRD Polman, Senin (14/8).</p>\r\n</div>\r\n<div id=\"attachment_2105\" class=\"wp-caption alignnone\" style=\"margin: 5px 0px 30px; padding: 0px; border: 0px; font-size: 0.8rem; vertical-align: baseline; color: #777777; max-width: 100%; font-family: Roboto, sans-serif; width: 660px;\"><img class=\"wp-image-2105 size-full\" style=\"margin: 0px; padding: 0px; border: 0px; font-size: 12.8px; vertical-align: baseline; max-width: 100%; height: auto; backface-visibility: hidden;\" src=\"http://mamujutoday.com/wp-content/uploads/2017/08/Suasana-Paripurna-DPRD-Polman.jpeg\" sizes=\"(max-width: 650px) 100vw, 650px\" srcset=\"http://mamujutoday.com/wp-content/uploads/2017/08/Suasana-Paripurna-DPRD-Polman.jpeg 650w, http://mamujutoday.com/wp-content/uploads/2017/08/Suasana-Paripurna-DPRD-Polman-300x162.jpeg 300w\" alt=\"\" width=\"650\" height=\"350\" />\r\n<p class=\"wp-caption-text\" style=\"margin: 5px 0px 30px; padding: 0px; border: 0px; font-size: 0.8rem; vertical-align: baseline; line-height: 19.84px; max-width: 100%;\">Suasana kantor DPRD Polman, saat menggelar Paripurna Istimewa pelantikan Ketua DPRD Polman yang baru, Fariduddin Wahid.</p>\r\n</div>', 0, 'foto-pelantikan-ketua-dprd-polman-fariduddin-wahid', 1, 'Yes', '2018-04-21 00:32:51', '2018-04-21 00:32:51', '2018-04-21 16:31:22'),
(18, 'http://mamujutoday.com/wp-content/uploads/2017/08/Irigasi-Mamuju.jpg', 'gambar', 'Proyek Irigasi Nasional di Mamuju Diharapkan Untungkan Petani', '<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">MAMUJU &ndash; Masyarakat Desa Sondoang, Kecamatan Kalukku, Kabupaten Mamuju, Provinsi Sulawesi Barat, menilai pembangunan irigasi di Salukaha, akan menguntungkan petani karena produktivitas dan masa tanam petani akan meningkat.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Bendungan yang sebelumnya direncanakan pemerintah akan dibangun di Kecamatan Kalukku, Kabupaten Mamuju, sangat kami apresiasi karena akan mendorong peningkatan pangan dan mendorong produksi padi nasional, disamping juga meningkatkan produksi padi daerah,&rdquo; kata tokoh pemuda di Kecamatan Kalukku, Kabupaten Mamuju, Arnol, baru-baru ini.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Arnol mengatakan, proyek pembangunan tersebut diharapkan akan mengairi sekitar 3.500 hektare lahan pertanian padi di Kecamatan Kalukku yang menjadi sentra produksi beras di Kabupaten Mamuju.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Dengan dibangunnya bendungan tersebut maka masa tanam petani akan bertambah menjadi tiga kali dalam setahun dan selain itu produktivitasnya yang mencapai 7,2 ton perhektare akan semakin meningkat,&rdquo; kata Arnol.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Arnol berharap, agar proyek tersebut dapat dikerjakan dikaji dengan baik, sehingga masyarakat tidak terkena dampak pembangunannya, namun tetap dapat berjalan sesuai yang diharapkan dan menguntungkan para petani.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">&ldquo;Tentu lahan perkebunan masyarakat kini menghasilkan akan terkena dampak dengan adanya pembangunan bendungan, dan lahan masyarakat yang ada di areal bendungan nantinya akan tergenang sebagai dampak pembangunannya, sehingga kami berharap agar ada ganti rugi lahan,&rdquo; jelasnya.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Arnol juga berharap agar proses ganti rugi yang dilakukan dapat dipercepat pemerintah, sehingga pekerjaan bendungan tersebut akan dapat dipercepat dan hasilnya dapat dirasakan masyarakat.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Sementara itu, anggota DPRD Sulbar, Sukri Umar, meminta agar pembangunan bendungan melalui kajian yang matang, sehingga hasilnya dapat sangat bermanfaat bagi kesejahteraan masyarakat bukan sebaliknya.</p>\r\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: #222222; line-height: 24.8px; font-family: Roboto, sans-serif;\">Proyek bendungan irigasi yang direncanakan akan dilaksanakan pemerintah pusat melalui Kementrian Pekerjaan Umum dan Perumahan Rakyat mulai akan dilelang pada Agustus 2017 ini, proyek tersebut akan menelan anggaran sekitar Rp230 miliar melalui APBN. (*/)</p>', 0, 'proyek-irigasi-nasional-di-mamuju-diharapkan-untungkan-petani', NULL, 'Yes', '2018-04-21 00:34:10', '2018-04-21 00:34:10', '2018-04-21 00:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `id` int(11) NOT NULL,
  `nama_iklan` varchar(255) DEFAULT NULL,
  `gambar_iklan` varchar(255) DEFAULT NULL,
  `expired` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `position` varchar(10) DEFAULT NULL,
  `url` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `infografis`
--

CREATE TABLE `infografis` (
  `id` int(11) NOT NULL,
  `source` varchar(500) NOT NULL,
  `source_type` varchar(20) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `visitor` int(5) DEFAULT NULL,
  `display` varchar(10) DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kode_kategori` varchar(255) DEFAULT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `display` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kode_kategori`, `nama_kategori`, `display`, `created_at`, `updated_at`) VALUES
(8, '6rqDn', 'Politik', 'Yes', '2018-04-21 00:14:21', '2018-04-21 00:14:21'),
(9, 'J8aq0', 'Hukum', 'Yes', '2018-04-21 00:14:48', '2018-04-21 00:14:48'),
(10, 'fGNkY', 'Mamuju', 'Yes', '2018-04-21 00:14:58', '2018-04-21 00:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `mamujutv`
--

CREATE TABLE `mamujutv` (
  `id` int(11) NOT NULL,
  `source` varchar(500) NOT NULL,
  `source_type` varchar(20) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `visitor` int(5) DEFAULT NULL,
  `display` varchar(10) DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `unique` varchar(10) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `id_users` int(10) DEFAULT NULL,
  `id_berita` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id`, `ip`, `unique`, `url`, `id_users`, `id_berita`, `created_at`, `updated_at`) VALUES
(11, '36.69.100.220', 'Yes', 'http://new.mamujutoday.com/public/view/foto/foto-pelantikan-ketua-dprd-polman-fariduddin-wahid', NULL, 17, '2018-04-21 16:31:22', '2018-04-21 16:31:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`,`id_kategori`) USING BTREE,
  ADD KEY `id_kategori` (`id_kategori`) USING BTREE;

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`,`id_kategori`) USING BTREE;

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `infografis`
--
ALTER TABLE `infografis`
  ADD PRIMARY KEY (`id`,`id_kategori`) USING BTREE;

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `mamujutv`
--
ALTER TABLE `mamujutv`
  ADD PRIMARY KEY (`id`,`id_kategori`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `infografis`
--
ALTER TABLE `infografis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mamujutv`
--
ALTER TABLE `mamujutv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
