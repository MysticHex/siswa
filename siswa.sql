CREATE TABLE `siswa` (
  `No` int(11) NOT NULL,
  `Nama_lengkap` varchar(50) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Jurusan` varchar(3) NOT NULL,
  `NIS` varchar(8) NOT NULL,
  `NISN` varchar(10) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `siswa`
  ADD PRIMARY KEY (`No`);

