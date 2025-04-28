-- Full MySQL schema: kegiatans and realisasi_kegiatans
CREATE TABLE IF NOT EXISTS `kegiatans` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nama_kegiatan` VARCHAR(255) NOT NULL,
  `pj_kegiatan` VARCHAR(255) NOT NULL,
  `created_at` DATETIME DEFAULT NULL,
  `updated_at` DATETIME DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `realisasi_kegiatans` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `kegiatan_id` INT NOT NULL,
  `tahun` INT,
  `target` INT DEFAULT 0,
  `realisasi` INT DEFAULT 0,
  `persentase` DECIMAL(5,2) DEFAULT 0,
  `goals` TEXT,
  `target_bulanan` TEXT,
  `created_at` DATETIME DEFAULT NULL,
  `updated_at` DATETIME DEFAULT NULL,
  FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatans`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
