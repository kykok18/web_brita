-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2026 pada 03.04
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `tanggal` datetime DEFAULT current_timestamp(),
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `gambar`, `id_kategori`, `penulis`, `views`, `tanggal`, `id_user`) VALUES
(15, 'Persija ditakhlukan Bhayangkara 2-3 dikandang Bhayangkara', 'Hasil ini membuat Persija tertahan di posisi tiga klasemen BRI Super League 2025/2026 dengan 52 poin. Persija tertinggal dua angka dari Borneo FC yang menempati urutan dua. Adapun Bhayangkara naik ke posisi lima dengan torehan 44 poin.\r\n\r\nPersija mengawali pertandingan dengan sangat baik. Laga baru berjalan 34 detik, Macan Kemayoran sudah bisa membuka keunggulan. Rayhan Hannan mencetak gol lewat sundulan meneruskan umpan dari Allano.\r\n\r\nBhayangkara tak terpengaruh gol cepat. Mereka mampu menekan Persija setelah itu. Beberapa kali serangan tuan rumah lewat Privat Mbarga dan Moussa Sidibe merepotkan pertahanan Persija.\r\n\r\nPada menit 28, Bhayangkara akhirnya bisa menyamakan kedudukan. Umpan Putu Gede pada sebuah kemelut di kotak penalti Persija disambar oleh Moussa Sidibe yang berada di tiang jauh. Kiper Persija Cyrus Margono tak berdaya.\r\n\r\nGol Sidibe ini merusak debut Margono sebagai pemain Persija di BRI Super League 2025/2026. Skor 1-1 bertahan sampai turun minum.\r\n\r\nTiga menit bebak kedua berjalan, Persija harus bermain dengan 10 pemain. Bek Jordi Amat diusir wasit akibat mendapat kartu kuning kedua setelah terprovokasi permainan lawan.\r\n\r\nMeski kalah jumlah pemain, Persija justru malah bisa kembali unggul pada menit 62. Tendangan bebas Fabio Calonego dari luar kotak penalti berhasil merobek jala Bhayangkara FC.\r\n\r\nBhayangkara baru bisa menyamakan skor pada menit 86. Dendy Sulistyawan membuat skor imbang 2-2 setelah tendangan bebasnya gagal dijangkau Cyrus Margono.\r\n\r\nTuan rumah makin percaya diri. Hasilnya mereka berbalik unggul pada menit 95. Sidibe kembali jadi mimpi buruk bagi Cyrus. Sidbe mencetak gol indah. Usai solo-run, Sidibe menusuk ke dalam dan melepaskan tembakan kaki kiri ke tiang jauh. Skor 3-2 untuk Bhayangkara bertahan sampai bubaran.', 'Screenshot 2026-04-05 223725.png', 2, 'Rizky Fadilah', 1, '2026-04-05 22:38:34', 0),
(16, 'Kapan Selesainya Kasus Ijazah Jokowi', 'RIAU24.COM - Pengamat politik Adi Prayitno mempertanyakan penyelesain polemik ijazah Presiden ke-7 RI Joko Widodo yang kini terus berlarut-larut.\r\n\r\nPadahal, Indonesia tengah situasi krisis ekonomi dan energi, dikutip dari rmol.id, Minggu, 5 April 2026\r\n\r\nPersoalan ijazah kok rasa-rasanya sulit dihentikan, tidak pernah kenal ruang dan kenal waktu sekalipun ada isu penting yaitu ekonomi, fiskal termasuk krisis BBM tapi isu ijazah terus berlanjut seakan tanpa henti selalu muncul episode dan babak baru,\" ujarnya.\r\n\r\nDia menyanyangkan munculnya sejumlah nama tokoh dalam isu terbaru yang dinilai tidak rasional. \r\nSementara partai-partai yang dikaitkan justru telah memberikan klarifikasi.\r\n\r\n\"Ketika disebutkan nama-nama ini kok rasa-rasanya sedikit tidak rasional ya. Karena PDIP dan Partai Demokrat ketika dikaitkan, mereka sudah ngasih warning tidak pernah terlibat dalam persoalan ini,\" ujarnya.\r\n\r\nDia meminta, polemik ini segera diakhiri, apalagi sebagian pihak telah menempuh jalur hukum maupun mediasi.\r\n\r\n“Saya kira sudah saatnya kita harus mengakhiri persoalan ijazah ini. Bukankah saat ini sudah ada pihak-pihak yang menjalani proses hukum dan ada juga yang menempuh mediasi melalui restorative justice,\" pintanya.', 'Screenshot 2026-04-05 230506.png', 17, NULL, 1, '2026-04-05 23:11:48', 0),
(17, 'Analisis Pakar soal Jokowi siap Mati-matian Menangkan PSI', 'Jakarta - Presiden RI ke-7 Joko Widodo (Jokowi) menegaskan komitmennya untuk bekerja keras dan mati-matian demi PSI. Peneliti dari Politika Research & Consulting, Nurul Fatta, menilai pernyataan Jokowi tersebut seperti orang yang khawatir.\r\n\"Justru saya melihat teriakan Jokowi dalam pidatonya, yang akan mati-matian bekerja untuk PSI adalah teriakan orang yang sedang terancam, cemas, dan penuh kekhawatiran,\" kata Fatta, Minggu (1/2/2026).\r\n\r\nMenurut analisisnya, Jokowi tampak khawatir jika Gibran Rakabuming Raka tidak dijadikan lagi sebagai pendamping Presiden Prabowo Subianto. Hal ini, menurut dia, ada dalam ungkapan harapan Jokowi.\r\n\r\n\"Kalau dari aspek politiknya, saya meyakini Jokowi khawatir anak sulungnya tidak lagi dijadikan pendamping Presiden Prabowo. Tercatat sudah dua kali Jokowi menegaskan Prabowo Gibran dua periode, ungkapan itu adalah ungkapan harapan,\" katanya.\r\n\r\nDia menilai PSI merupakan opsi jika Gibran tak diusung lagi. PSI akan dipakai sebagai kendaraan capres.\r\n\r\n\"Makanya melalui PSI dan membesarkan PSI, Jokowi gelagatnya ingin mengatakan bahwa biarpun Gibran tidak diusung lagi mendampingi Prabowo, dia tetap punya kendaraan politik maju sendiri sebagai capres melalui PSI,\" lanjutnya.\r\n\r\nLebih lanjut, ia melihat gelagat Jokowi sebagai gertakan politik. Sebab, dia melihat Jokowi terlihat merasa terancam.\r\n\r\n\"Gelagat Jokowi di sini sedang memberikan peringatan, sekaligus gertakan politik kepada siapa pun. Karena orang yang merasa cemas, terancam biasanya akan melakukan gertakan kepada lawan politiknya,\" katanya.\r\n\r\n\"Begitupun panggung PSI kemarin, menjadi ajang saut-sautan kelakar, antara anak dan bapak,\" sambungnya.\r\n\r\nJokowi Siap Mati-matian untuk PSI\r\nSebelumnya, Jokowi menyampaikan hal tersebut saat memberikan arahan dalam Rakernas PSI, di Makassar, Sulawesi Selatan, Sabtu (31/1/2026). Jokowi menyatakan siap datang jika diperlukan.\r\n\r\n\"Kalau diperlukan saya harus datang, saya masih sanggup. Saya masih sanggup datang ke provinsi-provinsi, semua provinsi. Saya masih sanggup datang ke kabupaten/kota, kalau perlu sampai ke kecamatan, saya masih sanggup,\" tegas Jokowi.\r\n\r\nJokowi mengatakan PSI memerlukan jajaran pengurus yang militan. Jokowi pun siap bekerja keras dan mati-matian untuk PSI.\r\n\r\n\"Saudara-saudara bekerja keras untuk PSI, saya pun akan bekerja keras untuk PSI. Saudara-saudara bekerja mati-matian untuk PSI, saya pun akan bekerja keras, bekerja mati-matian untuk PSI. Saudara-saudara bekerja habis-habisan untuk PSI, saya pun akan bekerja habis-habisan untuk PSI,\" ucap Jokowi dengan suara lantang.', 'Screenshot 2026-04-05 231402.png', 17, NULL, 2, '2026-04-05 23:18:10', 0),
(18, 'Sudah Jatuh Tertimpa Tangga! Kalah dari Mallorca, Real Madrid Tanpa Playmaker Muda saat Hadapi Girona', 'Bola.com, Jakarta - Real Madrid dalam kondisi yang tidak baik di La Liga Spanyol. Setelah kalah dari Mallorca pada jornada 30 La Liga, Sabtu (4/4/2026) malam WIB, Los Blancos seperti jatuh tertimpa tangga. Mereka harus kehilangan pemain muda andalan pada laga selanjutnya.\r\n\r\nHarapan Real Madrid dalam perebutan gelar juara La Liga baru saja mendapatkan pukulan telak setelah mereka menelan kekalahan 1-2 dari Mallorca.\r\n\r\nPada saat yang bersamaan, Barcelona justru berhasil mengamankan kemenangan tipis atas Atletico Madrid. Hasil pertandingan akhir pekan ini membuat Los Blancos kini tertinggal tujuh poin dari Barcelona.\r\n\r\nSituasi ini menjadikan setiap pertandingan ke depan sebagai laga yang wajib dimenangkan oleh anak asuh Alvaro Arbeloa jika mereka ingin tetap menjaga peluang dalam perebutan takhta juara.\r\n\r\nNamun, Real Madrid dipastikan harus tampil dengan kekuatan lini serang yang berkurang dalam pertandingan berikutnya melawan Girona, Sabtu (11/4/2026) dini hari WIB.\r\n\r\nReal Madrid dipastikan tidak akan diperkuat oleh Franco Mastantuono dalam laga melawan Girona. Absennya pemain asal Argentina itu karena akumulasi lima kartu kuning yang ia kumpulkan sepanjang musim ini.\r\n\r\nKartu kuning terakhirnya diterima saat Real Madrid takluk dari Mallorca. Sesuai dengan regulasi La Liga terkait akumulasi kartu kuning, sang penyerang harus menjalani sanksi larangan bermain selama satu pertandingan.\r\n\r\nHal ini otomatis membuatnya keluar dari daftar pemain yang bisa diturunkan menghadapi Girona, meskipun sebenarnya ia memang tidak diprediksi akan masuk dalam starting eleven Real Madrid.\r\n\r\nRiwayat Disiplin yang Menghambat\r\nPerlu dicatat Mastantuono sebenarnya baru saja menyelesaikan hukuman larangan bermain selama dua pertandingan liga, setelah menerima kartu merah saat menghadapi Getafe pada Maret 2026.\r\n\r\nSejak pergantian tahun, pemain asal Argentina ini jarang mendapatkan menit bermain.\r\n\r\nPelatih baru Real Madrid, Alvaro Arbeloa, saat ini lebih memilih untuk mengandalkan pemain seperti Vinicius Jr., Arda Guler, dan memberikan kesempatan kepada Brahim Diaz untuk tampil di lini serang.\r\n\r\nMusim yang Sulit bagi Sang Talenta Muda\r\nAbsen kembali dalam pertandingan akibat skorsing tentu tidak membantu situasi Mastantuono yang sedang menjalani musim debut yang cukup berat di Santiago Bernabeu.\r\n\r\nSelain masalah kedisiplinan di lapangan, sang pemain juga sempat menarik perhatian publik baru-baru ini ketika ia berkomentar mengenai target transfer Real Madrid, Enzo Fernandez.\r\n\r\nDengan minimnya kontribusi dan seringnya ia absen, tantangan bagi Mastantuono untuk membuktikan kualitasnya di hadapan Arbeloa kini terasa semakin berat.\r\n\r\nSisa musim ini akan menjadi ujian penting bagi sang pemain untuk bangkit atau justru semakin tersisih dari rencana jangka panjang klub.\r\n\r\nSumber: Madrid Universal', 'Screenshot 2026-04-05 232007.png', 2, NULL, 1, '2026-04-05 23:22:47', 0),
(22, 'Meta dan YouTube Tak Penuhi Panggilan, Komdigi Layangkan Surat Kedua', 'Kementerian Komunikasi dan Digital (Komdigi) melayangkan surat panggilan kedua kepada Google (YouTube) dan Meta (Facebook, Instagram, Threads) setelah keduanya belum memenuhi panggilan pemeriksaan terkait pelanggaran kepatuhan terhadap regulasi pelindungan anak di ruang digital (PP Tunas).\r\nDirjen Pengawasan Ruang Digital Komdigi Alexander Sabar menyebut kedua platform sebelumnya telah meminta penundaan dengan alasan kebutuhan koordinasi internal.\r\n\r\n\"Permohonan penjadwalan ulang telah kami terima, sehingga kewajiban untuk memenuhi panggilan pemeriksaan belum dijalankan\" ujar Alex dalam keterangannya, Kamis (2/4).\r\n\r\nIa mengatakan pemanggilan kedua ini merupakan langkah lanjutan dalam proses penegakan kepatuhan yang tidak dapat ditunda.\r\n\r\n\"Hari ini kami menerbitkan surat pemanggilan kedua kepada pihak terkait. Sesuai ketentuan, pemanggilan dapat dilakukan hingga maksimal tiga kali sebelum penjatuhan sanksi. Proses ini dilaksanakan mengacu pada Pasal 32 ayat (2) Peraturan Pemerintah Nomor 17 Tahun 2025 serta Pasal 44 ayat (2) Peraturan Menteri Komunikasi dan Digital Nomor 9 Tahun 2026,\" tegasnya.\r\n\r\nAlex menekankan bahwa kepatuhan terhadap aturan pelindungan anak bukan sekadar kewajiban administratif, tetapi tanggung jawab yang berdampak langsung pada keselamatan anak di ruang digital.\r\n\r\n\"Setiap penundaan memperpanjang risiko yang dihadapi anak di ruang digital. Karena itu, kami menuntut kepatuhan yang konkret dan tepat waktu dari seluruh platform, termasuk platform global,\" tuturnya.\r\n\r\nLebih lanjut, Komdigi memastikan seluruh tahapan pengawasan akan terus berjalan, termasuk langkah lanjutan apabila ketidakpatuhan berlanjut.\r\n\r\n\"Pemanggilan ini adalah bagian dari proses. Jika kewajiban tidak dipenuhi, mekanisme penegakan akan berlanjut sesuai ketentuan yang berlaku,\" kata Alex.\r\n\r\nIa juga menegaskan bahwa pelindungan anak merupakan prioritas yang tidak dapat dinegosiasikan.\r\n\r\n\"Kami mengharapkan itikad baik dan tindakan nyata dari setiap penyelenggara sistem elektronik. Ruang digital yang aman bagi anak adalah tanggung jawab bersama, dan kepatuhan terhadap regulasi adalah bagian dari komitmen itu,\" pungkas Alex.\r\n\r\nSebelumnya, Komdigi telah melayangkan surat panggilan pertama pada Senin (30/3) kepada Meta dan Google karena melanggar aturan implementasi PP Tunas. Kedua perusahaan itu disebut belum mematuhi implementasi aturan pembatasan media sosial untuk anak usia di bawah 16 tahun.\r\n\r\nMenkomdigi Meutya Hafid mengatakan hasil pemantauan selama dua hari sejak penerapan PP Tunas, masih ada platform yang belum memenuhi ketentuan yang berlaku. Aturan ini sebelumnya mewajibkan delapan platform berisiko tinggi untuk menonaktifkan akun anak.\r\n\r\n\"Kami juga mencatat ada dua entitas bisnis yang tidak mematuhi hukum yaitu Meta yang menaungi Facebook, Instagram, dan Threads, serta Google yang menaungi YouTube,\" kata Meutya dalam keterangan resminya, Senin (30/3).\r\n\r\n\"Keduanya telah melanggar hukum yang berlaku di Indonesia, yaitu Permen nomor 9 tahun 2026 sebagai turunan dari PP Tunas,\" kata dia lebih lanjut.', 'Screenshot 2026-04-05 232726.png', 1, 'Rizky Fadilah', 0, '2026-04-06 00:18:17', NULL),
(23, 'Tak Patuh PP Tunas, Google Tolak Blokir Akun Anak Secara Menyeluruh  ', 'Raksasa teknologi Google menolak memblokir akun anak usia di bawah 16 tahun secara menyeluruh sebagaimana aturan di Indonesia yang tercantum dalam PP Tunas. Apa alasannya?\r\nMerujuk aturan PP Tunas, salah satu platform milik Google, YouTube, masuk dalam daftar aplikasi berisiko tinggi yang wajib memblokir akun anak per 28 Maret 2026. Namun demikian, Google menolak langkah ini.\r\n\r\nGoogle tidak setuju dengan wacana pembatasan atau pemblokiran akun secara menyeluruh bagi pengguna di bawah usia 16 tahun. Perusahaan menilai pendekatan tersebut justru berisiko menghilangkan berbagai fitur perlindungan yang selama ini dirancang untuk menjaga keamanan anak di ruang digital.\r\n\r\nDalam pernyataan resminya, Google menegaskan bahwa anak-anak seharusnya tetap memiliki akses ke ruang digital yang aman untuk belajar, tumbuh, dan bereksplorasi, bukan sepenuhnya dibatasi.\r\n\r\nPerusahaan menyebut telah berinvestasi lebih dari satu dekade dalam mengembangkan teknologi dan sistem perlindungan bagi pengguna muda. Meski begitu, Google menyatakan dukungannya terhadap tujuan Pemerintah Indonesia melalui kebijakan PP Tunas, khususnya pendekatan berbasis penilaian mandiri berbasis risiko (risk-based self-assessment).\r\n\r\n\"Kami selaras dengan tujuan Pemerintah Indonesia dalam PP Tunas, dan mengapresiasi pendekatan penilaian mandiri berbasis risiko (risk-based self-assessment) yang diusungnya,\" tulis Google Indonesia di blog resmi mereka, Jumat (27/3).\r\n\r\nPendekatan ini dinilai lebih efektif karena mendorong perusahaan menghadirkan fitur perlindungan yang terintegrasi dan sesuai usia, dibandingkan menerapkan larangan menyeluruh.\r\n\r\nMenurut Google, kebijakan pemblokiran akun bagi anak di bawah 16 tahun justru dapat menghilangkan akses ke fitur keamanan seperti akun dengan pengawasan orang tua (supervised accounts), pengaturan waktu layar, hingga perlindungan kesejahteraan digital.\r\n\r\nTanpa fitur-fitur tersebut, anak-anak berpotensi menggunakan layanan digital tanpa kontrol yang memadai.\r\n\r\nSelain aspek keamanan, YouTube juga menyoroti perannya sebagai platform pembelajaran terbuka di Indonesia. Dari ruang kelas hingga rumah, YouTube disebut telah membantu memperluas akses pendidikan, terutama bagi siswa di daerah terpencil.\r\n\r\n\"Menghapus akun pengguna di bawah 16 tahun secara menyeluruh berisiko menciptakan kesenjangan pengetahuan, serta menghalangi hak siswa di desa-desa terpencil untuk mendapatkan kesetaraan akses dalam belajar yang sama dengan mereka yang berada di kota besar,\" ungkapnya.\r\n\r\nGoogle memperingatkan bahwa pembatasan akses secara menyeluruh berpotensi menciptakan kesenjangan pengetahuan, terutama bagi anak-anak di wilayah yang bergantung pada platform digital untuk belajar. Berdasarkan data internal, mayoritas orang tua di Indonesia menilai YouTube membantu mempermudah akses pendidikan.\r\n\r\nLebih jauh, ekosistem kreator edukasi atau \"edukreator\" di YouTube juga dinilai berkontribusi terhadap ekonomi digital nasional. Pembatasan ketat dikhawatirkan akan menghambat pertumbuhan ekosistem ini, termasuk dampaknya terhadap lapangan kerja dan kontribusi terhadap produk domestik bruto (PDB).\r\n\r\nSebagai alternatif, Google menekankan pentingnya pendekatan berbasis kesejahteraan digital. Perusahaan telah meluncurkan berbagai inisiatif, mulai dari pelatihan guru bimbingan konseling, penyusunan panduan kesehatan digital bersama institusi medis, hingga program komunitas untuk meningkatkan ketahanan digital remaja.\r\n\r\nKe depannya, Google mendorong pemerintah untuk terus melibatkan pelaku industri dalam penyusunan kebijakan yang transparan dan kontekstual.\r\n\r\nPerusahaan menyatakan siap berpartisipasi dalam implementasi PP Tunas melalui mekanisme penilaian mandiri guna memastikan standar keamanan bagi pengguna muda tetap terjaga tanpa mengorbankan akses terhadap informasi dan peluang digital.\r\n\r\nSebelumnya, Menkomdigi Meutya Hafid mengaku telah mengirimkan surat pemanggilan terhadap Google karena dianggap belum mematuhi implementasi aturan pembatasan media sosial untuk anak usia di bawah 16 tahun yang diatur PP Tunas.\r\n\r\n\"Kami juga mencatat ada dua entitas bisnis yang tidak mematuhi hukum yaitu Meta yang menaungi FB, IG, dan Thread serta Google yang menaungi YouTube. Keduanya telah melanggar hukum yang berlaku di Indonesia yaitu Permen nomor 9 tahun 2026 sebagai turunan dari PP Tunas,\" kata Meutya dalam keterangan resmi yang diterima CNNIndonesia.com, Senin (30/3).\r\n\r\n\"Kepada keduanya, pemerintah hari ini mengirimkan surat pemanggilan sebagai bagian dari penerapan sanksi administratif sesuai dengan ketentuan yang berlaku,\" tambahnya.\r\n', 'Screenshot 2026-04-06 001901.png', 1, 'Rizky Fadilah', 0, '2026-04-06 00:21:07', NULL),
(25, 'Sinopsis Hijack 1971, Bioskop Trans TV 5 April 2026  ', 'Bioskop Trans TV malam ini, Minggu 5 April 2026, akan menayangkan Hijack 1971 untuk pertama kalinya di layar kaca pukul 21.30 WIB. Berikut sinopsis Hijack 1971 dibintangi Ha Jung-woo. \r\nHijack 1971 berlatar di Bandara Sokcho, ketika pilot Tae-in (Ha Jung-woo) dan Gyu-sik (Sung Dong-il) akan melakukan penerbangan menuju Gimpo pada musim dingin 1971.\r\n\r\nPenerbangan itu semula berjalan dengan aman dan lancar, termasuk saat pramugari memberi instruksi kepada penumpang. Namun, tak lama setelah lepas landas, bom rakitan meledak dan membuat pesawat kacau.\r\n\r\nLedakan itu datang dari seseorang bernama Yong-dae (Yeo Jin-goo). Ia adalah warga sipil yang mencoba pembajak pesawat dan mengambil kendali kokpit.\r\n\r\n\"Mulai saat ini, pesawat akan terbang ke utara.\"\r\n\r\nGyu-sik yang menjadi kapten dalam penerbangan itu terluka akibat ledakan itu hingga kehilangan satu penglihatan. Ia tidak bisa mengendalikan pesawat lantaran kokpit diambil alih Yong-dae yang mengancam menerbangkan pesawat ke arah utara.\r\n\r\nSementara itu, Tae-in yang selamat menjadi satu-satunya harapan di tengah situasi kacau sekaligus penuh putus asa. Ia pun mempertaruhkan nyawa supaya bisa melanjutkan penerbangan hingga selamat.\r\n\r\nHijack 1971 ditulis Kim Kyung-chan serta disutradarai Kim Seong-han. Kyung-chan dikenal sebagai penulis sejumlah film, seperti Cart (2014), 1987: When the Day Comes (2017), dan Hit-and-Run Squad (2019).\r\n\r\nSelain Ha Jung-woo, film ini juga dibintangi  Yeo Jin-goo, Sung Dong-il, Chae Soo-bin, hingga Kim Dong-wook.\r\n\r\nSetelah mengetahui sinopsis Hijack 1971, saksikan film itu di Bioskop Trans TV pukul 21.30 WIB. Bioskop Trans TV juga akan menayangkan No Way Up pukul 23.30 WIB.\r\n', 'Screenshot 2026-04-06 003052.png', 8, 'Rizky Fadilah', 1, '2026-04-06 00:32:36', NULL),
(26, 'PTKIN Makin Diminati: Seiring Prestasi Dunia, Penerimaan Mahasiswa Baru 2026 Kian Kompetitif', 'Perguruan Tinggi Keagamaan Islam Negeri (PTKIN) kini bukan lagi sekadar pilihan alternatif, melainkan destinasi utama pendidikan tinggi yang bergengsi dan diakui secara internasional.\r\n\r\nBerdasarkan laporan Panitia Nasional Penerimaan Mahasiswa Baru (PMB-PTKIN) 2026, jalur Seleksi Prestasi Akademik Nasional (SPAN-PTKIN) mencatatkan lonjakan peminat yang fantastis.Advertisement\r\n\r\nSebanyak 143.948 siswa dari 12.174 satuan pendidikan di seluruh penjuru Indonesia bersaing ketat untuk memperebutkan kursi di kampus-kampus Islam negeri terbaik.\r\n\r\nSatuan Pendidikan tersebut terdiri dari jenjang MA/MAK/SMA/SMK/Pendidikan Diniyah Formal/Pendidikan Kesetaraan Pondok Pesantren Salafiyah/Mu\'adalah Muallimin/Mua\'dalah Salafiyah/sederajat.\r\n\r\nHal tersebut disampaikan pada Sidang Kelulusan Seleksi Prestasi Akademik Nasional (SPAN) PTKIN Tahun 2026 di Surabaya, Jumat (3/4/2026) lalu. \r\n\r\nTingginya angka pendaftar ini selaras dengan hasil survei minat siswa yang menunjukkan tren positif terhadap institusi pendidikan Islam.\r\n\r\nSurvei terbaru menunjukkan angka sentimen positif yang masif: 97,3 persen siswa yakin kualitas PTKIN setara dengan universitas umum papan atas, sementara 96,7 persen optimis bahwa lulusan PTKIN memiliki daya saing tinggi di pasar kerja global.Advertisement\r\n\r\nKetua PMB-PTKIN 2026, Prof. Dr. Abd. Aziz, M.Ag., menegaskan bahwa lonjakan ini dipicu oleh pergeseran paradigma masyarakat.\r\n\r\n\"Masyarakat kini melihat PTKIN sebagai paket lengkap: basis karakter keagamaan yang kokoh, biaya pendidikan yang sangat terjangkau, dan standar akademik kelas dunia,\" ucapnya dalam keterangan persnya dikutip pada Minggu (5/4/2026). \r\n\r\nMenurutnya Tahun 2026 menjadi tonggak sejarah baru dengan diperkenalkannya Pemetaan Kesehatan Mental bagi calon mahasiswa.\r\n\r\nInovasi ini menempatkan PTKIN sebagai pionir institusi pendidikan yang tidak hanya mengejar skor akademik, tetapi juga memprioritaskan kesejahteraan psikologis mahasiswanya.\r\n\r\nDirektur Jenderal Pendidikan Islam, Prof. Dr. Amien Suyitno, M.Ag, mencatat pencapaian unik pada tahun ini. Untuk pertama kalinya, jumlah pendaftar dari Madrasah di bawah naungan Kementerian Agama melampaui jumlah pendaftar dari sekolah umum.\r\n\r\n\"Ini bukti ekosistem pendidikan Islam kita semakin solid. Kurikulum kita sekarang dirancang global. Lulusan PTKIN kini sangat mudah menembus universitas ternama di luar negeri, termasuk ke Inggris dan negara Eropa lainnya,\" jelas Suyitno. \r\n\r\nSekretaris Jenderal Kementerian Agama RI, Prof. Dr. Kamaruddin Amin, MA, turut memberikan apresiasi tinggi atas pencapaian PTKIN yang mulai menduduki peringkat perguruan tinggi terbaik dunia.\r\n\r\nIa menekankan bahwa pencapaian ini adalah momentum fundamental bagi PTKIN untuk memperkuat reputasi global.\r\n\r\nTransformasi UIN Syarif Hidayatullah Jakarta dan UIN Sunan Kalijaga Yogyakarta menuju Perguruan Tinggi Negeri Badan Hukum (PTNBH) menjadi lokomotif utama untuk memperkuat reputasi global.\r\n\r\n\"Kami ingin PTKIN menjadi \'Magnet Pendidikan Islam Dunia\'. Kualitas kita sudah siap dipromosikan ke para Duta Besar negara sahabat agar mahasiswa internasional semakin membanjiri kampus-kampus kita di Indonesia,\" tegas Kamaruddin.\r\n\r\nKeunggulan PTKIN bukan sekadar klaim, melainkan fakta yang divalidasi oleh lembaga pemeringkatan dunia SCImago Institutions Rankings (SIR) dan QS World University Rankings.\r\n\r\nKementerian Agama memberikan apresiasi kepada kampus PTKIN yang telah berjuang menembus global. Berikut daftarnya:\r\n\r\nA. Kategori 1: Penguatan Riset dan Inovasi Berbasis Keagamaan \r\n\r\n(Berdasarkan SCImago Institutions Rankings 2026) \r\n\r\nKategori ini fokus pada keunggulan institusi dalam mengintegrasikan riset ilmiah dengan nilai-nilai keagamaan.\r\n\r\n\r\n	Peringkat 7: Universitas Islam Negeri Sunan Kalijaga\r\n	Peringkat 14: Universitas Islam Negeri Ar-Raniry Banda Aceh\r\n	Peringkat 21: Universitas Islam Negeri Syarif Hidayatullah\r\n	Peringkat 25: Universitas Islam Negeri Sunan Gunung Djati\r\n\r\n\r\nB. Kategori 2: Fakultas Hukum Terbaik Tingkat Internasional\r\n\r\n(Berdasarkan SCImago Institutions Rankings 2026)\r\n\r\nKategori ini menunjukkan daya saing global fakultas hukum di lingkungan PTKIN di kancah internasional.\r\n\r\n\r\n	Peringkat 131 Dunia: Universitas Islam Negeri Ar-Raniry Banda Aceh\r\n	Peringkat 262 Dunia: Universitas Islam Negeri Sunan Kalijaga\r\n	Peringkat 272 Dunia: Universitas Islam Negeri Syarif Hidayatullah\r\n	Peringkat 375 Dunia: Universitas Islam Negeri Maulana Malik Ibrahim\r\n	Peringkat 471 Dunia: Universitas Islam Negeri Sunan Gunung Djati\r\n\r\n\r\nC. Kategori 3: Keunggulan Bidang Teologi, Divinitas, dan Studi Agama\r\n\r\n(Berdasarkan QS World University Rankings by Subject 2026)\r\n\r\nKategori ini membuktikan pengakuan dunia terhadap kualitas keilmuan inti (core subject) PTKIN\r\n\r\n\r\n	Peringkat 29 Dunia: Universitas Islam Negeri Syarif Hidayatullah\r\n	Peringkat 37 Dunia; Universitas Islam Negeri Sunan Kalijaga\r\n	Peringkat 130 Dunla: Universitas Islam Negeri Maulana Malik lbrahim  (*)\r\n', 'Screenshot 2026-04-06 003529.png', 3, 'Rizky Fadilah', 0, '2026-04-06 00:44:22', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Teknologi'),
(2, 'Olahraga'),
(3, 'Pendidikan'),
(8, 'Hiburan'),
(17, 'politik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') DEFAULT 'admin',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `name`, `username`, `password`, `role`, `created_at`) VALUES
(1, 'Admin Utama', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', '2026-04-04 10:56:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `fk_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
