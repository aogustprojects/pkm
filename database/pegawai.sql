-- Table: pegawais
CREATE TABLE IF NOT EXISTS `pegawais` (
    `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `nama` VARCHAR(255) NOT NULL,
    `nip` VARCHAR(20) NOT NULL,
    `golongan` VARCHAR(50) NULL,
    `tmt_golongan` DATE NULL,
    `jabatan` VARCHAR(100) NULL,
    `tmt_jabatan` DATE NULL,
    `tmt_cpns` DATE NULL,
    `tmt_pns_pppk` DATE NULL,
    `pendidikan` VARCHAR(100) NULL,
    `tahun_lulus` INT NULL,
    `tmt_mutasi` DATE NULL,
    `tgl_lahir` DATE NULL,
    `umur` INT NULL,
    `status_perkawinan` ENUM('Menikah', 'Belum Menikah') NULL,
    `photo_url` VARCHAR(255) NULL,
    `created_at` DATETIME NULL,
    `updated_at` DATETIME NULL,
    UNIQUE (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;