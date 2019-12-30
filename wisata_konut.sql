-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2019 pada 13.40
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata_konut`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `objekwisata`
--

CREATE TABLE `objekwisata` (
  `Nama` varchar(50) NOT NULL,
  `Gambar` varchar(5000) NOT NULL,
  `Keterangan` text NOT NULL,
  `Alamat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `objekwisata`
--

INSERT INTO `objekwisata` (`Nama`, `Gambar`, `Keterangan`, `Alamat`) VALUES
('Air Panas Wawolesea', 'w1.jpg', 'Mungkin objek wisata air panas Wawolesea belum banyak yang tahu. Namun tempat wisata yang satu ini perlu anda kunjungi. Pasalnya, tempat ini bagaikan lukisan alam dengan hiasan pohon pinus di sekitarnya. Bentuknya bertingkat-tingkat menyerupai terasering persawahan namun airnya berwarna biru muda. Bahkan dalam tiap tingkatannya, level air panasnya pun juga berbeda-beda, mulai dari hangat hingga relatif panas. Wisata permandian air panas Wawolesea begitu mudah dijangkau dengan menggunakan roda dua maupun roda empat. Dari Kota Kendari, Ibukota Provinsi Sulawesi Tenggara, jarak tempuh sekitar 80 km, dan 20 km dari Wanggudu, ibukota Kabupaten Konawe Utara. Dari jalan poros ke permandian air panas ini sekitar 200 meter.', 'Wisata alam ini terletak di Desa Wawolesea, Kecamatan Wawolesea (Kecamatan Lasolo, sebelum dimekarkan), Kabupaten Konawe Utara, Sulawesi Tenggara.'),
('Air Terjun Ameseu', 't1.JPG', 'Keindahan yang terdapat dalam objek wisata Air Terjun Ameseu ini, adalah pemandangan bukitnya yang begitu indah, kesejukan air terjunnya dan tebingnya yang tersusun rapi. Selain itu, di tempat air terjun ini juga bertingkat-tingkat. Sumber mata air terjun ini berasal dari kaki gunung yang membentuk sebuah goa yang mengalir di bebatuan curam. Dengan di kelilingi tebing tinggi dan pepohonan yang rimbun membuat air terjun ini terasa sangat dingin dan segar.', 'Air Terjun Ameseu ini terletak di Desa Tetewatu, Kecamatan Wiwirano, Konawe Utara, Sulawesi Tenggara.'),
('Labengki', '2.jpg', 'Pulau labengki merupakan pulau cantik dengan gugusan pulau-pulau kecil serta teluk cantik yang di juluki teluk cinta karena bentuknya menyerupai hati jika dilihati dari atas menggunakan drone.Untuk menuju ke pulau ini dibutuhkan perjalanan laut selama 5 jam dari Kendari. Namun jika beruntung, sepanjang perjalanan traveler akan dihibur dengan kawasan lumba-lumba yang sesekali melompat di udara.', 'Pulau Labengki terletak di desa Labengki, kecamatan Lasolo, Kabupaten Konawe Utara, Sulawesi Tenggara.'),
('Pantai Panggulawu', 'p3.jpg', 'Pantai panggulawu pilihan terbaik masyarakat kendari dan sekitarnya,selain Pantai ini memliki pesisir pantai yang panjang, juga pemandangan pohon punya yg menjadi viu ut ber foto. Pesona pantai Panggulawu begitu memikat hati dengan desiran ombaknya yang menggulung menantang, sehingga lebih asyik bermain ombak. ', 'Objek wisata pantai Panggulawu terletak di Desa Pudonggala, Kecamatan Sawa, Kabupaten Konawe Utara, Sulawesi Tenggara.'),
('Pantai Tanjung Taipa', 'ta2.jpg', 'Objek wisata Konawe Utara ini, banyak yang menyebutnya adalah wisata primadona. Ketika memasuki lokasi Pantai Taipa, pengunjung akan disambut jejeran gazebo dan penjaja makanan dan minuman yang berada di belakang gazebo. Pantai Taipa juga memiliki pemandangan yang indah dan memikat hati bagi siapa saja yang mengunjunginya, dan pengunjung bisa berenang atau sekedar bermain air. Tak hanya itu, pantai ini memiliki daya tarik tersendiri dengan panjang pasir putih dan gelombang laut silih berganti menjadi pemandangan yang sangat menakjubkan ketika sedang berada di kawasan pantai sepanjang kurang lebih tiga kilometer itu.', 'Tanjung Taipa terletak di Kecamatan Lembo, Kabupaten Konawe Utara, Sulawesi Tenggara.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(7, 'sanrilla', '$2y$10$Bvi1AIbq.3pNg2B4wN2dK.7gBp3U81YZvFkulWT6d8YwRjNNQyl7y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `objekwisata`
--
ALTER TABLE `objekwisata`
  ADD PRIMARY KEY (`Nama`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
