-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql313.epizy.com
-- Waktu pembuatan: 29 Apr 2023 pada 06.32
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31035852_komentar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id`, `nama`, `isi`) VALUES
(6, 'Mohammad Arfan', 'Selamat yaa putra, semoga menjadi keluarga yang sakinah mawaddah warahmah ðŸ¤²'),
(19, 'Sifa sahdam', 'Alhamdulillah mba ana.. Gk terasa seminggu lagiiii...  Semoga lancar semua sampe hari H, aku Insyaalloh dtg.. Kan aku yg jaga stand..ðŸ˜‚\r\nMba ana hbi'),
(20, 'Ratri & Gito', 'Haiiiiii.....\r\nAlhamdulillah... Undangan yang kami tunggu sudah sampai dengan indah...ðŸ˜\r\nSemoga Rumah tangga mz Putra dan Ana Sakinah mawaddah rohm'),
(21, 'Manda ', 'Wededeeee Selamat Anaa dan Putra, semoga menjadi keluarga yg sakinah mawaddah warahmah AamiinðŸ¥°ðŸ¤­ðŸ˜'),
(22, 'Niya Y', 'Selamat menempuh hidup baru anna, semoga dilancarkan sampai hari H, dan menjadi keluarga yang sakinah mawadah dan warohmah'),
(23, 'Sarahmrs01', 'Barokallahulakum mba Anna dan suami semoga sampai hari H-nya dan hari H nya diberikan aman,selamat,lancar barokah dan menjadi keluarga yang sakinnah, '),
(24, 'Dimas cipari', 'Alhamdulilah mas mubalegh yg suka duel ps sama madrid gue udh dapet jodoh nya,semoga di lancarkan acara nya dan cepat di beri momongan yg sholeh/sholehah ...aminn'),
(25, 'Gresa', 'Alhamdulillah.. congrats ya mba.. \r\nSmoga Allah paring aman selamat lancar sukses dan barokah sampai hari Hanya..\r\nSmoga mnjdi keluarga yang sakinah mawadah warahmah dan diberikan keturunan yang Sholih-hah.. aamiin ðŸ¤²ðŸ¼ðŸ™ðŸ¼â˜ºï¸'),
(26, 'Arif + sinta = Leno', 'Allhamdulillah turut bahagia Samawa ya kalianðŸ¥° mudah2an allah paring jadi suami istri yg soleh & solihat, segera mendapatkan keturunan yg soleh & solihat rumah tangganya bahagia selalu tetap dalam QHJ sampai surga firdaus aman selamat lancar sukse'),
(27, 'Andijat', 'Alhamdulillah, selamat mas putra dan calon istri semoga lancar sampai hari H, dan dijadikan pasangan yg sakinah mawadah wa rahmah aamiin'),
(28, 'Fatkhur', 'Alhamdulillah turut bahagia Samawa ya mas, mudah2an allah paring jadi suami istri yg soleh & solihat, segera mendapatkan keturunan yg soleh & solihat rumah tangganya bahagia selalu tetap dalam QHJ sampai surga firdaus aman selamat lancar sukses'),
(29, 'Aqin', 'Selamat Untuk Mas Put, Semoga Allah Paring Acaranya Aman Selamat Lancar Dan Banyak Barokah nya, Dan Semoga Di Jadikan Keluarga yang Sakinnah Mawaddah Warohmah. Aamiin '),
(30, 'Aldo Cipari', 'Keren mas put..\r\nLancar barokah sampe hari H..\r\nSemoga bisa membangun keluarga yg SAMAWAðŸ‘ðŸ™'),
(31, 'Agung Sabdo W', 'Teruntuk mas Putra dan mba Ana semoga di berikan kebarokahan dari Allah atas hubungan kalian.\r\nSemoga menjadi keluarga yang berbahagia dan bisa melahirkan bibit-bibit yg unggul yg dapat bermanfaat untuk orang tua, negara dan terutama untuk agama. Aam'),
(32, 'Mama wisnu', 'Mak emak boleh Nimbrung ya mas, semoga menjadi kluarga yg SAMAWA, lancar barokah acaranya,.. Tetap semangat perjuangan baru dimulai ðŸ˜ƒ'),
(33, 'Ratna mama ruben', 'Turut berbahagia...Semoga menjadi keluarga yg sakinah mawaddah warohmah..bahagia dunia dan akhirot...â¤'),
(34, 'Eliyah Nur Indah Sari', 'Alhamdulillah, semoga di lancarkan acaranya &  mjd keluarga yang sakinah mawaddah warahmah Aamiin..'),
(35, 'Agung Trisna & Chelly Cornelia Permatasari', 'Alhamdulillah... (dulu cabe rawit Mas Agung nih sekarang sudah mau berkeluarga).\r\nSemoga Allah paring keluarga yang Sakinah, Mawaddah dan Penuh Rohmat Allah buat Putra dan Mba Ana istrinya. Semoga Allah paring rezeki yang banyak berlimpah, halal dan '),
(36, 'Riski Maulana', 'Selamat untuk mas putra , semoga menjadi keluarga yang sakinah mawaddah warohmah..\r\nSemoga selalu di kelancaran dan kebarokahan.. '),
(37, 'Sigit dan rizna', 'Alhamdulillah,.mas barakallah mas.\r\nSmoga mjd kluarga yg sakinah,mawadah warahmah,dberikan kturunan yg Soleh/Solehah,.\r\nInsya Allah hadir\r\nAmin.'),
(39, 'Salbiawati (salby)', 'Semoga menjadi keluarga yg sakinah,mawaddah warrahmah,penuh dg kebahagiaan dan kesejahteraan lahir dan bathin.bisa saling menguatkan,bs saling menerima kekurangan,saling melengkapi dan saling support dlm kebaikanðŸ¤²semoga diberi keturunan ank2 yg so'),
(40, 'Chandra Adi', 'Barokallah lakuma. \r\nSelamat buat mas putra dan mb ana... Semoga menjadi keluarga yg sakinah mawaddah wa rahmah... Tinggal saya menyusul dech. Hehehe'),
(41, 'Arif Susanto', 'Ø¨ÙŽØ§Ø±ÙŽÙƒÙŽ Ø§Ù„Ù„Ù‘ÙŽÙ‡Ù Ù„ÙŽÙƒÙŽ ÙˆÙŽØ¨ÙŽØ§Ø±ÙŽÙƒÙŽ Ø¹ÙŽÙ„ÙŽÙŠÙ’ÙƒÙŽ ÙˆÙŽØ¬ÙŽÙ…ÙŽØ¹ÙŽ Ø¨ÙŽÙŠÙ’Ù†ÙŽÙƒÙÙ…ÙŽØ§ ÙÙÙŠ Ø§Ù„Ù’Ø®ÙŽÙŠÙ’Ø±Ù\r\n\r\nSemoga Allah jadikan kalian berdua pasangan suami istri yang dapat menjalani kehidupan berumahtangga yg sakinah mawaddah warohmah'),
(42, 'Nurhidayati', 'Happily ever after ana & suami â¤ï¸â¤ï¸ semoga menjadi keluarga sakinah mawadah warohmah, diberkahi kehidupan rumah tangganya dan diberi keturunan soleh soleha.'),
(43, 'Keluarga Besar: Bambang Santoso', 'â€ŽØ§Ù„Ø³ÙŽÙ‘Ù„Ø§ÙŽÙ…Ù Ø¹ÙŽÙ„ÙŽÙŠÙ’ÙƒÙÙ…Ù’ ÙˆÙŽØ±ÙŽØ­Ù’Ù…ÙŽØ©Ù Ø§Ù„Ù„Ù‡Ù ÙˆÙŽØ¨ÙŽØ±ÙŽÙƒÙŽØ§ØªÙ\r\n\r\nSemoga menjadi kelaurga yang sakinah mawadah warohmah,\r\n\r\nØ¨Ø§Ø±Ø§Ùƒ Ø§Ù„Ù„Ù‡ Ù„ÙƒÙ…\r\n\r\nSalam kagem Keluarga, Semoga Allah paring sehat-sehat selalu, lancar rejekinya, dan barokah,...\r\n\r\nâ€ŽÂ Ø§Ù„Ù’Ø­ÙŽÙ…Ù’Ø¯Ù Ù„ÙÙ„Ù‘Ù°Ù€Ù€ÛÙ Ø¬ÙŽÙ€Ù€Ø²ÙŽØ§ÙƒÙ'),
(44, 'Aprizal Suryaman', 'Selamat ya putra. Semoga menjadi keluarga yang sakinah mawaddah warahmah ðŸ¤² amin'),
(45, 'Tegar pamong', 'Mugo2 Allah paring keluar yang sakinah mawaddah warohmah, barokah,, jangan lupa doa'),
(46, 'putra kamulyan', 'Terimakasih Alhamdulillah jazakumullohu khoiro semuanya sudah mendoakan ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
